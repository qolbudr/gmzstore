<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfActive
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
        if(config('config.active'))
        {
            return $next($request);
        }
        
        return redirect()->to('not-found');

    }
}
?>