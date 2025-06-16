<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LeadAdminNotification extends Mailable
{
    use Queueable, SerializesModels;
	public $data;
	
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		$notify_to = [];
        return $this->subject('Product Lead | '.env('APP_NAME'))
                    ->cc(array_merge($notify_to, explode(',',env('NOTIFY_TO_EMAIL_ADDRESSES',''))))
                    ->view('emails.enquire-lead');
    }
}
