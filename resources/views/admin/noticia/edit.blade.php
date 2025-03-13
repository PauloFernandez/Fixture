@extends('layouts.app')
@section('title', 'Noticias')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2>{{ __('view.editar') . ' ' . __('view.noticias') }}</h2>
                <form method="POST" action="{{ route('admin.noticia.update', $noticia->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-3 row">
                        <label for="fecha" class="col-sm-2 col-form-label">{{ __('view.fecha') }}</label>
                        <div class="col-sm-10">
                            <input type="date" name="fecha" value="{{ $noticia->fecha }}"
                                class="form-control @error('fecha') is-invalid @enderror is-valid">
                            @error('fecha')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="titulo" class="col-sm-2 col-form-label">{{ __('view.titulo') }}</label>
                        <div class="col-sm-10">
                            <input type="text" name="titulo" value="{{ $noticia->titulo }}"
                                class="form-control @error('titulo') is-invalid @enderror is-valid">
                            @error('titulo')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="descripcion" class="col-sm-2 col-form-label">{{ __('view.descripcion') }}</label>
                        <div class="col-sm-10">
                            <textarea name="descripcion" id="descripcion" rows="3"
                                class="form-control @error('descripcion') is-invalid @enderror is-valid">{{ $noticia->descripcion }}</textarea>
                            @error('descripcion')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" class="btn btn-primary" value="{{ __('view.guardar') }}">
                        <a href="{{ route('admin.noticia.index') }} " class="btn btn-danger">{{ __('view.cancelar') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
