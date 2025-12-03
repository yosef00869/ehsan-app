<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('treasury', function (Blueprint $table) {
            $table->id('treasury_id');
            $table->string('name', 100);
            $table->decimal('opening_balance', 12, 2)->default(0);
            $table->timestamps();
            
            $table->index('name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('treasury');
    }
};