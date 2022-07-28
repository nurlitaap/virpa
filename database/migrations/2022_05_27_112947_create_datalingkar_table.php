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
        Schema::create('datalingkar', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->string('name');
            $table->string('jenis_kelamin');
            $table->string('umur');
            $table->date('ttl');
            $table->date('tanggal_masuk');
            $table->string('gambar');
            $table->string('lingkar_kepala');
            $table->string('status');
            $table->string('tinggi_badan');
            $table->string('status_tinggi');
            $table->string('berat_badan');
            $table->string('status_berat');
            $table->string('growthID');
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
        Schema::dropIfExists('datalingkar');
    }
};
