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
Route::get('/altaempleado','controlador_empleados@altaempleado')->name('altaempleado');;
Route::POST('/guardaempleado','controlador_empleados@guardaempleado')->name('guardaempleado');
Route::get('/reporteempleado','controlador_empleados@reporteempleado');
Route::get('/modificaempleado/{id_empleado}','controlador_empleados@modificaempleado')->name('modificaempleado');
Route::POST('/guardaedicionempleado','controlador_empleados@guardaedicionempleado')->name('guardaedicionempleado');

Route::get('/altatipodeproductos','controlador_tipodeproductos@altatipodeproductos')->name('altatipodeproductos');;
Route::POST('/guardatipodeproducto','controlador_tipodeproductos@guardatipodeproducto')->name('guardatipodeproducto');
Route::get('/reportetipodeproductos','controlador_tipodeproductos@reportetipodeproductos');
Route::get('/modificatipodeproducto/{id_tipodeproducto}','controlador_tipodeproductos@modificatipodeproducto')->name('modificatipodeproducto');
Route::POST('/guardaediciontipodeproducto','controlador_tipodeproductos@guardaediciontipodeproducto')->name('guardaediciontipodeproducto');
