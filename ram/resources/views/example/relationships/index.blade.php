<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relationships</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Relationships</h1>

                <p>
                    Cuando la foreign key está en mi tabla la relación es BelongsTo.<br>
                    Cuando la foreign key está en la otra tabla la relación es HasOne o HasMany.<br>
                    Cuando hay un tabla pivot la relación en belongsToMany para ambas partes.
                </p>

                <div class="alert alert-info">
                    Documentación oficial en <a href="https://laravel.com/docs/11.x/eloquent-relationships"
                        target="_blank">Laravel.com</a>
                </div>

                <ol class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="/example/relationships/belongs-to">Belongs To</a>
                            </div>
                            <p>Una película pertenece a un género.</p>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="/example/relationships/has-one">Has One</a>
                            </div>
                            <p>Una imagen tiene un película asociada.</p>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="/example/relationships/has-many">Has Many</a>
                            </div>
                            <p>Un género tiene muchas películas.</p>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="/example/relationships/belongs-to-many">Belongs To Many</a>
                            </div>
                            <p>Una película tiene una relación de N a N con tag.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </main>
</body>

</html>
