<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('register');
});

Route::post('/register', [UserController::class, 'Register']);
Route::get('/login', [LoginController::class, 'show'])->name('login');;
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::post('/create', [TaskController::class, 'create']);
    Route::get('/showtasks', function () {
        $tasks = [];
        $tasks = Task::where('user_id', auth()->id())->get();
        return view('showtasks', ['tasks' => $tasks]);
    });    
});
Route::get('/edit-task/{task}', [TaskController::class, 'showEditScreen']);
Route::put('/edit-task/{task}', [TaskController::class, 'updateTask']);
Route::delete('/delete-task/{task}', [TaskController::class, 'delete']);
Route::get('/tasks', function () {
    return view('tasks');
});


Route::patch('/complete-task/{task}', [TaskController::class, 'markAsCompleted']);
Route::patch('/uncomplete-task/{task}', [TaskController::class, 'markAsUncompleted']);