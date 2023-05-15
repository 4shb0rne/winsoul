<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{

    public function registerPage(){
        return view('pages/register');
    }

    public function loginPage(){
        return view('pages/login');
    }

    public function login(Request $request){
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'errormsg' => 'Invalid Credential'
        ]);
        return redirect('/');
    }

    function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:8'
        ]);
        User::create([
            'Username' => $validate['name'],
            'Email' => $validate['email'],
            'Password' => bcrypt($validate['password']),
            'Role' => 'User'
        ]);
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
