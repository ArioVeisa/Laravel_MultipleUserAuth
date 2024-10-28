<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
       return view('admin');


    }
    function operator()
    {
        echo "Selamat Datang Operator <strong>" . Auth::user()->name . "</strong>";
        echo "<br>";
        echo "<a href='/logout'>logout</a>";
        
        
    }
    function Keuangan()
    {
        echo "Selamat Datang keuangan <strong>" . Auth::user()->name . "</strong>";
        echo "<br>";
        echo "<a href='/logout'>logout</a>";


    }
    function Marketing()
    {
        echo "Selamat Datang Marketing <strong>" . Auth::user()->name . "</strong>";
        echo "<br>";
        echo "<a href='/logout'>logout</a>";


    }
}   