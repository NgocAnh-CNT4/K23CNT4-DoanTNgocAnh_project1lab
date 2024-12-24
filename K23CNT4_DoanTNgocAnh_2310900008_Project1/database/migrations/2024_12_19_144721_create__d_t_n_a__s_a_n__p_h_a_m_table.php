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
        Schema::create('DTNA_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('dtnaMaSanPham',225)->unique();
            $table->string('dtnaTenSanPham',225);
            $table->string('dtnaHinhAnh',225);
            $table->integer('dtnaSoLuong');
            $table->float('dtnaDonGia');
            $table->bigInteger('dtnaMaLoai')->references('id')->on('DTNA_LOAI_SAN_PHAM');
            $table->tinyInteger('dtnaTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DTNA_SAN_PHAM');
    }
};
