<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\BladeController;

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


// ---------------
// ----- RAM -----
// ---------------

Route::get('backoffice/movies', [MovieController::class, 'index']);















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
