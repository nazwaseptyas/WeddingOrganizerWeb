<?php

// app/Http/Middleware/AuthMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            return $next($request);
        }

        return redirect()->route('login')->with('error', 'Anda harus login untuk mengakses halaman ini');
    }
}