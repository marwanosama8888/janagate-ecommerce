<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $order_id
 * @property integer $product_id
 * @property int $quantity
 * @property float $price
 * @property string $created_at
 * @property string $updated_at
 */
class OrderItem extends Model
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
    protected $fillable = ['order_id','product_title','prop', 'product_id', 'quantity', 'price', 'created_at', 'updated_at'];

    /**
     * Get the orders that owns the OrderItem
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
