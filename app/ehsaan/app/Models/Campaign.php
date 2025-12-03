<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $primaryKey = 'campaign_id';

    protected $fillable = [
        'name',
        'description',
        'target_amount',
        'amount_collected',
        'start_date',
        'end_date',
        'campaign_type',
        'status',
        'location',
        'image',
        'volunteers_needed',
        'created_by',
    ];

    protected $casts = [
        'target_amount' => 'decimal:2',
        'amount_collected' => 'decimal:2',
        'start_date' => 'date',
        'end_date' => 'date',
        'volunteers_needed' => 'integer',
    ];

    // Relationships
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function linkedCases()
    {
        return $this->hasMany(CaseModel::class, 'linked_campaign_id', 'campaign_id');
    }

    public function donations()
    {
        return $this->hasMany(Donation::class, 'campaign_id', 'campaign_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'related_campaign_id', 'campaign_id');
    }

    public function volunteerParticipations()
    {
        return $this->hasMany(VolunteerCampaignParticipation::class, 'campaign_id', 'campaign_id');
    }

    public function volunteers()
    {
        return $this->belongsToMany(
            Volunteer::class,
            'volunteer_campaign_participation',
            'campaign_id',
            'volunteer_id',
            'campaign_id',
            'volunteer_id'
        )->withPivot(['role_in_campaign', 'hours_worked', 'attendance_date', 'get_reward', 'notes'])
          ->withTimestamps();
    }
}