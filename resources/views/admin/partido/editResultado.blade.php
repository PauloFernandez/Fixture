@extends('layouts.app')
@section('title', 'Partido')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2>{{ __('view.actualizar') . ' ' . __('view.resultado') }}</h2>
                <form method="POST" action="{{ route('admin.partido.updateResultado', $partido->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3 row">
                        <label for="fecha" class="col-sm-2 col-form-label">{{ __('view.fecha') }}</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" value="{{ $partido->fecha }}" readonly>
                        </div>
                        <label for="hora" class="col-sm-2 col-form-label">{{ __('view.hora') }}</label>
                        <div class="col-sm-4">
                            <input type="time" class="form-control" value="{{ $partido->hora }}" readonly>
                        </div>
                    </div>
                    <!-- Seleccion de Equipo Local -->
                    <div class="card">
                        <div class="card-header">
                            <div class="mb-3 row">
                                <label for="equipoL" class="col-sm-2 col-form-label">{{ __('view.equipoL') }}</label>
                                <div class="col-sm-4">
                                    <input type="hidden" name="equipoL" value="{{ $partido->equipos[0]->id }}"><!--Punto1-->
                                    <select name="equipoLDisplay" class="form-select" disabled><!--Punto2-->
                                        @foreach ($equipos as $equipo)
                                            <option value="{{ $equipo->id }}"
                                                {{ $partido->equipos[0]->id == $equipo->id ? 'selected' : '' }}> <!--Punto3-->
                                                {{ $equipo->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="resultadoL" class="col-sm-2 col-form-label">{{ __('view.resultado') }}</label>
                                <div class="col-sm-4">
                                    <select name="resultadoL" id="resultadoL" class="form-select">
                                        <option value="E" selected>E</option>
                                        <option value="G">G</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="golesFL" class="col-sm-2 col-form-label">{{ __('view.golesA') }}</label>
                                <div class="col-sm-4">
                                    <input type="number" name="golesFL" value="{{ old('golesFL') }}"
                                    class="form-control @error('golesFL') is-invalid @enderror is-valid">
                                    @error('golesFL')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Seleccion de Equipo Visitante -->
                    <div class="card">
                        <div class="card-header">
                            <div class="mb-3 row">
                                <label for="equipoV" class="col-sm-2 col-form-label">{{ __('view.equipoV') }}</label>
                                <div class="col-sm-4">
                                    <input type="hidden" name="equipoV" value="{{ $partido->equipos[1]->id }}">
                                    <select name="equipoVDisplay" class="form-select" disabled>
                                        @foreach ($equipos as $equipo)
                                            <option value="{{ $equipo->id }}"
                                                {{ $partido->equipos[1]->id == $equipo->id ? 'selected' : '' }}>
                                                {{ $equipo->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="resultadoV" class="col-sm-2 col-form-label">{{ __('view.resultado') }}</label>
                                <div class="col-sm-4">
                                    <select name="resultadoV" id="resultadoV" class="form-select">
                                        <option value="E" selected>E</option>
                                        <option value="G">G</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="golesFV" class="col-sm-2 col-form-label">{{ __('view.golesA') }}</label>
                                <div class="col-sm-4">
                                    <input type="number" name="golesFV" value="{{ old('golesFV') }}"
                                    class="form-control @error('golesFV') is-invalid @enderror is-valid">
                                    @error('golesFV')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" class="btn btn-primary" value="{{ __('view.guardar') }}">
                        <a href="{{ route('admin.partido.mostrarResultado') }}" class="btn btn-danger">{{ __('view.cancelar') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
