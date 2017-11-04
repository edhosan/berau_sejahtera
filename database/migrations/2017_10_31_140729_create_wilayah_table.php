<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWilayahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilayah', function (Blueprint $table) {
            $table->string('id',10);
            $table->string('nm_wilayah',50);
            $table->timestamps();

            $table->primary(['id']);
        });

        Schema::create('wilayah_rw', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('nm_wilayah');
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
        Schema::dropIfExists('wilayah');
    }
}
