<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('pages.login');
});

Route::get('/erro', function () {
    return view('pages.telaDeErro');
});

Route::get('/cadastro', function () {
    return view('pages.cadastro');
});

Route::get('/inicio', function () {
    return view('pages.telaDeInicio');
})->middleware('auth');

Route::get('/produto1', function () {
    return view('pages.produto');
});

Route::get('/produto2', function () {
    return view('pages.produtobone');
});

Route::get('/contatos', function () {
    return view('pages.contatos');
});
