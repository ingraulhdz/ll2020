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
            $table->string('sponsor');
            $table->string('description')->nullable();

            $table->double('amount', 8, 2)->nullable();
            $table->date('date')->nullable();;   



            $table->double('amount_mxn', 8, 2)->nullable();
            $table->double('amount_usd', 8, 2)->nullable(); 
            $table->string('method')->nullable();
            $table->string('voucher')->nullable();
            $table->unsignedBigInteger('account_id')->nullable();
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->unsignedBigInteger('supporter_id')->nullable();;
            $table->foreign('supporter_id')->references('id')->on('members');
            $table->unsignedBigInteger('project_id')->nullable();
    $table->foreign('project_id')->references('id')->on('projects')->default(1); ;

$table->string('phone_sponsor')->nullable();
$table->string('email_sponsor')->nullable();
$table->string('country_sponsor')->nullable();
$table->string('nickname_sponsor')->nullable();
$table->unsignedBigInteger('registred_by')->nullable();

$table->foreign('registred_by')->references('id')->on('users')->nullable();;


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
