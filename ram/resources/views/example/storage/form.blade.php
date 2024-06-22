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
                <h1>Storage</h1>
                <form method="POST" action="/example/storage/upload/{{ $movie->id }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="image">Imagen</label>
                        <input id="image" name="image" type="file" class="form-control">
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
