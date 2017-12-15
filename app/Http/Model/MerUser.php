<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class MerUser extends Model
{
    public $table = 'boss_info';
    public $primaryKey = 'bid';
    public $guarded = [];
    public $timestamps = false;

//    查询shop模型
    public function shop()
    {
        return $this->hasOne('App\Models\Home\Shop','bid','bid');
    }
}
