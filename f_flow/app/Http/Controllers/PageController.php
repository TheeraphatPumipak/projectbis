<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

     // ฟังก์ชันสำหรับหน้า Login
     public function Login()
     {
         return view('Login');
     }
 
     // ฟังก์ชันสำหรับหน้า Register
     public function Register()
     {
         return view('Register');
     }

    // ฟังก์ชันสำหรับหน้า Home
    public function home()
    {
        return view('Home');
    }
    public function warehouse()
    {
        return view('warehouse');
    }
    public function sale()
    {
        return view('warehouse');
    }

    // ฟังก์ชันสำหรับหน้า Index
    public function index()
    {
        return view('index');
    }
    public function Salepage()
     {
         return view('Salepage');
     }
 
}
