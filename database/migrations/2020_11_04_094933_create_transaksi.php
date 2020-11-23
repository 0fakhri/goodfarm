<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->integer('id_transaksi',true);
            $table->integer('id_investor')->index('id_investor');
            $table->integer('jumlah_modal')->length(11);
            $table->enum('nama_bank',['Bank Mandiri','BCA','BRI','BNI','CIMB Niaga']);
            $table->string('bukti_pembayaran',50);
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
        Schema::dropIfExists('transaksi');
    }
}
