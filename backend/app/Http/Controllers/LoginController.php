<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('index');
    }

    public function authenticate(Request $request): RedirectResponse{
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
    
        if(auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }else{
            return back()->with('error', 'Username / Password is incorrect!');
        }
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/')->with('message', 'Logged out!');
    }
}
