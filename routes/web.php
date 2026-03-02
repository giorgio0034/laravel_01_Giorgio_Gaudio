<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/Pagina1', function () {
    return view('Pagina1');
});

Route::get('/Pagina2', function () {
    return view('Pagina2');
});



