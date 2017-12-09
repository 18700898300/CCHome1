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

    public function food()
    {
        return $this->hasMany('App\Models\Home\Food','did','sid');
    }
}
