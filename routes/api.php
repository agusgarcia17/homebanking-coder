<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/servicios', function () {
    $serviciosList = [
        [
            'servicio'=> 'Gas',
            'monto' => 200,
        ],
        [
            'servicio'=> 'Luz',
            'monto' => 350
        ],
        [
            'servicio'=> 'Internet',
            'monto' => 3500
        ],
        [
            'servicio'=> 'Agua',
            'monto' => 250
        ]
    ];

    $res = [
        'status' => 'ok',
        'code' => 1000,
        'data' => $serviciosList
    ];

    return response()->json($res);
});


Route::post('servicios', function () {
    $detalle = [
            'servicio'=> 'Agua',
            'monto' => 250  
    ];

    $servicio =[
        "status" => 'ok',
        "code" => 1002,
        "data" => $detalle 
    ];

    return response() -> json($servicio);
});


Route::delete('/servicios', function () {
    $servicio =[
        "status" => 'ok',
        "code" => 1004,
        "data" => 'Se elimina servicio',
    ];

    return response() -> json($servicio);
});

