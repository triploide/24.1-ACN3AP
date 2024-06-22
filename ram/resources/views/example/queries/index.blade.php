<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Queries</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Queries</h1>

                <div class="alert alert-info">
                    Documentación oficial en <a href="https://laravel.com/docs/11.x/queries"
                        target="_blank">Laravel.com</a>
                </div>

                <ol class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="/example/queries/where-eq">Where con igual</a>
                            </div>
                            <pre class="mb-0">Movie::where('columna', valor)->get();</pre>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="/example/queries/where-gt">Where con operador</a>
                            </div>
                            <p>(>, <,>=, <=, !=, like)</p>
                            <pre class="mb-0">Movie::where('columna', 'operador', valor)->get();</pre>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="/example/queries/where-and">Múltiples where con and</a>
                            </div>
                            <pre class="mb-0">Movie::where('columna', 'operador', valor)->andWhere('columna', 'operador', valor)->get();</pre>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="/example/queries/where-or">Múltiples where con or</a>
                            </div>
                            <pre class="mb-0">Movie::where('columna', 'operador', valor)->orWhere('columna', 'operador', valor)->get();</pre>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="/example/queries/where-in">Where in</a>
                            </div>
                            <pre class="mb-0">Movie::whereIn('columna', [valor1, valor2, etc])->get();</pre>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="/example/queries/where-like">Where con like</a>
                            </div>
                            <pre class="mb-0">Movie::where('columna', 'like', valor)->get();</pre>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="/example/queries/order-by">Order by</a>
                            </div>
                            <pre class="mb-0">Movie::orderBy('columna', 'dirección')->get();</pre>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="/example/queries/filter',">Ejemplo de filtro</a>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">
                                <a href="/example/queries/filter-2">Ejemplo de filtro 2</a>
                            </div>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </main>
</body>

</html>
