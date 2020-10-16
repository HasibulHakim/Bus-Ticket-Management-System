<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailTest extends Mailable
{
    use Queueable, SerializesModels;

        public $catch ='';


    /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct($catch)
    {
        $this->catch = $catch;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $catch =' ';
        return $this->view('ticket_mail',compact('catch'));
    }
}
