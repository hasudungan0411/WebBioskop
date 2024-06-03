<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listfilmcontroller extends Controller
{
    public function listcoming()
    {
        return view('listfilm.coming');
    }

    public function listplaying()
    {
        return view('listfilm.playing');
    }

    public function listdaftar()
    {
        return view('listfilm.daftar');
    }
}
