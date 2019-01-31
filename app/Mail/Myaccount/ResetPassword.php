<?php

namespace App\Mail\Myaccount;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Customer;

class ResetPassword extends Mailable
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
        $from_mail = 'hello@shoppre.com';
        $from_name = 'Shoppre';
        $subject = 'Reset Password';
        $link = route('customer.reset', [$this->customer->token, $this->customer->email]);

        return $this->view('myaccount.email.reset')
                    ->from($from_mail, $from_name)
                    ->replyTo($from_mail, $from_name)
                    ->subject($subject)
                    ->with([
                        'name' => $this->customer->name,
                        'link' => $link,
                    ]);
    }
}
