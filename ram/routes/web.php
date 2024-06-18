<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\Example\RequestController;
use App\Http\Controllers\Example\QueryController;
use App\Http\Controllers\Example\MovieController as ExampleMovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('models/all', [ModelController::class, 'ejemplo']);

Route::get('blade/directivas', [BladeController::class, 'directivas']);

// -------------------
// ----- EXAMPLE -----
// -------------------

// ----- Request ------
Route::get('example/request/form', [RequestController::class, 'form']);
Route::post('example/request/all', [RequestController::class, 'all']);
Route::post('example/request/input', [RequestController::class, 'input']);
Route::post('example/request/only', [RequestController::class, 'only']);
Route::post('example/request/except', [RequestController::class, 'except']);

// ----- Persistencia de datos ------
// listado
Route::get('example/movies', [ExampleMovieController::class, 'index']);

// form de creación
Route::get('example/movies/create', [ExampleMovieController::class, 'create']);

// método que crea
Route::post('example/movies', [ExampleMovieController::class, 'store']);

// form de edición
Route::get('example/movies/{id}/edit', [ExampleMovieController::class, 'edit']);

// método que edita
Route::post('example/movies/{id}', [ExampleMovieController::class, 'update']);

// ---- Queries -----
Route::get('example/queries/where-complejo', [QueryController::class, 'whereComplejo']);
Route::get('example/queries/where-simple', [QueryController::class, 'whereSimple']);
Route::get('example/queries/where-and', [QueryController::class, 'whereAnd']);
Route::get('example/queries/where-or', [QueryController::class, 'whereOr']);
Route::get('example/queries/where-in', [QueryController::class, 'whereIn']);
Route::get('example/queries/where-like', [QueryController::class, 'whereLike']);
Route::get('example/queries/order-by', [QueryController::class, 'orderBy']);
Route::get('example/queries/filter', [QueryController::class, 'filter']);
Route::get('example/queries/filter-2', [QueryController::class, 'filter2']);


// ---------------
// ----- RAM -----
// ---------------
Route::get('backoffice/movies', [MovieController::class, 'index']);
Route::get('backoffice/movies/create', [MovieController::class, 'create']);
Route::get('backoffice/movies/add/{id}', [MovieController::class, 'add']);
Route::get('backoffice/movies/remove/{id}', [MovieController::class, 'remove']);
Route::get('backoffice/checkout', [MovieController::class, 'checkout']);
Route::get('backoffice/movies/{id}', [MovieController::class, 'show']);
Route::post('backoffice/movies', [MovieController::class, 'store']);















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
