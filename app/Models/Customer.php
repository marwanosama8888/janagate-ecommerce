<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $name
 * @property string $username
 * @property string $email
 * @property string $phone
 * @property string $password
 * @property boolean $activated
 * @property string $remember_token
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 */
class Customer extends Authenticatable
{
    protected $guard = 'customers';
    protected $table = 'customers';
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'name', 'username', 'email', 'phone', 'password', 'activated', 'remember_token', 'deleted_at', 'created_at', 'updated_at'];
}
