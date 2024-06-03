<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class film1controller extends Controller
{
    public function film()
    {
        return view('film1/film1');
    }

    public function film1()
    {
        return view('film1/film2');
    }

    public function film2()
    {
        return view('film1/film3');
    }
}
