<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('servicios')->truncate();
        
        DB::table('servicios')->insert([
            'nameService' => 'Tarjeta Visa',
           ]);
    }
}
