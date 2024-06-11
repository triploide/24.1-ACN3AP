@extends('backoffice.layout.app')

@section('title', 'Listado de Películas')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/backoffice/movies">Películas</a></li>
@endsection

@section('content')
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
                <td>---</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

