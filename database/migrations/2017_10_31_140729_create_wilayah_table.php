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
        Schema::create('wil_kecamatan', function (Blueprint $table) {
            $table->string('id',10);
            $table->string('nm_kecamatan',50);
            $table->timestamps();

            $table->primary(['id']);
        });

        Schema::create('wil_kampung', function (Blueprint $table) {
            $table->string('id',10);
            $table->string('wil_kecamatan_id',10);
            $table->string('nm_kampung',100);
            $table->timestamps();

            $table->foreign('wil_kecamatan_id')
                ->references('id')
                ->on('wil_kecamatan')
                ->onDelete('cascade');

            $table->primary(['id','wil_kecamatan_id']);
        });

        Schema::create('wil_rw', function (Blueprint $table) {
            $table->string('id',10);
            $table->string('wil_kecamatan_id',10);
            $table->string('wil_kampung_id',10);
            $table->string('rw',10);
            $table->timestamps();

            $table->foreign('wil_kampung_id')
                ->references('id')
                ->on('wil_kampung')
                ->onDelete('cascade');

            $table->foreign('wil_kecamatan_id')
                ->references('id')
                ->on('wil_kecamatan')
                ->onDelete('cascade');

            $table->primary(['id','wil_kecamatan_id','wil_kampung_id']);
        });

        Schema::create('wil_rt', function (Blueprint $table) {
            $table->string('id',10);
            $table->string('wil_kecamatan_id',10);
            $table->string('wil_kampung_id',10);
            $table->string('wil_rw_id',10);
            $table->string('rt',10);
            $table->timestamps();

            $table->foreign('wil_rw_id')
                ->references('id')
                ->on('wil_rw')
                ->onDelete('cascade');

            $table->foreign('wil_kampung_id')
                ->references('id')
                ->on('wil_kampung')
                ->onDelete('cascade');

            $table->foreign('wil_kecamatan_id')
                ->references('id')
                ->on('wil_kecamatan')
                ->onDelete('cascade');

            $table->primary(['id','wil_kecamatan_id','wil_kampung_id','wil_rw_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(['wil_kecamatan','wil_kampung','wil_rw','wil_rt']);
    }
}
