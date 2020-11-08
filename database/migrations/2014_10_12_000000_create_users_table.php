<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id_user', true);
            $table->enum('role',['admin','petani','investor']);
            //$table->string('name');
            $table->string('username',30)->unique();
            $table->string('password');

        });
        // Schema::create('users', function (Blueprint $table) {
        //     $table->bigIncrements('id_user');
        //     $table->enum('role',['admin','petani','investor']);
        //     $table->string('username')->length(30)->unique();
        //     $table->string('password')->length(60);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
