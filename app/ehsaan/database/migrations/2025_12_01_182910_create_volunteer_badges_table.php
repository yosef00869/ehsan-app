<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('volunteer_badges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('volunteer_id')->constrained('volunteers', 'volunteer_id')->onDelete('cascade');
            $table->foreignId('badge_id')->constrained('badges', 'badge_id')->onDelete('cascade');
            $table->timestamp('earned_at')->useCurrent();
            $table->timestamps();
            
            $table->unique(['volunteer_id', 'badge_id']);
            $table->index('volunteer_id');
            $table->index('badge_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('volunteer_badges');
    }
};