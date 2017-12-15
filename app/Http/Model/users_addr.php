<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class users_addr extends Model
{
    public $stable = 'users_addrs';
    public $primaryKey = 'id';
    public $guarded = [];
    public $timestamps = false;

    public function User()
    {
        return $this->belongsTo('App\Http\Model\User', 'uid', 'uid');
    }
}
