<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('demo_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone', 50);
            $table->dateTime('scheduled_at')->unique();
            $table->string('timezone', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demo_bookings');
    }
};
