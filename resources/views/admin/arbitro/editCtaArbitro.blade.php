@extends('layouts.app')
@section('title', 'Arbitro')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2>{{ __('view.pago') . ' ' . __('view.arbitros') }}</h2>
                <form method="POST" action="{{ route('admin.arbitro.updateCtaArbitro', $partido->id) }}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <!-- Seleccion de Arbitro -->
                    <div class="card">
                        <div class="card-header">
                            <div class="mb-3 row">
                                <label for="arbitro_id" class="col-sm-2 col-form-label">{{ __('view.arbitros') }}</label>
                                <div class="col-sm-10 mb-3">
                                    <input type="text" name="arbitro_id" class="form-control" value="{{ $partido->arbitro->nombre }} {{ $partido->arbitro->apellido }}" disabled>
                                </div>
                                <label for="fecha" class="col-sm-2 col-form-label">{{ __('view.fecha') }}</label>
                                <div class="col-sm-4">
                                    <input type="date" name="fecha" class="form-control" value="{{ $partido->fecha }}" disabled>
                                </div>
                                <label for="hora" class="col-sm-2 col-form-label">{{ __('view.hora') }}</label>
                                <div class="col-sm-4">
                                    <input type="time" name="hora" class="form-control" value="{{ $partido->hora }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="importe" class="col-sm-2 col-form-label">{{ __('view.importe') }}</label>
                                <div class="col-sm-4">
                                    <input type="text" name="importe" class="form-control" value="{{ $partido->importe }}" disabled>
                                </div>
                                <label for="estado" class="col-sm-2 col-form-label">{{ __('view.estado') }}</label>
                                <div class="col-sm-4">
                                    <select name="estado" class="form-select">
                                        <option value="Pendiente" {{ old('estado', $partido->estado) == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                                        <option value="Pagado" {{ old('estado', $partido->estado) == 'Pagado' ? 'selected' : '' }}>Pagado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seleccion de botones -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" class="btn btn-primary" value="{{ __('view.guardar') }}">
                        <a href="{{ route('admin.arbitro.ctaArbitro') }}" class="btn btn-danger">{{ __('view.cancelar') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection