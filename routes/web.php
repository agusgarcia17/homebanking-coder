<?php

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

Route::get('/', 'IndexController@index');

Route::get('/index', 'IndexController@index');

Route::get('/balance', 'BalanceController@index');

Route::get('/inversiones', 'InversionesController@index');

Route::get('/pago-servicios', 'PagosController@index');

Route::post('/pago-servicios/pago', 'PagosController@pago')->name('pagado');
