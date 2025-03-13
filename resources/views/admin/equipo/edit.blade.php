@extends('layouts.app')
@section('title', 'Equipos')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2>{{ __('view.editar') . ' ' . __('view.equipo') }}</h2>
                <form method="POST" action="{{ route('admin.equipo.update', $equipo->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3 row">
                        <label for="file_uri" class="col-sm-2 col-form-label">{{ __('view.escudo') }}</label>
                        <img src="{{ asset('storage/images/' . $equipo->file_uri) }}" alt="Imagen Escudo" style="width: 80px; height: 45px">
                        <div class="col-sm-8">
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
                            <input type="text" name="nombre" value="{{ $equipo->nombre }}"
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
                                @foreach ($torneos as $torneo)
                                    <option value="{{ $torneo->id }}"
                                        {{ $equipo->torneo->id == $torneo->id ? 'selected' : '' }}>
                                        {{ $torneo->nombre }}</option>
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
                        <label for="estado" class="col-sm-2 col-form-label">{{ __('view.estado') }}</label>
                        <div class="col-sm-10">
                            <select name="estado" class="form-select @error('estado') is-invalid @enderror is-valid">
                                <option value="Pendiente" {{ old('estado', $equipo->estado) == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                                <option value="Pagado" {{ old('estado', $equipo->estado) == 'Pagado' ? 'selected' : '' }}>Pagado</option>
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
