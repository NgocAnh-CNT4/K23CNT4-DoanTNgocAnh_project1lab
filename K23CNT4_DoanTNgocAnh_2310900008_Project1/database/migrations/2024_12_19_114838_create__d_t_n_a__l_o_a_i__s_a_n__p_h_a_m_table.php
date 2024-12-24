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
        Schema::create('DTNA_LOAI_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table-> string('dtnaMaLoai',255)->unique();
            $table-> string('dtnaTenLoai',255);
            $table->tinyInteger ('dtnaTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DTNA_LOAI_SAN_PHAM');
    }
};
