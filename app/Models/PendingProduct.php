<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property integer $id
 * @property integer $vendor_id
 * @property string $name
 * @property string $slug
 * @property string $category
 * @property string $sub_category
 * @property string $description
 * @property boolean $active
 * @property int $price
 * @property string $info
 * @property string $material
 * @property int $weight
 * @property string $widthHeight
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class PendingProduct extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'pending_products';
    protected $casts = [
        'value' => 'array'
     ];

    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['vendor_id', 'product_title', 'slug', 'category', 'sub_category', 'description', 'active', 'price',  'prop', 'value', 'info', 'material', 'weight', 'widthHeight', 'created_at', 'updated_at','deleted_at'];
}
