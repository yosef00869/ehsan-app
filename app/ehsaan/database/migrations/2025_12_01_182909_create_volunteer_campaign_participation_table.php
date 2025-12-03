<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('volunteer_campaign_participation', function (Blueprint $table) {
            $table->id('participation_id');
            $table->foreignId('volunteer_id')->constrained('volunteers', 'volunteer_id')->onDelete('cascade');
            $table->foreignId('campaign_id')->constrained('campaigns', 'campaign_id')->onDelete('cascade');
            $table->string('role_in_campaign', 100)->nullable();
            $table->integer('hours_worked')->default(0);
            $table->date('attendance_date')->nullable();
            $table->boolean('get_reward')->default(false);
            $table->text('notes')->nullable();
            $table->timestamps();
            
            $table->unique(['volunteer_id', 'campaign_id', 'attendance_date'], 'unique_volunteer_campaign_date');
            $table->index('volunteer_id');
            $table->index('campaign_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('volunteer_campaign_participation');
    }
};