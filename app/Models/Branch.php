<?php
namespace App\Models;

class Branch
{
    protected $fillable = ['agent_id', 'business_name', 'business_prefix', 'address1', 'address2', 'city', 'state_province', 'post_code', 'country_iso_code',
        'country_name', 'currency_iso_code', 'currency_name', 'mobile_phone', 'work_phone', 'email', 'website','time_zone'];
}
