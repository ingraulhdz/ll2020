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
            $table->boolean('status')->default(1);   
            $table->unsignedBigInteger('account_id')->nullable();;
                    $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            
                    $table->softDeletes();
                    $table->timestamps();
        });
        DB::table('projects')->insert([
            'name' => 'Lienzo charro',
            'description' => 'lugar para practicar charreria',
            'advance' => 20,
        ]);  

        DB::table('projects')->insert([
            'name' => 'Escuelita Vieja',
            'description' => 'Cancha de futbol rapido',
            'advance' => 10,
        ]); 
        
        DB::table('projects')->insert([
            'name' => 'Iglecia',
            'description' => 'Remodelacion de la fachada de la iglecia',
            'advance' => 40,
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
