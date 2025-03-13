<div class="row">
    <!-- Card de partidos jugados -->
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">{{ __('view.asistencias') }}</div>
                    <div class="col-4">{{ $detallePartidos->asistencia }}</div>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('admin.partido.datosJugadorPartido') }}">{{ __('view.ver_Detalle') }}</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>      
    <!-- Card de goles anotados -->
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">{{ __('view.goles') }}</div>
                    <div class="col-4">{{ $detallePartidos->goles }}</div>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('admin.partido.datosJugadorPartido') }}">{{ __('view.ver_Detalle') }}</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>      
    <!-- Card de amarillas -->
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">{{ __('view.amarillas') }}</div>
                    <div class="col-4">{{ $detallePartidos->amarillas }}</div>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('admin.partido.datosJugadorPartido') }}">{{ __('view.ver_Detalle') }}</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>   
    <!-- Card de rojas -->
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">{{ __('view.rojas') }}</div>
                    <div class="col-4">{{ $detallePartidos->rojas }}</div>
                </div>
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{ route('admin.partido.datosJugadorPartido') }}">{{ __('view.ver_Detalle') }}</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>