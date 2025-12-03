<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id('volunteer_id');
            $table->string('name', 100);
            $table->string('phone_number', 20)->nullable();
            $table->string('email', 100)->nullable();
            $table->date('available_from')->nullable();
            $table->date('available_to')->nullable();
            $table->integer('total_hours')->default(0);
            $table->integer('total_campaigns')->default(0);
            $table->text('notes')->nullable();
            $table->timestamps();
            
            $table->index('name');
            $table->index(['available_from', 'available_to']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('volunteers');
    }
};