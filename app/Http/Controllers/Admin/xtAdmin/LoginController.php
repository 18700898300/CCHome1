<?php

namespace App\Http\Controllers\Admin\xtAdmin;

use App\Models\Admin\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;


/*
 * 系统后台登录控制器
 */
class LoginController extends Controller
{
    /*
     * 系统后台登录
     * 显示登录页面
     */
    public function login()
    {
        return view('admin/xtAdmin/login');
    }


    /**
     * 处理登录逻辑
     */
    public function doLogin(Request $request)
    {
//        dd(11111);
//        1.获取用户提交的登录数据
        $input = $request->except('_token');
//        dd($input);
//        2.对数据进行后台表单验证
//        验证规则
        $rule = [
            'aname'=>'required|regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9_]+$/u|between:5,20',
            "password"=>'required|between:2,20'
        ];

        $mess = [
            'aname.required'=>'管理员名称必须输入',
            'aname.regex'=>'管理员名称必须汉字字母下划线',
            'aname.between'=>'管理员名称必须在5到20位之间',
            'password.required'=>'密码必须输入',
            'password.between'=>'密码必须在2到20位之间'
        ];

        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('admin/xtAdmin/login')
                ->withErrors($validator)
                ->withInput();
        }
//        3.登录逻辑
//          3.0 验证验证码是否正确

//        3.1 判断是否有此用户

        $user = AdminUser::where('aname',$input['aname'])->first();
//        dd($user);
        if(!$user){
            return redirect('admin/xtAdmin/login')->with('errors','用户不存在');
        }

//        3.2密码是否正确
        if( Crypt::decrypt($user->password) != trim($input['password']) ){
            return redirect('admin/xtAdmin/login')->with('errors','密码不正确');
        }

//        4.登录成功，将用户信息保存到session中，用于判断用户是否登录以及获取登录用户信息
        Session::put('user',$user);
//        dd($user);
        return redirect('admin/xtAdmin/index');
    }

}
