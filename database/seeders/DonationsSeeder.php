<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DonationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = base_path('database/sql/alumbrado.sql');
        $sql = file_get_contents($path);
        \DB::unprepared($sql);

        $path = base_path('database/sql/centro.sql');
        $sql = file_get_contents($path);
        \DB::unprepared($sql);

        $path = base_path('database/sql/delegacion_exterior.sql');
        $sql = file_get_contents($path);
        \DB::unprepared($sql);

        
        $path = base_path('database/sql/lienzo_charro.sql');
        $sql = file_get_contents($path);
        \DB::unprepared($sql);



          
        $path = base_path('database/sql/limpieza_centro.sql');
        $sql = file_get_contents($path);
        \DB::unprepared($sql);



          
        $path = base_path('database/sql/primaria_norte.sql');
        $sql = file_get_contents($path);
        \DB::unprepared($sql);



          
        $path = base_path('database/sql/primaria_sur.sql');
        $sql = file_get_contents($path);
        \DB::unprepared($sql);





    }
}
