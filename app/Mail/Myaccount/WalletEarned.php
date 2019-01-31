<?php

namespace App\Mail\Myaccount;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WalletEarned extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer, $amount, $description)
    {
        $this->customer = $customer;
        $this->amount = $amount;
        $this->description = $description;
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
        $subject = 'Check Out Your Shoppre Wallet';

        return $this->view('myaccount.email.wallet_earned')
                    ->from($from_mail, $from_name)
                    ->replyTo($from_mail, $from_name)
                    ->subject($subject)
                    ->with([
                        'customer' => $this->customer,
                        'amount' => $this->amount,
                        'description' => $this->description
                    ]);
    }
}
