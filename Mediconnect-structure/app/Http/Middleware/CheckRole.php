<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */


    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();

        if (! $user || $user->role !== $role) {
            return redirect()->route('dashboard')->with('error', 'Unauthorized access');
        }

        return $next($request);
    }
}
