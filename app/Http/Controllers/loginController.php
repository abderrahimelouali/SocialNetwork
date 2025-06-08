<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function show()
    {
        return view('login.show');
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $request->validate([
            'email' => 'required|email|',
            'password' => 'required|min:6|max:20',
        ]);

        $credentials = [
            'email' => $email,
            'password' => $password,
        ];
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return to_route('homepage')->with('success', 'Login successful!');
        }else{
return back()->withErrors([
                'login' => 'Email or password is incorrect.',
            ])->onlyInput('email');
        }
    }
}
