<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id('donation_id');
            $table->foreignId('donor_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('campaign_id')->nullable()->constrained('campaigns', 'campaign_id')->onDelete('set null');
            $table->foreignId('case_id')->nullable()->constrained('cases', 'case_id')->onDelete('set null');
            $table->decimal('amount', 12, 2);
            $table->enum('donation_type', ['money', 'goods', 'services', 'other']);
            $table->string('payment_method')->nullable();
            $table->string('payment_reference', 100)->nullable();
            $table->enum('tracking_status', ['pending', 'confirmed', 'failed', 'refunded'])->default('pending');
            $table->timestamps();
            
            $table->index('donor_id');
            $table->index('campaign_id');
            $table->index('case_id');
            $table->index('tracking_status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};