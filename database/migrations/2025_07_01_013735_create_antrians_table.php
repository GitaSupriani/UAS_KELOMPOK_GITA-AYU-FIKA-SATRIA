<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor'); // Tambahkan langsung di sini
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('antrians');
    }
};
