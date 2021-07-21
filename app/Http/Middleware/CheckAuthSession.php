<?php

namespace App\Http\Middleware;

use App\Http\Traits\Utils;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class CheckAuthSession
{
    use Utils;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('auth')) {
            $request->session()->flush();
            $message = new MessageBag($this->alert(env('WARNING_MESSAGE'), 'You are logged out! Please login to proceed.'));
            return redirect()->route('login.get')->withErrors($message);
        }
        return $next($request);
    }
}
