<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $path, $content, $subject;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {   
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->path = $data['attached_file'];
        $this->content = $data['content'];
        $this->subject = $data['subject'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail_templates.contact_us', compact('name', 'email', 'path', 'content', 'subject'))
        ->from("contact@insidersuite.com", "InsiderSuite")
        ->subject('Contact US');
    }
}
