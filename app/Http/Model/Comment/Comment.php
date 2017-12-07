<?php

namespace App\Http\Model\Comment;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table = 'comments';
    public $primaryKey = 'cid';
    public $guarded = [];
    public $timestamps = false;
    public function  food(){
        return $this->belongsTo('App\Models\Home\food','fid','fid');
    }
}
