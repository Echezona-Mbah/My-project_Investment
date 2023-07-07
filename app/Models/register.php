<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
     protected $fillable = [
     'name',
     'username',
     'email',
     'password',
    'register_id',
    'referral_id',
 ];

 public function deposit()
 {
     return $this->hasMany(Deposit::class);
 }


 public function Withdraw()
 {
     return $this->hasMany(Withdraw::class);
 }



}
