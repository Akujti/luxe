<?php

namespace App\Mail;

use App\Models\LuxeStore\LuxeStoreProduct;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LowStockMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $line;
    public $product;
    public function __construct(LuxeStoreProduct $product, $line)
    {
        $this->line = $line;
        $this->product = $product;
    }

    public function build()
    {
        return $this->subject('LUXE Store - Low Stock')->view('email-template.low-stock');
    }
}
