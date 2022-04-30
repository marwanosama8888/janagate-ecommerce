<?php

namespace App\Models;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
        protected $table = 'products';

    protected $keyType = 'integer';


    protected $casts = [
        'color' => 'array',
        'size' => 'array'
    ];

    protected $fillable = ['vendor_id', 'name', 'description', 'active', 'price', 'info', 'material', 'weight', 'widthHeight','slug'];


    /**
     * The category that belong to the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function subcategories()
    {
        return $this->belongsToMany(SCategory::class, 'subcategory_product', 'product_id', 'subcategory_id');
    }
    /**
     * Get all of the productProps for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productProps()
    {
        return $this->hasMany(Prop::class);
    }
}
