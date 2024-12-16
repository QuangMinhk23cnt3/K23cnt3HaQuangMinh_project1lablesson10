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
        Schema::create('hqmctpxuat', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('hqmSoPX');
            $table->string('hqmMaVTu');
            $table->integer('hqmSlXuat');
            $table->float('hqmDgXuat');
            // khoa chinh
            $table->primary(['hqmSoPX','hqmMaVTu']);
            // khoa ngoai
            $table->foreign('hqmSoPX')->references('hqmSoPX')->on('hqmpxuat');
            $table->foreign('hqmMaVTu')->references('hqmMaVTu')->on('hqmvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hqmctpxuat');
    }
};
