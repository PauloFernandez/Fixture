@extends('layouts.app')
@section('title', 'Cancha')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2>{{ __('view.crear') . ' ' . __('view.cancha') }}</h2>
                <form method="POST" action="{{ route('admin.cancha.store') }}" enctype="multipart/form-data">
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
                        <label for="valor_hora" class="col-sm-2 col-form-label">{{ __('view.costo') . ' ' . __('view.hora') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="valor_hora" value="{{ old('valor_hora') }}"
                            class="form-control @error('valor_hora') is-invalid @enderror is-valid">
                            @error('valor_hora')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" class="btn btn-primary" value="{{ __('view.guardar') }}">
                        <a href="{{ route('admin.cancha.index') }}" class="btn btn-danger">{{ __('view.cancelar') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
