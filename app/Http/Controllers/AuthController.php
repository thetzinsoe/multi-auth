<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function checkAuth()
    {
        if (Auth::check()) {
            // User is authenticate
            $user = Auth::user();
            $isManager = $user->roles->contains('name', 'Manager');
            $isSupervisor = $user->roles->contains('name', 'Supervisor');
            $isStaff = $user->roles->contains('name', 'Staff');
            $isUser = $user->roles->contains('name', 'User');
            if ($isManager) {
                // dd("You are Manager");
                return redirect('/admin/manager');
            } elseif ($isSupervisor) {
                return redirect('/admin/supervisor');
            } elseif ($isStaff) {
                return redirect('/admin/staff');
            } elseif ($isUser) {
                // dd("You are User");
                return redirect('/admin/normaluser');
            } else {
                // Handle other roles if needed
                dd("You have roles other than Manager and User");
            }
        } else {
            // User is not authenticated
            dd("u are not authenticate");
        }
    }
}
