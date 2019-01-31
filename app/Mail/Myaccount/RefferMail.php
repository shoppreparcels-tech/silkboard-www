<?php

namespace App\Mail\Myaccount;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RefferMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($code, $customer, $friendmsg,$referrer_url)
    {
        $this->code = $code;
        $this->customer = $customer;
        $this->friendmsg = $friendmsg;
        $this->referrer_url = $referrer_url;

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

        $titleExplode = explode(". ", $this->customer, 2);
        if(sizeof($titleExplode) == 2){
            $title = $titleExplode[0];
            $nameRest = $titleExplode[1];
        }else{
            $title = "";
            $nameRest = $titleExplode[0];
        }

        $last_name = (strpos($nameRest, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $nameRest);
        $first_name = trim( preg_replace('#'.$last_name.'#', '', $nameRest ) );

        $subject = 'Your friend, '.$first_name.' has referred you to SHOPPRE.com';

        return $this->view('myaccount.email.reffer')
                    ->from($from_mail, $from_name)
                    ->replyTo($from_mail, $from_name)
                    ->subject($subject)
                    ->with([
                        'customer' => $this->customer,
                        'code' => $this->code,
                        'friendmsg' => $this->friendmsg,
                        'refferer_url' => $this->referrer_url
                    ]);
    }
}
