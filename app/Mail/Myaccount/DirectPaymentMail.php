<?php

namespace App\Mail\Myaccount;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\DirectPayment;

class DirectPaymentMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($payment)
    {
        $this->payment = $payment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_mail = 'finance@cp.shoppre.com';
        $from_name = 'SHOPPRE.com';
        $subject = 'Payment | Shoppre Payment';

        return $this->view('myaccount.email.direct_payment.payreceived')
            ->from($from_mail, $from_name)
            ->replyTo($from_mail, $from_name)
            ->subject($subject)
            ->with([
                'name' => $this->payment->name,
                'payid' => $this->payment->id,
                'amount' => $this->payment->amount
        ]);
    }
}
