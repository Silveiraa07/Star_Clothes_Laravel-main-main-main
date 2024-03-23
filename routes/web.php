<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.login');
})->name('login');

Route::get('/erro', function () {
    return view('pages.telaDeErro');
});

Route::get('/cadastro', function () {
    return view('pages.cadastro');
})->name('create');

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

Route::get('/listagem', [UserController::class, 'index'])->name('index');

Route::post('/cadastro', [UserController::class,'store'])->name('store');

Route::get('/produto/{id}', [UserController::class,'show'])->name('show');

Route::get('/edicao', [UserController::class,'edit'])->name('edit');

Route::get('/update/{id}', [UserController::class, 'update'])->name('update');

Route::get('/user/{id}/delete', [UserController::class, 'destroy'])->name('delete');