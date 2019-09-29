<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balance;
use App\Servicio;

class PagosController extends Controller
{
    public function index(){
        $servicios = Servicio::all();

        // dd($servicios);
        return view('pagos.index')->with('servicios', $servicios);
    }

    public function pago(Request $request){

        $pago = new Balance();

        $pago->fecha = $request->input('fecha');
        $pago->desc = $request->input('desc');
        $pago->importe = $request->input('importe');
       
        $pago->save();

        return view('pagos.pago')->with('pago', $pago);
        
    
        // else {
      
        //     return view('pagos.pago')->with('error', 'Pago inválido, por favor realizar nuevamente');
        // }
    }
}
