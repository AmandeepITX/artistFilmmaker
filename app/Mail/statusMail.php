<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class statusMail extends Mailable
{
    use Queueable, SerializesModels;


    public $users;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($users)
    {
        $this->users = $users;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->users->status == 'approved'){
            $status = 'Approved';
        }else{
            $status = 'Unapproved';
        }

        if($this->users->user_type == 'filmmaker'){
           $subject = "Filmmaker Profile $status";
        }else{
            $subject = "Artist Profile $status";
        }
      return $this->from('info@artistreplugged.com')
            ->subject($subject)
            ->view('emails.status-mail');
    }
}
