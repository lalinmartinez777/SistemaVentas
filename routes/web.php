<?php

use App\Http\Controllers\categoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template');
});

Route::resources([
    'categorias' => categoriaController::class,
    'productos' => ProductoController::class
   
]);

Route::view('/panel', 'panel.index')->name('panel');

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/401', function () {
    return view('pages.401');
});

Route::get('/404', function () {
    return view('pages.404');
});

Route::get('/500', function () {
    return view('pages.500');
});
