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
            $table->SoftDeletes();
            $table->bigIncrements('id');
            $table->bigInteger('merek_id')->unsigned();
            $table->string('name');
            $table->string('email',100)->unique();
            $table->string('password',100);
            $table->string('gambar')->nullable()->default(null);
            $table->rememberToken();
            $table->timestamps();


            $table->foreign('merek_id')->references('id')->on('mereks')->onDelete('CASCADE');
        });
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
