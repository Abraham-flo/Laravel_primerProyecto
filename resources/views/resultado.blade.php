<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="{{ asset('css/resultado.css') }}">
</head>
<body>
    <div class="container">
        <h1>{{ $mensaje }}</h1>
        <a href="{{ url('/') }}" class="btn-volver">Volver</a>
    </div>
</body>
</html>