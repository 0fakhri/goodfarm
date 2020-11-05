<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaFarmer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('ca_farmer', function (Blueprint $table) {
            $table->integer('id_petani')->length(11)->autoIncrement();
            $table->integer('id_user')->length(11);
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->string('nama_petani',50);
            $table->string('no_ponsel_petani',15);
            $table->date('tanggal_lahir_petani');
            $table->enum('jenis_kelamin',['Laki-laki','Perempuan']);
            $table->enum('jenis_identitas',['KTP','SIM','Pasport']);
            $table->integer('no_identitas_petani')->length(20);
            $table->integer('id_alamat')->length(11);
            $table->foreign('id_alamat')->references('id_alamat')->on('alamat');
            $table->string('email_petani',50);
            $table->string('foto_ktp_petani',50);
            $table->string('foto_lahan_hidroponik',50);
            $table->enum('status',['Ditolak','Diterima'])->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ca_farmer');
    }
}
