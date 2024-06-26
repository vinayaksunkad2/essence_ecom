<?php

namespace App\Http\Controllers;
use App\Models\Login;
use Illuminate\Http\Request;
use App\Models\Signup;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function login(Request $request)
    {
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('shop');
        }else{
            dd($credentials);

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        
        }
        
    }
}


    // $this->validate($request, [
    //     'email'           => 'required|max:255|email',
    //     'password'           => 'required|confirmed',
    // ]);
    // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    //     // Success
    //     return redirect()->intended('shop');
    // } else {
    //     dd($request->email);
    //     // Go back on error (or do what you want)
    //     return redirect()->back();
        
    // }


    // }
}
