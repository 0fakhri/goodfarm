<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelasiLabaRugi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laba_rugi', function (Blueprint $table) {
            $table->foreign('id_petani', 'laba_rugifk_1')->references('id_petani')->on('ca_farmer')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laba_rugi', function (Blueprint $table) {
            $table->dropForeign('laba_rugifk_1');
        });
    }
}
