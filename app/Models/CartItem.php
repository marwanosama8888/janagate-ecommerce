<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CartItem extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'user_id', 'size', 'color', 'qty', 'price'];
}
