<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailForUs extends Mailable
{
    use Queueable, SerializesModels;

    private $title;
    private $msg;
    private $asunto;


    /**
     * Create a new message instance.
     * @param $title
     * @param $subject
     * @param $msg
     */
    public function __construct($title, $asunto, $msg)
    {
        $this->title = $title;
        $this->asunto = $asunto;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contacto con Contador de palabras online')
            ->view('emails.contact.contactForUs', [
                'title' => $this->title,
                'asunto' => $this->asunto,
                'msg' => $this->msg
            ]);
    }
}
