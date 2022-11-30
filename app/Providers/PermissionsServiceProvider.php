<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class PermissionsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return false
     */
    public function boot()
    {
        try {
            $permissions    =   Cache::get(Session::get('user_id').'_permissions');
            if (count($permissions) > 0)
            {
                foreach ($permissions as $permission)
                {
                    Gate::define($permission, function ($user) use ($permission) {
                        return $user->hasPermissionTo($permission);
                    });
                }
            }
        } catch (\Exception $e) {
            report($e);
            return false;
        }

        //Blade directives
        Blade::directive('permission', function ($permission) {
            return "if(auth()->check() && auth()->user()->hasPermissionTo({$permission})) :";
        });

        Blade::directive('endpermission', function ($permission) {
            return "endif;";
        });
    }
}
