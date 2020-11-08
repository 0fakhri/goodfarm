<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelasiProfilFarmer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profil_petani', function (Blueprint $table) {
            $table->foreign('id_petani', 'profilPetfk_1')->references('id_petani')->on('ca_farmer')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profil_petani', function (Blueprint $table) {
            $table->dropForeign('profilPetfk_1');
        });
    }
}
