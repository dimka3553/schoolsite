<?php

namespace App\Http\Middleware;

use App\Models\Tenant;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IdentifyTenantMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Detect if we are landlord situation
        if($request->getHost() === 'schoolsite.test') {
            return $next($request);
        }


        $subdomain = Str::of($request->getHost())->before('.')->toString();
        $tenant = Tenant::where('subdomain', $subdomain)->first();
        app()->singleton('tenant', fn () => $tenant);
        session()->put('tenant_id', $tenant->id);


        return $next($request);
    }
}
