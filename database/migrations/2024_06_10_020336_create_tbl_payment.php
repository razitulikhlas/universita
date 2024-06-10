<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_payment', function (Blueprint $table) {
            $table->id();
            $table->integer('nik_petugas')->nullable(true);
            $table->integer('id_mahasiswa')->nullable(true);
            $table->string('nomor_tagihan')->nullable(true);
            $table->string('keterangan')->nullable(true);
            $table->float('biaya_admin')->nullable(true);
            $table->float('biaya')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_payment');
    }
};
