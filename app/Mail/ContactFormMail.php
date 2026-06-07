<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $clientName,
        public string $clientEmail,
        public string $clientPhone,
        public string $clientService,
        public string $clientMessage,
        public string $submittedAt,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '🔔 New Contact Request from ' . $this->clientName . ' — VexSonic',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
        );
    }
}
