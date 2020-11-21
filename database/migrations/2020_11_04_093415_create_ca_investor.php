<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaInvestor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ca_investor', function (Blueprint $table) {
            $table->integer('id_investor',true);
            $table->integer('id_user')->index('id');
            $table->string('nama_investor',50);
            $table->string('no_ponsel_investor',15);
            $table->date('tanggal_lahir_investor');
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->enum('jenis_identitas',['KTP','SIM','Pasport']);
            $table->integer('no_identitas_investor')->length(20);
            $table->integer('id_alamat')->index('id_alamat');
            $table->string('email_investor',50);
            $table->string('foto_ktp_investor',50);
            $table->enum('status',['Ditolak','Diterima'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ca_investor');
    }
}
