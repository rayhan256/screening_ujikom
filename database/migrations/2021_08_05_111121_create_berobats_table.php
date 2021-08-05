<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerobatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berobats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id');
            $table->date('date');
            $table->unsignedBigInteger('dokter_id');
            $table->string('keluhan');
            $table->integer('adm');
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('CASCADE');
            $table->foreign('dokter_id')->references('id')->on('dokters')->onDelete('CASCADE');
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
        Schema::dropIfExists('berobats');
    }
}
