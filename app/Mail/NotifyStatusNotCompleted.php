<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyStatusNotCompleted extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    public $days;

    public function __construct($details, $days = '4')
    {
        $this->details = $details;
        $this->days = $days;
    }

    public function build()
    {
        return $this->subject('LUXE Store - Order Status Notification')->view('email-template.orderNotifyStatusNotCompleted');
    }
}
