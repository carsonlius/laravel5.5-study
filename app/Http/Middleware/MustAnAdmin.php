<?php

namespace App\Http\Middleware;

use Closure;

class MustAnAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        // determine the user is logined and is an admin user then go to tne next step
        if ($request->user() && $request->user()->isAdmin()) {
            return $next($request);
        }

        return redirect('/home');
    }
}
