<?php

namespace App\Http\Controllers;

use App\Models\User; //imports model user
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        // Obteniendo todos los usuarios
        $users = User::all();
        
        // Pasando la variable $users a la vista
        return view('admin.dashboard', compact('users'));
    }

}
