@extends('layouts.app')
@section('title', 'Equipos')

@section('content_body')
    @component('admin._components.table')
        @slot('title')
            {{ __('view.equipo') }}
            <a class="btn btn-primary" href="{{ route('admin.equipo.create') }}" role="button">{{ __('view.nuevo') }}</a>
            <a class="btn btn-primary ms-3" href="{{ route('equipo.export') }}" role="button">{{ __('view.exportar') }}</a>
        @endslot
        @slot('header')
            <th>#</th>
            <th>{{ __('view.escudo') }}</th>
            <th>{{ __('view.nombre') }}</th>
            <th>{{ __('view.torneo') }}</th>
            <th>{{ __('view.inscripcion') }}</th>
            <th>{{ __('view.estado') }}</th>
            <th>{{ __('view.acciones') }}</th>
        @endslot
        @slot('detail')
            @forelse ($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->id }}</td>
                    <td><img src="{{ asset('storage/images/' . $equipo->file_uri) }}" alt="Imagen Escudo"
                            style="width: 40px; height: 35px">
                    </td>
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->torneo->nombre }}</td>
                    <td>$ {{ $equipo->torneo->inscripcion }}</td>
                    <td>{{ $equipo->estado }}</td>
                    <td class="d-flex">
                        @component('admin._components.btnTable')
                            @slot('href')
                                href="{{ route('admin.equipo.edit', $equipo->id) }}"
                            @endslot
                            @slot('action')
                                action="{{ route('admin.equipo.destroy', $equipo->id) }}" class="alerta"
                            @endslot
                        @endcomponent
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">{{ __('view.No_hay_Datos') }}</td>
                </tr>
            @endforelse
            {{ $equipos->links('layouts._partials.pagination.bootstrap-5') }}
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