@extends('layouts.app')
@section('title', 'Estado Cuenta de Equipos')

@section('content_body')
    @component('admin._components.table')
        @slot('title')
            {{ __('view.est_cta_equipos') }}
        @endslot
        @slot('header')
            <th>{{ __('view.nombre') }}</th>
            <th>{{ __('view.fecha') . ' ' . __('view.partido')}}</th>
            <th>{{ __('view.hora') . ' ' . __('view.partido')}}</th>
            <th>{{ __('view.torneo') }}</th>
            <th>$ {{ __('view.cancha') }}</th>
            <th>{{ __('view.estado') }}</th>
            <th>{{ __('view.acciones') }}</th>
        @endslot
        @slot('detail')
            @forelse ($equipos as $equipo)
                @foreach ($equipo->partidos as $partido)
                    <tr>
                        <td>{{ $equipo->nombre }}</td>
                        <td>{{ $partido->fecha }}</td>
                        <td>{{ $partido->hora }}</td>
                        <td>{{ $equipo->torneo->nombre }}</td>
                        <td>$ {{ $equipo->torneo->valor_cancha }}</td>
                        <td>{{ $partido->pivot->estado }}</td>
                        <td>
                            <button id="edit-button" class="btn btn-outline-success" data-partido-id="{{ $partido->id }}" data-equipo-id="{{ $equipo->id }}">
                                <i class="fa-solid fa-pen"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            @empty
                <tr>
                    <td colspan="6">{{ __('view.No_hay_Datos') }}</td>
                </tr>
            @endforelse
            {{ $equipos->links('layouts._partials.pagination.bootstrap-5') }}
        @endslot
    @endcomponent
@endsection

@push('js')
<script>
    //Script JavaScript: escucha los clics en los botones "Editar" y redirige a la URL construida con los parámetros necesarios.
    document.querySelectorAll('#edit-button').forEach(button => {
        button.addEventListener('click', function() {
            const partidoId = this.getAttribute('data-partido-id');
            const equipoId = this.getAttribute('data-equipo-id');

            const url = "{{ route('admin.equipo.editCtaEquipo', ':equipoId') }}".replace(':equipoId', equipoId);

            // Redirigir a la página de edición pasando los parámetros
            window.location.href = `${url}?partido_id=${partidoId}`;
        });
    });
</script>
@endpush
