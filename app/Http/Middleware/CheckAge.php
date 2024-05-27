<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if ($request->age <= 12) {
            return redirect()->route('advanced.index')->with('message', 'Anda masih kanak-kanak');
        } else if ($request->age > 12 && $request->age <= 19) {
            return redirect()->route('advanced.index')->with('message', 'Anda remaja');
        } else if ($request->age > 19 && $request->age <= 59) {
            return redirect()->route('advanced.index')->with('message', 'Anda dewasa');
        } else {
            return redirect()->route('advanced.seniorcitizen')->with('message', 'Anda warga emas');
        }

        return $next($request);
    }
}
