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
        Schema::create('DTNA_QUAN_TRI', function (Blueprint $table) {
            $table->id();
            $table->string('dtnaTaiKhoan',225)->unique();
            $table->string('dtnaMatKhau' ,225);
            $table->tinyInteger('dtnaTrangThai');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DTNA_QUAN_TRI');
    }
};
