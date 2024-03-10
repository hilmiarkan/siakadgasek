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
        Schema::create('biaya_syahriahs', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_keluaran');
            $table->date('tanggal_pembayaran')->nullable();
            $table->integer('nominal');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya_syahriahs');
    }
};
