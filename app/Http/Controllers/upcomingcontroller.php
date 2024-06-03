<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class upcomingcontroller extends Controller
{
    public function upcoming()
    {
        return view('upcoming');
    }
}
