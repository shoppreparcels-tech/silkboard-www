<?php

namespace App\Mail\Myaccount;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PackageExpiring extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($custPackages)
    {
        foreach ($custPackages as $package) {
            $packs[] = $package->order_id;
        }

        $this->custPackages = $custPackages;
        $this->packString = implode(", ", $packs);
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
        $subject = 'Ship soon to avoid storage fees | Package(s) '.$this->packString;

        return $this->view('myaccount.email.package.expiring')
            ->from($from_mail, $from_name)
            ->replyTo($from_mail, $from_name)
            ->subject($subject)
            ->with([
                'custPackages' => $this->custPackages
            ]);
    }
}
