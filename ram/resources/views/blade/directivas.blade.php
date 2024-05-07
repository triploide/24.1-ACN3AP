<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directivas</title>
</head>
<body>

    @include('blade.partials.nav')

    <h1>Directivas</h1>

    @if (count($peliculas) == 1)
        <h2>Hay {{ count($peliculas) }} película</h2>
    @elseif(count($peliculas) > 0)
        <h2>Hay {{ count($peliculas) }} películas</h2>
    @else
        <h2>No hay películas para mostrar.</h2>
    @endif

    @foreach ($peliculas as $pelicula)
        <h3>{{ $pelicula->title }}</h3>
    @endforeach

    <ol>
        @for ($i = 1; $i <= 3; $i++)
            <li><a href="peliculas/pagina/{{ $i }}">{{ $i }}</a></li>
        @endfor
    </ol>

    @forelse ($peliculas as $pelicula)
        <h3>{{ $pelicula->title }}</h3>
    @empty
        <h2>No hay películas para mostrar.</h2>
    @endforelse

    @include('blade.partials.footer')


</body>
</html>
