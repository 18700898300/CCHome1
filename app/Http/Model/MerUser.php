<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class MerUser extends Model
{
    public $table = 'boss_info';
    public $primaryKey = 'bid';
    public $guarded = [];
    public $timestamps = false;
}
