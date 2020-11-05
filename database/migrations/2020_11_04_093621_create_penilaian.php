<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenilaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian', function (Blueprint $table) {
            $table->integer('id_penilaian')->length(11)->autoIncrement();
            $table->integer('id_investor')->length(11);
            $table->foreign('id_investor')->references('id_investor')->on('ca_investor');
            $table->integer('rate')->length(5);
            $table->integer('komentar')->length(11);
            $table->string('gambar',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penilaian');
    }
}
