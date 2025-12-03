<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistributionRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id', 'beneficiary_id', 'confirmed_by', 'confirmed_at', 'gps_lat', 'gps_lng', 'photo_path', 'signature_path', 'status'
    ];
}


