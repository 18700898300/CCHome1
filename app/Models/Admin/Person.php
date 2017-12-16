<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'user';
    public $primaryKey = 'uid';
    public $guarded = [];
    public $timestamps = false;
    public $hidden = ['password'];

}