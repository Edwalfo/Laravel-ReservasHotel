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
        Schema::create('habitacions', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->unique();
            $table->unsignedBigInteger('piso_id');
            $table->unsignedBigInteger('tipohabitacion_id');
            $table->tinyInteger('estado')->comment('0:Disponible , 1:Ocupada, 2:Limpieza, 3: Repacion , 4:Reservada')->default(0);
            $table->foreign('piso_id')->references('id')->on('pisos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipohabitacion_id')->references('id')->on('tipohabitacions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('habitacions');
    }
};
