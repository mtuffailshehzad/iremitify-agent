<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\HasPermissionsTrait;

class User extends Authenticatable
{
    use HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'agent_user_id', 'first_name', 'last_name', 'house_number', 'street_address', 'city', 'state_province', 'post_code', 'country_iso_code',
        'country_name', 'mobile_phone', 'email', 'time_zone', 'role_name', 'agent_id', 'branch_id'
    ];
}
