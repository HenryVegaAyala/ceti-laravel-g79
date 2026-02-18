<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->select(['users.id', 'users.name', 'roles.name as role_name'])
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->get();

        return response()->json([
            'data' => $users,
            'status' => true
        ]);
    }
}
