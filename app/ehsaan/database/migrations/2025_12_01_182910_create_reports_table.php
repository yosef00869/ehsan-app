<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id('report_id');
            $table->enum('report_type', ['donations', 'campaigns', 'volunteers', 'cases', 'financial', 'custom']);
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamp('generated_at')->useCurrent();
            $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
            
            $table->index('report_type');
            $table->index(['start_date', 'end_date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};