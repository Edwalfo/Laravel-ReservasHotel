<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->date('entrada');
            $table->date('salida');
            $table->string('codigo', 12);
            $table->tinyInteger('estado')->comment('0:Creada , 1:hospedado, 2:Cancelada, 3:Perdida , 4:Finalizada')->default(0);
            $table->unsignedBigInteger('huesped_id');
            $table->unsignedBigInteger('habitacion_id')->nullable();
            $table->foreign('huesped_id')->references('id')->on('huespeds')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('habitacion_id')->references('id')->on('habitacions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('reservas');
    }
};
