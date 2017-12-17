<?php

namespace App\Http\Controllers\Admin\Comment;

use App\Http\Model\Comment\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::paginate(1);
        $food = Comment::with('food')->get();//必须写get否则只能查询模型

//        dd($food);
        return view('admin/comment/index',compact('comments','food'));
    }
}
