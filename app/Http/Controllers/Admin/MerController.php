<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MerController extends Controller
{
    public function merindex()
    {
       return view('admin/merindex');
    }
    public function info()
    {
        return view('admin/info');
    }
}
