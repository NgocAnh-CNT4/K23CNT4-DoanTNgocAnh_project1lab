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
        Schema::create('DTNA_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('dtnaMaHoadon',255)->unique();
            $table->bigInteger('dtnaMaKhachHang')->refrences('id')->on('DTNA_KHACH_HANG');
            $table->date('dtnaNgayHoaDon');
            $table->string('dtnaHoTenKhachHang',255);
            $table->string('dtnaEmail',255);
            $table->string('dtnaDienThoai',255);
            $table->string('dtnaDiaChi',255);
            $table->float('dtnaTongGiaTri');
            $table->tinyInteger('dtnaTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DTNA_HOA_DON');
    }
};
