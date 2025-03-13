@extends('layouts.landing')
@section('title', 'Estadística Equipo')

@section('content')
    <div class="container mt-4">
        <div class="mb-3 row">
            <samp class="fs-2 text-white col-sm-4 ">Nombre equipo</samp>
            <div class="col-sm-4">
                <form action="{{ url()->current() }}" method="GET" class="row g-3">
                    @csrf
                    <div class="col-auto">
                        <select id="equipo_id" name="filtro" class="form-select">
                            <option selected disabled>Seleccione el Equipo</option>
                            @foreach ($equipos as $equipo)
                                <option value="{{ $equipo->id }}"
                                    {{ request('filtro') == $equipo->id ? 'selected' : '' }}>
                                    {{ $equipo->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary mb-3" type="submit">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @component('guests._components.table')
        @slot('title')
            {{ 'Estadísticas Equipo' }}
        @endslot
        @slot('header')
            <th>POS</th>
            <th>Nombre Jugador</th>
            <th>PJ</th>
            <th>GM</th>
            <th>ASI</th>
            <th>T.A</th>
            <th>T.R</th>
        @endslot
        @slot('detail')
            @foreach ($datos as $dato)
                <tr>
                    <td>{{ $dato->posicion }}</td>
                    <td>{{ $dato->nombre }} <b>{{ $dato->apellido }}</b></td>
                    <td>{{ $dato->partidos_count }}</td>
                    <td>{{ $dato->goles }}</td>
                    <td>{{ $dato->asistencias }}</td>
                    <td>{{ $dato->amarillas }}</td>
                    <td>{{ $dato->rojas }}</td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection

<!-- 
Errores
1. el select que tienes para el select del formulario debería tener los valores del equipo correctamente asignados. 
Actualmente tienes un valor vacío en el option, lo que no va a funcionar correctamente para la búsqueda.

Te sugiero que modifiques la parte del formulario para incluir los valores correctos del id del equipo para que la búsqueda 
se haga correctamente al seleccionar un equipo. Además, asegúrate de que la función when en la consulta realmente busque el 
equipo por su id, ya que el filtro debe ser sobre el id y no sobre el nombre.

En este código, estamos utilizando el id del equipo como valor de cada opción (value=" { $ equipo -> id }} ") y mostrando el nombre 
del equipo como texto visible en la opción ({ $equipo->nombre }}). Esto permitirá que el filtro funcione correctamente.

Explicación:
    En el formulario, se selecciona el id del equipo, que es lo que se envía como parámetro de búsqueda cuando el usuario envía el formulario.
    En la consulta, la función where('equipos.id', request('filtro')) filtra los resultados de acuerdo con el id del equipo seleccionado.
    También he agregado la variable $equipos a la vista para que puedas cargar correctamente el select de equipos.
-->