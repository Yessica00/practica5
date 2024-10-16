@extends("inicio2")
@section("contenido1")
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cuidados para la Mascota</title>
    <style>
        /* Estilos generales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #333;
            padding: 20px;
        }

        h1, h2 {
            font-family: 'Georgia', serif;
            color: #2c3e50;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        /* Estilos del encabezado */
        header {
            background-color: #16a085;
            color: white;
            text-align: center;
            padding: 30px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2rem;
            font-weight: 300;
        }

        /* Secciones de cuidados */
        .care-section {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .care-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .care-section h2 {
            font-size: 2rem;
            color: #e74c3c;
            margin-bottom: 10px;
        }

        /* Pie de página */
        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9rem;
            color: #777;
        }

        footer p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <!-- Encabezado -->
    <header>
        <h1>Cuidados para la Mascota</h1>
        <p>Consejos esenciales para cuidar a tu mejor amigo</p>
    </header>

    <!-- Secciones de Cuidados -->
    <section class="care-section">
        <h2>Alimentación</h2>
        <p>Una nutrición adecuada es clave para la salud de tu mascota. Asegúrate de proporcionarle alimentos balanceados y específicos para su especie, tamaño y edad. Evita los alimentos que puedan ser tóxicos para ellos, como el chocolate o las uvas.</p>
    </section>

    <section class="care-section">
        <h2>Ejercicio</h2>
        <p>El ejercicio regular es esencial para mantener a tu mascota en forma y mentalmente estimulada. Los gatos disfrutan de juegos que simulan la caza, mientras que los perros necesitan caminatas diarias y tiempo para correr y jugar.</p>
    </section>

    <section class="care-section">
        <h2>Higiene</h2>
        <p>Mantén la higiene de tu mascota cepillando su pelaje regularmente, bañándola según sea necesario, y limpiando sus oídos y dientes. También es importante cortar sus uñas para evitar que crezcan demasiado.</p>
    </section>

    <section class="care-section">
        <h2>Salud</h2>
        <p>Visitas regulares al veterinario son esenciales para garantizar que tu mascota esté sana. Mantén al día las vacunas y los controles de parásitos. Consulta al veterinario ante cualquier cambio en el comportamiento o en su estado de salud.</p>
    </section>

    <section class="care-section">
        <h2>Comodidad</h2>
        <p>Proporciona un ambiente cómodo y seguro para tu mascota. Asegúrate de que tenga un lugar donde dormir, juguetes para entretenerse, y un espacio tranquilo donde pueda sentirse segura.</p>
    </section>

    <!-- Pie de página -->
    <footer>
        <p>2024 Cuidados para la Mascota. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
@endsection
