<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\ManagerMiddleware;

class SupervisorController extends Controller
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
