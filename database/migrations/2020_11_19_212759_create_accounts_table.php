<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('owner');
            $table->string('country')->nullable();;

            $table->string('bank')->nullable();;
            $table->BigInteger('card')->nullable();
            $table->BigInteger('account_number')->nullable();
            $table->BigInteger('route_number')->nullable();   
            $table->string('app')->nullable();   
            $table->string('email')->nullable();   
            $table->BigInteger('phone')->nullable();   
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
        Schema::dropIfExists('accounts');
    }
}
