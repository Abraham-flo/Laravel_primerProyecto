<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController; 

Route::get('/', [UsuarioController::class, 'formulario']); // Carga el formulario
Route::post('/procesar', [UsuarioController::class, 'procesar']); // Procesa los datos