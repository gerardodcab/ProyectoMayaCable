<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaqueteCanaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquete_canale', function (Blueprint $table) {
            $table->id('pack_canal');
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
        Schema::dropIfExists('paquete_canale');
    }
}
