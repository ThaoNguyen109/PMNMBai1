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
        $account = $request->only('email', 'password');
        if(Auth::attempt($account)){
            return redirect('/admin');
        };
        return redirect('/login')->with('error','Tk k dung');
        // $username = $request->input('username');
        // $password = $request->input('password');
        // if ($username === 'thao' && $password === '10092004') {
        //     return "Login successful!";
        // } else {
        //     return "Invalid credentials.";
        // }
    }
    //logout

    public function register()
    {
        return view('register');
    }
    public function checkRegister(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $mssv = $request->input('mssv');
        $lopMonHoc = $request->input('lopMonHoc');
        $confirmPassword = $request->input('password_confirm');
        if ($password === $confirmPassword && $username === "thao" && $mssv === "0149267" && $lopMonHoc === "67PM1" ) {
            return "Đăng ký thành công";
        } else {
            return "Dăng ký thất bại, vui lòng thử lại.";
        }
    }
}
