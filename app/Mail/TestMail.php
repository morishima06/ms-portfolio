<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $email;
    private $title;
    private $body;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
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
            ->from('example@example.com')
            ->to($this->email)
            ->view('mail.mail')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'body' => $this->body,
            ]);
    }
}
