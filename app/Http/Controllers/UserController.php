<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function registerPage(){
        return view('pages/register');
    }

    public function loginPage(){
        return view('pages/login');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = [
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $carts = [];
            Session::put('carts', $carts);
            return redirect('/');
        }

        return back()->withErrors([
            'errormsg' => 'Invalid credentials',
        ]);
    }

    function register(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:8'
        ]);
        User::create([
            'username' => $validate['name'],
            'email' => $validate['email'],
            'password' => bcrypt($validate['password']),
            'role' => 'User'
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
