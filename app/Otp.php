<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Exception;
use Twilio\Rest\Client;
class Otp extends Model
{
 protected $fillable=[
     'user_id',
     'otp',
     'expire_at'
 ];
 function  sendSMS($receiverNumber){
    $message='Login OTP is '.$this->otp;
     try {
        $account_id=getenv("TWILIO_SID");
        $auth_token=getenv("TWILIO_TOKEN");
        $twilio_number=getenv("TWILIO_FROM");
        $client=new Client($account_id, $auth_token);
        $client->message->create($receiverNumber,[
            'from'=>$twilio_number,
            'body'=>$message
        ]);
        info('SMS Sent Successfully');
     } catch (\Exception $e){
         info("Error:".$e->getMessage());
     }
 }
}
