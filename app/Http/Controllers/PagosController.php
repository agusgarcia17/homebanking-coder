<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagosController extends Controller
{
    public function index(){
        return view('pagos.index');
    }

    public function pago(){
        return view('pagos.pago');
    }
}
