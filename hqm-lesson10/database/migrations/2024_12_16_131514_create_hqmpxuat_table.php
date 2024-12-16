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
        Schema::create('hqmpxuat', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('hqmSoPX')->primary();
            $table->date('hqmNgayXuat');
            $table->string('hqmTenKH',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hqmpxuat');
    }
};
