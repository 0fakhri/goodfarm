<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporanKondisiHidroponik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_kondisi_hidroponik', function (Blueprint $table) {
            $table->integer('id_laporan')->length(11)->autoIncrement();
            $table->integer('id_petani')->length(11);
            $table->foreign('id_petani')->references('id_petani')->on('ca_farmer');
            $table->string('gambar_hidroponik',50);
            $table->integer('usia_hidroponik')->length(11);
            $table->integer('tinggi_hidroponik')->length(11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_kondisi_hidroponik');
    }
}
