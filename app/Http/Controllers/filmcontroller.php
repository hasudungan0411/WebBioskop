<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filmcontroller extends Controller
{
    public function film()
    {
        return view('film/film1');
    }

    public function film1()
    {
        return view('film/film2');
    }
}
