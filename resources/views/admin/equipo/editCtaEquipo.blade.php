@extends('layouts.app')
@section('title', 'Editar deuda Cancha partido')

@section('content_body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h2>{{ __('view.estado') . ' ' . __('view.deuda') }}</h2>
                <form method="POST" action="{{ route('admin.equipo.updateCtaEquipo', $equipo->id) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <div class="mb-3 row">
                                <label for="nombre" class="col-sm-2 col-form-label">{{ __('view.nombre') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nombre" class="form-control" value="{{ $equipo->nombre }}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <!-- este input es para recuperar el id del partido que pasamos por parametro desde ctaEquipo -->
                                <input type="hidden" name="partido_id" value="{{ $partidoId }}"> 
                                <label for="importe" class="col-sm-2 col-form-label">{{ __('view.importe') }}</label>
                                <div class="col-sm-4">
                                    <input type="number" name="importe" class="form-control" value="{{ old('importe', $equipo->torneo->valor_cancha) }}" disabled>
                                </div>
                                <label for="estado" class="col-sm-2 col-form-label">{{ __('view.estado') }}</label>
                                <div class="col-sm-4">
                                    <select name="estado" class="form-select" required>
                                        <option value="Pendiente" {{ old('estado', $equipo->partidos->find($partidoId)->pivot->estado) == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                                        <option value="Pagado" {{ old('estado', $equipo->partidos->find($partidoId)->pivot->estado) == 'Pagado' ? 'selected' : '' }}>Pagado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Selección de botones -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <input type="submit" class="btn btn-primary" value="{{ __('view.guardar') }}">
                        <a href="{{ route('admin.equipo.ctaEquipo') }}" class="btn btn-danger">{{ __('view.cancelar') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

