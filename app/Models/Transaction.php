<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Phone;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'phone_id', 'quantity', 'total_price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function phone()
    {
        return $this->belongsTo(Phone::class);
    }
}
