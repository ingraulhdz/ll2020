<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->string('photo')->nullable();

            $table->string('planning')->nullable();
            $table->double('cost', 8, 2)->nullable()->default(0); 
            $table->double('accrued', 8, 2)->nullable()->default(0);
            $table->integer('percentage')->nullable();
            $table->integer('supporters')->nullable();
            $table->integer('director_id')->nullable();
            $table->integer('treasure_id')->nullable();
            $table->integer('secretary_id')->nullable();
            $table->integer('advance')->default(0);   
            $table->boolean('status')->default(1)->nullable();   
            $table->unsignedBigInteger('accounts')->nullable();;
            
                    $table->softDeletes();
                    $table->timestamps();
        });
        DB::table('projects')->insert([
            'name' => 'Donacion libre',
            'description' => 'Donacion al pueblo para que el comite decida el uso ',
            'advance' => 100,
        ]);  

        DB::table('projects')->insert([
            'name' => 'Lienzo charro',
            'description' => 'Construccion de lienzo charro para eventos de charreria, y jaripeos.',
            'advance' => 80,
        ]);  

        
        DB::table('projects')->insert([
            'name' => 'centro',
            'description' => 'calles, banquetas, y todo lo referente al centro ',
            'advance' => 28,
        ]); 
        DB::table('projects')->insert([
            'name' => 'Escuelita Secundaria Exterior',
            'description' => 'REmodelacion el exterior de la Escuela secundaria',
            'advance' => 100,
        ]); 

        DB::table('projects')->insert([
            'name' => 'Delegacion Exterior',
            'description' => 'Remodelacion de la fachada de la delegacion',
            'advance' => 100,
        ]); 

        
        DB::table('projects')->insert([
            'name' => 'Alumbrado',
            'description' => 'Alumbrado de calles con iluminacion solar',
            'advance' => 28,
        ]); 



        DB::table('projects')->insert([
            'name' => 'limpieza centro',
            'description' => 'REacondicionamiento, y mantenimiento de los jardines ',
            'advance' => 30,
        ]); 

        DB::table('projects')->insert([
            'name' => 'Escuela Primaria Exterior SUR',
            'description' => 'REmodelacion sur de la escuela primaria incluyendo paredes vidrios, banquetas y arboles',
            'advance' => 100,
        ]);  
        DB::table('projects')->insert([
            'name' => 'Escuela Primaria Exterior NORTE ',
            'description' => 'Remodelacion de la parte Norte  de la escuela primaria incluyendo paredes vidrios, banquetas y arboles',
            'advance' => 100,
        ]);  


   

        DB::table('projects')->insert([
            'name' => 'Escuelita Secundaria Centro computo',
            'description' => 'Centro de computo dentro de la escuela secundaria.',
            'advance' => 20,
        ]); 
        
      




        









    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
