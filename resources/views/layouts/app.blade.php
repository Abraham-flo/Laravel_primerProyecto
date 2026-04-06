<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Perfil</title>
    <style>
        /* Estilos globales para evitar que el header/footer estorben */
        body { margin: 0; padding: 0; min-height: 100vh; display: flex; flex-direction: column; }
        header { position: absolute; top: 20px; left: 20px; color: white; opacity: 0.8; }
        footer { position: absolute; bottom: 20px; left: 20px; color: white; opacity: 0.6; font-size: 12px; }
        main { flex: 1; display: flex; align-items: center; justify-content: center; width: 100%; }
    </style>
    @stack('styles')
</head>
<body>
    <header>
        <strong>Aplicación Laravel</strong>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        Práctica Laravel
    </footer>
</body>
</html>