<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    // 系统后台 管理员模型
    public $table = 'admin_user';
    public $primaryKey = 'id';
    public $guarded = [];
    public $timestamps = false;

    /*
     * 通过管理员模型查找关联的角色模型
     */
    public function role()
    {
        return $this->belongsToMany('App\Models\Admin\Role', 'adminuser_role', 'id', 'rid');
    }

}
