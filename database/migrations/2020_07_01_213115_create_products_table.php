<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['ANIME', 'DORAMA', 'ARTICULO', 'COMESTIBLE', 'PRENDA']);
            $table->string('name', 64);
            $table->string('slug', 64);
            $table->mediumText('description');
            $table->char('barcode', 13);
            $table->double('purchase_price');
            $table->double('sale_price');
            $table->string('folder_image', 32);
            $table->string('image', 32);
            $table->integer('category_id')->unsigned();
            $table->timestamps();

            // Relations
            $table->foreign('category_id')->references('id')->on('categories')
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
        Schema::dropIfExists('products');
    }
}
