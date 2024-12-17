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
        Schema::create('dtna_nhacc', function (Blueprint $table) {
           //$table->id();
           $table->string('dtnaMaNCC')->primary();
           $table->string('dtnaTenNCC');
           $table->string('dtnaDiaChi');
           $table->string('dtnaDienThoai');

            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtna_nhacc');
    }
};
