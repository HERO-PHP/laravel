<?php

namespace App\Http\Middleware;

use Closure;

class TestluyouMiddleware
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
        /*测试代码 start */
        //session laravel自由函数
        //session读取：session('uid');
        //session设值：session(['uid' => 'value']);
        
        session(['uid'=>10]);
        if(!session('name'))
        //if(!session('uid'))
        {
            return redirect('/login');//跳转
        }
        
        /*测试代码 end */
        
        
        return $next($request);
    }
}
