<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NormalUserController extends Controller
{
    public function index()
    {
        return view('front.dashboard-three');
    }
}
