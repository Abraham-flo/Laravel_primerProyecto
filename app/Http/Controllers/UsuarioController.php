<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; // IMPORTANTE: Importa el modelo aquí

class UsuarioController extends Controller
{
    public function formulario()
    {
        return view('formulario');
    }

    public function procesar(Request $request)
    {
        // 1. Validación (se mantiene igual)
        $request->validate([
            'nombre' => 'required',
            'edad' => 'required|numeric',
            'ocupacion' => 'required'
        ]);

        // 2. Lógica para el mensaje (se mantiene igual)
        $edad = $request->input('edad');
        $mensaje = ($edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";

        // 3. GUARDAR EN LA BASE DE DATOS
        // Usamos el modelo Usuario para crear el registro
        Usuario::create([
            'nombre' => $request->input('nombre'),
            'edad' => $edad,
            'ocupacion' => $request->input('ocupacion'),
            'mensaje' => $mensaje, // Guardamos también el resultado de la lógica
        ]);

        // 4. Retornar la vista con los datos actuales
        return view('resultado', [
            'nombre' => $request->input('nombre'),
            'edad' => $edad,
            'ocupacion' => $request->input('ocupacion'),
            'mensaje' => $mensaje
        ]);
    }
}