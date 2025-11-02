<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->text('deskripsi');
            $table->enum('kategori', ['hilang', 'ditemukan']);
            $table->string('lokasi');
            $table->date('tanggal');
            $table->string('nama_pelapor');
            $table->string('kontak');
            $table->enum('status', ['hilang', 'ditemukan', 'selesai'])->default('hilang');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('items');
    }
};