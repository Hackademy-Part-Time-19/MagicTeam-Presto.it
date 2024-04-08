<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocaleSession
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->has('locale')) {
            $request->session()->put('locale', 'it');
        }

        return $next($request);
    }
}
