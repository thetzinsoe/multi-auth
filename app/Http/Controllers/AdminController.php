<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('manager_middleware');
    }
    public function index()
    {
        return view('back.dashboard-one');
    }
}
