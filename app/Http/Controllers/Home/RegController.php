<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegController extends Controller
{
    public function reg()
    {
        return view('home/reg');
    }

    public function doreg()
    {

    }
}
