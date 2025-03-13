@extends('layouts.app')
@section('title', 'Tarjetas')

@section('content_body')
 
    @component('admin._components.table')
        @slot('title')
        {{ __('view.tarjeta') }}
            <a class="btn btn-primary" href="{{ route('admin.tarjeta.create') }}" role="button">{{ __('view.nuevo') }}</a>
        @endslot
        @slot('header')
            <th>#</th>
            <th>{{ __('view.nombre') }}</th>
            <th>{{ __('view.multa') }}</th>
            <th>{{ __('view.acciones') }}</th>
        @endslot
        @slot('detail')
            @forelse ($tarjetas as $tarjeta)
                <tr>
                    <td>{{ $tarjeta->id }}</td>
                    <td>{{ $tarjeta->nombre }}</td>
                    <td>$ {{ $tarjeta->multa }}</td>
                    <td class="d-flex">
                        @component('admin._components.btnTable')
                            @slot('href')
                                href="{{ route('admin.tarjeta.edit', $tarjeta->id) }}"
                            @endslot
                            @slot('action')
                                action="{{ route('admin.tarjeta.destroy', $tarjeta->id) }}" class="alerta"
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
