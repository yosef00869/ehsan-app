<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treasury extends Model
{
    use HasFactory;

    protected $table = 'treasury';
    protected $primaryKey = 'treasury_id';

    protected $fillable = [
        'name',
        'opening_balance',
    ];

    protected $casts = [
        'opening_balance' => 'decimal:2',
    ];

    // Relationships
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'treasury_id', 'treasury_id');
    }
}