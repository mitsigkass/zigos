<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //this middleware checks if the user has an admin status or not.
        if(Auth::check()){
          //status is a field in the users tables.
          if(Auth::user()->status == '1') //0=USER, 1=ADMIN
          {
            return $next($request);

          }
          else{
            return redirect()->route('customers')->with('status', 'Access Denied! Access only to Administrators.');
          }
        }
        {
          return redirect()->route('customers')->with('status', 'Access Denied! Please login first.');
        }
    }
}
