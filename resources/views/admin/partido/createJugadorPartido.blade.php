@extends('layouts.app')
@section('title', 'Cargar datos del jugador por partido')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2>{{ __('view.carga_jug_part') }}</h2>
                <form method="POST" action="{{ route('admin.partido.storeJugadorPartido') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <!-- Datos del partido jugado -->
                            <div class="mb-3 row">
                                <label for="partido_id" class="col-sm-2 col-form-label">{{ __('view.partido') }}</label>
                                <div class="col-sm-10">
                                    <select id="partido_id" name="partido_id"
                                        class="form-select @error('partido_id') is-invalid @enderror is-valid">
                                        <option selected disabled>Seleccione partido</option>
                                        @foreach ($partidos as $partido)
                                            <option value="{{ $partido->id }}">{{ $partido->fecha }}</option>
                                        @endforeach
                                    </select>
                                    @error('partido_id')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Datos del equipo -->
                            <div class="mb-3 row">
                                <label for="equipo_id" class="col-sm-2 col-form-label">{{ __('view.equipo') }}</label>
                                <div class="col-sm-4">
                                    <select id="equipo_id"
                                        class="form-select @error('equipo_id') is-invalid @enderror is-valid" disabled>
                                    </select>
                                    @error('equipo_id')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Datos del jugador -->
                                <label for="jugador_id" class="col-sm-2 col-form-label">{{ __('view.jugador') }}</label>
                                <div class="col-sm-4">
                                    <select id="jugador_id" name="jugador_id"
                                        class="form-select @error('jugador_id') is-invalid @enderror is-valid" disabled>
                                    </select>
                                    @error('jugador_id')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
                                            <option value="{{ $tarjeta->id }}" id="{{ $tarjeta->multa }}">
                                                {{ $tarjeta->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="valor_tarjeta" class="col-sm-2 col-form-label">$ {{ __('view.tarjeta') }}</label>
                                <div class="col-sm-4">
                                    <input type="text" name="valor_tarjeta" id="valor_tarjeta" class="form-control"
                                        value="{{ old('valor_tarjeta') }}" readonly>
                                </div>
                                <label for="estado" class="col-sm-2 col-form-label">{{ __('view.estado') }}</label>
                                <div class="col-sm-4">
                                    <select name="estado" id="estado" class="form-select">
                                        <option selected disabled>Seleccione el estado</option>
                                        <option value="Pendiente">Pendiente</option>
                                        <option value="Pagado">Pagado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="goles" class="col-sm-2 col-form-label">{{ __('view.goles') }}</label>
                                <div class="col-sm-2">
                                    <input type="text" name="goles" value="{{ old('goles') }}"
                                        class="form-control @error('goles') is-invalid @enderror is-valid">
                                    @error('goles')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="asistencias" class="col-sm-2 col-form-label">{{ __('view.asistencias') }}</label>
                                <div class="col-sm-2">
                                    <input type="text" name="asistencias" value="{{ old('asistencias') }}"
                                        class="form-control @error('asistencias') is-invalid @enderror is-valid">
                                    @error('asistencias')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
<!-- Seccion de scripts de AdminLTE -->
@push('js')
    <script>
        $(document).ready(function() {
            //le pasamos el valor del id del selector a la funcion tarjetaValor
            $('#tarjeta_id').change(tarjetaValor);
            $('#partido_id').change(cargarEquipo);
            $('#equipo_id').change(cargarJugador);
        });
        /******* Funciones para mostrar datos en un label **********/
        function tarjetaValor() {
            //guardamos en una variable todos los datos del selector seleccionado
            var optionSelect = tarjeta_id.options[tarjeta_id.selectedIndex];
            document.querySelector('#valor_tarjeta').value = (optionSelect.id);
        }

        /****************    Cargar los equipo cuando se seleccione un partido           ****************/
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
                        //console.error('Error al cargar los equipos.');
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
