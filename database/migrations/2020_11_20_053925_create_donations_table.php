<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('method')->nullable();
            $table->string('voucher')->nullable();
            $table->double('amount', 8, 2); 
            $table->unsignedBigInteger('supporter_id');

            $table->foreign('supporter_id')->references('id')->on('members');
            $table->unsignedBigInteger('project_id')->nullable();

    $table->foreign('project_id')->references('id')->on('projects');
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
        Schema::dropIfExists('donations');
    }
}
