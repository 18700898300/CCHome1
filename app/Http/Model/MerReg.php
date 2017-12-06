<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class MerReg extends Model
{
    public $table = 'shop';
    public $primaryKey = 'sid';
    public $guarded = [];
    public $timestamps = false;
}
