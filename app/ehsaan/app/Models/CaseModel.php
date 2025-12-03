<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseModel extends Model
{
    use HasFactory;

    protected $table = 'cases';
    protected $primaryKey = 'case_id';

    protected $fillable = [
        'title',
        'description',
        'case_type',
        'status',
        'base_priority',
        'family_size',
        'income_level',
        'has_debt',
        'is_urgent',
        'deadline',
        'ai_priority_score',
        'ai_priority_label',
        'ai_suggested_amount',
        'ai_reason',
        'created_by',
        'linked_campaign_id',
    ];

    protected $casts = [
        'has_debt' => 'boolean',
        'is_urgent' => 'boolean',
        'deadline' => 'date',
        'income_level' => 'decimal:2',
        'ai_priority_score' => 'decimal:2',
        'ai_suggested_amount' => 'decimal:2',
    ];

    // Relationships
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function linkedCampaign()
    {
        return $this->belongsTo(Campaign::class, 'linked_campaign_id', 'campaign_id');
    }

    public function donations()
    {
        return $this->hasMany(Donation::class, 'case_id', 'case_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'related_case_id', 'case_id');
    }
}