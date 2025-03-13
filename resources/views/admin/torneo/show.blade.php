@extends('layouts.app')
@section('title', 'Torneo')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="d-flex mt-2">
                    <h2 class="me-5">{{ __('view.informacion') . ' ' . __('view.torneo') }}</h2>
                    <div>
                        <a href="{{ route('admin.torneo.index') }}" class="btn btn-primary ">{{ __('view.regresar') }}</a>
                    </div>
                </div>
                <div class="mb-3 mt-4 row">
                    <label for="fecha" class="col-sm-2 col-form-label">{{ __('view.fecha') }}</label>
                    <div class="col-sm-4">
                        <input type="date" name="fecha" value="{{ $torneo->fecha }}" class="form-control" disabled>
                    </div>
                    <label for="cant_equipos" class="col-sm-2 col-form-label">{{ __('view.cant_equipos') }}</label>
                    <div class="col-sm-4">
                        <input type="text" name="cant_equipos" value="{{ $torneo->cant_equipos }}" class="form-control" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="premios" class="col-sm-2 col-form-label">{{ __('view.premios') }}</label>
                    <div class="col-sm-10">
                        <input type="text" name="premios" value="{{ $torneo->premios }}" class="form-control" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="ubicacion" class="col-sm-2 col-form-label">{{ __('view.ubicacion') }}</label>
                    <div class="col-sm-10">
                        <input type="text" name="ubicacion" value="{{ $torneo->ubicacion }}" class="form-control" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="reglas_gral" class="col-sm-2 col-form-label">{{ __('view.reglas_gral') }}</label>
                    <div class="col-sm-10">
                        <textarea name="reglas_gral" rows="3" class="form-control " disabled>{{ $torneo->reglas_gral }}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="sis_competicion" class="col-sm-2 col-form-label">{{ __('view.sis_competicion') }}</label>
                    <div class="col-sm-10">
                        <textarea name="sis_competicion" rows="3" class="form-control" disabled>{{ $torneo->sis_competicion }}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="elegibilidad" class="col-sm-2 col-form-label">{{ __('view.elegibilidad') }}</label>
                    <div class="col-sm-10">
                        <textarea name="elegibilidad" rows="3" class="form-control" disabled>{{ $torneo->elegibilidad }}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="disciplina" class="col-sm-2 col-form-label">{{ __('view.disciplina') }}</label>
                    <div class="col-sm-10">
                        <textarea name="disciplina" rows="3" class="form-control" disabled>{{ $torneo->disciplina }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
