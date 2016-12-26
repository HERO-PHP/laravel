<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SqlController extends Controller
{
    
    //增删改查curd
    public function getDb()
    {
        //查询
        //$res    = \DB::select("select * from test where id = 9");  //DB前加\或 use DB(引入)
        //$res    = \DB::select("select * from test where id = ?", [1]);
        /*
        //查询多条
        $res    = \DB::table('test')->where('id', '>', 10)->get();
        //查询单条
        $res    = \DB::table('test')->where('id', '>', 10)->first();
        //只获取name字段
        $res    = \DB::table('test')->where('id', '>', 10)->lists('name');
        //多个字段
        $res    = \DB::table('test')->where('id', '>', 10)->select('id', 'name')->get();
        //where条件 或 or
        $res    = \DB::table('test')->where('id', '=', 10)->orWhere('id', '>', 13)->select('id', 'name')->get();
        //where条件 between and
        $res    = \DB::table('test')->where('name', '=', 111)->whereBetween('id', [5,10])->select('id', 'name')->get();
        //where条件 in
        $res    = \DB::table('test')->whereIn('id', [5, 9,10])->select('id', 'name')->get();
        //order by 
        $res    = \DB::table('test')->whereIn('id', [5, 9,10])->orderBy('id', 'desc')->select('id', 'name')->get();
        
        $res    = \DB::table('test')->where('id', '>', 10)->count();
        $res    = \DB::table('test')->where('id', '>', 10)->max('num');
         */
        $res    = \DB::table('test')->where('id', '>', 10)->avg('num');
        
        
        //插入
        //$res    = \DB::insert("insert into test (name) values ('erer')");
        //$res    = \DB::insert("insert into test (name) values (?)", ['qwqwqwqw']);
        /*
        //单条
        $res    = \DB::table('test')->insert(
                [
                    'name'  => '123',
                    'num'   => '100',
                ]
                );
        //多条
        $res    = \DB::table('test')->insert(
                [
                    ['name'  => '1231','num'   => '100',],
                    ['name'  => '1232','num'   => '100',],
                    ['name'  => '1233','num'   => '100',]
                ]
                );
        
        //获取插入id
        $res    = \DB::table('test')->insertGetId(
                [
                    'name'  => '123',
                    'num'   => '100',
                ]
                );
        
        dd($res);
        */
        
        //修改
        //$res    = \DB::update("update test set name = '123123' where id = 8");
        //var_dump($res);
        //$res    = \DB::update("update test set name = ? where id = ?",['123123' , 9]);
        /*
        $res    = \DB::table('test')->where('id', '=', '15')->update([
            'name'  => '111',
            'num'   => 200,
        ]);
        
        //多条件
        $res    = \DB::table('test')->where([
            'name' => '123','num' => '10'
        ])->update([
            'name'  => '111',
            'num'   => 200,
        ]);
        */
        
        //刪除
        //$res    = \DB::update("delete from test where id = 1");
        //var_dump($res);
        //$res    = \DB::update("delete from test where id = ?",[2]);
        
        /*
        $res    = \DB::statement("
CREATE TABLE IF NOT EXISTS `test2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1");
        */
        
        /*
         //操作多个数据库
         $res   = \DB::connection('slaver')->select('sql');
         */
        
        
        var_dump($res);
    }
     
    
    //事务
    public function getTran()
    {
        //开启事务
        \DB::beginTransaction();
        
        $res    = \DB::update('update test2 set num = num - 10 where id = 100');
        
        $res2   = \DB::update('update test set num = num + 10 where id = 3');
        
        if($res && $res2) {
            
            //事务提交
            \DB::commit();
            echo 'ok';
        } else {
            //回滚
            \DB::rollback();
            echo 'no';
        }
        
        
    }
    

    //测试自定义文件 详见app/Test/Test.php
    public function getDefines()
    {
        love();
    }
    
    //调用model
    public function getModel()
    {
        $test2  = new \App\Test2();
        var_dump($test2->getS());
    }
    
}
