<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }
    public function register() {
        return view('auth.register');
    }
    public function forgot() {
        return view('auth.forgotPassword');
    }

    public function registerProcess(Request $request) {

        $validateData = Validator::make($request->all(), [
            'email' => 'required | string',
            'password' => 'required | string',
        ]);

        // Check if validation fails
        if ($validateData->fails()) {
            return redirect()->route('register')->withErrors($validateData)->withInput();
        }

        // Check if user already exists with the given email
        if (User::where('email', $request->email)->exists()) {
            return redirect()->route('register')->withErrors(['email' => 'Email already exists'])->withInput();
        }

        $formSubmission = new User();
        $formSubmission->email = $request->email;
        $formSubmission->password = $request->password;
        $formSubmission->save();

        return redirect()->route('dashboard');
    }
    public function loginProcess(Request $request) {

        $validateData = $request->validate([
            'email' => 'required | string',
            'password' => 'required | string',
        ]);

       if(Auth::attempt($validateData)) {
        $user = Auth::user();

        if ($user->is_admin == 1) {
            // Redirect admin to admin dashboard
            return redirect()->route('employer.dashboard');
        } else {
            // Redirect regular user to regular dashboard
            return redirect()->route('dashboard');
        }
       } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
       }
       

    }
}
