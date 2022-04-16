<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExpensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         
        $path = base_path('database/sql/gastos_limpieza_centro.sql');
        $sql = file_get_contents($path);
        \DB::unprepared($sql);
    }
}
