<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RefferMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($code, $customer, $friendmsg)
    {
        $this->code = $code;
        $this->customer = $customer;
        $this->friendmsg = $friendmsg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_mail = 'no-reply@cp.shoppre.com';
        $from_name = 'Shoppre';
        $subject = 'Reffer A Friend - Refferal Code';

        return $this->view('email.reffer')
                    ->from($from_mail, $from_name)
                    ->replyTo($from_mail, $from_name)
                    ->subject($subject)
                    ->with([
                        'customer' => $this->customer,
                        'code' => $this->code,
                        'friendmsg' => $this->friendmsg
                    ]);
    }
}
