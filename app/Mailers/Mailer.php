<?php
namespace App\Mailers;
use Mail;

class Mailer{

	public function sendTo($email, $subject, $view, $data = [] )
	{
		Mail::send($view, $data, function($message) use($email, $subject){
      $message->to($email)->subject($subject);
    });
		// dd(Mail::failures());
	}
}
