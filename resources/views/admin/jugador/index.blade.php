@extends('layouts.app')
@section('title', 'Jugadores')

@section('content_body')
    @component('admin._components.table')
        @slot('title')
            {{ __('view.jugador') }}
            <a class="btn btn-primary" href="{{ route('admin.jugador.create') }}" role="button">{{ __('view.nuevo') }}</a>
            <a class="btn btn-primary ms-3" href="{{ route('jugador.export') }}" role="button">{{ __('view.exportar') }}</a>
            <!-- formulario para importar el archivo csv -->
            <form action="{{ route('jugador.import') }}" method="POST" enctype="multipart/form-data" class="row g-3 mt-2">
                @csrf
                <div class="col-auto">
                    <input type="file" name="document_csv" placeholder="File" class="form-control">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">{{ __('view.importar') }}</button>
                </div>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    @endforeach
                </div>
            @endif
        @endslot
        @slot('header')
            <th>#</th>
            <th>{{ __('view.foto') }}</th>
            <th>{{ __('view.nombre') }}</th>
            <th>{{ __('view.apellido') }}</th>
            <th>{{ __('view.posicion') }}</th>
            <th>{{ __('view.camiseta') }}</th>
            <th>{{ __('view.equipo') }}</th>
            <th>{{ __('view.acciones') }}</th>
        @endslot
        @slot('detail')
            @forelse ($jugadores as $jugador)
                <tr>
                    <td>{{ $jugador->id }}</td>
                    <td><img src="{{ asset('storage/images/' . $jugador->file_uri) }}" alt="Imagen Foto"
                            style="width: 40px; height: 35px">
                    </td>
                    <td><a href="{{ route('admin.jugador.show', $jugador->id) }}">{{ $jugador->nombre }}</a></td>
                    <td>{{ $jugador->apellido }}</td>
                    <td>{{ $jugador->posicion }}</td>
                    <td>{{ $jugador->num_camiseta }}</td>
                    <td>{{ $jugador->equipo->nombre }}</td>
                    <td class="d-flex">
                        @component('admin._components.btnTable')
                            @slot('href')
                                href="{{ route('admin.jugador.edit', $jugador->id) }}"
                            @endslot
                            @slot('action')
                                action="{{ route('admin.jugador.destroy', $jugador->id) }}" class="alerta"
                            @endslot
                        @endcomponent
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">{{ __('view.No_hay_Datos') }}</td>
                </tr>
            @endforelse
            {{ $jugadores->links('layouts._partials.pagination.bootstrap-5') }}
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
