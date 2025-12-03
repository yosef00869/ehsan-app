<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id('case_id');
            $table->string('title');
            $table->text('description');
            $table->enum('case_type', ['medical', 'education', 'housing', 'food', 'emergency', 'other']);
            $table->enum('status', ['pending', 'approved', 'in_progress', 'completed', 'rejected', 'closed'])->default('pending');
            $table->enum('base_priority', ['low', 'medium', 'high', 'urgent'])->default('medium');
            $table->string('family_size')->nullable();
            $table->decimal('income_level', 12, 2)->nullable();
            $table->boolean('has_debt')->default(false)->nullable();
            $table->boolean('is_urgent')->default(false)->nullable();
            $table->date('deadline')->nullable();
            $table->decimal('ai_priority_score', 5, 2)->nullable();
            $table->string('ai_priority_label')->nullable();
            $table->decimal('ai_suggested_amount', 12, 2)->nullable();
            $table->string('ai_reason')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->foreignId('linked_campaign_id')->nullable()->constrained('campaigns', 'campaign_id')->onDelete('set null');
            $table->timestamps();
            
            $table->index('status');
            $table->index('case_type');
            $table->index('created_by');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cases');
    }
};