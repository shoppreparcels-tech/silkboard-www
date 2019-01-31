<?php

namespace App\Mail\Myaccount;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class LoyaltyEarned extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer, $points, $reason)
    {
        $this->customer = $customer;
        $this->points = $points;
        $this->reason = $reason;
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
        $subject = 'Thanks For Being A Loyal Shippr';

        return $this->view('myaccount.email.loyal_earned')
                    ->from($from_mail, $from_name)
                    ->replyTo($from_mail, $from_name)
                    ->subject($subject)
                    ->with([
                        'customer' => $this->customer,
                        'points' => $this->points,
                        'reason' => $this->reason
                    ]);
    }
}
