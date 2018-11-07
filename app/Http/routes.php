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
route::get('/eliminaempleado/{id_empleado}','controlador_empleados@eliminaempleado')->name('eliminaempleado');
Route::get('/modificaempleado/{id_empleado}','controlador_empleados@modificaempleado')->name('modificaempleado');
Route::POST('/guardaedicionempleado','controlador_empleados@guardaedicionempleado')->name('guardaedicionempleado');


Route::get('/altatipodeproductos','controlador_tipodeproductos@altatipodeproductos')->name('altatipodeproductos');;
Route::POST('/guardatipodeproducto','controlador_tipodeproductos@guardatipodeproducto')->name('guardatipodeproducto');
Route::get('/reportetipodeproductos','controlador_tipodeproductos@reportetipodeproductos');
Route::get('/modificatipodeproducto/{id_tipodeproducto}','controlador_tipodeproductos@modificatipodeproducto')->name('modificatipodeproducto');
Route::POST('/guardaediciontipodeproducto','controlador_tipodeproductos@guardaediciontipodeproducto')->name('guardaediciontipodeproducto');
route::get('/eliminatipodeproducto/{id_tipodeproducto}','controlador_tipodeproductos@eliminatipodeproducto')->name('eliminatipodeproducto');



Route::get('/altacliente','controlador_clientes@altacliente')->name('altacliente');;
Route::POST('/guardacliente','controlador_clientes@guardacliente')->name('guardacliente');
Route::get('/reporteclientes','controlador_clientes@reportecliente');
Route::get('/modificacliente/{id_cliente}','controlador_clientes@modificacliente')->name('modificacliente');
route::get('/eliminacliente/{id_cliente}','controlador_clientes@eliminacliente')->name('eliminacliente');
Route::POST('/guardaedicioncliente','controlador_clientes@guardaedicioncliente')->name('guardaedicioncliente');
Route::POST('/guardaedicioncliente','controlador_clientes@guardaedicioncliente')->name('guardaedicioncliente');




Route::get('/altamesa','c_mesas@altamesa');
Route::POST('/guardamesa','c_mesas@guardamesa')->name('guardamesa');
Route::get('/reportemesa','c_mesas@reportemesa');
Route::get('/eliminamesa/{id_mesa}','c_mesas@eliminamesa')->name('eliminamesa');
Route::get('/modificam/{idm}','c_mesas@modificam')->name('modificam');
Route::POST('/guardaedicionm','c_mesas@guardaedicionm')->name('guardaedicionm');


Route::get('/altazona','zona@altazona');
Route::POST('/guardazona','zona@guardazona')->name('guardazona');
Route::get('/reportezona','zona@reportezona');
Route::get('/eliminazona/{id_zona}','zona@eliminazona')->name('eliminazona');
Route::get('/modificazona/{id_zona}','zona@modificazona')->name('modificazona');
Route::POST('/guardaedicionzona','zona@guardaedicionzona')->name('guardaedicionm');



route::get('/altausuarios','c_usuarios@altausuarios');
route::POST('/guardausuarios','c_usuarios@guardausuarios')->name('guardausuarios');
route::get('/reporteusuarios','c_usuarios@reporteusuarios');
route::get('/eliminausuarios/{id_usuario}','c_usuarios@eliminausuarios')->name('eliminausuarios');
route::get('/modificausuarios/{id_usuario}','c_usuarios@modificausuarios')->name('modificausuarios');
Route::POST('/guardaedicionusuario','c_usuarios@guardaedicionusuario')->name('guardaedicionusuario');


route::get('/altaproductos','c_productos@altaproductos');
route::POST('/guardaproductos','c_productos@guardaproductos')->name('guardaproductos');
route::get('/reporteproductos','c_productos@reporteproductos');
route::get('/eliminaproductos/{id_producto}','c_productos@eliminaproductos')->name('eliminaproductos');
route::get('/modificaproductos/{id_producto}','c_productos@modificaproductos')->name('modificaproductos');
Route::POST('/guardaedicionusuario','c_usuarios@guardaedicionusuario')->name('guardaedicionusuario');


	   Route::get('/principal','controlador_clientes@principal');
	   Route::get('/principal','controlador_tipodeproductos@principal');
	   Route::get('/principal','controlador_empleados@principal');
	   Route::get('/principal','c_productos@principal');
	   Route::get('/principal','c_usuarios@principal');
	   Route::get('/principal','zona@principal');
	   Route::get('/principal','curso@principal');

