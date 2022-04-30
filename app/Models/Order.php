<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $order_number
 * @property int $user_id
 * @property string $status
 * @property float $grand_total
 * @property int $item_count
 * @property boolean $payment_status
 * @property string $payment_method
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $city
 * @property string $country
 * @property string $post_code
 * @property string $phone_number
 * @property string $notes
 * @property string $created_at
 * @property string $updated_at
 */
class Order extends Model
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
    protected $fillable = ['order_number', 'user_id', 'status', 'grand_total', 'item_count', 'payment_status', 'payment_method', 'first_name', 'last_name', 'address', 'city', 'country', 'bank_transaction_id', 'phone_number', 'notes', 'created_at', 'updated_at'];

    /**
     * Get all of the items for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
