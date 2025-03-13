@extends('layouts.app')
@section('title', 'Arbitros')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2>{{ __('view.editar') . ' ' . __('view.arbitros') }}</h2>
                <form method="POST" action="{{ route('admin.arbitro.update', $arbitro->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3 row">
                        <label for="nombre" class="col-sm-2 col-form-label">{{ __('view.nombre') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre" value="{{ $arbitro->nombre }}"
                                    class="form-control @error('nombre') is-invalid @enderror is-valid">
                            @error('nombre')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror  
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="apellido" class="col-sm-2 col-form-label">{{ __('view.apellido') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="apellido" value="{{ $arbitro->apellido }}"
                                    class="form-control @error('apellido') is-invalid @enderror is-valid">
                            @error('apellido')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror 
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fecha_nac" class="col-sm-2 col-form-label">{{ __('view.fecha') . ' ' . __('view.nacimiento') }}</label>
                        <div class="col-sm-10">
                            <input type="date" name="fecha_nac" value="{{ $arbitro->fecha_nac }}"
                                    class="form-control @error('fecha_nac') is-invalid @enderror is-valid">
                            @error('fecha_nac')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror  
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="direccion" class="col-sm-2 col-form-label">{{ __('view.direccion') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="direccion" class="form-control" value="{{ $arbitro->direccion }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telefono" class="col-sm-2 col-form-label">{{ __('view.tel_cel') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="telefono" value="{{ $arbitro->telefono }}"
                                    class="form-control @error('telefono') is-invalid @enderror is-valid">
                            @error('telefono')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror 
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">{{ __('view.mail') }}</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{ $arbitro->email }}"
                            class="form-control @error('email') is-invalid @enderror is-valid">
                            @error('email')
                                <span class="invalid-feedback">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror 
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" class="btn btn-primary" value="{{ __('view.guardar') }}">
                        <a href="{{ route('admin.arbitro.index')}}" class="btn btn-danger">{{ __('view.cancelar') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
