<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaquetes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('paquetes', function (Blueprint $table){
            $table->id('id_pack');

            $table->string('nombre');
            $table->string('velocidad');
            $table->integer('precio');
            $table->integer('precioinstal');
            $table->string('imagen');
            $table->unsignedBigInteger('id_tipo');

            $table->foreign('id_tipo')
                    ->references('id_tipo')->on('tipospaquetes')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('paquetes');
    }
}
