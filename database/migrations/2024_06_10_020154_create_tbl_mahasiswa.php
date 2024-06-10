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
        Schema::create('tbl_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->nullable(true);
            $table->string('name')->nullable(true);
            $table->string('universitas')->nullable(true);
            $table->string('jenis_kelamin')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->integer('jurusan')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_mahasiswa');
    }
};
