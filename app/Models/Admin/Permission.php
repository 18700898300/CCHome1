<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    // 系统后台 权限模型
    public $table = 'permission';
    public $primaryKey = 'pid';
    public $guarded = [];
    public $timestamps = false;
}
