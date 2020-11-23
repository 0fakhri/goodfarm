<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelasiTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->foreign('id_investor', 'transaksifk_1')->references('id_investor')->on('ca_investor')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_petani', 'transaksifk_2')->references('id_petani')->on('ca_farmer')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropForeign('transaksifk_1');
        });
    }
}
