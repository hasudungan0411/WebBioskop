<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;

class AdminController extends Controller
{
    public function profilepage()
    {
        return view('profile');
    }
}
