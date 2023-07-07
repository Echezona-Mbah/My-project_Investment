<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'amount',
        'plan',
       'day_counter',
       'referral_id',
       'user_id'
    ];

    protected $table ='deposits';

    protected $primaryKey ='id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
