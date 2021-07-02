<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role != "admin"){
            /* 
            silahkan modifikasi pada bagian ini
            apa yang dilakukan jika rolenya tidak sesuai
            */
            return redirect()->to('user');
        }
        return $next($request);
    }
}
