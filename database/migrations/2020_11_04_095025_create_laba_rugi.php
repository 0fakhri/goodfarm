<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabaRugi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laba_rugi', function (Blueprint $table) {
            $table->integer('id_laba_rugi')->length(11)->autoIncrement();
            $table->integer('id_petani')->length(11);
            $table->foreign('id_petani')->references('id_petani')->on('ca_farmer');
            $table->integer('panen_ke')->length(11);
            $table->integer('pengeluaran_total')->length(11);
            $table->integer('pemasukan/panen_total')->length(11);
            $table->integer('laba/rugi')->length(11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laba_rugi');
    }
}
