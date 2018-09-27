<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GetQuote extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->quote = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_mail = 'no-reply@cp.shoppre.com';
        $from_name = 'Shoppre';
        $subject = 'Get A Quote';

        return $this->view('email.quote')
            ->from($from_mail, $from_name)
            ->replyTo($from_mail, $from_name)
            ->subject($subject)
            ->with([
                'state' => $this->quote->state,
                'city' => $this->quote->city,
                'pin' => $this->quote->pin,
                'type' => $this->quote->type,
                'weight' => $this->quote->weight,
                'unit' => $this->quote->unit,
                'scale' => $this->quote->scale,
                'length' => $this->quote->length,
                'width' => $this->quote->width,
                'height' => $this->quote->height,
                'email' => $this->quote->email,
                'mobile' => $this->quote->mobile,
        ]);
    }
}
