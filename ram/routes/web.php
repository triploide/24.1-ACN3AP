<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\Example\RequestController;
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
Route::get('example/request/form', [RequestController::class, 'form']);
Route::post('example/request/all', [RequestController::class, 'all']);
Route::post('example/request/input', [RequestController::class, 'input']);
Route::post('example/request/only', [RequestController::class, 'only']);
Route::post('example/request/except', [RequestController::class, 'except']);

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


// ---------------
// ----- RAM -----
// ---------------

Route::get('backoffice/movies', [MovieController::class, 'index']);
Route::get('backoffice/movies/create', [MovieController::class, 'create']);














Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
