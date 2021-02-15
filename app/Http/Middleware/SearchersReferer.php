<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SearchersReferer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (preg_match('/google|bing|gclid/i', $request->header('referer'))) {
            Session::put('fromSearchers', true);
        } else {
            Session::put('fromSearchers', false);
        }

        return $next($request);
    }
}
