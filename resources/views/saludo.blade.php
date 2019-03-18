@extends('layout ')

@section('maincontent')
    <h1>Saludos para {{ $nombre  }}</h1>
    <ul>
        @forelse($consolas as $consola)
            <li>
                {{ $consola }}
            </li>
        @empty

            <div class="alert alert-danger" role="alert">
                No existen consolas :(
            </div>

        @endforelse
    </ul>
@stop