@extends('layouts.app')
@section('title', 'Noticias')

@section('content_body')
    @component('admin._components.table')
        @slot('title')
            {{ __('view.noticias') }}
            <a class="btn btn-primary ms-3" href="{{ route('admin.noticia.create') }}" role="button">{{ __('view.nuevo') }}</a>
            <a class="btn btn-primary ms-3" href="{{ route('noticia.export') }}" role="button">{{ __('view.exportar') }}</a>
            <!-- formulario para importar el archivo csv -->
            <form action="{{ route('noticia.import') }}" method="POST" enctype="multipart/form-data" class="row g-3 mt-2">
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
            <th>{{ __('view.fecha') }}</th>
            <th>{{ __('view.titulo') }}</th>
            <th>{{ __('view.descripcion') }}</th>
            <th>{{ __('view.acciones') }}</th>
        @endslot
        @slot('detail')
            @forelse ($noticias as $noticia)
                <tr>
                    <td>{{ $noticia->fecha }}</td>
                    <td>{{ $noticia->titulo }}</td>
                    <td>{{ $noticia->descripcion }}</td>
                    <td class="d-flex">
                        @component('admin._components.btnTable')
                            @slot('href')
                                href="{{ route('admin.noticia.edit', $noticia->id) }}"
                            @endslot
                            @slot('action')
                                action="{{ route('admin.noticia.destroy', $noticia->id) }}" class="alerta"
                            @endslot
                        @endcomponent
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">{{ __('view.No_hay_Datos') }}</td>
                </tr>
            @endforelse
            {{ $noticias->links('layouts._partials.pagination.bootstrap-5') }}
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
