<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('note')->nullable();
            $table->double('amount', 8, 2); 
            $table->date('date')->nullable();;   

            $table->boolean('status')->default(1);   
            $table->string('voucher')->nullable();
     $table->unsignedBigInteger('account_id')->nullable();

            $table->foreign('account_id')->references('id')->on('accounts');

            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
           $table->foreign('category_id')->references('id')->on('category_expenses')->onDelete('cascade');
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
        Schema::dropIfExists('investments');
    }
}
