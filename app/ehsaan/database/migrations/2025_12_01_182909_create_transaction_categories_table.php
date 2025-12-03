<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transaction_categories', function (Blueprint $table) {
            $table->id('category_id');
            $table->string('category_name', 100);
            $table->enum('category_type', ['income', 'expense', 'both'])->default('both');
            $table->timestamps();
            
            $table->index('category_name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transaction_categories');
    }
};