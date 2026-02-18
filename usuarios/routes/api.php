<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('roles', [RoleController::class, 'index']);
Route::get('users', [UserController::class, 'index']);
