@extends('layouts.app')
@section('title', 'Torneo')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2>{{ __('view.nuevo') . ' ' . __('view.torneo') }}</h2>
                <form method="POST" action="{{ route('admin.torneo.store') }}" enctype="multipart/form-data">
                    @csrf
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
                        <label for="valor_cancha"
                            class="col-sm-2 col-form-label">{{ __('view.costo') . ' ' . __('view.cancha') }}</label>
                        <div class="col-sm-4">
                            <input type="text" name="valor_cancha" value="{{ old('valor_cancha') }}"
                                class="form-control @error('valor_cancha') is-invalid @enderror is-valid">
                            @error('valor_cancha')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <label for="inscripcion" class="col-sm-2 col-form-label">{{ __('view.inscripcion') }}</label>
                        <div class="col-sm-4">
                            <input type="text" name="inscripcion" value="{{ old('inscripcion') }}"
                                class="form-control @error('inscripcion') is-invalid @enderror is-valid">
                            @error('inscripcion')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <p class="fs-2 text-center">{{ __('view.informacion'). ' ' . __('view.torneo') }}</p>
                    </div>

                    <div class="mb-3 row">
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
                        <label for="cant_equipos" class="col-sm-2 col-form-label">{{ __('view.cant_equipos') }}</label>
                        <div class="col-sm-4">
                            <input type="text" name="cant_equipos" value="{{ old('cant_equipos') }}"
                                class="form-control @error('cant_equipos') is-invalid @enderror is-valid">
                            @error('cant_equipos')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="premios" class="col-sm-2 col-form-label">{{ __('view.premios') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="premios" value="{{ old('premios') }}"
                                class="form-control @error('premios') is-invalid @enderror is-valid">
                            @error('premios')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ubicacion" class="col-sm-2 col-form-label">{{ __('view.ubicacion') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="ubicacion" value="{{ old('ubicacion') }}"
                                class="form-control @error('ubicacion') is-invalid @enderror is-valid">
                            @error('ubicacion')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="reglas_gral" class="col-sm-2 col-form-label">{{ __('view.reglas_gral') }}</label>
                        <div class="col-sm-10">
                            <textarea name="reglas_gral" rows="3" {{ old('reglas_gral') }}
                                class="form-control @error('reglas_gral') is-invalid @enderror is-valid"></textarea>
                            @error('reglas_gral')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="sis_competicion"
                            class="col-sm-2 col-form-label">{{ __('view.sis_competicion') }}</label>
                        <div class="col-sm-10">
                            <textarea name="sis_competicion" rows="3" {{ old('sis_competicion') }}
                                class="form-control @error('sis_competicion') is-invalid @enderror is-valid"></textarea>
                            @error('sis_competicion')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="elegibilidad" class="col-sm-2 col-form-label">{{ __('view.elegibilidad') }}</label>
                        <div class="col-sm-10">
                            <textarea name="elegibilidad" rows="3" {{ old('elegibilidad') }}
                                class="form-control @error('elegibilidad') is-invalid @enderror is-valid"></textarea>
                            @error('elegibilidad')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="disciplina" class="col-sm-2 col-form-label">{{ __('view.disciplina') }}</label>
                        <div class="col-sm-10">
                            <textarea name="disciplina" rows="3" {{ old('disciplina') }}
                                class="form-control @error('disciplina') is-invalid @enderror is-valid"></textarea>
                            @error('disciplina')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="publicado"
                            id="publicado" @if (old('publicado') == 1) checked @endif>
                        <label class="form-check-label" for="publicado">
                            Mostrar en Página de Inicio
                        </label>
                    </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" class="btn btn-primary" value="{{ __('view.guardar') }}">
                <a href="{{ route('admin.torneo.index') }}" class="btn btn-danger">{{ __('view.cancelar') }}</a>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
