<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
        // echo "Hello World";
    }
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password tidak boleh kosong'
        ]);
        
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){

            if(Auth::user()->role == 'operator'){
                return redirect('admin/operator');
            }elseif (Auth::user()->role == 'keuangan') {
                return redirect('admin/keuangan');
            }elseif (Auth::user()->role == 'marketing') {
                return redirect('admin/marketing');
            }
        }else{
            echo "Login Gagal";
            return redirect('')->withErrors('Login Gagal')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}