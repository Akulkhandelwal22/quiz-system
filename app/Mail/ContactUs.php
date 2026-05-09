<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable {
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData) {
        $this->formData = $formData;
    }

    public function envelope(): Envelope {
        return new Envelope(subject: 'New Quiz System Query from ' . $this->formData['name']);
    }

    public function build() {
        return $this->view('mail.contact')->with(['data' => $this->formData]);
    }
}