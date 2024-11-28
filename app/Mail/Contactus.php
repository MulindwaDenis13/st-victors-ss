<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactus extends Mailable
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
        
        return $this->from(widget(1)->extra_field_3, widget(1)->extra_field_1)
			->to($this->data->email_address, $this->data->first_name)
			->subject('New Contact Us Form')
			->view('email_temps.contactus')
			->with('contactus',$this->data);
    }
}
