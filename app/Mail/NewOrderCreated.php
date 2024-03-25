<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewOrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $days;
    public $subject;

    public function __construct($details, $days = '4', $subject = 'LUXE Store - Order Status Notification')
    {
        $this->details = $details;
        $this->days = $days;
        $this->subject = $subject;
    }

    public function build()
    {
        return $this->subject($this->subject)->view('email-template.orderNotifyStatusNotCompleted');
    }
}
