<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

trait HasPermissionsTrait {

    public function hasPermissionTo($permission)
    {
        return $this->hasPermission($permission);
    }

    protected function hasPermission($permission)
    {
        $permissions    =   $this->getAllPermissions();
        return (bool) in_array($permission, $permissions);
    }

    protected function getAllPermissions()
    {
        return Cache::get(Session::get('user_id').'_permissions');
    }
}
