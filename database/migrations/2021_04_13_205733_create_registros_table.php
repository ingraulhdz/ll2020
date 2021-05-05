<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('name');
                        $table->double('amount', 8, 2); 

            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('project')->nullable();
            $table->string('nickname')->nullable();
            $table->string('account')->nullable();
            $table->string('registred_by')->nullable();
            
            $table->timestamps();
        });

            DB::table('registros')->insert([
            'name' => 'Juan Perez',
            'country' => 'Mexico',  
            'email' => 'abelh@gmail.com',  
            'amount' => '5000',  
            'phone' => '722-123-2312',  
                        'project' => 'Ruedo',  
                        'account' => 'Abel Hernandez',  

            
    
            ]);


            DB::table('registros')->insert([
            'name' => 'Alfredo Quintana',
            'project' => 'Ruedo',  
            'country' => 'USA',  
            'email' => 'abelh@gmail.com',  
            'amount' => '2000',  
            'phone' => '722-123-2312',  
               'project' => 'Ruedo',  
                        'account' => 'Elias Quintana',  
            
    
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
