<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $stable = 'order';
    public $primaryKey = 'oid';
    public $guarded = [];
    public $timestamps = false;
}
