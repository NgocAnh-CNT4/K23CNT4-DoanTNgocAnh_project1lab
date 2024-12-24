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
        Schema::create('DTNA_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dtnaHoaDonID')->refrences('id')->on('DTNA_HOA_DON');
            $table->bigInteger('dtnaSamPhamID')->refrences('id')->on('DTNA_SAN_PHAM');
            $table->Integer('dtnaSoLuongMua');
            $table->float('dtnaDonGiaMua');
            $table->float('dtnaThanhTien');
            $table->tinyInteger('dtnaTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DTNA_CT_HOA_DON');
    }
};
