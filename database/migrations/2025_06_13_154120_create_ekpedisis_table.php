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
        Schema::create('ekpedisi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengirim');
            $table->string('nama_instansi');
            $table->string('nama_penerima');
            $table->string('tanggal');
            $table->string('tujuan');
            $table->string('jam');
            $table->string('foto_penyerahan_surat');
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
        Schema::dropIfExists('ekpedisi');
    }
};
