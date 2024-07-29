<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'operator':
                    return redirect()->route('operator.dashboard');
                case 'lks':
                    return redirect()->route('lks.dashboard');
                default:
                    return redirect('/');
            }
        }
        return $next($request);
    }
}
