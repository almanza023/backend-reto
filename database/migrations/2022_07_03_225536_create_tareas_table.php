<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trabajador_id');
            $table->foreign('trabajador_id')->references('id')->on('trabajadores');
            $table->string('descripcion', 500);
            $table->dateTime('fecha_limite_entrega');
            $table->string('observaciones')->nullable();
            $table->date('fecha_novedad')->nullable();
            $table->string('estado')->default('PENDIENTE');
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
        Schema::dropIfExists('tareas');
    }
}
