<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $stable = 'order';
    public $primaryKey = 'oid';
    public $guarded = [];
    public $timestamps = false;

    public function order_detail()
    {
        return $this->hasMany('App\Http\Model\Order_detail','oid','oid');
    }
//    public function order_detail()
//    {
//        return $this->belongsTo('App\Http\Model\Order_detail','oid','oid');
//    }
}
