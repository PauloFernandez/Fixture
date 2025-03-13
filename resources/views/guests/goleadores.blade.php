@extends('layouts.landing')
@section('title', 'Goleadores')

@section('content')
    <section class="container">
        <ul class="row nav nav-underline text-center">
            <li class="col nav-item">
                <a class="nav-link active text-primary" href="#">Max. Goleadores</a>
            </li>
            <li class="col nav-item">
                <a class="nav-link text-white" href="/asistencias">Asistencias</a>
            </li>
        </ul>
    </section>
    @component('guests._components.table')
        @slot('title')
            {{ 'Goleadores' }}
        @endslot
        @slot('header')
            <th>Clas.</th>
            <th>Jugador</th>
            <th>Equipo</th>
            <th>Golers</th>
        @endslot
        @slot('detail')
<!-- 
        Estructura de la vista:
            Dentro de tu vista, en el componente de tabla, puedes iterar sobre la colección $goleadores 
            para mostrar los datos de forma dinámica
-->
            @foreach ($goleadores as $index => $goleador)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $goleador->jugador_nombre }} <b>{{ $goleador->jugador_apellido }}</b></td>
                    <td>{{ $goleador->equipo_nombre }}</td>
                    <td>{{ $goleador->goles_sum }}</td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection
