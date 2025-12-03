<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id('campaign_id');
            $table->string('name');
            $table->text('description');
            $table->decimal('target_amount', 12, 2);
            $table->decimal('amount_collected', 12, 2)->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('campaign_type', ['fundraising', 'food_distribution', 'medical', 'education', 'emergency', 'seasonal', 'other']);
            $table->enum('status', ['draft', 'active', 'completed', 'cancelled', 'archived'])->default('draft');
            $table->string('location')->nullable();
            $table->text('image')->nullable();
            $table->integer('volunteers_needed')->default(0);
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
            
            $table->index('status');
            $table->index('campaign_type');
            $table->index(['start_date', 'end_date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};