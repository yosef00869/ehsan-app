<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VolunteerCampaignParticipation extends Model
{
    use HasFactory;

    protected $table = 'volunteer_campaign_participation';
    protected $primaryKey = 'participation_id';

    protected $fillable = [
        'volunteer_id',
        'campaign_id',
        'role_in_campaign',
        'hours_worked',
        'attendance_date',
        'get_reward',
        'notes',
    ];

    protected $casts = [
        'hours_worked' => 'integer',
        'attendance_date' => 'date',
        'get_reward' => 'boolean',
    ];

    // Relationships
    public function volunteer()
    {
        return $this->belongsTo(Volunteer::class, 'volunteer_id', 'volunteer_id');
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id', 'campaign_id');
    }
}