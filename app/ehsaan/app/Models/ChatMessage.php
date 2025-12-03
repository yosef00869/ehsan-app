<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;

    protected $primaryKey = 'message_id';
    public $timestamps = false;

    protected $fillable = [
        'session_id',
        'sender',
        'message_text',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    // Relationships
    public function session()
    {
        return $this->belongsTo(ChatSession::class, 'session_id', 'session_id');
    }
}