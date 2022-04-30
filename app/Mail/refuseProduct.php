<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class refuseProduct extends Mailable
{
    use Queueable, SerializesModels;
    public $username;
    public $productName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $productName)
    {
        $this->username = $username;
        $this->productName = $productName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.refuseProduct')
            ->with([
                'username' => $this->username,
                'productName' => $this->productName
            ]);
    }
}
