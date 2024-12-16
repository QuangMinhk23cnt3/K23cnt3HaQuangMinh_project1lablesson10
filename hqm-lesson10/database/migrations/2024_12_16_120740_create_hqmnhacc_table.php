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
        Schema::create('hqmnhacc', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('hqmMaNCC')->primary();
            $table->string('hqmTenNCC');
            $table->string('hqmDiaChi');
            $table->string('hqmDienThoai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hqmnhacc');
    }
};
