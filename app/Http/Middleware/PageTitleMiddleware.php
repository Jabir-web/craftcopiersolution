<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class PageTitleMiddleware
{
    /**
    //  * good 
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     
    public function handle(Request $request, Closure $next): Response
    {
        $titles = [
            
            'aboutpage' => 'About Us',
      
        ];

        $routeName = Route::currentRouteName();
        View::share('pageTitle', $titles[$routeName] ?? 'Craft Copier Solution');

        return $next($request);
        
    }
  



      
}
