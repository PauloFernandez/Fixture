<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Información del Torneo</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 10px;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        h1 {
            color: #2c3e50;
            font-size: 34px;
            margin-top: 20px;
        }

        h2 {
            color: #2c3e50;
        }

        ul {
            list-style-type: none;
            margin-left: 20px;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Logo Styling */
        img {
            position: absolute;
            top: 20px;
            left: 20px;
            max-width: 70px;
        }

        /* Title Centering */
        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .info {
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div>
        <img src="{{ public_path() . $logo }}" alt="LOGO">
        <h1>Información del Torneo</h1>
    </div>
    <div>
        <div>
            <strong>Torneo:</strong> {{ $torneo->nombre }}
            <div class="info">
                <p>Valor de inscripcion: $ {{ $torneo->inscripcion }}</p>
                <p>Valor cancha por partido: $ {{ $torneo->valor_cancha }}</p>
            </div>
        </div>
        <div class="info">
            <strong>Fecha Inicio: </strong>{{ date('d-m-Y', strtotime($torneo->fecha)) }}
        </div>
        <div class="info">
            <strong>Ubicación:</strong>
            <a href="https://www.google.com/maps/place/{{ urlencode($torneo->ubicacion) }}" target="_blank">
                {{ $torneo->ubicacion }}
            </a>
        </div>
        <div class="info">
            <strong>Equipos:</strong> {{ $torneo->cant_equipos }}
        </div>
        <div class="info">
            <strong>Premio:</strong> {{ $torneo->premios }}
        </div>
    </div>
    <!-- Reglas -->
    <h2>Reglas y Regulaciones</h2>
    <div>
        <h3>Reglas Generales</h3>
        <ul>
            <li>{{ $torneo->reglas_gral }}</li>
        </ul>
    </div>
    <div>
        <h3>Sistema de Competición</h3>
        <ul>
            <li>{{ $torneo->sis_competicion }}</li>
        </ul>
    </div>
    <div>
        <h3>Elegibilidad de Jugadores</h3>
        <ul>
            <li>{{ $torneo->elegibilidad }}</li>
        </ul>
    </div>
    <div>
        <h3>Conducta y Disciplina</h3>
        <ul>
            <li>{{ $torneo->disciplina }}</li>
        </ul>
    </div>
</body>

</html>
