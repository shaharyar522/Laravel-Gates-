<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function showLogin(){
        return view('login');
    }

     function showRegister(){
        return view('register');
    }



    // Handle register
public function register(Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'age' => 'required|integer|min:13|max:120',
        'password' => 'required|min:6|confirmed',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'age' => $request->age,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('login')->with('success', 'Account created successfully! Please login.');
}



}
