<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->decimal('amount', 12, 2);
            $table->enum('transaction_type', ['income', 'expense'])->default('income');
            $table->date('transaction_date');
            $table->foreignId('treasury_id')->constrained('treasury', 'treasury_id')->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->constrained('transaction_categories', 'category_id')->onDelete('set null');
            $table->foreignId('donation_id')->nullable()->constrained('donations', 'donation_id')->onDelete('set null');
            $table->foreignId('related_case_id')->nullable()->constrained('cases', 'case_id')->onDelete('set null');
            $table->foreignId('related_campaign_id')->nullable()->constrained('campaigns', 'campaign_id')->onDelete('set null');
            $table->text('description')->nullable();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            $table->timestamps();
            
            $table->index('transaction_type');
            $table->index('transaction_date');
            $table->index('treasury_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};