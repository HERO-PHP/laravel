<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
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
        //$request->对象
        $path   = $request->path();
        echo '======'.$path.'------'."<br/>";
        
        /*测试代码 end */
        
        return $next($request);//进入下一层代码，下一个中间件
    }
}
