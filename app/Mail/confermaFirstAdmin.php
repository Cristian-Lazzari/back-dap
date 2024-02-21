<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConfermaFirstAdmin extends Mailable
{
    use Queueable, SerializesModels;
    public $newContact;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($newContact)
    {
        $this->newContact = $newContact;


    }


    public function build()
    {
        return $this->subject('Oggetto dell\'email')
            ->view('emails.confermaFirstAdmin');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}