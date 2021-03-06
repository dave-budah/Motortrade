<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Policies\UserPolicy;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\HttpException;

class IsAdmin
{

    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->user()->can(UserPolicy::ADMINROUTE, User::class)) {
            return $next($request);
        }

       throw new HttpException(403, 'You are not authorized to access this page.');
    }

}
