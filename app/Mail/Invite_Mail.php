<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Invite_Mail extends Mailable
{
    use Queueable, SerializesModels;

    public $sender_name, $text, $content;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {   
        $this->sender_name = $data['sender_name'];
        $this->text = $data['message'];
        $this->content = $data['content'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail_templates.invite', compact('sender_name', 'text', 'content'))
        ->from("contact@insidersuite.com", "InsiderSuite")
        ->subject('Invitation Mail');
    }
}
