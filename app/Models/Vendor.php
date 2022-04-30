<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
/**
 * @property integer $id
 * @property string $company_name
 * @property string $email
 * @property string $phone
 * @property integer $country_id
 * @property integer $city_id
 * @property integer $area_id
 * @property string $password
 * @property boolean $activated
 * @property string $remember_token
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 */
class Vendor extends Authenticatable implements HasMedia
{
    use InteractsWithMedia;

    protected $guard = 'vendors';

    protected $table = 'vendors';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['company_name', 'email', 'phone', 'country_id', 'city_id', 'area_id', 'password', 'activated', 'remember_token', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * Get all of the products for the Vendor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
