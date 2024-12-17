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
        Schema::create('dtnadondh', function (Blueprint $table) {
            //$table->id();
            $table->string('dtnaSoDH')->primary();
            $table->string('dtnaNgayDH');
            $table->string('dtnaMaNCC');
            $table->foreign('dtnaMaNCC')->references('dtnaMaNCC')->on('dtnanhacc');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtnadondh');
    }
};
