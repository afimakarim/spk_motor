<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->SoftDeletes();
            $table->bigIncrements('id');
            $table->bigInteger('dealer_id')->unsigned();
            $table->bigInteger('motor_id')->unsigned();
            $table->string('gambar');
            $table->string('judul');
            $table->string('ket_promo');
            $table->timestamps();

            $table->foreign('dealer_id')->references('id')->on('dealers')->onDelete('CASCADE');
            $table->foreign('motor_id')->references('id')->on('motors')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promos');
    }
}
