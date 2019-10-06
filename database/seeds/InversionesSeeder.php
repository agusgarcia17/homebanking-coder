<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InversionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inversiones')->truncate();
        
        DB::table('inversiones')->insert([
            'empresa' => 'Microsoft',
            'acciones' => 100,
            'valor' => 20,
            'total' => 2000
        ]);
    }
}
