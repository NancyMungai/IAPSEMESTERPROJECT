<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTwoFactorAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    { 
        if ($request->user() && ! $request->user()->two_factor_secret) 
        {
            return redirect()->route('two-factor.enable'); // Redirect to 2FA setup
        }

        return $next($request);
    }
}
