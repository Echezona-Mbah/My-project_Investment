<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposit;

class DayConter extends Controller
{
    public function counter(Request $request){
        // $register = Deposit::where('status','=', 'confirmed');
        // $register->increment('day_counter');


        $Beginner = Deposit::where('plan','=', 'Beginners Plan')->get();
        foreach ($Beginner as $Beginners) {
            // echo $Beginners;
        $amount =  $Beginners->amount;
        $didamount = ($amount/100)*4;
        $addamount = $amount + $didamount;
        $update = Deposit::where('status','=', 'confirmed')->where('plan','=', 'Beginners Plan')->update(['amount' => $addamount ]);
    }

        $Advanced = Deposit::where('plan','=', 'Advanced Plan')->get();
        foreach ($Advanced as $Advanceds) {
            // echo $Beginners;
        $amount =  $Advanceds->amount;
        $didamount = ($amount/100)*4;
        $addamount = $amount + $didamount;
        $update = Deposit::where('status','=', 'confirmed')->where('plan','=', 'Advanced Plan')->update(['amount' => $addamount ]);
    }


    }

    public function ref(Request $request){
        $register = Deposit::where('day_counter','<=',0)->first();
        $day =  $register->day_counter;
        $amount =  $register->amount;
        $plan =  $register->plan;
        $referral_id =  $register->referral_id;
        if($referral_id !== "null"){
            if ($plan == 'Beginners Plan' ){
                $amo = ($amount/100)*5;
            }elseif ($plan == 'Advanced Plan' ){
                $amo = ($amount/100)*5;
            }elseif ($plan == 'Promotion Plan' ){
                $amo = ($amount/100)*8;
            }elseif ($plan == 'Professional Plan' ){
                $amo = ($amount/100)*10;
            }elseif ($plan == 'Ultimate Plan' ){
                $amo = ($amount/100)*10;
            }
        }
        $update =  Deposit::where('status','=', 'confirmed')->where('plan',$plan)
                            ->findOrFail(['reff_bounc' => $amo ]);
        return $update;
    }

}
