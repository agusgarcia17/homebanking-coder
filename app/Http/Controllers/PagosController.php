<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Balance;

class PagosController extends Controller
{
    public function index(){
        $servicios = Servicio::all();
        return view('pagos.index')->with('servicios', $servicios);
    }

    public function create(){
        return view('pagos.create');
    }

    public function store(Request $request){
        $servicio = new Servicio();

        $servicio->nameService = $request->input('nameService');
        // $servicio->numbRef = $request->input('numbRef');

        $servicio->save();

        return redirect()->route('pago-servicios.index'); 
    }

    public function pay(Request $request){
        $nameService = $request->input('desc');
        $monto = $request->get('importe');
        $balance = Balance::all();
        $salary = 0;

         foreach($balance as $item){
            $salary += $item->importe;
        }

        if($salary >= 0){
        
            $pago = new Balance();
            $pago->fecha = date('Y-m-d');
            $pago->desc = "Pago de servicio: " . $nameService;
            $pago->importe = -$monto;
            // $pago->importe = $request->input('importe');
        
            $pago->save();

            return view('pagos.pago')->with('pago', $pago);
        } else {
            $error = 'Sos pobre';
            return view('pagos.pago')->with('error', $error);
        }

    }
}
