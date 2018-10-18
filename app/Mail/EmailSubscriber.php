<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\SchedulePickup;

class EmailSubscriber extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct()
    {
//        $this->contact = $request;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_mail = 'info@alert.shoppre.com';
        $from_name = 'Shoppre';
        $subject = 'Thank you for Subscribing!';

        return $this->view('email.subscribe')
                    ->from($from_mail, $from_name)
                    ->replyTo($from_mail, $from_name)
                    ->subject($subject)
                    ->with([
                        'data' => ''
                    ]);
    }
}
