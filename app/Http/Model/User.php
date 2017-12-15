<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   public $stable = 'user';
   public $primaryKey = 'uid';
   public $guarded = [];
   public $timestamps = false;

    public function users_addr()
    {
        return $this->hasMany('App\Http\Model\users_addr','uid','uid');
    }
}
