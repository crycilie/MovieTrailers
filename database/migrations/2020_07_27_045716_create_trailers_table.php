<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trailers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('foto')->nullable();
            $table->string('nombre')->nullable();
            $table->string('linktTrailer')->nullable();
            $table->string('sintesis')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('year')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trailers');
    }
}
