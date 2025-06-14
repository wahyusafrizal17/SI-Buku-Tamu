<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('instansi');
            $table->string('no_identitas');
            $table->string('no_kendaraan');
            $table->string('keperluan');
            $table->string('jam_masuk');
            $table->string('jam_keluar');
            $table->string('foto_tamu');
            $table->string('foto_ktp');
            $table->string('foto_plat_nomor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tamu');
    }
};
