<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasSatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_satus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('no_induk');
            $table->string('file');
            $table->string('tpt_lhr');
            $table->date('tgl_lhr');
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
        Schema::dropIfExists('kelas_satus');
    }
}
