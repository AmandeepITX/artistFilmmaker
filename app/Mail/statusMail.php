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
      return $this->from('info@theahap.com', 'Artist Replugged')
            ->subject(Str::title($this->users->user_type) . ' ' . Str::title($this->users->status) . ' Email')
            ->view('emails.status-mail');
    }
}
