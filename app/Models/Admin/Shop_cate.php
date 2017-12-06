<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

/*
 * 系统后台商户分类模型
 */
class Shop_cate extends Model
{
    // 关联的表
    public $table = 'shop_type';
//    定义主键
    public $primaryKey = 'tid';
//    定义时间戳
    public $timestamps = false;
//    不允许修改的字段
    public $guarded = [];
}
