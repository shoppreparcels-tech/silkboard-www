<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEnquiry extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->contact = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_mail = 'notifications@cp.shoppre.com';
        $from_name = 'Shoppre';
        $subject = 'Contact Enquiry';

        return $this->view('email.contact')
            ->from($from_mail, $from_name)
            ->replyTo($from_mail, $from_name)
            ->subject($subject)
            ->with([
                'firstname' => $this->contact->firstname,
                'lastname' => $this->contact->lastname,
                'email' => $this->contact->email,
                'locker' => $this->contact->locker,
                'phone' => $this->contact->phone,
                'country' => $this->contact->country,
                'reason' => $this->contact->reason,
                'msg_content' => $this->contact->msg_content,
        ]);
    }
}
