<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('name');
            $table->string('description');
            $table->boolean('status')->default(1);
            $table->softDeletes();

            $table->timestamps();
        });
        DB::table('category_expenses')->insert(['name' => 'Mano de Obra', 'description' => 'Pago de trabajadores']);
        DB::table('category_expenses')->insert(['name' => 'Material de construccion', 'description' => 'Compra de material de construccion']);
        DB::table('category_expenses')->insert(['name' => 'Herramienta', 'description' => 'Compra o renta de herramienta']);
        DB::table('category_expenses')->insert(['name' => 'Mantenimiento', 'description' => 'Mantenimiento de la obra']);
        DB::table('category_expenses')->insert(['name' => 'Alumbrado', 'description' => 'Compra e intstalaciond de alumbrado']);
        DB::table('category_expenses')->insert(['name' => 'Areas Verdes', 'description' => 'Copmpra de arboles, pasto plantes etc']);
        DB::table('category_expenses')->insert(['name' => 'Renta Maquinaria', 'description' => 'Renta de maquinaria ']);


DB::table('category_expenses')->insert(['name' => 'Viaticos', 'description' => 'pago de viaticos a organisadores']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_expenses');
    }
}
