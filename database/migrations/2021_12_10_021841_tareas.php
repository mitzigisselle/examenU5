<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tareas', function (Blueprint $table) {
            
            $table->engine="InnoDB";
            
            $table->bigIncrements('id');

            $table->bigInteger('proyecto_id')->unsigned();

            $table->string('nombre_tarea');
            $table->string('descripcion');
            $table->date('fecha');
            $table->string('estado');
            
            
            $table->timestamps();

            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
