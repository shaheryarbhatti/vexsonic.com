<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomerConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $clientName,
        public string $clientService,
        public string $clientMessage,
        public string $submittedAt,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '✅ We Received Your Message — VexSonic',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.customer-confirmation',
        );
    }
}
