@extends('layouts.app')
@section('title', 'Tornoes')

@section('content_body')
    @component('admin._components.table')
        @slot('title')
        {{ __('view.torneo') }}
            <a class="btn btn-primary" href="{{ route('admin.torneo.create') }}" role="button">{{ __('view.nuevo') }}</a>
        @endslot
        @slot('header')
            <th>{{ __('view.nombre') }}</th>
            <th>{{ __('view.inscripcion') }}</th>
            <th>$ {{ __('view.cancha') }} X {{ __('view.partido') }}</th>
            <th>{{ __('view.acciones') }}</th>
        @endslot
        @slot('detail')
            @forelse ($torneos as $torneo)
                <tr>
                    <td><a href="{{ route('admin.torneo.show', $torneo->id) }}">{{ $torneo->nombre }}</a></td>
                    <td>$ {{ $torneo->inscripcion }}</td>
                    <td>$ {{ $torneo->valor_cancha}}</td>
                    <td class="d-flex">
                        @component('admin._components.btnTable')
                            @slot('href')
                                href="{{ route('admin.torneo.edit', $torneo->id) }}"
                            @endslot
                            @slot('action')
                                action="{{ route('admin.torneo.destroy', $torneo->id) }}" class="alerta"
                            @endslot
                        @endcomponent
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">{{ __('view.No_hay_Datos') }}</td>
                </tr>
            @endforelse
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
