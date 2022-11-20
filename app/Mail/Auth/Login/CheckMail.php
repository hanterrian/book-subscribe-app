<?php

namespace App\Mail\Auth\Login;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CheckMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public function __construct(private readonly string $randomKey)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Check',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.auth.login.check',
            with: ['randomKey' => $this->randomKey]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
