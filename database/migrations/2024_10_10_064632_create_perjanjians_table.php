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
        Schema::create('perjanjians', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id'); // Kolom foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            

            $table->unsignedBigInteger('dokter_id'); // Kolom foreign key
            $table->foreign('dokter_id')->references('id')->on('dokters')->onDelete('cascade');

            $table->date('tanggal_perjanjian');
            $table->time("waktu_perjanjian");
            $table->longText('alasan_kunjungan')->nullable();
            $table->string('status_perjanjian')->default(0);;
            
            // 0 unutk aktif
            // 1 unutk selesai

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perjanjians');
    }
};
