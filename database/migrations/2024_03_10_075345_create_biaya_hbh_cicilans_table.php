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
        Schema::create('biaya_hbh_cicilans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pembayaran');
            $table->bigInteger('nominal');
            $table->foreignId('biaya_hbh_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya_hbh_cicilans');
    }
};
