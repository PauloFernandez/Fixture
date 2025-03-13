@extends('layouts.app')
@section('title', 'Resultados')

@section('content_body')
    @component('admin._components.table')
        @slot('title')
            {{ __('view.ingresar') . " " . __('view.resultado') }}
        @endslot
        @slot('header')
            <th>{{ __('view.fecha') }}</th>
            <th>{{ __('view.hora') }}</th>
            <th colspan="2">{{ __('view.equipoL') }}</th>
            <th colspan="2">{{ __('view.equipoV') }}</th>
            <th>{{ __('view.acciones') }}</th>
        @endslot
        @slot('detail')
            @forelse ($partidos as $partido)
                <tr>
                    <td>{{ $partido->fecha }}</td>
                    <td>{{ $partido->hora }}</td>

                    @foreach ($partido->equipos as $equipo)
                        <td class="pl-2" id="{{ $equipo->id }}">{{ $equipo->nombre }} </td>

                        <td class="pr-5 text-start">{{$equipo->pivot->golesF }}</td>
                    @endforeach

                    <td class="d-flex">
                        @component('admin._components.btnTable')
                            @slot('href')
                                href="{{ route('admin.partido.editResultado', $partido->id) }}"
                            @endslot
                            @slot('action')
                               hidden action=""
                            @endslot
                        @endcomponent
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">{{ __('view.No_hay_Datos') }}</td>
                </tr>
            @endforelse
            {{ $partidos->links('layouts._partials.pagination.bootstrap-5') }}
        @endslot
    @endcomponent
@endsection