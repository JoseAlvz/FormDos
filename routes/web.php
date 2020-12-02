<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/validar', 'PruebasController@validar' );
Route::get('/login', 'PruebasController@login' );
Route::post('/valida', 'PruebasController@validarlogin' );