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
        Schema::create('DTNA_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('dtnaMaKhachHang',255)->unique(),
            $table->string('dtnaHoTenKhachHang',255);
            $table->string('dtnaEmail,255');
            $table->string('dtnaMatKhau',255);
            $table->string('dtnaDienThoai',255);
            $table->string('dtnaDiaChi',255);
            $table->date('dtnaNgayDangKi');
            $table->tinyInteger('dtnaTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DTNA_KHACH_HANG');
    }
};
