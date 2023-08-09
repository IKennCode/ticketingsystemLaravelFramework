<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function users(){
        $users = User::all();

        return response()->json($users);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:128',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}

?>