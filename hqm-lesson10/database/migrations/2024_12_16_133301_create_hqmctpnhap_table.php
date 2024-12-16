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
        Schema::create('hqmctpnhap', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('hqmSoPN');
            $table->string('hqmMaVTu');
            $table->integer('hqmSlNhap');
            $table->float('hqmDgNhap');
            // khoa chinh
            $table->primary(['hqmSoPN','hqmMaVTu']);
            // khoa ngoai
            $table->foreign('hqmSoPN')->references('hqmSoPN')->on('hqmpnhap');
            $table->foreign('hqmMaVTu')->references('hqmMaVTu')->on('hqmvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hqmctpnhap');
    }
};
