<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $primaryKey = 'volunteer_id';

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'available_from',
        'available_to',
        'total_hours',
        'total_campaigns',
        'notes',
    ];

    protected $casts = [
        'available_from' => 'date',
        'available_to' => 'date',
        'total_hours' => 'integer',
        'total_campaigns' => 'integer',
    ];

    // Relationships
    public function campaignParticipations()
    {
        return $this->hasMany(VolunteerCampaignParticipation::class, 'volunteer_id', 'volunteer_id');
    }

    public function campaigns()
    {
        return $this->belongsToMany(
            Campaign::class,
            'volunteer_campaign_participation',
            'volunteer_id',
            'campaign_id',
            'volunteer_id',
            'campaign_id'
        )->withPivot(['role_in_campaign', 'hours_worked', 'attendance_date', 'get_reward', 'notes'])
          ->withTimestamps();
    }

    public function volunteerBadges()
    {
        return $this->hasMany(VolunteerBadge::class, 'volunteer_id', 'volunteer_id');
    }

    public function badges()
    {
        return $this->belongsToMany(
            Badge::class,
            'volunteer_badges',
            'volunteer_id',
            'badge_id',
            'volunteer_id',
            'badge_id'
        )->withPivot('earned_at')
          ->withTimestamps();
    }
}