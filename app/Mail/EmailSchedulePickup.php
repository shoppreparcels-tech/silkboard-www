<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\SchedulePickup;

class EmailSchedulePickup extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($SchedulePickup)
    {
        $this->data = $SchedulePickup;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_mail = 'pickups@cp.shoppre.com';
        $from_name = 'Shoppre';
        $subject = 'Schedule Pickup Request';        

        return $this->view('email.schedule-pickup')
                    ->from($from_mail, $from_name)
                    ->replyTo($from_mail, $from_name)
                    ->subject($subject)
                    ->with([
                        'data' => $this->data
                    ]);
    }
}
