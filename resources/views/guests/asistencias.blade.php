@extends('layouts.landing')
@section('title', 'Asistencias')

@section('content')
<section class="container">
    <ul class="row nav nav-underline text-center">
        <li class="col nav-item">
          <a class="nav-link text-white" href="/goleadores">Max. Goleadores</a>
        </li>
        <li class="col nav-item">
          <a class="nav-link active text-primary" href="#">Asistencias</a>
        </li>
      </ul>
</section>

    @component('guests._components.table')
        @slot('title')
            {{ 'Asistencias' }}
        @endslot
        @slot('header')
            <th>Clas.</th>
            <th>Jugador</th>
            <th>Equipo</th>
            <th>Asistencias</th>
        @endslot
        @slot('detail')
        @foreach ($asistencias as $index => $asistencia)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $asistencia->jugador_nombre }} <b>{{ $asistencia->jugador_apellido }}</b></td>
            <td>{{ $asistencia->equipo_nombre }}</td>
            <td>{{ $asistencia->asistencias_sum }}</td>
        </tr>
    @endforeach
        @endslot
    @endcomponent
@endsection
