<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShipmentConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($shipment)
    {
        $this->shipment = $shipment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_mail = 'notifications@cp.shoppre.com';
        $from_name = 'SHOPPRE.com';
        $subject = 'We have received your order confirmation';

        return $this->view('email.shipment.confirmed')
            ->from($from_mail, $from_name)
            ->replyTo($from_mail, $from_name)
            ->subject($subject)
            ->with([
                'shipment' => $this->shipment
            ]);
    }
}
