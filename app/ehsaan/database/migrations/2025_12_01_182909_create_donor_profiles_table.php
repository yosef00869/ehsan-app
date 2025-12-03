<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('donor_profiles', function (Blueprint $table) {
            $table->id('donor_id');
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->decimal('total_donated', 12, 2)->default(0);
            $table->integer('donations_count')->default(0);
            $table->date('member_since')->nullable();
            $table->enum('level', ['bronze', 'silver', 'gold', 'platinum'])->default('bronze');
            $table->timestamps();
            
            $table->index('user_id');
            $table->index('level');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('donor_profiles');
    }
};