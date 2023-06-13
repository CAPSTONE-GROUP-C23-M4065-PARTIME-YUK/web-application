<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if (auth()->check() && auth()->user()->role === 'administrator') {
            return $next($request);
        }

        if (auth()->check() && auth()->user()->role === 'employer' || auth()->check() && auth()->user()->role === 'jobseeker') {
            return redirect()->to('/')->with('error', 'Access denied.');
        }

        abort(403, 'Unauthorized');
    }
}
