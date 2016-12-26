<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//打印sql
Event::listen('illuminate.query', function($query){
 var_dump($query);   
});

Route::group([],function(){//组

    Route::get('/', function () {
        return view('welcome');
    });


    //开启rewrite
    Route::get("/test/{id}", function ($id) {
        return "123____{$id}";
    });
    Route::get('/admin/user', function () {
        return "/admin/user";
    });


    Route::get('/form', function () {
        return view("form/form");
    });
    Route::post('/post', function () {
        var_dump($_POST);
        return "/post";
    });


    Route::get('/putform', function () {
        return view("form/put");
    });
    Route::put('/put', function () {
        return "/put";
    });

    Route::get('/delform', function () {
        return view("form/del");
    });
    Route::delete('/del', function () {
        return "/delete";
    });

    //别名
    Route::get('/admin/index/user', [
        'as'    => 'ulist',
        'uses'  => function () {
            echo route('ulist');//通过别名创建完整url
        }
    ]);
    

    Route::get('/404', function () {
        abort(404);
    });
    
    
    Route::get('/login', function () {
        return '111login1111111';
    });
    
    Route::get('/setting', [
        'middleware'    => 'login_1',
        'uses'          => function () {
            echo 'setting';
        }
    ]);
  
    //控制器
    //当用户请求/controller/t路径时，会执行TestController下的getTest方法
    Route::get('/controller/t','TestController@getTest');
    Route::get('/t/{id}','TestController@getTest');
    
    Route::get('/controllertest', [
        'middleware'    => 'login_1',
        'uses'          => 'TestController@getTest',
    ]);
    
    //隐式控制器  如果是tt开头的路径，都交给TestyinshiController实现
    //http://laravel123.com/tt/test   test方法名
    Route::controller('tt','TestyinshiController');
    
    //闪存
    Route::get('/flash_test','TestController@flashTest');
    Route::post('/flash_value','TestController@flashValue');
    Route::get('/getflash','TestController@getFlash');
    
    //数据库操作
    Route::controller('sql', 'SqlController');
});