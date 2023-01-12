<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name', 255);
            $table->enum('Jenis', ['High', 'Low']);
            $table->enum('warna_dasar', ['Merah', 'Biru','Hitam','Putih']);
            $table->enum('warna_insole', ['Merah', 'Biru','Hitam','Putih']);
            $table->enum('warna_tali', ['Merah', 'Biru','Hitam','Putih']);
            $table->enum('warna_lidah', ['Merah', 'Biru','Hitam','Putih']);
            $table->enum('warna_midsole', ['Merah', 'Biru','Hitam','Putih']);
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
        Schema::dropIfExists('showrooms');
    }
};
