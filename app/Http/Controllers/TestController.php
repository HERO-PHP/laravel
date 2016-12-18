<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    public function getTest($id = '')
    {
        return $id ? $id : '+++';
    }
    
    //闪存
    public function flashTest()
    {
        return view('test/flash');
    }
    public function flashValue(Request $request)
    {
       // var_dump($request->all());
        $request->flash();//闪存，将传过来的数据闪存，只能用一次(即写入一次用一次，在用没有了，需重写即可在用)
        return back();//退回到上一个页面
    }
    public function getFlash()
    {
        //自定义闪存     字段名     值
        \Session::flash('user1', '123');
        return session('user1');  //读取自定义闪存
        
        //return old('user');//读取普通闪存
    }
    

}
