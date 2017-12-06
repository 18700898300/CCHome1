<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Shop_type extends Model
{
    //
    public $table = 'shop_type';
    public $primaryKey = 'tid';
    public $guarded = [];
    public $timestamps = false;

    public  function tree()
    {
        $cates = $this->orderBy('torder','asc')->get();
        //对分类数据进行格式化（排序、缩进）
        return $this->getTree($cates,0);
    }

    /**
     * 对分类数据进行格式化（排序、缩进）
     */
    public function getTree($Category,$pid)
    {
        //存放最终结果的数组
        $arr = [];
        foreach($Category as $k=>$v){
            //如果是当前遍历的类是一级类
            if($v->pid == $pid){
                //复制当前分类的名称给tnames字段
                $v->tnames = $v->tname;
                $arr[] = $v;

                //找当前一级类下的二级类
                foreach ($Category as $m=>$n) {
                    //如果一个分类的pid == $v这个类的id,那这个类就是$v的子类
                    if($n->pid == $v->tid){
                        $n->tnames = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$n->tname;
                        $arr[] = $n;
                    }
                }
            }
        }
        return $arr;
    }
}
