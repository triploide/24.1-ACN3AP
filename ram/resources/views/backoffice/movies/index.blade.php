@extends('backoffice.layout.app')

@section('title', 'Listado de Películas')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/backoffice/movies">Películas</a></li>
@endsection

@section('content')
<form action="/backoffice/movies">
    <div class="form-group">
        <label for="search">Buscar</label>
        <input id="search" name="search" type="search">
    </div>
</form>
<table class="table table-striped table-borderd">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Título</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
            <tr>
                <td>
                    <img style="width: 80px" src="/storage/{{ $movie?->image?->src }}" alt="{{ $movie->title }}">
                </td>
                <td>
                    <a href="/backoffice/movies/{{ $movie->id }}">{{ $movie->title }}</a>
                </td>
                <td>
                    @if (session()->has('cart') && in_array($movie->id, session('cart')))
                        <a class="btn btn-danger" href="/backoffice/movies/remove/{{ $movie->id }}">
                            Quitar
                        </a>
                    @else
                        
                        <a class="btn btn-primary" href="/backoffice/movies/add/{{ $movie->id }}">
                            Agregar
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

