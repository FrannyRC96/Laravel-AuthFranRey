<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

// Rutas públicas
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

// Rutas protegidas por JWT
Route::group(['middleware' => ['auth.jwt']], function() {
    Route::get('user', [AuthController::class, 'getUser']);
});

Route::middleware([EnsureFrontendRequestsAreStateful::class, 'auth:sanctum'])->group(function () {
    Route::get('user-profile', [UserController::class, 'profile']);
    Route::get('admin-dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
