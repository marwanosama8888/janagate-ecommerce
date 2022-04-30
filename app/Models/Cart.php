<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Cart extends Model
{
    protected $table = 'carts';
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'count', 'total_price', 'created_at', 'updated_at'];
}
