<?php

namespace App\Http\Traits;
use Mail;
use Log;

trait SendEmail
{
	public function _sendEmail($recipient, $mailable = null, $options = array()){
		
		try{
			Mail::to($recipient)->send($mailable);
		}catch(\Exception $e){
			Log::info("Unable to send email( ".get_class($mailable)." ) to $recipient due to ".$e->getMessage());
			//dd($e->getMessage()); die;
		}
	}
	
	public static function _sendEmailByModel($recipient, $mailable = null, $options = array()){
		try{
			Mail::to($recipient)->send($mailable);
		}catch(\Exception $e){
			//echo $e->getMessage();die;
		}
	}
}