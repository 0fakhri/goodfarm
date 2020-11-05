<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilPetani extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_petani', function (Blueprint $table) {
            $table->integer('id_profil_petani')->length(11)->autoIncrement();
            $table->integer('id_petani')->length(11);
            $table->foreign('id_petani')->references('id_petani')->on('ca_farmer');
            $table->string('bio_petani',50);
            $table->string('situs_web_petani',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profil_petani');
    }
}
