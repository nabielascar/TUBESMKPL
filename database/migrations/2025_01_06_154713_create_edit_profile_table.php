<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('edit_profile', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Tambahkan ini
            $table->foreign('user_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->string('phone_number')->nullable();
            $table->string('profile_picture')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->date('birth_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('edit_profile');
    }
};
