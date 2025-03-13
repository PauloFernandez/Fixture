@extends('layouts.app')
@section('title', 'Arbitros')

@section('content_body')
    @component('admin._components.table')
        @slot('title')
            {{ __('view.arbitros') }}
            <a class="btn btn-primary" href="{{ route('admin.arbitro.create') }}" role="button">{{ __('view.nuevo') }}</a>
        @endslot
        @slot('header')
            <th>#</th>
            <th>{{ __('view.nombre') }}</th>
            <th>{{ __('view.apellido') }}</th>
            <th>{{ __('view.fecha') . ' ' . __('view.nacimiento') }}</th>
            <th>{{ __('view.direccion') }}</th>
            <th>{{ __('view.tel_cel') }}</th>
            <th>{{ __('view.mail') }}</th>
            <th>{{ __('view.acciones') }}</th>
        @endslot
        @slot('detail')
            @forelse ($arbitros as $arbitro)
                <tr>
                    <td>{{ $arbitro->id }}</td>
                    <td>{{ $arbitro->nombre }}</td>
                    <td>{{ $arbitro->apellido }}</td>
                    <td>{{ $arbitro->fecha_nac }}</td>
                    <td>{{ $arbitro->direccion }}</td>
                    <td>{{ $arbitro->telefono }}</td>
                    <td>{{ $arbitro->email }}</td>
                    <td class="d-flex">
                        @component('admin._components.btnTable')
                            @slot('href')
                                href="{{ route('admin.arbitro.edit', $arbitro->id) }}"
                            @endslot
                            @slot('action')
                                action="{{ route('admin.arbitro.destroy', $arbitro->id) }}" class="alerta"
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
