<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class IsAdmin
{
   
    /**
     * Handle an incoming request.
     *
     * @param Request  $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		if(!isset(auth()->user()->id) || ( isset(auth()->user()->id) && !auth()->user()->is_admin )){
			return redirect(route('login'));
		}
        return $next($request);
    }

}