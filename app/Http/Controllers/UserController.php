<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        // dd($users);
        return view('back.user.user', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        // dd($user->name);
        $roles = Role::get();
        return view('back.user.edit', compact('roles', 'user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $roleIds = $request->role_ids;
        $user->roles()->sync($roleIds);
        return redirect(route('user@index'));
    }
}
