<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReminderMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $detail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($detail)
    {
         $this->detail=$detail; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('masinis@pesankereta.com')//nama bebas dengan format email(nama pengirim)
        ->subject('Request reset password')//isi subject bebas
         ->view('emails.reminder')
         ->with([
             'detail'=>$this->detail,
           ]);

    }
}
