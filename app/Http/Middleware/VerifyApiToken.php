<?php

namespace App\Http\Middleware;

use Closure;

class VerifyApiToken
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
        if(empty($request->session()->get('jwt_token')))
        {
            return redirect('/logout');
        }
        return $next($request);
    }
}
