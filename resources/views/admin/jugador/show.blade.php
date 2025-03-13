@extends('layouts.app')
@section('title', 'Jugador')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="d-flex mt-2">
                    <h2 class="me-5">{{ __('view.informacion') . ' ' . __('view.jugador') }}</h2>
                    <div>
                        <a href="{{ route('admin.jugador.index') }}" class="btn btn-primary ">{{ __('view.regresar') }}</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form method="GET" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="file_uri" class="col-sm-2 col-form-label">{{ __('view.foto') }}</label>
                                <div class="col-sm-10">
                                    <img src="{{ asset('storage/images/' . $jugador->file_uri) }}" alt="Imagen Escudo" style="width: 80px; height: 45px">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-5">
                                    <label for="nombre" class="col-form-label">{{ __('view.nombre') }}</label>
                                    <input type="text" name="nombre" class="form-control" value="{{ $jugador->nombre }}" disabled>
                                </div>
                                <div class="col-sm-5">
                                    <label for="apellido" class="col-form-label">{{ __('view.apellido') }}</label>
                                    <input type="text" name="apellido" class="form-control" value="{{ $jugador->apellido }}" disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-5">
                                    <label for="fecha_nac" class="col-form-label">{{ __('view.fecha') . ' ' . __('view.nacimiento') }}</label>
                                    <input type="date" name="fecha_nac" class="form-control" value="{{ $jugador->fecha_nac }}" disabled>
                                </div>
                                <div class="col-sm-7">
                                    <label for="direccion" class="col-form-label">{{ __('view.direccion') }}</label>
                                    <input type="text" name="direccion" class="form-control" value="{{ $jugador->direccion }}" disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-5">
                                    <label for="telefono" class="col-form-label">{{ __('view.tel_cel') }}</label>
                                    <input type="text" name="telefono" class="form-control" value="{{ $jugador->telefono }}" disabled>
                                </div>
                                <div class="col-sm-7">
                                    <label for="email" class="col-form-label">{{ __('view.mail') }}</label>
                                    <input type="email" name="email" class="form-control" value="{{ $jugador->email }}" disabled>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-2">
                                    <label for="posicion" class="col-form-label">{{ __('view.posicion') }}</label>
                                    <input type="text" name="posicion" class="form-control" value="{{ $jugador->posicion }}" disabled>
                                </div>
                                <div class="col-sm-3">
                                    <label for="num_camiseta" class="col-form-label">{{ __('view.camiseta') }}</label>
                                    <input type="text" name="num_camiseta" class="form-control" value="{{ $jugador->num_camiseta }}" disabled>
                                </div>
                                <div class="col-sm-5">
                                    <label for="num_camiseta" class="col-form-label">{{ __('view.equipo') }}</label>
                                    <input type="text" name="num_camiseta" class="form-control" value="{{ $jugador->equipo->nombre }}" disabled>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
