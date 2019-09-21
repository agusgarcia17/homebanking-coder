<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagosController extends Controller
{
    public function index(){
        return view('pagos.index');
    }

    public function pago(Request $request){

        $servicio = $request->input('servicio');
        $referencia = $request->input('referencia');
        $importe = $request->input('importe');
       
        if($servicio != null && $referencia != null && $importe !=null){

            $attrs = [
            'servicio' => $servicio,
            'referencia' => $referencia,
            'importe' => $importe,
            ];

        return view('pagos.pago')->with($attrs);
        } 
        else {
      
            return view('pagos.pago')->with('error', 'Pago inválido, por favor realizar nuevamente');
        }
    }
}
