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
            $table->integer('id_profil_petani',true);
            $table->integer('id_petani')->index('petani');
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
