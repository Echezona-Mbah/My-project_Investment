<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User\PaystackspitController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Deposit;
use App\Models\register;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function deposit(Request $request){

        // $user = Auth::user();
        //  print_r($user);die();
    return view('users.deposit');
    }

    // public function verify($reference){
    //     $sec ="sk_test_b34d7b597f7160fe4e400aaf49bee41af976a3fe";
    //     $curl = curl_init();
    //         curl_setopt_array($curl, array(
    //         CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => "",
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_SSL_VERIFYHOST => 0,
    //         CURLOPT_SSL_VERIFYPEER => 0,
    //         CURLOPT_TIMEOUT => 30,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => "GET",
    //         CURLOPT_HTTPHEADER => array(
    //             "Authorization: Bearer $sec",
    //             "Cache-Control: no-cache",
    //         ),
    //         ));

    //         $response = curl_exec($curl);
    //         $err = curl_error($curl);
    //         curl_close($curl);
    //         $new = json_decode($response);


    //     return [$new];

    // }

    public function CreateSUbAccount(Request $request){

        if($request->isMethod('post')){

            unset($request['_token']);

            $data = $request->all();

            unset($request['email']);
            $pdata = $request->all();
            // print_r($pdata);die();


           $subAccount = PaystackspitController::CreateSubAccount($data);
        //    print_r($subAccount);die();
          $User = User::create([
            'name' => $data['business_name'],
            'subaccount_code' => $subAccount['data']['subaccount_code'],
            'email' => $data['email'],
            'password' => Hash::make($data['email']),
            ]);

            return redirect()->back()->with('success', 'Deposit was successfully add');


        };
        return view('users.deposit');

    }

    public function getSubAccount(){

        return User::all();


    }

    public function Initialize(Request $request){

        if($request->isMethod('post')){
        // return $request->all();
           $subaccount_code = $request->subaccount;
           $amount = intval( $request->amount = 100);


           $user = User::where('subaccount_code',$subaccount_code)->first();
           if($user){
            $email = $user->email;
            $data = [
                "email"=> $email,
                "amount"=> $amount,
                "subaccount_code"=> $subaccount_code,
            ];

            $payment = PaystackspitController::Initialize($data);
            //print_r($payment);die();
            if($payment['status']){
            return [
                "status"=> true,
                "message"=> $payment['message'],
                "url"=> $payment['data']['authorization_url'],
                "reference"=> $payment['data']['reference'],
            ];
            }else{
                return [
                "status"=> false,
                "message"=> $payment['message'],
                ];
            }

           }else{
            return [
                "status"=> false,
                "message"=> "user is not found",
            ];
           }


        }

        $users = User::all();
        return view('users.InitializePayment', compact('users'));



    }


    public function varifyPayment(Request $request){
        $reference = $request->reference;

        $payment = PaystackspitController::varifyPayment($reference);
        // print_r($payment);die();

        if($payment["data"]['status'] == "success"){
            return[
                'status' => true,
                'data' => $payment['data'],
                'message' => "payment successful",
            ];
        }else{
            return[
                'status' => false,
                'message' => "payment pending...",
                'statusText' => $payment['data']['status'],
            ];
        }

    }


    public function store(Request $request)
  {
     $request->validate([
         'username'=> 'required',
         'amount'=> 'required',
         'plan'=> 'required',
     ]);


     $register = User::where('username','=', ($request->username))->first();
     if($register){
        $user_id = $register ->id;
        $referral_id = $register ->referral_id;
     }else{
        return redirect()->back()->with('error', 'correct name are required');
     }
     if ($request->plan = 'Beginners Plan'  &&( $request->amount > 4999 ||  $request->amount  < 100) ){
        return redirect()->back()->with('error', 'Please Amount should be between $100-$4999');
     }
     if ($request->plan = 'Advanced Plan'  &&( $request->amount > 4999 ||  $request->amount  < 100) ){
        return redirect()->back()->with('error', 'Please Amount should be between $5000-$4999');
     }
     if ($request->plan = 'Promotion Plan'  &&( $request->amount > 4999 ||  $request->amount  < 100) ){
        return redirect()->back()->with('error', 'Please Amount should be between $100-$4999');
     }
     if ($request->plan = 'Professional Plan'  &&( $request->amount > 4999 ||  $request->amount  < 100) ){
        return redirect()->back()->with('error', 'Please Amount should be between $100-$4999');
     }
    //  $plan = $request->plan ;
    //  print_r($plan);die();


     $deposit = Deposit::create([
         'username' => $request->input('username'),
         'amount' => $request->input('amount'),
         'plan' => $request->input('plan'),
         'user_id' =>$user_id,
         'referral_id' =>$referral_id,
     ]);
// print_r($register);die();
return redirect()->back()->with('success', 'Deposit was successfully add');

 }






}
