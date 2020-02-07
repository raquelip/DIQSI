<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('reserva_id');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('reserva_id')->references('id')->on('reservas');
            $table->foreign('producto_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivotes');
    }
}
