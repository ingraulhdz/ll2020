<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectSupportersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_supporters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_id');           
            $table->unsignedBigInteger('supporter_id');
        
            $table->foreign('project_id')->references('id')->on('projects')
        
                ->onDelete('cascade');
        
            $table->foreign('supporter_id')->references('id')->on('members')
        
                ->onDelete('cascade');
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
        Schema::dropIfExists('project_supporters');
    }
}
