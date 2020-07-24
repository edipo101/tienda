<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->longText('synopsis')->nullable(); // Sinopsis
            $table->integer('episodes'); // Número de episodios
            $table->string('release_date')->nullable()->comment('Fecha de estreno'); // Fecha de estreno
            $table->boolean('premiere')->default(0)->comment('Es estreno'); // Está en estreno?
            $table->enum('state', ['FINALIZADO', 'EN EMISION']); // Estado
            $table->enum('audio', ['JAPONES', 'CASTELLANO', 'LATINO', 'JAP/CAST']); // Estado
            $table->timestamps();

            // Relations
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animes');
    }
}
