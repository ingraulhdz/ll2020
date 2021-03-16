<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');            
            $table->string('email')->nullable();
            $table->string('photo')->nullable();

            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->boolean('status')->default(1);   
            $table->softDeletes();

            $table->timestamps();
        });
        DB::table('members')->insert([
            'name' => 'Raul',
            'last_name' => 'Hernandez',
            'phone' => '4422263267',
            'email' => 'raul@mail.com'
        ]);  
        DB::table('members')->insert([
            'name' => 'Pablo',
            'last_name' => 'Alcantara',
            'phone' => '6302561267',
            'email' => 'pablo@mail.com'
        ]);  

        DB::table('members')->insert([
            'name' => 'Abel',
            'last_name' => 'Hdz',
            'phone' => '5523659846',
            'email' => 'abel@mail.com'
        ]);  

        DB::table('members')->insert([
            'name' => 'Alfredo',
            'last_name' => 'Quintana',
            'phone' => '630123456',
            'email' => 'fredo@mail.com'
        ]); 
        
        DB::table('members')->insert([
            'name' => 'Julio',
            'last_name' => 'Martinez',
            'phone' => '712451245',
            'email' => 'julio@mail.com'
        ]); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
