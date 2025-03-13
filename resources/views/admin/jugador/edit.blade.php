@extends('layouts.app')
@section('title', 'Jugador')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2>{{ __('view.editar') . ' ' . __('view.jugador') }}</h2>
                <form method="POST" action="{{ route('admin.jugador.update', $jugador->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3 row">
                        <label for="file_uri" class="col-sm-2 col-form-label">{{ __('view.foto') }}</label>
                        <div class="col-sm-10">
                            <img src="{{ asset('storage/images/' . $jugador->file_uri) }}" alt="Imagen Foto" style="width: 80px; height: 45px">
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
                            <input type="text" name="nombre" value="{{ $jugador->nombre }}"
                                class="form-control @error('nombre') is-invalid @enderror is-valid">
                            @error('nombre')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="apellido" class="col-sm-2 col-form-label">{{ __('view.apellido') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="apellido" value="{{ $jugador->apellido }}"
                                class="form-control @error('apellido') is-invalid @enderror is-valid">
                            @error('apellido')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fecha_nac" class="col-sm-2 col-form-label">{{ __('view.fecha') . ' ' . __('view.nacimiento') }}</label>
                        <div class="col-sm-10">
                            <input type="date" name="fecha_nac" value="{{ $jugador->fecha_nac }}"
                                class="form-control @error('fecha_nac') is-invalid @enderror is-valid">
                            @error('fecha_nac')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="direccion" class="col-sm-2 col-form-label">{{ __('view.direccion') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="direccion" value="{{ $jugador->direccion }}"
                                class="form-control @error('direccion') is-invalid @enderror is-valid">
                            @error('direccion')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telefono" class="col-sm-2 col-form-label">{{ __('view.tel_cel') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="telefono" value="{{ $jugador->telefono }}"
                                class="form-control @error('telefono') is-invalid @enderror is-valid">
                            @error('telefono')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">{{ __('view.mail') }}</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{ $jugador->email }}"
                                class="form-control @error('email') is-invalid @enderror is-valid">
                            @error('email')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="posicion" class="col-sm-2 col-form-label">{{ __('view.posicion') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="posicion" value="{{ $jugador->posicion }}"
                                class="form-control @error('posicion') is-invalid @enderror is-valid">
                            @error('posicion')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="num_camiseta" class="col-sm-2 col-form-label">{{ __('view.camiseta') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="num_camiseta" value="{{ $jugador->num_camiseta }}"
                                class="form-control @error('num_camiseta') is-invalid @enderror is-valid">
                            @error('num_camiseta')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="equipo_id" class="col-sm-2 col-form-label">{{ __('view.equipo') }}</label>
                        <div class="col-sm-10">
                            <select name="equipo_id" id="equipo_id"
                                class="form-select @error('equipo_id') is-invalid @enderror is-valid">
                                @foreach ($equipos as $equipo)
                                    <option value="{{ $equipo->id }}"
                                        {{ $jugador->equipo->id == $equipo->id ? 'selected' : '' }}>
                                        {{ $equipo->nombre }}</option>
                                @endforeach
                            </select>
                            @error('equipo_id')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" class="btn btn-primary" value="{{ __('view.guardar') }}">
                        <a href="{{ route('admin.jugador.index') }}" class="btn btn-danger">{{ __('view.cancelar') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
