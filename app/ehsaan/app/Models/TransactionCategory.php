<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionCategory extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';

    protected $fillable = [
        'category_name',
        'category_type',
    ];

    // Relationships
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'category_id', 'category_id');
    }
}