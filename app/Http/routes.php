<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    echo "hola mundo tic 73";
});

Route::get('/areatriangulo', function () {
    $base = 34;
    $altura = 40;
    $area = $base * $altura /2;
    echo "El area del triangulo es " . $area;
});
Route::get('/pago/{cant}/{costo}',
 function ($cant,$costo) {
     $pago = $cant * $costo;
    echo "El pago es de $pago";
});


Route::get('/altacliente','curso@altacliente');
Route::POST('/guardarcliente','curso@guardarcliente')->name('guardarcliente');























