<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Promociones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('promociones', function(Blueprint $table){
            $table->id('id_prom');

            $table->string('nombre');
            $table->string('Descripcion');
            $table->string('imagen');
            $table->date('fechainicio');
            $table->date('fechavencimiento');
            $table->boolean('activo');

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
        //
        Schema::dropIfExists('promociones');
    }
}
