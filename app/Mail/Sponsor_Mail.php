<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Sponsor_Mail extends Mailable
{
    use Queueable, SerializesModels;

    public $sender_name, $link;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {   
        $this->sender_name = $data['sender_name'];
        $this->link = $data['link'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail_templates.sponsor', compact('sender_name', 'link'))
        ->from("contact@insidersuite.com", "InsiderSuite")
        ->subject('Invitaion sent from Insidersuite');
    }
}
