<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entradas extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cantidad', 100);
            $table->string('lote', 100);
            $table->string('cantidad_dosis', 100);
            $table->integer('productos_id')->unsigned();
            $table->date('fecha_ingreso', 100);
            $table->date('fecha_vencimiento', 100);
            $table->timestamps();
            $table->foreign('productos_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entradas');
    }
}
