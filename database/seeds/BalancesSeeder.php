<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BalancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('balances')->truncate();

        DB::table('balances')->insert([
            'fecha' => date('Y-m-d'),
            'desc' => 'Salario',
            'importe' => 30000,
        ]);
    }
}
