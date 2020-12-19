<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SaveMade extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->from(env('MAIL_FROM_ADDRESS', 'test@test.xyz'), env('MAIL_FROM_NAMES', 'No-Reply'))
            ->replyTo($this->contact['email'])
            ->subject('Успешно асоцииране на Discord акаунт')
            ->markdown('emails.success');

        return $mail;
    }
}
