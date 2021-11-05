<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaquetesCanalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes_canales', function (Blueprint $table) {
            $table->id('id_pack_canal');

            $table->unsignedBigInteger('id_pack');
            $table->unsignedBigInteger('id_canal');

            $table->foreign('id_pack')
                    ->references('id_pack')->on('paquetes')
                    ->onDelete('cascade');

           $table->foreign('id_canal')
                    ->references('id_canal')->on('canales')
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
        Schema::dropIfExists('paquetes_canales');
    }
}
