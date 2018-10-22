<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiftCard;
use App\Mailers\Mailer;

class PaymentController extends Controller
{
    protected $mailer;
    function __construct(Mailer $mailer){
        $this->mailer = $mailer;
    }

    private function send_mail($email, $details, $subject,$template) {
        $view = 'mail_templates.'.$template;
        $subject = $subject;
        $data['data'] = $details;
        $this->mailer->sendTo($email, $subject, $view, $data);
    }
    
    public function gift_payment()
    {
        \Stripe\Stripe::setApiKey("sk_test_SKNIW4hfkit6CCUtOJwJr42S");

        $token = $_POST['stripeToken'];
        $amount = $_POST['amount'];
        $email = $_POST['email'];
        
        $customer = \Stripe\Customer::create(array(
            'email' => $email,
            'source' => $token
        ));
        
        $gift = GiftCard::where('email', $email)->first();
        if ($gift->customer_id != "") {
                $charge = \Stripe\Charge::create(array(
                'amount' => $amount,
                'currency' => 'aud',
                'customer' => $customer->id,
            ));
        } else {
            $charge = \Stripe\Charge::create(array(
                'amount' => $amount,
                'currency' => 'aud',
                'customer' => $customer->id,
            ));

            $gift = GiftCard::where('email', $email)->first();
            $gift->customer_id = $customer->id;
            $gift->save();
        }

    }
}
