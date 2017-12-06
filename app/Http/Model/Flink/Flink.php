<?php

namespace App\Http\Model\Flink;
use Illuminate\Database\Eloquent\Model;


class Flink extends Model
{
    public $table = 'flink';
    public $primaryKey = 'id';
    public $guarded = [];
    public $timestamps = false;
    public function flinkt(){
        //注意路径以及反斜线
//        return $this->hasOne('App\Http\Model\Flinkt\Flinkt','fltid','fltid');
        return $this->belongsTo('App\Http\Model\Flinkt\Flinkt','fltid','fltid');
    }
}
