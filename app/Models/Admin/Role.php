<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // 系统后台 角色模型
    public $table = 'role';
    public $primaryKey = 'rid';
    public $guarded = [];
    public $timestamps = false;

    /*
     * 通过角色模型查找关联的权限模型
     */
    public function permission()
    {
        return $this->belongsToMany('App\Models\Admin\permission', 'role_permission', 'rid', 'pid');
    }
}
