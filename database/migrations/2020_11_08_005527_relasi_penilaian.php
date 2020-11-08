<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelasiPenilaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penilaian', function (Blueprint $table) {
            $table->foreign('id_investor', 'penilaianfk_1')->references('id_investor')->on('ca_investor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penilaian', function (Blueprint $table) {
            $table->dropForeign('penilaianfk_1');
        });
    }
}
