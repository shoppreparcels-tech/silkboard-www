<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Customer;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_mail = 'notifications@cp.shoppre.com';
        $from_name = 'Shoppre';
        $subject = 'Acitvate Shoppre Account';
        $link = route('customer.verify', [$this->customer->email_token, $this->customer->email]);

        return $this->view('email.verification')
                    ->from($from_mail, $from_name)
                    ->replyTo($from_mail, $from_name)
                    ->subject($subject)
                    ->with([
                        'name' => $this->customer->name,
                        'email' => $this->customer->email,
                        'link' => $link,
                    ]);
    }
}
