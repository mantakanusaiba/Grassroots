<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:teacher,student,admin',
        ]);

        $passwordHash = hash('sha256', $request->password);

        DB::insert(
            'INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)',
            [$request->name, $request->email, $passwordHash, $request->role]
        );

        return redirect('/login')->with('success', 'Registration successful!');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $passwordHash = hash('sha256', $request->password);

        $user = DB::select('SELECT * FROM users WHERE email = ? AND password = ?', [$request->email, $passwordHash]);

        if ($user) {
            session(['user' => $user[0]]);
            switch ($user[0]->role) {
                case 'student':
                    return redirect('/dashboard/student');
                case 'teacher':
                    return redirect('/dashboard/teacher');
                case 'admin':
                    return redirect('/dashboard/admin');
            }
        }

        return back()->withErrors(['email' => 'Invalid email or password']);
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/login')->with('success', 'Logged out successfully!');
    }
}
