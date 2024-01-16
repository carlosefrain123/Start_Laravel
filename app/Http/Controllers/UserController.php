<?php

// TODO: Crear un Controlador: php artisan make:controller UserController

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registro(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'unique:users,email', 'email', 'bail'],
            'password' => ['required', 'min:8'],
        ]);

        // Aquí puedes agregar la lógica adicional que deseas realizar después de la validación

        // Por ejemplo, puedes guardar el usuario en la base de datos
        // User::create($request->all());

        // O redirigir a otra página
        // return redirect('/otra-pagina');
    }
}
