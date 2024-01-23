<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NormalUserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/home', [AuthController::class, 'checkAuth']);
    Route::get('/user', [UserController::class, 'index'])->name('user@index');
    Route::get('/manager', [AdminController::class, 'index'])->name('manager@index');
    Route::get('/supervisor', [SupervisorController::class, 'index'])->name('supervisor@index');
    Route::get('/staff', [StaffController::class, 'index'])->name('staff@index');
    Route::get('/normaluser', [NormalUserController::class, 'index'])->name('normaluser@index');
    Route::get('/role', [RoleController::class, 'index'])->name('roles@index');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit@user');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('update@user');
});
