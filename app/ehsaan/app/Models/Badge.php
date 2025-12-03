<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    use HasFactory;

    protected $primaryKey = 'badge_id';

    protected $fillable = [
        'name',
        'target_type',
        'icon_path',
    ];

    // Relationships
    public function volunteerBadges()
    {
        return $this->hasMany(VolunteerBadge::class, 'badge_id', 'badge_id');
    }

    public function volunteers()
    {
        return $this->belongsToMany(
            Volunteer::class,
            'volunteer_badges',
            'badge_id',
            'volunteer_id',
            'badge_id',
            'volunteer_id'
        )->withPivot('earned_at')
          ->withTimestamps();
    }
}