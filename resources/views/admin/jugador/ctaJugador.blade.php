@extends('layouts.app')
@section('title', 'Liquidación Jugadores')

@section('content_body')
    @component('admin._components.table')
        @slot('title')
            {{ __('view.liquidacion') . ' ' . __('view.jugador') }}
        @endslot
        @slot('header')
            <th>{{ __('view.nombre') }}</th>
            <th>{{ __('view.apellido') }}</th>
            <th>{{ __('view.equipo') }}</th>
            <th>{{ __('view.fecha') . ' ' . __('view.partido') }}</th>
            <th>{{ __('view.hora') . ' ' . __('view.partido')}}</th>
            <th>{{ __('view.tarjeta') }}</th>
            <th>$ {{ __('view.costo') }}</th>
            <th>{{ __('view.estado') }}</th>
            <th>{{ __('view.acciones') }}</th>
        @endslot
        @slot('detail')
            @forelse ($jugadorPartidos as $jugadorPartido)
                <td>{{ $jugadorPartido->jugador->nombre }}</a></td>
                <td>{{ $jugadorPartido->jugador->apellido }}</td>
                <td>{{ $jugadorPartido->jugador->equipo->nombre }}</td>
                <td>{{ $jugadorPartido->partido->fecha }}</td>
                <td>{{ $jugadorPartido->partido->hora }}</td>
                <td>{{ $jugadorPartido->tarjeta->nombre }}</td>
                <td>{{ $jugadorPartido->tarjeta->multa }}</td>
                <td>{{ $jugadorPartido->estado }}</td>
                <td class="d-flex">
                    @component('admin._components.btnTable')
                        @slot('href')
                            href="{{ route('admin.jugador.editCtaJugador', $jugadorPartido->id) }}"
                        @endslot
                        @slot('action')
                            hidden action=""
                        @endslot
                    @endcomponent
                </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">{{ __('view.No_hay_Datos') }}</td>
                </tr>
            @endforelse
            {{ $jugadorPartidos->links('layouts._partials.pagination.bootstrap-5') }}
        @endslot
    @endcomponent
@endsection
