<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController; // Usa LoginController en lugar de AuthController
use App\Http\Controllers\Auth\RegisterController;

// Ruta para la página principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas públicas (No autenticadas)
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login'); // Usa LoginController
Route::post('login', [LoginController::class, 'login']); // Usa LoginController
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register'); // Agrega la ruta para mostrar el formulario de registro
Route::post('register', [RegisterController::class, 'register']); // Agrega la ruta para manejar el registro

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout'); // Usa LoginController

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Ruta para el dashboard del administrador
    Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Rutas para la administración de usuarios
    Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::put('/admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
});
