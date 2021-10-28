<?php

namespace App\Mail\Contact;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AnswerMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $message;
    public $name;
    public $content;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $name, $content)
    {
        $this->message = $message;
        $this->name = $name;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.contact.answer');
    }
}
