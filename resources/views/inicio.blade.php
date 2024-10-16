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
 
 
    @include("menu")

    
    @yield("contenido")

    <footer>
        <a href="https://www.php.net/manual/es/intro-whatis.php" target=_blank>PHP</a>
        <a href="https://laravel.com/docs/11.x#herd-on-windows"target=_blank>LARAVEL</a>
        <a href="https://developer.mozilla.org/es/docs/Web/HTML"target=_blank>HTML</a>
        <a href="https://www.internetsociety.org/internet/glossary-internet-terms/?gad_source=1&gclid=CjwKCAjwmaO4BhAhEiwA5p4YL-_Y1XftqVSZU-E7w4K-HMjWDPeZJDQKlJVBpcbHjq302t9M2pTE3BoCfQQQAvD_BwE"target=_blank>CSS</a>
        <a href="https://jsnation.us/?gad_source=1&gclid=CjwKCAjwmaO4BhAhEiwA5p4YL4DDfGQC1Relh4DtqlWZ742d-8uMVo50SsNeKhWHK2ae-SkXns8YkRoCYpgQAvD_BwE"target=_blank>JAVASCRIPT</a>
    </footer>
    
</body>
</html>