<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestyinshiController extends Controller
{
    //test方法必须加上请求方式，如加get，即get请求
    public function getTest(Request $request)
    {
                //是否get或post请求             请求方式                请求路径            请求全路径url           请求的ip             端口                       
        return $request->isMethod('get') ? $request->method().'--'.$request->path().'--'.$request->url().'--'.$request->ip().'--'.$request->getPort() : 'no';
    }
    
    public function getShow()
    {
        return view('test/show');
    }
    
    public function postSub1(Request $request)
    {           
       var_dump($request->has('ip'));//判断是否设置==isset()
       var_dump($request->all());//所有参数
       var_dump($request->header('cookie'));//获取头信息，举例：获取头信息的cookie
       
       var_dump($request->file('pfile'));
        //检测是否有上传
       if($request->hasFile('pfile')) {
           $res = $request->file('pfile')->move('./upload', time().'.jpg');//移动文件，参数：文件夹(public文件中)，文件名
           var_dump($res);
       }
       
       
       
            //接收传过来的值    字段名 默认值
        return $request->input('user',2).'--'.$request->input('pwd');
    }
    
    
    //cookie操作
    public function getWcookie()
    {
        //cookie 写入   名      值    时间(分钟)
        \Cookie::queue('abc', '123', 20);//第一种方法
        //return response('')->withCookie('cookie_test', '333', 20);//第二种方法
    }
    //cookie操作
    public function getRcookie(Request $request)
    {
        //cookie 写入   名      值    时间(分钟)
        return \Cookie::get('abc');//第一种方法
       // return $request->cookie('cookie_test');//第二种方法
    }
    
    //
    public function getResponce()
    {
        $ary    = array(
            array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4),
            array('a' => 5, 'b' => 2, 'c' => 3, 'd' => 4)
        );
        //return response()->json($ary);//返回json，相当于json_encode();
        //return response()->download('./upload/1481952601.jpg');//下载
        
        //跳转
        //return redirect('http://www.baidu.com');//跳转
        //return redirect('/tt/show');//跳转
        
        
        //加载模板
        //return response()->view('/test/flash');
        //return view('/test/flash');
        //return view('test.flash');
        return view('test.show', array('arr' => $ary, 'user' => '111', 'html' => '<h1>aa</h1>'));
        
        //设置响应头
        //return response('')->header('name', '123');
        
        
        
        
    }
}
