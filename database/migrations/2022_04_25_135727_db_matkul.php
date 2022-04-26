<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbMatkul extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matkul', function (Blueprint $table) {
            $table->id();
            $table->string('matkul_kode');
            $table->string('matkul_nama');
            $table->string('matkul_sks');
            $table->string('dosen_nip');
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
        //
    }
}
