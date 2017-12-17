<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Model\MerUser;
class MerController extends Controller
{
    public function merindex()
    {
//        dd(0);
        $meruser = Session::get('meruser');
//        dd($meruser);
        $shop = MerUser::with('shop')->where('bid',$meruser['bid'])->get();
//        dd($shop);
       return view('admin/merindex',compact('shop'));
    }
    public function info()
    {
        return view('admin/info');
    }
}
