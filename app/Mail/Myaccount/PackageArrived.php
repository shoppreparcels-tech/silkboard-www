<?php

namespace App\Mail\Myaccount;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PackageArrived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer, $package)
    {
        $this->customer = $customer;
        $this->package = $package;
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
        $subject = 'Your package is in your locker | Package ID '.$this->package->order_id;

        return $this->view('myaccount.email.package.arrived')
            ->from($from_mail, $from_name)
            ->replyTo($from_mail, $from_name)
            ->subject($subject)
            ->with([
                'name' => $this->customer->name,
                'order_id' => $this->package->order_id,
                'seller' => $this->package->seller,
                'weight' => $this->package->weight,
                'items' => $this->package->items,
                'locker' => $this->customer->locker
        ]);
    }
}
