@extends('layouts.app')
@section('title', 'Partido')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2>{{ __('view.nuevo') . ' ' . __('view.partido') }}</h2>
                <form method="POST" action="{{ route('admin.partido.store') }}" enctype="multipart/form-data">
                    @csrf
                    <section class="mb-3 row">
                        <label for="fecha" class="col-sm-2 col-form-label">{{ __('view.fecha') }}</label>
                        <div class="col-sm-4">
                            <input type="date" name="fecha" value="{{ old('fecha') }}"
                                class="form-control @error('fecha') is-invalid @enderror is-valid">
                            @error('fecha')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="hora" class="col-sm-2 col-form-label">{{ __('view.hora') }}</label>
                        <div class="col-sm-4">
                            <input type="time" name="hora" value="{{ old('hora') }}"
                                class="form-control @error('hora') is-invalid @enderror is-valid">
                            @error('hora')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Seleccion de Torneo -->
                        <label for="torneo" class="col-sm-2 mt-3 col-form-label">{{ __('view.torneo') }}</label>
                        <div class="col-sm-4 mt-3">
                            <select id="torneo" class="form-select @error('torneo') is-invalid @enderror">
                                <option selected disabled>Seleccione el Torneo</option>
                                @foreach ($torneos as $torneo)
                                    <option value="{{ $torneo->id }}">{{ $torneo->nombre }}</option>
                                @endforeach
                            </select>
                            @error('torneo')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Seleccion de Cancha -->
                        <label for="cancha_id" class="col-sm-2 mt-3 col-form-label">{{ __('view.cancha') }}</label>
                        <div class="col-sm-4 mt-3">
                            <select name="cancha_id" id="cancha_id" class="form-select @error('cancha_id') is-invalid @enderror">
                                <option selected disabled>Seleccione el cancha</option>
                                @foreach ($canchas as $cancha)
                                    <option value="{{ $cancha->id }}">{{ $cancha->nombre }}</option>
                                @endforeach
                            </select>
                            @error('cancha_id')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </section>
                    <section class="mb-3 row">
                        <!-- Seleccion de Equipo Local -->
                        <label for="equipoL" class="col-sm-2 col-form-label">{{ __('view.equipoL') }}</label>
                        <div class="col-sm-4">
                            <select name="equipoL" id="equipoL" class="form-select @error('equipoL') is-invalid @enderror">
                            </select>
                            @error('equipoL')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Seleccion de Equipo Visitante -->
                        <label for="equipoV" class="col-sm-2 col-form-label">{{ __('view.equipoV') }}</label>
                        <div class="col-sm-4">
                            <select name="equipoV" id="equipoV" class="form-select @error('equipoV') is-invalid @enderror">
                            </select>
                            @error('equipoV')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </section>
                    <!-- Seleccion de Arbitro -->
                    <div class="mb-3 row">
                        <label for="arbitro_id" class="col-sm-2 col-form-label">{{ __('view.arbitros') }}</label>
                        <div class="col-sm-4">
                            <select name="arbitro_id" id="arbitro_id"
                                class="form-select @error('arbitro_id') is-invalid @enderror">
                                <option selected disabled>Seleccione el arbitro</option>
                                @foreach ($arbitros as $arbitro)
                                    <option value="{{ $arbitro->id }}">{{ $arbitro->nombre }}
                                        {{ $arbitro->apellido }}
                                    </option>
                                @endforeach
                            </select>
                            @error('arbitro_id')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 mt-2 row">
                        <label for="importe" class="col-sm-2 col-form-label">{{ __('view.importe') }}</label>
                        <div class="col-sm-4">
                            <input type="text" name="importe" value="{{ old('importe') }}"
                                class="form-control @error('importe') is-invalid @enderror is-valid">
                            @error('importe')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="estado" class="col-sm-2 col-form-label">{{ __('view.estado') }}</label>
                        <div class="col-sm-4">
                            <select name="estado" id="estado"
                                class="form-select @error('importe') is-invalid @enderror is-valid">
                                <option selected disabled>Seleccione el estado</option>
                                <option value="Pendiente">Pendiente</option>
                                <option value="Pagado">Pagado</option>
                            </select>
                            @error('estado')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Seleccion de botones -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" class="btn btn-primary" onclick="validar();" value="{{ __('view.guardar') }}">
                        <a href="{{ route('admin.partido.index') }}" class="btn btn-danger">{{ __('view.cancelar') }}</a>
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
            $('#torneo').change(cargarEquipo);
        });

        function cargarEquipo() {
            var torneo = $(this).val();
            const equipoL_dropdown = $('#equipoL');
            const equipoV_dropdown = $('#equipoV');

            // Deshabilitar y limpiar los selects de equipo inicialmente
            equipoL_dropdown.prop('disabled', true).html('<option value="" disabled>Seleccione un equipo</option>');
            equipoV_dropdown.prop('disabled', true).html('<option selected disabled>Seleccione un equipo</option>');

            if (torneo) {
                // Hacer la solicitud AJAX para obtener los jugadores del equipo seleccionado
                $.ajax({
                    url: "{{ route('admin.partido.cargarEquipos') }}",
                    method: 'GET',
                    data: {
                        torneo: torneo
                    },
                    success: function(data) {
                        // Limpiar los equipo anteriores
                        equipoL_dropdown.html('<option value="" selected>Seleccione al equipo</option>');
                        equipoV_dropdown.html('<option value="" selected>Seleccione al equipo</option>');

                        if (data.length > 0) {
                            // Agregar los equipo al dropdown
                            $.each(data, function(index, equipos) {
                                // Asegúrate de que estás accediendo al nombre y al ID correctamente
                                equipoL_dropdown.append('<option value="' + equipos.id + '">' + equipos.nombre + '</option>');
                                equipoV_dropdown.append('<option value="' + equipos.id + '">' + equipos.nombre + '</option>');
                            });
                            // Habilitar el select de equipo
                            equipoL_dropdown.prop('disabled', false);
                            equipoV_dropdown.prop('disabled', false);
                        } else {
                            equipoL_dropdown.prop('disabled', true).html(
                                '<option value="" disabled>No hay equipo disponibles</option>');
                            equipoV_dropdown.prop('disabled', true).html(
                                '<option value="" disabled>No hay equipo disponibles</option>');
                        }
                    },
                    error: function() {
                        //console.error('Error al cargar los equipo.');
                        equipoL_dropdown.prop('disabled', true).html(
                            '<option value="" disabled>Error al cargar los equipo</option>');
                        equipoV_dropdown.prop('disabled', true).html(
                            '<option value="" disabled>Error al cargar los equipo</option>');
                    }
                });
            }
        }
    </script>
@endpush
