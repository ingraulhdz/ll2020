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
            $table->string('country')->nullable();

            $table->string('bank')->nullable();
            $table->string('card')->nullable();
            $table->string('account_number')->nullable();
            $table->string('route_number')->nullable();   
            $table->string('zelle')->nullable();   
            $table->string('cashapp')->nullable();   
            $table->string('quickpay')->nullable();   
            $table->string('paypal')->nullable();   
            $table->string('email')->nullable();   
            $table->string('phone')->nullable();   
                     $table->boolean('status')->default(1)->nullable(); ;   
                     $table->softDeletes();

           $table->timestamps();
        });

             DB::table('accounts')->insert([
            'owner' => 'Elias Quintana',
            'country' => 'USA',  
            'bank' => 'Bank of America',  
            'card' => '4322-1234-1231-4321',  
            'account_number' => '9482782721',  
            'route_number' => '9482782721',  
            'zelle' => '630-123-2312',  
            'phone' => '630-123-2312',  
            'quickpay' => '630-123-2312',  
            'cashapp' => 'elias@gmail.com',  
            'paypal' => 'elias@gmail.com',  
            
    
            ]);

                     DB::table('accounts')->insert([
            'owner' => 'Abel Hernanez',
            'country' => 'Mexico',  
            'bank' => 'Bancomer',  
            'card' => '6233-4332-6232-7833',  
            'account_number' => '9832498374',  
            'route_number' => '93939348',  
            'phone' => '722-123-2312',  
            'paypal' => 'elias@gmail.com',  
            
    
            ]);

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
