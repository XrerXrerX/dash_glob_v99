<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForbidRtpQueryStrings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $forbiddenPaths = ['rtp', 'paito', 'about', 'contact', 'tototools', 'gallery'];

        if (in_array($request->path(), $forbiddenPaths) && $request->getQueryString()) {
            return response('Dilarang Masuk gan cari route lain  :p', 403);
        }

        return $next($request);
    }
}
