<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference_id',
        'username',
        'amount',
        'wallet',
        'user_id'
    ];

    public function register()
    {
        return $this->belongsTo(register::class);
    }
}
