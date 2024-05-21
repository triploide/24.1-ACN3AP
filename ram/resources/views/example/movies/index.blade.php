<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
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
                                    <img style="width: 50px" src="{{ $movie->image }}" alt="{{ $movie->title }}">
                                </td>
                                <td>{{ $movie->title }}</td>
                                <td>
                                    <a href="/example/movies/{{ $movie->id }}/edit">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
