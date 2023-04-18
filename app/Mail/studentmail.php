<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class studentmail extends Mailable
{
    use Queueable, SerializesModels;
  
    public $details_student;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details_student)
    {
        $this->details_student = $details_student;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Unihouse Bookings')
        ->view('studentmail');
    }
}
