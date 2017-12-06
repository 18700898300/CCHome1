<?php

namespace App\Http\Controllers\Admin\Comment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::paginate(2);
//        $foot =
        return view('admin/comment/index',compact('comments'));
    }
}
