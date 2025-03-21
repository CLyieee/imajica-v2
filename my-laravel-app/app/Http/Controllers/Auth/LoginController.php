<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //  public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/dashboard'); // Redirect to dashboard
        }

        return back()->withErrors(['email' => 'Invalid credentials.'])->withInput();
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // Add index method
    public function index()
    {
        return view('page.index');
    }
}
