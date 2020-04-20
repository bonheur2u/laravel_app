<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
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
        $hello = 'Hello! This is Middleware!!';
        $bye = 'Good-bye, Middleware...';
        $data = [
            'hello'=>$hello,
            'bye'=>$bye
        ];
        $request->merge($data);
        return $next($request);
    }
}