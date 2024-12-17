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
        Schema::create('dtnavattu', function (Blueprint $table) {
           // $table->id();
           $table->string('dtnaMaVtu')->primary();
           $table->string('dtnaTenVtu')->unique();
           $table->string('dtnaDvTinh');
           $table->float('dtnaPhanTram');
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dtnavattu');
    }
};
