<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilInvestor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_investor', function (Blueprint $table) {
            $table->integer('id_profil_investor',true);
            $table->integer('id_investor')->index('id_investor');
            $table->string('bio_investor',50);
            $table->string('situs_web_investor',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil_investor');
    }
}
