<?php

namespace App\Http\Middleware;

use Closure;

class AdminLoginMiddleware
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
        // 判断session中是否有name存在
        if ($request->session()->has('name')){
            // 如果存在进入下一个请求
        return $next($request);
        }else{
            // 不存在转去登录界面
            return redirect('/adminlogin');
        }
    }
}
