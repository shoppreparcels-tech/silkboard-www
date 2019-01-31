<?php

namespace App\Mail\Myaccount;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReferralSuccess extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($info)
    {
        $this->info = $info;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $referrer = $this->info['referrer'];

        $customer = $this->info['customer'];

        return $this
            ->view('myaccount.email.referral.success')
            ->from(env("MAIL_FROM"), $customer->name)
            ->subject('Signed up to Shoppre.com with your referral')
            ->with([ 'referrer' => $referrer, 'customer' => $customer ]);
    }
}
