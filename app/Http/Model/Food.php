<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public $table = 'food';
    public $primaryKey = 'fid';
    public $guarded = [];
    public $timestamps = false;
}
