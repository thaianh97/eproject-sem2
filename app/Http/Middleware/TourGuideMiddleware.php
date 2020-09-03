<?php

namespace App\Http\Middleware;

use Closure;

class TourGuideMiddleware
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

        if($inSessionRole != 2) {
            $request->session()->flash("msg", "Hãy đăng nhập với tài khoản hướng dẫn viên để tiếp tục");
            return  redirect("/login");
        } //role = 2 for tour guide.

        return $next($request);
    }
}
