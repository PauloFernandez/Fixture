@extends('layouts.app')
@section('title', 'Equipo')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2>{{ __('view.nuevo') . ' ' . __('view.equipo') }}</h2>
                <form method="POST" action="{{ route('admin.equipo.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="file_uri" class="col-sm-2 col-form-label">{{ __('view.escudo') }}</label>
                        <div class="col-sm-10">
                            <input type="file" name="file_uri" placeholder="File"
                                class="form-control @error('file_uri') is-invalid @enderror is-valid">
                            @error('file_uri')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nombre" class="col-sm-2 col-form-label">{{ __('view.nombre') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre" value="{{ old('nombre') }}"
                            class="form-control @error('nombre') is-invalid @enderror is-valid">
                            @error('nombre')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="torneo_id" class="col-sm-2 col-form-label">{{ __('view.torneo') }}</label>
                        <div class="col-sm-10">
                            <select id="torneo_id" name="torneo_id" class="form-select @error('torneo_id') is-invalid @enderror is-valid">
                                <option selected disabled>Seleccione el torneo</option>
                                @foreach ($torneos as $torneo)
<!-- En esta ocacion le agregamos un id para pasar el valor de inscripcion, asi lo obtenemos mediante js y lo volcamos a un input(inscripcion) del formulario -->
                                    <option value="{{ $torneo->id }}" id="{{ $torneo->inscripcion }}">
                                        {{ $torneo->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('torneo_id')
                            <span class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inscripcion" class="col-sm-2 col-form-label">{{ __('view.inscripcion') }}</label>
                        <div class="col-sm-10">
                            <input id="inscripcion" type="text" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="estado" class="col-sm-2 col-form-label">{{ __('view.estado') }}</label>
                        <div class="col-sm-10">
                            <select name="estado" id="estado" class="form-select @error('estado') is-invalid @enderror is-valid">
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

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" class="btn btn-primary" value="{{ __('view.guardar') }}">
                        <a href="{{ route('admin.equipo.index') }}" class="btn btn-danger">{{ __('view.cancelar') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#torneo_id').change(mostrarValor); //le pasamos el valor del id del selector a la funcion mostrarValor
        });

        function mostrarValor(){
            //guardamos en una variable todos los datos del selector seleccionado
            var optionSelect = torneo_id.options[torneo_id.selectedIndex];
            // le pasamos el arreglo guardado en la variable "optionSelect" junto a la posicion donde esta el valor que queremos atrapar ".id" 
            document.querySelector('#inscripcion').value = (optionSelect.id); //el valor pasado se mostrara en el input con id="inscripcion"
        }
    </script>
@endpush
