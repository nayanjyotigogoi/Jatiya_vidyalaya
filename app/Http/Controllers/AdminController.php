<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminController extends Controller {
    
    // Show login form
    public function showLogin() {
        return view('admin.login');
    }

    // Handle login request
    public function login(Request $request) {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && password_verify($request->password, $admin->password)) {
            session(['admin' => $admin->id]); // Store admin session
            return redirect()->route('students.index')->with('success', 'Welcome Admin!');
        }

        return back()->withErrors(['login' => 'Invalid credentials']);
    }

    // Logout admin
    public function logout() {
        session()->forget('admin');
        return redirect()->route('admin.login')->with('success', 'Logged out successfully');
    }
}

