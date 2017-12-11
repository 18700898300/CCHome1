<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MerregController extends Controller
{
    public function meregistere(){
        return view('admin/mer/merrege');
    }
    public function meregisterm(){
        return view('admin/mer/merregm');
    }
}
