<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/livros/create', [LivroController::class, 'create']);
    Route::get('/livros/edit/{id}', [LivroController::class, 'edit']);
    Route::post('/livros', [LivroController::class, 'store']);
    Route::post('/livros/{livro}', [LivroController::class, 'update']);
    Route::get('/livros/{id}', [LivroController::class, 'show']);
    Route::resource('livros', LivroController::class);
});
