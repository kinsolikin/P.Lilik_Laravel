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
        Schema::create('datapeminjams', function (Blueprint $table) {
            $table->id();
            $table->integer('nim');
            $table->text('nama');
            $table->text('kelas');
            $table->integer('idbuku');
            $table->text('namabuku');
            $table->text('pengarang');
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
        Schema::dropIfExists('datapeminjams');
    }
};
