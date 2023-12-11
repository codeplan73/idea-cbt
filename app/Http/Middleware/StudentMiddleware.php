<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class StudentMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->guard('student')->check()) {
            return $next($request);
        }

        return redirect('/student-login'); // Redirect unauthorized students to the login page
    }
} 