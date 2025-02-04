<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        $user = Session::get('user');

        if (!$user || $user->role !== $role) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
