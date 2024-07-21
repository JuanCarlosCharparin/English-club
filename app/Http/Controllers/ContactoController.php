<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        // Puedes agregar lógica aquí si es necesario
        return view('contacto'); // Si deseas usar una vista específica para contacto
    }
}