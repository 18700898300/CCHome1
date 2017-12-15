<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Food_label extends Model
{
    // 菜品标签模型
    public $table = 'food_label';
    public $primaryKey = 'lid';
    public $guarded = [];
    public $timestamps = false;

    /*
    * 通过菜品标签模型查找关联的菜品模型
    */
    public function food()
    {
        return $this->hasMany('App\Models\Home\Food',  'lid', 'lid');
    }
}
