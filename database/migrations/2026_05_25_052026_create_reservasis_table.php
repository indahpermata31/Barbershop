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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stylist_id')->constrained();
            $table->foreignId('pelanggan_id')->constrained();
            $table->foreignId('layanan_id')->constrained();
            $table->foreignId('style_id')->constrained();
            $table->date('tanggal_booking');
            $table->integer('total_harga');
            $table->string('status_pembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
