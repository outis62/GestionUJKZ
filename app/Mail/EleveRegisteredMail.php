<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EleveRegisteredMail extends Mailable
{
    use Queueable, SerializesModels;
    public $eleve;
    /**
     * Create a new message instance.
     */
    public function __construct($eleve)
    {
        $this->eleve = $eleve;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Bienvenue sur notre plateforme',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.eleve-registered-mail',
        );
    }
    public function build()
    {
        return $this->from('bulletinuniv@gmail.com', 'Bulletin-Univ')
            ->view('mail.eleve-register-mail');
    }
    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
