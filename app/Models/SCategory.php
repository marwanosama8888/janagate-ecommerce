<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SCategory extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';

    protected $fillable = ['category_id','name','slug','created_at','updated_at'];

    /**
     * Get the categories that owns the SubCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
 /**
  * The products that belong to the SubCategory
  *
  * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
  */
 public function products()
 {
     return $this->belongsToMany(Product::class,'subcategory_product','subcategory_id','product_id');
 }
}
