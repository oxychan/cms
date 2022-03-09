<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nama', 50)->nullable(false)->index();
            $table->integer('harga')->nullable(false);
            $table->float('diskon', 4, 2);
            $table->text('deskripsi');
            $table->boolean('sale')->default(false);
            $table->boolean('new')->default(false);
            $table->string('url_gambar')->nullable();
            $table->timestamp('ditambahkan_pada')->nullable();
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
