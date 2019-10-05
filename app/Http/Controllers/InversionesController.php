<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inversion;
use App\Balance;

class InversionesController extends Controller
{
    public function index(){
        $investments = Inversion::all();

        $salary =$this->getSalary(0);

        foreach ($investments as $inv) {
            $operation=rand(1,3);

            if($operation == 1){
                $inv->valor =$inv->valor / 2;
            } else {
                $inv->valor =$inv->valor * 2;
            }
            $inv->save();
        }

        return view('inversiones.index')->with(['investments' => $investments , 'salary' => $salary]);
    }

    public function getSalary($money){
        $balance = Balance::all();
        $salary = 0;

        foreach($balance as $item){
            $salary += $item->importe;
        }

        $salary -= $money;

        return $salary;
    }

        public function buy($id){
            $inv = Inversion::find($id);
    
            if($inv->acciones > 0){
                $salary = $this->getSalary(0);
    
                if($salary >= $inv->valor){
                    $inv->acciones -= 1;
                    $inv->save();
    
                    $balance = new Balance();
    
                    $balance->fecha = date('Y-m-d');
                    $balance->desc = "Compra de Accion: " . $inv->empresa;
                    $balance->importe = $inv->valor * -1;
                    $balance->save();
    
                    dd("Se compro una accion de la empresa " . $inv->empresa);
                } else {
                    dd("No tienes suficiente dinero en la cuenta!");
                }      
            } else {
                dd("No hay acciones para comprar!");
            }
        }
        
        public function sell($id){
            $inv = Inversion::find($id);
    
            if($inv->acciones > 0){
                if($inv->acciones >= $inv->total){
                    dd("No tenes acciones compradas!");
                }
    
                $salary = $this->getSalary($inv->valor);
    
                if($salary >= 0){
                    $inv->acciones += 1;
                    $inv->save();
    
                    $balance = new Balance();
    
                    $balance->fecha = date('Y-m-d');
                    $balance->desc = "Venta de Accion: " . $inv->empresa;
                    $balance->importe = $inv->valor;
                    $balance->save();
    
                    dd("Se vendio una accion de la empresa " . $inv->empresa);
                } else {
                    dd("No tienes suficiente dinero en la cuenta!");
                }
                
            } else {
                dd("No hay acciones para vender!");
            }
        }
}
