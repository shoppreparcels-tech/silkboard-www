<?php

namespace App\Mail\Myaccount;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShipmentForConfirm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($shipment,$payment_method,$payment_url)
    {
        $this->shipment = $shipment;
        $this->pay_method = $payment_method;
        $this->payment_url = $payment_url;
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
        $subject = 'Submit Payment | Your shipment is packed and weighed | Shipment ID '.$this->shipment->order_id;

        return $this->view('myaccount.email.shipment.forconfirm')
            ->from($from_mail, $from_name)
            ->replyTo($from_mail, $from_name)
            ->subject($subject)
            ->with([
                'shipment' => $this->shipment,
                'pay_method' => $this->pay_method,
                'payment_url'=> $this->payment_url
            ]);
    }
}
