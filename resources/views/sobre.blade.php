@extends("inicio2")
@section("contenido1")
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sobre Nosotros</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #3498db;
            margin-bottom: 20px;
        }

        section {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9rem;
            color: #777;
        }
    </style>
</head>
<body>

    <h1>Sobre Nosotros</h1>

    <section>
        <p>Somos una clínica veterinaria dedicada al bienestar de las mascotas. Con más de 10 años de experiencia, nuestro equipo de profesionales está comprometido con ofrecer servicios de alta calidad, brindando amor y cuidado en cada consulta.</p>

        <p>Nuestra misión es mejorar la calidad de vida de las mascotas a través de atención preventiva, tratamientos médicos avanzados y una atención personalizada para cada una de ellas.</p>

        <p>Creamos un ambiente acogedor para que tanto los dueños como sus mascotas se sientan cómodos y en confianza. Nos apasiona lo que hacemos y nos esforzamos por seguir aprendiendo y mejorando cada día.</p>
    </section>

    <footer>
        <p>Clínica Veterinaria. Todos los derechos reservados.</p>
    </footer>

</body>
@endsection
</html>
