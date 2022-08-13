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
            $table->string('last_name')->nullable(); 
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('areacode')->nullable();
            $table->string('nickname')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('status')->default(1);   
            $table->softDeletes();

            $table->timestamps();
        });
                    
            

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
