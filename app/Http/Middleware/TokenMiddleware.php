<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $token)
    {

        //dd($request,13,"sdsdd","[foo=>bar]");
        //dump($request);

        //$token = 'secret'; //config('example.token')
        //abort_if(5<1,500)
        //abort_unless(5<1,500)

        if ($request->input('token')=== $token) {
            return $next($request);
        }

        abort(403);


    }
}
