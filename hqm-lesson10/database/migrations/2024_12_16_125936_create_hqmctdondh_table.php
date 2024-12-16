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
        Schema::create('hqmctdondh', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            $table->string('hqmSoDH');
            $table->string('hqmMaVTu');
            $table->integer('hqmSlDat');
            // khoa chinh
            $table->primary(['hqmSoDH','hqmMaVtu']);
            // khoa ngoai
            $table->foreign('hqmSoDH')->references('hqmSoDH')->on('hqmdonhang');
            $table->foreign('hqmMaVTu')->references('hqmMaVTu')->on('hqmvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hqmctdondh');
    }
};
