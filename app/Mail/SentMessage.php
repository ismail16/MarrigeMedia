<?php
namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SentMessage extends Mailable {
  use Queueable, SerializesModels;

  public $user;
  public $msg;

  public function __construct($user, $msg) {
    $this->user = $user;
    $this->msg = $msg;
  }

  public function build() {

    return $this->subject('Recieved Message')->view('mail.sentMessage')->with('user', $this->user)->with('msg', $this->msg);
  }
}
