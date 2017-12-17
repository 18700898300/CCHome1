<?php

namespace App\Http\Controllers\Admin\xtAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function orderlist()
    {
        return view('/admin/xtadmin/order/orderlist');
    }
}
