<!-- Selección de Torneo -->
<div class="col-sm-3">
    <form {{ $action }} method="GET" class="row g-2">
        @csrf
        <div class="col-auto">
            <select id="torneo_id" name="search" class="form-select">
                <option selected disabled>Seleccione el Torneo</option>
                {{ $select }}
            </select>
        </div>
        <div class="col-auto">
            <button class="btn btn-primary mb-3" type="submit">Buscar</button>
        </div>
    </form>
</div>