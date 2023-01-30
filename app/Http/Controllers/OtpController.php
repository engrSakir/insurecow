<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Otp;
use Exception;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Auth;

class OtpController extends Controller
{
 function  login(){
     return view('auth.otpLogin');
 }


    function generate(Request $req){
        $req->validate([
            'phone'=>'required|exists:users,phone'
        ]);
        $otp= $this->generateOTP($req->phone);

        $otp->sendSMS($req->phone);

        return redirect()->route('otp.verification',[$otp->user_id])
            ->with('success','Otp has been sent on your mobile number');
    }

//    public function generate(Request $request)
//    {
//        $receiver_number = $request->phone;
//        $message = 'SMS From InsureCow...Log in OTP'.$this->otp;
//        try {
//            $account_sid = getenv("TWILIO_SID");
//            $auth_token = getenv("TWILIO_TOKEN");
//            $twilio_number = getenv("TWILIO_FROM");
//
//            $client = new Client($account_sid, $auth_token);
//            $client->messages->create($receiver_number,[
//                'from' => $twilio_number,
//                'body' => $message
//            ]);
//            return redirect()->back();
//        }catch (Exception $e) {
//            //
//        }
//    }
 function generateOTP($phone){
    $user= User::where('phone',$phone)->first();
    $otp=Otp::where('user_id',$user->id)->orderBy('id','desc')->first();
    $now= now();
    if ($otp && $now->isBefore($otp->expire_at)){
        return $otp;
     }
   return Otp::create([
        'user_id'=> $user->id,
        'otp'=>rand(123456 , 99999),
        'expire_at'=>$now->addMinutes(10),
    ]);
 }
 function verification($user_id){
     return view('auth.verification')->with([
         'user_id'=>$user_id
     ]);
 }
 function loginwithotp(Request $request){
     $request->validate([
         'otp'=>'required',
         'user_id'=>'required|exists:users,id'
     ]);
    $otp= Otp::where('user_id',$request->user_id)->where('otp',$request->otp)->first();
    $now= now();
    if(!$otp){
        return redirect()->back()->with('error','Your OTP is Not correct!');
    }
    elseif($otp && $now->isAfter($otp->expire_at)){
        return redirect()->back()->with('error','Your OTP has been Expired!');

    }

    $user=User::whereId($request->user_id)->first();
    if ($user){
        $otp->update([
            'expire_at'=>now()
        ]);
        Auth::login($user);
        return redirect('/home');
    }
     return redirect()->route('opt.login')->with('error','Your OTP is not correct');

 }



}

