<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class orderconfirm extends Mailable
{
    use Queueable, SerializesModels;

    public $orderId;
    public $orderNumber;
    public $userName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderId, $orderNumber,$userName)
    {
        $this->orderId =  $orderId ;
        $this->orderNumber =  $orderNumber ;
        $this->userName =  $userName ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = Order::where('id',$this->orderId)->with('items')->first();

        return $this->view('mail.order-confirm')->with([
            'orderItems'  => $data,
            'orderNumber'  => $this->orderNumber,
            'userName'    =>  $this->userName
        ]);
    }
}
