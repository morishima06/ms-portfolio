<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactmail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $email;
    private $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->name = $request->get('name');
        $this->email = $request->get('email');
        $this->body = $request->get('message');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from($this->email, 'Morishima-Shunya-Portfolio')
            ->to(config('app.gmail_user_name'))
            ->subject('お問い合わせ')
            ->view('mail.contact_mail')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'body' => $this->body,
            ]);
    }
}
