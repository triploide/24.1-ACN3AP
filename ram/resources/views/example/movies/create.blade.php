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
                <form method="POST" action="/example/movies">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="title">Título</label>
                        <input id="title" name="title" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="description">Descripción</label>
                        <textarea id="description" name="description" type="text" class="form-control"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="released_date">Fecha de estreno</label>
                        <input id="released_date" name="released_date" type="date" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="image">Imagen</label>
                        <input id="image" name="image" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="genre_id">Género</label>
                        <select class="form-control" name="genre_id" id="genre_id">
                            <option value="1">Acción</option>
                            <option value="2">Comedia</option>
                            <option value="3">Ciencia Ficción</option>
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
