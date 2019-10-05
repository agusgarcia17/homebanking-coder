<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Balance;

class BalanceController extends Controller
{
    public function index(){
        $balances = Balance::orderBy('id', 'DESC')->get();

        $salary = 0;

        foreach ($balances as $item) {
            $salary += $item->importe;
        }

        return view('balance.index')->with([
            'balances' => $balances,
            'salary' => $salary
        ]);
    }

    
}
