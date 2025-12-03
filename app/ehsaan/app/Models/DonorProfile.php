<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonorProfile extends Model
{
    use HasFactory;

    protected $primaryKey = 'donor_id';

    protected $fillable = [
        'user_id',
        'total_donated',
        'donations_count',
        'member_since',
        'level',
    ];

    protected $casts = [
        'total_donated' => 'decimal:2',
        'donations_count' => 'integer',
        'member_since' => 'date',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}