<!DOCTYPE html>
<html lang="en">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        body {
            min-height: 100vh;
        }

        footer {
            background-color: #e6e6e6;
            text-align: center;
            padding: 10px;
            margin-top: auto;
            width: 100%;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']);
    <title>Inicio Veterinaria</title>
</head>
<body>
 
 
    @include("menu2")

    
    @yield("contenido1")

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
        <span class="text-muted">
    
            @auth
            {{-- Mostrar información del usuario autenticado --}}
            Usuario: {{ Auth::user()->name }} |
            Correo: {{ Auth::user()->email }}
    
            @endauth
        </span>
        </div>
    </footer>
    
</body>
</html>