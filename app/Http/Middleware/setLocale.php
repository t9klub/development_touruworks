<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class setLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //check if locale session exists
        //if it does update

        $allowedLocales = ['en', 'id'];
        if(session()->has('locale')){
            $locale = session()->get('locale');
            if (!in_array($locale, $allowedLocales)) {
                $locale = 'en'; 
            }
            app()->setLocale($locale);
        }
        return $next($request);
    }
}
