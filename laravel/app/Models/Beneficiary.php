<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'national_id', 'address', 'family_size', 'income_level', 'urgency_level', 'status'
    ];
}


