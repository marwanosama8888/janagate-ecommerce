<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductAccept extends Mailable
{
    use Queueable, SerializesModels;
    public $product_title;
    public $vendor_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($product_title,$vendor_name)
    {
        $this->product_title = $product_title;
        $this->vendor_name = $vendor_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.productAccept')->with([
            'product_title' => $this->product_title,
            'vendor_name' => $this->vendor_name,
        ]);
    }
}
