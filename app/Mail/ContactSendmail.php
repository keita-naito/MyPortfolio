<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendmail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $name;
    public $tel;
    public $email;
    public $body;
    /**
     * Create a new message instance.
     *
     * @return void
     */
     
    public function __construct($inputs)
    {
        $this->name = $inputs['name'];
        $this->tel = $inputs['tel'];
        $this->email= $inputs['email'];
        $this->body = $inputs['body'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
     
    public function build()
    {
        return $this
            ->from('atiek.nn.xx@gmail.com')
            ->subject('自動送信メール')
            ->view('contact.mail')
            ->with([
                'name' => $this->name,
                'tel' => $this->tel,
                'email' => $this->email,
                'body' => $this->body,
            ]);
    }
}
