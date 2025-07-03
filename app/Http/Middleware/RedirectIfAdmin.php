<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Jika user sudah login DAN dia adalah admin
        if (Auth::check() && Auth::user()->is_admin) {
            // Kembalikan dia ke panel admin
            return redirect('/admin');
        }

        // Jika bukan admin, biarkan dia melanjutkan ke tujuannya
        return $next($request);
    }
}