<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class componentscontroller extends Controller
{
    public function footer(){
        return view('components/footer');
    }

    public function header(){
        return view('components/header');
    }
}
