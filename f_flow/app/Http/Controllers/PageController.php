<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     // ฟังก์ชันสำหรับหน้า Login
     public function login()
     {
         return view('login');
     }
 
     // ฟังก์ชันสำหรับหน้า Register
     public function register()
     {
         return view('register');
     }

     // ฟังก์ชันสำหรับหน้า Home
    public function home()
    {
        return view('Home');
    }

    // ฟังก์ชันสำหรับหน้า Index
    public function index()
    {
        return view('index');
    }
}
