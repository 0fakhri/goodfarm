<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelasiCaFarmer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ca_farmer', function (Blueprint $table) {
            $table->foreign('id_user', 'ca_farmerfk_1')->references('id_user')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_alamat', 'ca_farmerfk_2')->references('id_alamat')->on('alamat')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ca_farmer', function (Blueprint $table) {
            $table->dropForeign('ca_farmerfk_1');
            $table->dropForeign('ca_farmerfk_2');
        });
    }
}
