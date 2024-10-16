@extends("inicio2")
@section("contenido1")
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consejos para Perros</title>
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
            background-color: #f2f2f2;
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
            background-color: #3498db;
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

        /* Secciones de consejos */
        .advice-section {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .advice-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .advice-section h2 {
            font-size: 2rem;
            color: #e67e22;
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
        <h1>Consejos para el Cuidado de Perros</h1>
        <p>Cuidado y bienestar para tu fiel amigo</p>
    </header>

    <!-- Secciones de Consejos -->
    <section class="advice-section">
        <h2>Alimentación</h2>
        <p>Una dieta equilibrada es fundamental para la salud de tu perro. Proporciónale alimentos de alta calidad adecuados para su edad y tamaño. Evita darle alimentos procesados o sobras de comida humana que puedan ser perjudiciales para su salud.</p>
    </section>

    <section class="advice-section">
        <h2>Ejercicio</h2>
        <p>El ejercicio regular es vital para mantener a tu perro en forma y prevenir problemas de comportamiento. Paseos diarios y tiempo para jugar son esenciales, especialmente para razas activas que necesitan liberar energía.</p>
    </section>

    <section class="advice-section">
        <h2>Higiene</h2>
        <p>Mantén a tu perro limpio cepillando su pelaje regularmente, bañándolo cuando sea necesario y revisando sus oídos, dientes y uñas. Una buena higiene previene enfermedades y mejora su bienestar general.</p>
    </section>

    <section class="advice-section">
        <h2>Salud</h2>
        <p>Lleva a tu perro al veterinario de manera regular para chequeos, vacunas y control de parásitos. La atención preventiva es clave para detectar y tratar posibles problemas de salud a tiempo.</p>
    </section>

    <section class="advice-section">
        <h2>Socialización</h2>
        <p>La socialización temprana y continua es esencial para el bienestar emocional de tu perro. Permítele interactuar con otros perros y personas en entornos controlados para que aprenda a comportarse en diferentes situaciones.</p>
    </section>

    <!-- Pie de página -->
    <footer>
        <p> 2024 Consejos para Perros</p>
    </footer>

</body>

</html>
@endsection