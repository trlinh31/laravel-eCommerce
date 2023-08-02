<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function checkLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->remember;
        if (Auth::attempt($credentials, $remember)) {
            return redirect('/');
        } else {
            return back()->with('error', 'Email or Password is wrong');
        }
    }
    public function logout()
    {
        Auth::logout();
        return back();
    }
    public function register()
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {
        $validator  = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:5',
            'confirmed' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return redirect('/account/register')->withErrors($validator, 'error');
        }
        $userData = [
            'name' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ];
        User::create($userData);
        return redirect('account/login');
    }
}
