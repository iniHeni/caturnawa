<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class smcSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $uploadData;
    public function __construct()
    {
        $this->uploadData = $uploadData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Upload SMC Submission',
            from: 'royalsquad9@gmail.com',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.uploadsmc',
        );
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
