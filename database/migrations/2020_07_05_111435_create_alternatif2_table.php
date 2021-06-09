<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternatif2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatif2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('alternatif');
            $table->integer('merek');
            $table->integer('jenis_motor');
            $table->integer('harga');
            $table->integer('kapasitas_mesin');
            $table->integer('berat');
            $table->integer('kapasitas_tengki');
            $table->integer('kapasitas_bagasi');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternatif2');
    }
}
