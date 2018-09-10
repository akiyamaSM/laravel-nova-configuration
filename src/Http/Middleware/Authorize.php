<?php

namespace Inani\LaravelNovaConfiguration\Http\Middleware;

use Inani\LaravelNovaConfiguration\LaravelNovaConfiguration;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(LaravelNovaConfiguration::class)->authorize($request) ? $next($request) : abort(403);
    }
}
