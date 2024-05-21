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
                <form method="POST" action="/example/movies/{{ $movie->id }}">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="title">Título</label>
                        <input id="title" name="title" value="{{ $movie->title }}" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="description">Descripción</label>
                        <textarea id="description" name="description" type="text" class="form-control">{{ $movie->description }}</textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="released_date">Fecha de estreno</label>
                        <input id="released_date" name="released_date" value="{{ $movie->released_date }}" type="date" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="image">Imagen</label>
                        <input id="image" name="image" value="{{ $movie->image }}" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="genre_id">Género</label>
                        <select class="form-control" name="genre_id" id="genre_id">
                            <option @selected($movie->genre_id == 1) value="1">Acción</option>
                            <option @selected($movie->genre_id == 2) value="2">Comedia</option>
                            <option @selected($movie->genre_id == 3) value="3">Ciencia Ficción</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary" name="submit" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
