<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use App\Http\Model\MerUser;
class MerregController extends Controller
{
    public function meregistere(){
        return view('admin/mer/merrege');
    }
    public function meregisterm(){
        return view('admin/mer/merregm');
    }
    public  function domeregisterm(Request $request){
//        dd(111);
        $input = $request->except('_token');
//        dd($input);
        $rule =[

//         'phone'=>'bail|required|regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9_]+$/u|between:1,20',
            'phone'=>'bail|required|regex:/^1[34578]\d{9}$/',
           'bpassword'=>'bail|required|between:6,18',
            'mcode'=>'bail|required',
            'code'=>'required',
        ];
        $mess = [
            'phone.required'=>'手机号码必须输入',
            'phone.regex'=>'手机号码不合法',
            'bpassword.between'=>'密码必须在6-18位之间',
            'bpassword.required'=>'手机号必须输入',
            'mcode.required'=>'短信验证码必须输入',
            'code.required'=>'验证码必须输入',
        ];

        $validator = Validator::make($input,$rule,$mess);
//        如果表单验证失败

        if($validator->fails()){
            return redirect('admin/meregisterm')
                ->withErrors($validator)
                ->withInput();//让页面输入的用户名保持在输入框
        }

        //验证码验证
        $code = $input['code'];
        if(strtolower($code)!=strtolower(session('code'))){
            return  redirect('admin/meregisterm')->with('errors','验证码错误')
                                                ->withInput();//有此步验证码错误返回登录页后才可以保持用户名
        }
//        dd(session('phone'));
//        dd($input);
//        var_dump($input);
//        dd(Session::get('phone'));
        if($input['mcode'] != session('phone')){
            return  redirect('admin/meregisterm')->with('errors','手机验证码错误')
                ->withInput();//有此步验证码错误返回登录页后才可以保持用户名
        }
        unset($input['code']);
        $meruser['bname'] = $input['phone'];
        $meruser['phone'] = $input['phone'];
        $meruser['bpassword'] = Crypt::encrypt($input['bpassword']);
        $res = MerUser::create($meruser);

        if($res){
            Session::put('meruser',$res);
//            此处必须用$res，若用$meruser，session中无bid；
            return redirect('home/reg')->with('msg','注册成功');
        }else{
            return('admin/meregisterm')->with('msg','注册失败，请重试！');
        };






    }

}
