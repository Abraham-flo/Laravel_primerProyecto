@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/resultado.css') }}">
@endpush

@section('contenido')
<div class="card-resultado">
    <div class="result-header">
        <div class="icon-user">👤</div>
        <h2>Perfil Generado</h2>
    </div>

    <div class="result-body">
        <div class="info-group">
            <span class="label">Nombre</span>
            <p class="value">{{ $nombre }}</p>
        </div>
        <div class="info-group">
            <span class="label">Edad</span>
            <p class="value">{{ $edad }} años</p>
        </div>
        <div class="info-group">
            <span class="label">Ocupación</span>
            <p class="value">{{ ucfirst($ocupacion) }}</p>
        </div>
    </div>

    <div class="message-box">
        <p>{{ $mensaje }}</p>
    </div>

    <a href="/" class="btn-back">Volver al Registro</a>
</div>
@endsection