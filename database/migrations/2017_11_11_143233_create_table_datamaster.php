<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDatamaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_agama', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_agama', 100)->unique();
            $table->timestamps();
        });

        Schema::create('ref_pendidikan_kk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_pendidikan_kk')->unique();
            $table->timestamps();
        });

        Schema::create('ref_pendidikan_ditempuh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_pendidikan_ditempuh')->unique();
            $table->timestamps();
        });

        Schema::create('ref_pekerjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_pekerjaan')->unique();
            $table->timestamps();
        });

        Schema::create('ref_status_kawin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_status_kawin', 50)->unique();
            $table->timestamps();
        });

        Schema::create('ref_hubungan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_hubungan', 50)->unique();
            $table->timestamps();
        });

        Schema::create('ref_golongan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_golongan', 20)->unique();
            $table->timestamps();
        });

        Schema::create('ref_cacat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_cacat', 50)->unique();
            $table->timestamps();
        });

        Schema::create('ref_kb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nm_kb', 100)->unique();
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
         Schema::dropIfExists(['ref_agama','ref_pendidikan_kk','ref_pendidikan_ditempuh','ref_pekerjaan','ref_status_kawin','ref_hubungan','ref_golongan','ref_cacat','ref_kb']);
    }
}
