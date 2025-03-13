@extends('layouts.app')
@section('title', 'Liquidación Arbitros')

@section('content_body')
    @component('admin._components.table')
        @slot('title')
            {{  __('view.liquidacion') . ' ' . __('view.arbitros') }}
        @endslot
        @slot('header')
            <th>{{ __('view.nombre') }}</th>
            <th>{{ __('view.apellido') }}</th>
            <th>{{ __('view.fecha') }}</th>
            <th>{{  __('view.hora') . ' ' . __('view.partido') }}</th>
            <th>{{ __('view.importe') }}</th>
            <th>{{  __('view.pago') . ' ' . __('view.arbitros') }}</th>
            <th>{{ __('view.acciones') }}</th>
        @endslot
        @slot('detail')
            @forelse ($partidos as $partido)
                <tr>
                    <td>{{ $partido->arbitro->nombre }}</td>
                    <td>{{ $partido->arbitro->apellido }}</td>
                    <td>{{ $partido->fecha }}</td>
                    <td>{{ $partido->hora }}</td>
                    <td>$ {{ $partido->importe }}</td>
                    <td>{{ $partido->estado }}</td>
                    <td >
                        @component('admin._components.btnTable')
                            @slot('href')
                                href="{{ route('admin.arbitro.editCtaArbitro', $partido->id) }}"
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