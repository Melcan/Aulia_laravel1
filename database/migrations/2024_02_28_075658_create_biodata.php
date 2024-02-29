<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            // $table->id();
            // 
            $table->char('nim', 9)->primary;
            $table->string('nama_mhs', 30);
            $table->string('prodi_mhs', 30);
            $table->string('address');
            $table->string('no_telp', 15);
            $table->date('tgl_lahir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata');
    }
};
