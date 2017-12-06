<?php

namespace App\Http\Model\Config;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    public $table = 'config';
    public $primaryKey = 'conf_id';
    public $guarded = [];
    public $timestamps = false;
}
