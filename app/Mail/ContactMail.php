<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     * 
     * @return void 
     */
    public function __construct(public string $name , public string $email , public string $body)
    {
        //
    }

    /**
     * build the message.
     * 
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from portfolio')->replyTo($this->email)->markdown('emails.contact');
    }
}
