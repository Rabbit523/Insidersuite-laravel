<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SponsorSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $sponsored_name, $voucher_no;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {   
        $this->sponsor = $data['sponsored_name'];
        $this->voucher_no = $data['voucher_no'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail_templates.sponsor_success', compact('sponsored_name', 'voucher_no'))
        ->from("contact@insidersuite.com", "InsiderSuite")
        ->subject('Congratulation you received $75 AUD off your next trip.');
    }
}
