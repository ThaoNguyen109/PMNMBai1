<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //lam đăng nhập, đăng ký
    public function login()
    {
        return view('login');
    }
    public function checkLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        if ($username === 'thao' && $password === '10092004') {
            return "Login successful!";
        } else {
            return "Invalid credentials.";
        }
    }
    public function register()
    {
        return view('register');
    }
    public function checkRegister(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $confirmPassword = $request->input('password_confirm');
        if ($password === $confirmPassword) {
            return "Đăng ký thành công";
        } else {
            return "Mật khẩu không khớp";
        }
    }
}
