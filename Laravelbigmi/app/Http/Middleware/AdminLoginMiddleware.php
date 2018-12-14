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
        /*if ($request->session()->has('name')){
            // 如果存在进入下一个请求
        return $next($request);
        }else{
            // 不存在转去登录界面
            return redirect('/adminlogin');
        }*/

        if ($request->session()->has('name')) {
            // 4.用访问模块的控制器和方法与权限列表做对比
             //获取访问模块控制器和方法名
            $actions=explode('\\', \Route::current()->getActionName());
            //或$actions=explode('\\', \Route::currentRouteAction());
            $modelName=$actions[count($actions)-2]=='Controllers'?null:$actions[count($actions)-2];
            $func=explode('@', $actions[count($actions)-1]);
            //控制器名字
            $controllerName=$func[0];
            //方法
            $actionName=$func[1];
            // echo $controllerName.":".$actionName;
            //4.获取访问模块控制器和方法 和用户权限列表做对比
            //获取登录用户的所有权限列表

            $nodelist=session('nodelist');

            // echo $controllerName.':'.$actionName;
            // dd($nodelist[$controllerName]);
            if(empty($nodelist[$controllerName])||!in_array($actionName,$nodelist[$controllerName])){
                //提示
                // return redirect("/admin")->with('error','抱歉,您没有权限访问该模块,请联系超级管理员');
                return redirect('/welcome')->with('error','抱歉,您没有权限访问该模块,请联系超级管理员');
            }
            //执行下个请求
            return $next($request);
        }else{
            // 跳转到登录界面
            return redirect('/adminlogin/create');
        }
    }
}
