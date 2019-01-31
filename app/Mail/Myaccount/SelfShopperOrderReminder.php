<?php

namespace App\Mail\Myaccount;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SelfShopperOrderReminder extends Mailable
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
        $subject = 'Please submit payment in order to receive parcels on Cash-On- Delivery | PS Order ID '.$this->order->reference_number;

        return $this->view('myaccount.email.shopper.self.pay_reminder')
            ->from($from_mail, $from_name)
            ->replyTo($from_mail, $from_name)
            ->subject($subject)
            ->with([
                'order' => $this->order,
                'customer' => $this->customer
            ]);
    }
}
