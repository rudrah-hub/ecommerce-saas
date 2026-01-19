<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ResolveTenant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $host = $request->getHost();

        $tenant = Cache::remember(
            "tenant:{$host}",
            300,
            fn () => Tenant::where('domain', $host)->firstOrFail()
        );

        app()->instance('tenant', $tenant);

        return $next($request);
    }

}
