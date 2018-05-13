<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;


    public $user;
    public $event;
    public $payment;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $event, $payment)
    {
        $this->user = $user;
        $this->event = $event;
        $this->payment = $payment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.invoice');
    }
}