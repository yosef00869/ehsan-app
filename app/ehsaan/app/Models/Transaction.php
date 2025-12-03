<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $primaryKey = 'transaction_id';

    protected $fillable = [
        'amount',
        'transaction_type',
        'transaction_date',
        'treasury_id',
        'category_id',
        'donation_id',
        'related_case_id',
        'related_campaign_id',
        'description',
        'created_by',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'transaction_date' => 'date',
    ];

    // Relationships
    public function treasury()
    {
        return $this->belongsTo(Treasury::class, 'treasury_id', 'treasury_id');
    }

    public function category()
    {
        return $this->belongsTo(TransactionCategory::class, 'category_id', 'category_id');
    }

    public function donation()
    {
        return $this->belongsTo(Donation::class, 'donation_id', 'donation_id');
    }

    public function relatedCase()
    {
        return $this->belongsTo(CaseModel::class, 'related_case_id', 'case_id');
    }

    public function relatedCampaign()
    {
        return $this->belongsTo(Campaign::class, 'related_campaign_id', 'campaign_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}