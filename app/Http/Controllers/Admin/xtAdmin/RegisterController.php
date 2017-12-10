<?php

namespace App\Http\Controllers\Admin\xtAdmin;


use App\Models\Admin\CheckUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

/*
 * 系统后台管理员注册控制器
 */
class RegisterController extends Controller
{
    /*
     * 返回一个注册页面
     */
    public function register()
    {
        return view('admin/xtAdmin/register');
    }

    /*
     * 处理注册页面提交的数据
     */
    public function doregister(Request $request)
    {
//        1. 获取表单提交的数据
        $input = $request->except('_token');
//        dd($input);
//        2.对数据进行后台表单验证
//        验证规则
        $rule = [
            'aname'=>'required|regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9_]+$/u|between:2,20',
            "password"=>'required|between:2,11',
            "phone"=>"required|regex:/^1[357][0-9]{9}$/"
        ];

        $mess = [
            'name.required'=>'管理员名称必须输入',
            'name.regex'=>'管理员名称必须汉字字母下划线',
            'name.between'=>'管理员名称必须在2到20位之间',
            'password.required'=>'密码必须输入',
            'password.between'=>'密码必须在2到11位之间',
            'phone.required'=>'手机号码必须输入',
            'phone.regex'=>'手机号码格式不对'
        ];

        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('admin/xtAdmin/register')
                ->withErrors($validator)
                ->withInput();
        }

//        3. 判断验证码是否正确
        if(strtolower($input['code']) != strtolower(Session::get('code'))){
            return redirect('admin/xtAdmin/register')->with('errors','验证码不正确');
        }
//        4. 判断两次密码是否一致
        if($input['password'] != $input['re_password']){
            return redirect('admin/xtAdmin/register')->with('errors','两次密码不一致');
        }
        unset($input['re_password']);
        unset($input['code']);
        $input['password'] = Crypt::encrypt($input['password']);
//        5. 加入数据库,等待审核
        $res = CheckUser::create($input);
//        6. 判断是否成功
        if($res){
            return redirect('home/index')->with('msg','申请成功,请1小时后登录;若登录不成功,请重新申请!!!');
        }else{
            return redirect('admin/xtAdmin/register')->with('msg','申请失败,请重新申请!!!');
        }
    }

}
