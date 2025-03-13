@extends('layouts.landing')
@section('title', 'Partidos')
@section('content')
    <section class="container mt-4 w-50">
        @foreach ($partidos as $partido)
            <article class="card-group mb-3">
                <div class="card text-center">
                    <div class="card-header text-bg-dark">
                        Fecha: {{ \Carbon\Carbon::parse($partido->fecha)->format('d/m') }} - 
                        Hora: {{ \Carbon\Carbon::parse($partido->hora)->format('H:i') }}
                    </div>
                    <div class="card-body">
                        <div class="card-body d-flex flex-row justify-content-between">
                            @foreach ($partido->equipos as $equipo)
                                <div class="d-flex flex-row">
                                    <img src="{{ asset('storage/images/' . $equipo->file_uri) }}" style="width: 35px;"
                                        alt="">
                                    <div class="p-1">{{ $equipo->nombre }}</div>
                                </div>
                                <div class="p-1">{{ $equipo->pivot->golesF }}</div>
                                @if ($loop->first)
                                    <div class="versus">VS</div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer text-bg-dark">
                        {{ $partido->cancha->nombre }} - Arbitro: {{ $partido->arbitro->nombre }}
                        {{ $partido->arbitro->apellido }}
                    </div>
                </div>
            </article>
        @endforeach
    </section>
@endsection
<!--
la variable especial $loop en Laravel, es proporcionada dentro de las estructuras de control como foreach.
    $loop->last: Esta propiedad es true cuando el ciclo foreach está en su última iteración. Es útil para realizar una
    acción solo en la última vuelta del ciclo.
    if ($loop->last): Este condicional verifica si estamos en la última iteración del ciclo foreach.
-->
