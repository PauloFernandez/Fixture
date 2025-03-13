@extends('layouts.app')
@section('title', 'Partidos')

@section('content_body')
    @component('admin._components.table')
        @slot('title')
        {{ __('view.partido') }}
            <a class="btn btn-primary" href="{{ route('admin.partido.create') }}" role="button">{{ __('view.nuevo') }}</a>
        @endslot
        @slot('header')
            <th>{{ __('view.fecha') }}</th>
            <th>{{ __('view.hora') }}</th>
            <th>{{ __('view.cancha') }}</th>
            <th>{{ __('view.arbitros') }}</th>
            <th>{{ __('view.equipoL') }}</th>
            <th>{{ __('view.equipoV') }}</th>
            <th>{{ __('view.acciones') }}</th>
        @endslot
        @slot('detail')
            @forelse ($partidos as $partido)
                <tr>
                    <td>{{ $partido->fecha }}</td>
                    <td>{{ $partido->hora }}</td>
                    <td>{{ $partido->cancha->nombre }}</td>
                    <td>{{ $partido->arbitro->nombre }}</td>
                    @foreach ($partido->equipos as $equipo)
                        <td id="{{ $equipo->id }}">{{ $equipo->nombre }}</td>
                    @endforeach

                    <td class="d-flex">
                        @component('admin._components.btnTable')
                            @slot('href')
                                href="{{ route('admin.partido.edit', $partido->id) }}"
                            @endslot
                            @slot('action')
                                action="{{ route('admin.partido.destroy', $partido->id) }}" class="alerta"
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
