<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MerregController extends Controller
{
    public function meregister(){
        return view('admin/mer/merreg');
    }
}
