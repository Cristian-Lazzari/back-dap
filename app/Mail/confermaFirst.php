<?php 

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class confermaOrdine extends Mailable
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
            ->view('emails.confermaFirst');
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
