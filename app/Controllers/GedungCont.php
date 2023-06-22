<?php

namespace App\Controllers;

class GedungCont extends BaseController
{
    public function awal()
    {
         return view('gedung/loginBking');
        
    }

    public function signup()
    {
         return view('gedung/registerBking');
        
    }
    public function home()
    {
         return view('gedung/home');
        
    }
}