<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AfterSubmitMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       // Check if the user has submitted the registration form
       if (!session()->has('registration_success')) {
        // Redirect the user to the registration form page
        return redirect()->route('register')->with('error', 'Please submit the registration form first.');
    }

    // Continue with the request
    return $next($request);
    }
}
