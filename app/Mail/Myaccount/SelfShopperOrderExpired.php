<?php

namespace App\Mail\Myaccount;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SelfShopperOrderExpired extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $customer)
    {
        $this->order = $order;
        $this->customer = $customer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_mail = 'no-reply@cp.shoppre.com';
        $from_name = 'SHOPPRE.com';
        $subject = 'Your PS Order ID '.$this->order->reference_number.' (Cash on Delivery) has been cancelled';

        return $this->view('myaccount.email.shopper.self.order_expired')
            ->from($from_mail, $from_name)
            ->replyTo($from_mail, $from_name)
            ->subject($subject)
            ->with([
                'order' => $this->order,
                'customer' => $this->customer
            ]);
    }
}
