<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistributionTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'aid_type', 'created_by', 'assigned_to', 'status', 'scheduled_at'
    ];
}


