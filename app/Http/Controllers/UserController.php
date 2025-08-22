<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    // Show login page
    public function showLogin()
    {
        return view('login');
    }

    // Show register page
    public function showRegister()
    {
        return view('register');
    }

    // Handle registration
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users',
            'age'      => 'required|integer|min:13|max:120',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'age'      => $request->age,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Account created successfully! Please login.');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'Logged in successfully!');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }


    public function DashboardPage()
    {

        //Date ko use kya hian wahn hum ny u sko  ek condition dalli ahin
        // if(Gate::allows('isAdmin')){
        //     return view('dashboard');
        // }else
        // {
        //     return "Access Denies";
        // }

        //anoher mehtod short used Gate used 
        // Gate::authorize('isAdmin');
        // return view('dashboard');


        return view('dashboard');
    }





    public function ViewPrfoile(int $userid)
    {

        if (Gate::allows('view-profile', $userid)) {
            $user = User::findorfail($userid);

            return view('profile', compact('user'));
        } else {
            abort('403');
        }
    }



    public function ViewPost()
    {
        $posts = Post::where('user_id', Auth::id())->get();

        return view('posts', compact('posts'));
    }

    public function UpdatePost($postid)
    {
        $post = Post::find($postid);
        $targetUser = $post->user_id;
        
        Gate::authorize('update-post', $targetUser);
        
        return $post;
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
