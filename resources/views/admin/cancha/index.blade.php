@extends('layouts.app')
@section('title', 'Canchas')

@section('content_body')

    @component('admin._components.table')
        @slot('title')
            {{ __('view.cancha') }}
            <a class="btn btn-primary" href="{{ route('admin.cancha.create') }}" role="button">{{ __('view.nuevo') }}</a>
        @endslot
        @slot('header')
            <th>#</th>
            <th>{{ __('view.nombre') }}</th>
            <th>{{ __('view.costo') . ' ' . __('view.hora') }}</th>
            <th>{{ __('view.acciones') }}</th>
        @endslot
        @slot('detail')
            @forelse ($canchas as $cancha)
                <tr>
                    <td>{{ $cancha->id }}</td>
                    <td>{{ $cancha->nombre }}</td>
                    <td>$ {{ $cancha->valor_hora }}</td>
                    <td class="d-flex">
                        @component('admin._components.btnTable')
                            @slot('href')
                                href="{{ route('admin.cancha.edit', $cancha->id) }}"
                            @endslot
                            @slot('action')
                                action="{{ route('admin.cancha.destroy', $cancha->id) }}" class="alerta"
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

