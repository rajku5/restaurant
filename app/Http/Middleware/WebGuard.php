<?php

namespace App\Http\Middleware;

use Closure;
use Ap\Http\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class WebGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        $usertype = Auth::user()->usertype;

        if($usertype =='1')
        {
            return $next($request);

        }
        else
        {
            return redirect('/no-access');
        }

    }
}
