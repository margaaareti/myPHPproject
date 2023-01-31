<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

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

        if ($this->isAdmin($request)) {
            return $next($request);
        }

        abort(403, "you're not admin, shit");
        //throw new AuthorizationException();
        //return redirect()->route('message', ['action' => 'denied']);

    }


    protected function isAdmin (Request $request): bool
    {
        return false;
    }
}
