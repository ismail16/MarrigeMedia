<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $subject;
    public $message;
    public $full_name;
    public function __construct($subject, $message, $full_name)
    {
        $this->subject = $subject;
        $this->message = $message;
        $this->full_name = $full_name;
    }

    public function build()
    {
        return $this->subject($this->subject)->view('mail.sendmail')->with('body', $this->message)->with('full_name', $this->full_name);
    }
}
