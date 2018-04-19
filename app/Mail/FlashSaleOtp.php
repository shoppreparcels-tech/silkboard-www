<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\SchedulePickup;

class FlashSaleOtp extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer,$otp)
    {
        $this->customer = $customer;
        $this->otp = $otp;
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
        $subject = 'Welcome to Shoppre Flash! - One Time Password';

        return $this->view('email.flash-sale.otp')
                    ->from($from_mail, $from_name)
                    ->replyTo($from_mail, $from_name)
                    ->subject($subject)
                    ->with([
                        'customer' => $this->customer,
                        'otp' => $this->otp
                    ]);
    }
}
