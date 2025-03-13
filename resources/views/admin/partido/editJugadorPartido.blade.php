@extends('layouts.app')
@section('title', 'Cargar datos del jugador por partido')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="col-sm-8">
                <h2>{{ __('view.carga_jug_part') }}</h2>
                <form method="POST" action="{{ route('admin.partido.updateJugadorPartido', $jugadorPartido->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <!-- Datos del partido jugado -->
                            <div class="mb-3 row">
                                <label for="partido_id" class="col-sm-2 col-form-label">{{ __('view.partido') }}</label>
                                <div class="col-sm-10">
                                    <select id="partido_id" name="partido_id" class="form-select">
                                        <option selected disabled>Seleccione partido</option>
                                        @foreach ($partidos as $partido)
                                            <option value="{{ $partido->id }}"
                                                {{ $jugadorPartido->partido_id == $partido->id ? 'selected' : '' }}>
                                                {{ $partido->fecha }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- Datos del equipo -->
                            <div class="mb-3 row">
                                <label for="equipo_id" class="col-sm-2 col-form-label">{{ __('view.equipo') }}</label>
                                <div class="col-sm-4">
                                    <select id="equipo_id" class="form-select" disabled>
                                    </select>
                                </div>
                                <!-- Datos del jugador -->
                                <label for="jugador_id" class="col-sm-2 col-form-label">{{ __('view.jugador') }}</label>
                                <div class="col-sm-4">
                                    <select id="jugador_id" name="jugador_id" class="form-select" disabled>
                                        @foreach ($jugadores as $jugador)
                                            <option value="{{ $jugador->id }}"
                                                {{ $jugadorPartido->jugador_id == $jugador->id ? 'selected' : '' }}>
                                                {{ $jugador->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Seccion de tarjeta -->
                            <div class="mb-3 row">
                                <label for="tarjeta_id" class="col-sm-2 col-form-label">{{ __('view.tarjeta') }}</label>
                                <div class="col-sm-4">
                                    <select id="tarjeta_id" name="tarjeta_id" class="form-select">
                                        <option selected disabled>Seleccione tarjeta</option>
                                        @foreach ($tarjetas as $tarjeta)
                                            <option value="{{ $tarjeta->id }}" id="{{ $tarjeta->multa }}"
                                                {{ isset($jugadorPartido->tarjeta) && $jugadorPartido->tarjeta->id == $tarjeta->id ? 'selected' : '' }}>
                                                {{ $tarjeta->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="valor_tarjeta" class="col-sm-2 col-form-label">$ {{ __('view.tarjeta') }}</label>
                                <div class="col-sm-4">
                                    @if ( $jugadorPartido->tarjeta_id >  0 )
                                        <input type="text" name="valor_tarjeta" id="valor_tarjeta" class="form-control"
                                                value="{{ $jugadorPartido->tarjeta->multa }}" readonly>
                                    @else
                                        <input type="text" name="valor_tarjeta" id="valor_tarjeta" class="form-control" readonly>
                                    @endif
                                </div>

                                <label for="estado" class="col-sm-2 col-form-label">{{ __('view.estado') }}</label>
                                <div class="col-sm-4">
                                    <select name="estado" class="form-select">
                                        <option selected disabled>Seleccione tarjeta</option>
                                        <option value="Pendiente"
                                            {{ old('estado', $jugadorPartido->estado) == 'Pendiente' ? 'selected' : '' }}>
                                            Pendiente</option>
                                        <option value="Pagado"
                                            {{ old('estado', $jugadorPartido->estado) == 'Pagado' ? 'selected' : '' }}>
                                            Pagado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="goles" class="col-sm-2 col-form-label">{{ __('view.goles') }}</label>
                                <div class="col-sm-2">
                                    <input type="text" name="goles" class="form-control"
                                        value="{{ $jugadorPartido->goles }}">
                                </div>
                                <label for="asistencias" class="col-sm-2 col-form-label">{{ __('view.asistencias') }}</label>
                                <div class="col-sm-2">
                                    <input type="text" name="asistencias" class="form-control"
                                        value="{{ $jugadorPartido->asistencias }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Seccion de botones -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" class="btn btn-primary" value="{{ __('view.guardar') }}">
                        <a href="{{ route('admin.partido.datosJugadorPartido') }}"
                            class="btn btn-danger">{{ __('view.cancelar') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            //le pasamos el valor del id del selector a la funcion tarjetaValor
            $('#tarjeta_id').change(tarjetaValor);
            $('#partido_id').change(cargarEquipo);
            $('#equipo_id').change(cargarJugador);
        });

        function tarjetaValor() {
            //guardamos en una variable todos los datos del selector seleccionado
            var optionSelect = tarjeta_id.options[tarjeta_id.selectedIndex];
            // le pasamos el arreglo guardado en la variable "optionSelect" junto a la posicion donde esta el valor que queremos atrapar ".id" 
            // el valor pasado se mostrara en el input con id="inscripcion"
            document.querySelector('#valor_tarjeta').value = (optionSelect.id);
        }

        function cargarEquipo() {
            var partido_id = $(this).val();
            const equipo_dropdown = $('#equipo_id');
            const jugador_dropdown = $('#jugador_id');

            // Deshabilitar y limpiar los selects de equipo y jugador inicialmente
            equipo_dropdown.prop('disabled', true).html('<option value="" disabled>Seleccione un equipo</option>');
            jugador_dropdown.prop('disabled', true).html('<option selected disabled>Seleccione equipo primero</option>');

            if (partido_id) {
                // Hacer la solicitud AJAX para obtener los equipos
                $.ajax({
                    url: `{{ url('/layouts/admin/partido/mostrarEquipos') }}/${partido_id}`,
                    method: 'GET',
                    success: function(data) {
                        // Limpiar los equipos anteriores
                        equipo_dropdown.html('<option value="" disabled>Seleccione un equipo</option>');

                        if (data.length > 0) {
                            // Agregar los equipos al dropdown
                            $.each(data, function(index, equipo) {
                                equipo_dropdown.append('<option value="' + equipo.id + '">' + equipo
                                    .nombre + '</option>');
                            });
                            // Habilitar el select de equipos
                            equipo_dropdown.prop('disabled', false);
                        } else {
                            equipo_dropdown.prop('disabled', true).html(
                                '<option value="" disabled>No hay equipos disponibles</option>');
                        }
                    },
                    error: function() {
                        equipo_dropdown.prop('disabled', true).html(
                            '<option value="" disabled>Error al cargar los equipos</option>');
                    }
                });
            } else {
                equipo_dropdown.prop('disabled', true).html(
                    '<option value="" disabled>Seleccione un partido primero</option>');
            }
        }

        function cargarJugador() {
            var equipo_id = $(this).val();
            const jugador_dropdown = $('#jugador_id');

            // Deshabilitar el select de jugadores inicialmente
            jugador_dropdown.prop('disabled', true).html('<option selected disabled>Seleccione equipo primero</option>');

            if (equipo_id) {
                // Hacer la solicitud AJAX para obtener los jugadores del equipo seleccionado
                $.ajax({
                    url: "{{ route('admin.partido.mostrarJugadores') }}",
                    method: 'GET',
                    data: {
                        equipo_id: equipo_id
                    },
                    success: function(data) {
                        // Limpiar los jugadores anteriores
                        jugador_dropdown.html('<option value="" selected>Seleccione al jugador</option>');

                        if (data.length > 0) {
                            // Agregar los jugadores al dropdown
                            $.each(data, function(index, jugador) {
                                // Asegúrate de que estás accediendo al nombre y al ID correctamente
                                jugador_dropdown.append('<option value="' + jugador.id + '">' + jugador
                                    .nombre + '</option>');
                            });
                            // Habilitar el select de jugadores
                            jugador_dropdown.prop('disabled', false);
                        } else {
                            jugador_dropdown.prop('disabled', true).html(
                                '<option value="" disabled>No hay jugadores disponibles</option>');
                        }
                    },
                    error: function() {
                        jugador_dropdown.prop('disabled', true).html(
                            '<option value="" disabled>Error al cargar los jugadores</option>');
                    }
                });
            }
        }
    </script>
@endpush
