<?php

namespace App\Http\Middleware;

use Closure;

class NewMiddleware
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

        if($request->route('post') != 'posts') {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
