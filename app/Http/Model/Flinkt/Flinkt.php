<?php

namespace App\Http\Model\Flinkt;

use Illuminate\Database\Eloquent\Model;

class Flinkt extends Model
{
    public $table = 'flink_type';
    public $primaryKey = 'fltid';
    public $guarded = [];
    public $timestamps = false;

    public function tree()
    {
        //this指向当前类的指针
        $flinkts = $this->orderBy('flt_order')->get();
//        dd($flinkts);
//        对分类数据进行格式化(排序,缩进)
        return $this->getTree($flinkts,0);
    }
    public function getTree($Flinktgory,$pid){
        //存放最终结果的数组
        $arr = [];
        foreach($Flinktgory as $k => $v){
//            如果当前遍历的类是一级类,
            if($v->flt_pid == $pid){
//                复制当前分类的名称给fltype_names字段
                $v->fltype_names = $v->fltype_name;//字段名写对$fltypt_names和fltpid错误(会出现null),和数据库不符合
                $arr[]=$v;
                //找当前一级类下的二级类
                foreach($Flinktgory as $m => $n){
//                    如果一个分类的pid 是$v这个类的id,那这个类就是$v的子类
                    if($n->flt_pid == $v->fltid ){  //$n和$v区分意义
                    $n->fltype_names ="|-------".$n ->fltype_name;//若为&nbsp有分号;,否则不解析
                    $arr[] = $n;
                    }
                }
            }
        }
//        dd($arr);
        return $arr;
    }

}

/*[
       {'id':1,'cate_name':'新闻','pid':0},
       {'id':2,'cate_name':'娱乐','pid':0},
       {'id':3,'cate_name':'体育新闻','pid':1},
       {'id':4,'cate_name':'军事新闻','pid':1},
       {'id':5,'cate_name':'八卦娱乐','pid':2}
   ]*/

/*
    {'id':1,'cate_name':'新闻','pid':0,'cate_names':'新闻'},
    {'id':3,'cate_name':'体育新闻','pid':1,'cate_names':'|----体育新闻'},
    {'id':4,'cate_name':'军事新闻','pid':1,'cate_names':'|----体育新闻'},
    {'id':2,'cate_name':'娱乐','pid':0,'cate_names':'娱乐'},
    {'id':5,'cate_name':'八卦娱乐','pid':2,'cate_names':'|----八卦娱乐'}*/
