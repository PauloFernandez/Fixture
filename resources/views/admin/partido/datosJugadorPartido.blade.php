@extends('layouts.app')
@section('title', 'Datos Jugadores')

@section('content_body')
    @component('admin._components.table')
        @slot('title')
            {{ __('view.datos_jug_part') }}
            <a class="btn btn-primary" href="{{ route('admin.partido.createJugadorPartido') }}"
                role="button">{{ __('view.ingresar') . ' ' . __('view.datos') }}</a>
        @endslot
        @slot('header')
            <th>{{ __('view.nombre') }}</th>
            <th>{{ __('view.apellido') }}</th>
            <th>{{ __('view.equipo') }}</th>
            <th>{{ __('view.partido') }}</th>
            <th>{{ __('view.goles') }}</th>
            <th>{{ __('view.asistencias') }}</th>
            <th>{{ __('view.tarjeta') }}</th>
            <th>{{ __('view.costo') }}</th>
            <th>{{ __('view.acciones') }}</th>
        @endslot
        @slot('detail')
            @forelse ($jugadorPartidos as $jugadorPartido)
                <tr>
                    <td>{{ $jugadorPartido->jugador->nombre }}</a></td>
                    <td>{{ $jugadorPartido->jugador->apellido }}</td>
                    <td>{{ $jugadorPartido->jugador->equipo->nombre }}</td>
                    <td>{{ $jugadorPartido->partido->fecha }}</td>
                    <td>{{ $jugadorPartido->goles }}</td>
                    <td>{{ $jugadorPartido->asistencias }}</td>
                    @if ($jugadorPartido->tarjeta_id > 0)
                        <td>{{ $jugadorPartido->tarjeta->nombre }}</td>
                        <td>{{ $jugadorPartido->tarjeta->multa }}</td>
                    @else
                        <td></td>
                        <td></td>
                    @endif
                    <td class="d-flex">
                        @component('admin._components.btnTable')
                            @slot('href')
                                href="{{ route('admin.partido.editJugadorPartido', $jugadorPartido->id) }}"
                            @endslot
                            @slot('action')
                                action="{{ route('admin.partido.destroyJugadorPartido', $jugadorPartido->id) }}" class="alerta"
                            @endslot
                        @endcomponent
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">{{ __('view.No_hay_Datos') }}</td>
                </tr>
            @endforelse
            {{ $jugadorPartidos->links('layouts._partials.pagination.bootstrap-5') }}
        @endslot
    @endcomponent
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('.alerta').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                title: "Esta seguro?",
                text: "¡No podrás revertir esto!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, eliminar!",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.value) {
                    this.submit();
                }
            });
        });
    </script>
@endpush
