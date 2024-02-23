<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function show(){
        return view('login');
    }

    public function login(LoginRequest $request)
{
    $incomingFields = $request->validated();
    if (auth()->attempt(['email' => $incomingFields['loginemail'], 'password' => $incomingFields['loginpassword']])) {
        $request->session()->regenerate();
        return view('tasks');
    } else {
        return back()->withErrors(['login' => 'Invalid login credentials']);
    }
}


    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
}
