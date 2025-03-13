<ul class="navbar-nav justify-content-end">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
            {{ __('view.idioma') }}
        </a>
        <ul class="dropdown-menu">
            <!-- Recorremos el archivo "config.languages" de configuracion donde definimos nuestros lenguajes -->
            @foreach (Config::get('languages') as $lang => $language)
            <!-- Si el lenguaje esta sellecionado no lo mostramos -->
                @if ($lang != App::getLocale())
            <!-- enviamos el lenguaje seleccionado a la ruta de nuestro contolador -->
                    <li><a class="dropdown-item" href="{{ route('lang', $lang) }}">{{ $language }}</a></li>                           
                @endif
            @endforeach
        </ul>
    </li>
</ul>

