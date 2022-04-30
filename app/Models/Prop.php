<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prop extends Model
{
    use HasFactory;
    protected $table = 'product_props';
    protected $casts = [
        'value' => 'array',
    ];
    protected $fillable = ['product_id', 'key', 'value'];

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
