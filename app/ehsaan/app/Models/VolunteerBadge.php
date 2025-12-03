<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerBadge extends Model
{
    use HasFactory;

    protected $fillable = [
        'volunteer_id',
        'badge_id',
        'earned_at',
    ];

    protected $casts = [
        'earned_at' => 'datetime',
    ];

    // Relationships
    public function volunteer()
    {
        return $this->belongsTo(Volunteer::class, 'volunteer_id', 'volunteer_id');
    }

    public function badge()
    {
        return $this->belongsTo(Badge::class, 'badge_id', 'badge_id');
    }
}