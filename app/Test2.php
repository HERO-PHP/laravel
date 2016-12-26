<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test2 extends Model
{
    ////-m 建的模型潜规则——模型限定
    //模型所对应的默认的表名是在模型后面加s，如果模型后面有s，则表名跟模型名称相同
    //如：Test   =>  tests ,Goods => goods, Country => counties
    //默认主键是id
    //时间字段：created_at  updated_at
    
    public function getS()
    {
        $res    = \DB::table('test')->where('id', '>', 10)->avg('num');
        var_dump($res);
        return 'aaaaaa';
    }
}
