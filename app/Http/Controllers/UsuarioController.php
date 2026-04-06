<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function formulario()
    {
        return view('formulario'); // Retorna la vista del formulario
    }

    public function procesar(Request $request)
    {
        // 1. Validación: Si falla, Laravel regresa al formulario automáticamente
        $request->validate([
            'nombre' => 'required',
            'edad' => 'required|numeric',
            'ocupacion' => 'required'
        ]);

        // 2. Obtener datos
        $nombre = $request->input('nombre');
        $edad = $request->input('edad');
        $ocupacion = $request->input('ocupacion');

        // 3. Lógica
        if ($edad >= 18) {
            $mensaje = "Eres mayor de edad";
        } else {
            $mensaje = "Eres menor de edad";
        }

        // 4. Enviar información a la vista
        return view('resultado', [
            'nombre' => $nombre,
            'edad' => $edad,
            'ocupacion' => $ocupacion,
            'mensaje' => $mensaje
        ]);
    }
}