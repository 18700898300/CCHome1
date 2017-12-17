<?php

namespace App\Http\Controllers\Admin\xtAdmin;

use App\Models\Admin\AdminUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class PasswordController extends Controller
{
    /*
     * 加载修改密码页面
     * $id 当前管理员的ID
     */
    public function edit($id)
    {
//        通过管理员ID获得管理员用户信息
        $adminUser = AdminUser::find($id);
//        dd($adminUser);
        return view('admin/xtAdmin/adminUser/pass',compact('id'));
    }

    /*
     * 执行修改
     */
    public function update(Request $request)
    {
//        1. 获得提交数据
        $input = $request->except('_token');
//        dd($input['id']);

//        2.对数据进行后台表单验证
//        验证规则
        $rule = [
            "password"=>'required|between:2,20'
        ];

        $mess = [
            'password.required'=>'新密码必须输入',
            'password.between'=>'新密码必须在2到20位之间'
        ];

        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('admin/xtAdmin/password/edit/'.$input['id'])
                ->withErrors($validator)
                ->withInput();
        }

//        3. 判断两次密码是否一致
        if($input['password'] != $input['re_password']){
            return redirect('admin/xtAdmin/password/edit/'.$input['id'])->with('msg','新密码与确认密码不一致');
        };

//        4. 判断输入旧密码是否正确
        $user = AdminUser::find($input['id']);
//        dd($user);
        if(Crypt::decrypt($user->password) != $input['oldpassword']){
            return redirect('admin/xtAdmin/password/edit/'.$input['id'])->with('msg','旧密码不正确,不能执行修改');
        }

//        5. 执行修改
        $res = $user->update(['password'=>encrypt($input['password'])]);

//        6. 判断是否修改成功
        if($res){
            return redirect('admin/xtAdmin/info')->with('msg','修改密码成功');
        }else{
            return redirect('admin/xtAdmin/password/edit/'.$input['id'])->with('msg','修改密码失败');
        }

    }

}
