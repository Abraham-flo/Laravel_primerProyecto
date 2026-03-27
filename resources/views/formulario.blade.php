<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
</head>
<body>
    <div class="container">
        <h1>Formulario de usuario</h1>
        <form method="POST" action="/procesar">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="edad">Edad:</label>
            <input type="number" name="edad" id="edad" required>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>