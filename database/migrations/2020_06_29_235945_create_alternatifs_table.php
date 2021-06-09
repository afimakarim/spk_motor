<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternatifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatifs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('dealer_id')->unsigned();
            $table->bigInteger('motor_id')->unsigned();
            $table->bigInteger('kriteria_id')->unsigned();
            $table->string('nilai');
            $table->timestamps();
            $table->SoftDeletes();

            $table->foreign('dealer_id')->references('id')->on('dealers')->onDelete('CASCADE');
            $table->foreign('motor_id')->references('id')->on('motors')->onDelete('CASCADE');
            $table->foreign('kriteria_id')->references('id')->on('kriterias')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternatifs');
    }
}
