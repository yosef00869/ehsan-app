<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id('message_id');
            $table->foreignId('session_id')->constrained('chat_sessions', 'session_id')->onDelete('cascade');
            $table->enum('sender', ['user', 'bot', 'admin'])->default('user');
            $table->text('message_text');
            $table->timestamp('created_at')->useCurrent();
            
            $table->index('session_id');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chat_messages');
    }
};