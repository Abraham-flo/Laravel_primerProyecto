@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
@endpush

@section('contenido')
<div class="container">
    <div class="form-header">
        <h2>Registro de Usuario</h2>
        <p>Por favor, completa tus datos personales</p>
    </div>

    <form method="POST" action="/procesar">
        @csrf
        
        <div class="form-group">
            <label for="nombre">Nombre Completo</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>
        </div>

        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" id="edad" name="edad" placeholder="25" required>
        </div>

        <div class="form-group">
            <label for="ocupacion">Ocupación Actual</label>
            <select id="ocupacion" name="ocupacion" required>
                <option value="" disabled selected>Selecciona una opción</option>
                <option value="estudiante">💻 Estudiante</option>
                <option value="profesionista">🧑‍💻 Profesionista</option>
                <option value="otro">⚙️ Otro</option>
            </select>
        </div>

        <button type="submit" class="btn-submit">
            <span>Enviar</span>
        </button>
    </form>
</div>
@endsection