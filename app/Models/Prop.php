<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prop extends Model
{
    use HasFactory;
    protected $table = 'product_props';
    protected $fillable = ['product_id', 'key', 'value'];
    protected $casts = [
        'value' => 'array',
    ];

    /**
     * Get the products that owns the ProductProp
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
}
