<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;
    public $isAdmin;

    /**
     * Create a new message instance.
     */
    public function __construct($formData, $isAdmin = false)
    {
        $this->formData = $formData;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        // Összefűzzük a kereszt- és vezetéknevet a tárgyhoz
        $fullName = ($this->formData['lastName'] ?? '') . ' ' . ($this->formData['firstName'] ?? '');
    
        return new Envelope(
            subject: $this->isAdmin ? 'Új üzenet: ' . $fullName : 'NeoLogic - Visszaigazolás',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: $this->isAdmin ? 'emails.admin' : 'emails.client',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
