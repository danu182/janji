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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('NIK')->nullable();;
            $table->string('NIP')->nullable();
            $table->string('name');
            $table->date('birth_date')->format('Y-m-d')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('HP')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('type')->default(0);
            
            // o untuk user
            // 1 untuk maanagemen
            // 2 untuk admin
            
            
            $table->rememberToken();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
