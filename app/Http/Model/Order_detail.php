<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    public $stable = 'order_detail';
    public $primaryKey = 'oid';
    public $guarded = [];
    public $timestamps = false;
}
