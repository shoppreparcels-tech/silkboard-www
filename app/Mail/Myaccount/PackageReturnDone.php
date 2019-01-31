<?php

namespace App\Mail\Myaccount;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PackageReturnDone extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($package)
    {
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
        $subject = 'Your Package '.$this->package->order_id.' has successfully left the Shoppre facility';

        return $this->view('myaccount.email.package.return_done')
            ->from($from_mail, $from_name)
            ->replyTo($from_mail, $from_name)
            ->subject($subject)
            ->with(['package' => $this->package]);
    }
}
