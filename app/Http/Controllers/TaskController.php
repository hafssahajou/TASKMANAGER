<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function Create(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $validatedData['title'] = strip_tags($validatedData['title']);
        $validatedData['description'] = strip_tags($validatedData['description']);
        $validatedData['completed'] = false; 
        $validatedData['user_id'] = auth()->id();
        $task = Task::create($validatedData);
        return redirect('/showtasks');

    }
    public function showEditScreen(Task $task){
        return view('edit-task', ['task' => $task]);
    }
    public function updateTask(Task $task, Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $validatedData['title'] = strip_tags($validatedData['title']);
        $validatedData['description'] = strip_tags($validatedData['description']);
        $validatedData['user_id'] = auth()->id();
        $task->update($validatedData);
        return redirect('/showtasks');
    }

    public function delete(Task $task){
        $task->delete();
        return redirect('/showtasks');

    }

    

    

}