<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    // 前台首页商户模型
    public $table = 'shop';
    public $primaryKey = 'sid';
    public $guarded = [];
    public $timestamps = false;


//    public function food()
//    {
//        return $this->hasMany('App\Models\Home\Food','fid','sid');
//    }
    public function cate(){
        return $this->belongsTo('App\Models\Admin\Shop_type','tid','tid');
    }
    public function flink(){
        return  $this->hasMany('App\Http\Model\Flink\Flink','sid','sid');
    }
}
