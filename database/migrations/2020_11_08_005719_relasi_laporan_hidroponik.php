<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelasiLaporanHidroponik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laporan_kondisi_hidroponik', function (Blueprint $table) {
            $table->foreign('id_petani', 'lapfk_1')->references('id_petani')->on('ca_farmer')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laporan_kondisi_hidroponik', function (Blueprint $table) {
            $table->dropForeign('lapfk_1');
        });
    }
}
