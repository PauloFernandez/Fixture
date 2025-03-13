@extends('layouts.app')
@section('title', 'Jugador')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2>{{ __('view.pago') . ' ' . __('view.jugador') }}</h2>
                <form method="POST" action="{{ route('admin.jugador.updateCtaJugador', $jugadorPartido->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="mb-3 row">
                                <label for="jugador" class="col-sm-2 col-form-label">{{ __('view.nombre') }}</label>
                                <div class="col-sm-10 mb-3">
                                    <input type="text" class="form-control" value="{{ $jugadorPartido->jugador->nombre }} {{ $jugadorPartido->jugador->apellido }}" readonly>
                                </div>
                                <label for="equipo" class="col-sm-2 col-form-label">{{ __('view.equipo') }}</label>
                                <div class="col-sm-10 mb-3">
                                    <input type="text" class="form-control" value="{{ $jugadorPartido->jugador->equipo->nombre }}" readonly>
                                </div>
                                <label for="fecha" class="col-sm-2 col-form-label">{{ __('view.fecha') }}</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" value="{{ $jugadorPartido->partido->fecha }}" readonly>
                                </div>
                                <label for="hora" class="col-sm-2 col-form-label">{{ __('view.hora') }}</label>
                                <div class="col-sm-4">
                                    <input type="time" class="form-control" value="{{ $jugadorPartido->partido->hora }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="tarjeta" class="col-sm-2 col-form-label">{{ __('view.tarjeta') }}</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" value="{{ $jugadorPartido->tarjeta->nombre }}" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="valor_tarjeta" class="col-sm-2 col-form-label">{{ __('view.importe') }}</label>
                                <div class="col-sm-4">
                                    <input type="text" name="valor_tarjeta" class="form-control" value="{{ $jugadorPartido->valor_tarjeta }}" readonly>
                                </div>
                                <label for="estado" class="col-sm-2 col-form-label">{{ __('view.estado') }}</label>
                                <div class="col-sm-4">
                                    <select name="estado" class="form-select">
                                        <option value="Pendiente" {{ old('estado', $jugadorPartido->estado) == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                                        <option value="Pagado" {{ old('estado', $jugadorPartido->estado) == 'Pagado' ? 'selected' : '' }}>Pagado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Seleccion de botones -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" class="btn btn-primary" value="{{ __('view.guardar') }}">
                        <a href="{{ route('admin.jugador.ctaJugador') }}" class="btn btn-danger">{{ __('view.cancelar') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
