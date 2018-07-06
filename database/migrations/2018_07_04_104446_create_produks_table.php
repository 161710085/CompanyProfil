<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('ukuran');
            $table->string('warna');
            $table->string('harga');
                      $table->string('foto');
            $table->unsignedInteger('bahan_id');
            $table->foreign('bahan_id')->references('id')->on('bahans')->ondelete('cascade');
            $table->unsignedInteger('jenis_id');
            $table->foreign('jenis_id')->references('id')->on('jenis')->ondelete('cascade');
            $table->unsignedInteger('kategori_id');
            $table->foreign('kategori_id')->references('id')->on('kategoris')->ondelete('cascade');
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
        Schema::dropIfExists('produks');
    }
}
