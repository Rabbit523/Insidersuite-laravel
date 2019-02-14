<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Alert_Mail extends Mailable
{
    use Queueable, SerializesModels;

    public $destination;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {   
        $this->destination = $data;        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail_templates.alert', compact('destination'))
        ->from("contact@insidersuite.com", "InsiderSuite")
        ->subject('Reminder for your trip in '.$this->destination);
    }
}
