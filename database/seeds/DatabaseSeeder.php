<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BalancesSeeder::class);
        $this->call(InversionesSeeder::class);
        $this->call(ServiciosSeeder::class);
    }
}
