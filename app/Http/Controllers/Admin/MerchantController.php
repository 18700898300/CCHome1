<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\MerUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
require_once app_path().'\Org\code\Code.class.php';//中间不能有空格
//require_once app_path().'\Org\code\Code.class.php';
use App\Org\code\Code;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

//修改Code.class.php中的命名空间,否则报错未定义的命名空间code

class MerchantController extends Controller
{
    /*返回商户登录页面
     *@author 齐亚敏
     *@date 2017.11.29
     * return view
     * */
    public function mlogin()
    {
        $title = '商户后台登录';
        return view('admin.login',['title'=>$title]);
    }


    public function domlogin(Request $request)
    {
//        dd(111);表单中有{{csrf_field()}}才可以提交到此处
//           1.获取数据
        $input = $request->except('_token');
//        dd($input);
//        2.对数据进行后台表单验证
//        Validator::make(要验证的数据,验证规则,提示信息)
            $rule =[
               'bname'=>'required|regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9_]+$/u|between:3,20',
                'bpassword'=>'required|between:3,20'
            ];
            $mess = [
              'bname.required'=>'用户名必须输入',
                'bname.regex'=>'用户名必须汉字字母数字下划线',
                'bname.between'=>'用户名必须在1-20之间',
                'bpassword.required'=>'密码必须输入',
                'bpassword.between'=>'密码必须在3-20之间'
            ];
        $validator = Validator::make($input,$rule,$mess);
//        如果表单验证失败

        if($validator->fails()){
            return redirect('admin/mlogin')
            ->withErrors($validator)
                ->withInput();//让页面输入的用户名保持在输入框
        }
//        3.登录逻辑
////        验证验证码是否正确
//        var_dump(strtolower($input['code']));
//        dd(strtolower(Session::get('code')));
        if(strtolower($input['code'])!=strtolower(Session::get('code'))){
            return redirect('admin/mlogin')->with('errors','验证码错误')
                ->withInput();//有此步验证码错误返回登录页后才可以保持用户名

        }

        //错误提示中的模板引擎语法必须正确如@
//        3.1判断是否有此用户

            $meruser= MerUser::where('bname',$input['bname'])->first();
//            dd($user);
            if(!$meruser){
                return redirect('admin/mlogin')->with('errors','用户名不存在');
            }
//        3.2密码是否正确
//    $user->bpass 与$input['bpass']


//        if(Crypt::decrypt($user->bpassword) != trim($input['bpassword']))
//        {
//            return redirect('admin/mlogin')->with('errors','密码不正确');
//        }
//        dd($input['bpassword']);
//        dd(Crypt::decrypt($user->bpassword));
        //必须加密存入数据库此处才可以使用解密方法
        if( Crypt::decrypt($meruser->bpassword) != trim($input['bpassword']) ){
            return redirect('admin/mlogin')->with('errors','密码不正确');
        }

//        4.登录成功将用户信息存入session
        Session::put('meruser',$meruser);
        return redirect('admin/merindex');
    }


    public function crypt()
    {

        $str = 666666;
        $bpassword = Crypt::encrypt($str);
       dd($bpassword);
    }


    public function yzm()
    {
     //dd(111);
        $code = new Code();
        $code ->make();
    }


    public function logout()
    {
        session()->flush();

        return redirect('admin/mlogin');
    }
}
