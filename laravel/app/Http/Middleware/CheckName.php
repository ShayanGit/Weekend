<?php

namespace App\Http\Middleware;

use Closure;

class CheckName
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
        if (substr($request->name,0,1) == 'a' || substr($request->name,0,1) == 'A') {
            return redirect('/');
        }
        return $next($request);
    }
}
