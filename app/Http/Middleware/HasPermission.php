<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HasPermission
{
    public function handle($request, Closure $next, $permission = null)
    {
        if($permission !== null && !$request->user()->can($permission)) {
            abort(403, 'User does not have the right permissions');
        }
        return $next($request);
    }
}
