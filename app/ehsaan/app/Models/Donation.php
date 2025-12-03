<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $primaryKey = 'donation_id';

    protected $fillable = [
        'donor_id',
        'campaign_id',
        'case_id',
        'amount',
        'donation_type',
        'payment_method',
        'payment_reference',
        'tracking_status',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
    ];

    // Relationships
    public function donor()
    {
        return $this->belongsTo(User::class, 'donor_id');
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id', 'campaign_id');
    }

    public function case()
    {
        return $this->belongsTo(CaseModel::class, 'case_id', 'case_id');
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'donation_id', 'donation_id');
    }
}