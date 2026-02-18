<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $response = Role::query()
            ->select(['id', 'name'])
            ->where([
                ['active', true]
            ])
            ->get();

        return response()->json([
            'data' => $response,
            'status' => true
        ]);
    }
}
