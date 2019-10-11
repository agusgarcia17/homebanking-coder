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

Route::resource('/pago-servicios', 'PagosController');

Route::post('/pago-servicios/pago', 'PagosController@pay')->name('pagado');

Route::resource('/inversiones/invest', 'InversionesController');

Route::post('/pago-servicios/store', 'PagosController@store');

Route::get('/inversiones/buy/{id}', 'InversionesController@buy')->name('investment.buy');

Route::get('/inversiones/sell/{id}', 'InversionesController@sell')->name('investment.sell');