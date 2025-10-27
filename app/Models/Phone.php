<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand', 'name', 'description', 'price', 'stock'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
