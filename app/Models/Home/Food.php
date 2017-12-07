<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    // 菜品模型
    public $table = 'food';
    public $primaryKey = 'fid';
    public $guarded = [];
    public $timestamps = false;

}
