<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('badges', function (Blueprint $table) {
            $table->id('badge_id');
            $table->string('name', 100);
            $table->enum('target_type', ['monthly', 'yearly', 'achievement'])->default('achievement');
            $table->text('icon_path')->nullable();
            $table->timestamps();
            
            $table->index('name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('badges');
    }
};