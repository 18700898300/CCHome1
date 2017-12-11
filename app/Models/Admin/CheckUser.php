<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CheckUser extends Model
{
    // 系统后台 注册管理员模型
    public $table = 'check_user';
    public $primaryKey = 'id';
    public $guarded = [];
    public $timestamps = false;
}
