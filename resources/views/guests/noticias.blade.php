@extends('layouts.landing')
@section('title', 'Noticias')

@section('content')
    @forelse ($noticias as $noticia)
        <section class="container mt-3">
            <div class="card text-center">
                <div class="card-header text-bg-info">
                    {{ $noticia->titulo }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{ $noticia->descripcion }}
                    </p>
                </div>
                <div class="card-footer text-bg-primary">
                    {{ $noticia->fecha }}
                </div>
            </div>
        </section>
    @empty
        <div>
            <h5>{{ __('No hay noticias') }}</h5>
        </div>
    @endforelse
@endsection
