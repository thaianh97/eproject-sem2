<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //get username and role in session
        $inSessionUsername = $request->getSession()->get("username");
        $inSessionRole = $request->getSession()->get("role");
        if($inSessionUsername == null) {
            $request->session()->flash("msg", "Hãy đăng nhập để tiếp tục");
            return redirect("/login");
        }

        if($inSessionRole != 1) {
            $request->session()->flash("msg", "Hãy đăng nhập với tài khoản admin để tiếp tục");
            return  redirect("/login");
        } //role = 1 for adm
        return $next($request);
    }
}
