<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnrollmentSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $enrollmentData;

    public function __construct($enrollmentData)
    {
        $this->enrollmentData = $enrollmentData;
    }

    public function build()
    {
        return $this->subject('Course Enrollment')->view('emails.enrollment-submitted');
    }
}
