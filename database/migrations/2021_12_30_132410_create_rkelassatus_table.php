<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRkelassatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rkelassatus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('namasiswa_id');
            $table->date("tgl");
            $table->enum('keterangan',['Hadir','Terlambat', 'Tidak Hadir']);
            $table->string('alasan')->nullable();
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
        Schema::dropIfExists('rkelassatus');
    }
}
