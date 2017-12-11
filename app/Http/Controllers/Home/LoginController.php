<?php

namespace App\Http\Controllers\Home;
use App\Http\Model\User;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;


use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


/*
 * 前台登录
 *
 * */
class LoginController extends Controller
{
    public function login()
    {
        return view('Home.login');
    }
    public function login2()
    {
//        dd (1111);
        return view('Home.login2');
    }
    public function yzm()
    {
        $code = new Code();
        $code->make();
    }

    // 验证码生成
    public function captcha($tmp)
    {
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(220, 210, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        \Session::flash('code', $phrase);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
    }



    //执行登录
    public function dologin(Request $request)
    {
  //  dd(1111);
        //1.获取用户提交的登录数据,
        $input = $request->except('_token');
//     dd($input);
//        $res = \DB::table('users')->insert(
//            ['uname' => $input['uname'], 'password' => $input['password']]
//        );
        //2.对数据进行后台表单验证
        $rule = [
            'uname'=>'required|regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9_]+$/u|between:5,20',
            "password"=>'required|between:3,20'
        ];
        $mess = [
            'uname.required'=>'用户名必须输入',
            'uname.regex'=>'用户名必须汉字字母下划线',
            'uname.between'=>'用户名必须在5到20位之间',
            'password.required'=>'密码必须输入',
            'password.between'=>'密码必须在5到20位之间'
        ];

        $validator = Validator::make($input,$rule,$mess);
        //如果表单验证失败,
        if($validator->fails()){
            return redirect('home/login')->withErrors($validator)->withInput();
        }

//        //3.登录逻辑
        //3.1 验证验证码是否正确
        if( $input['code'] !=  Session::get('code')) {
            return redirect('home/login')->with('errors','验证码错误')->withInput();

        }
//
//        //3.2判断是否有此用户

        $user = User::where('uname',$input['uname'])->first();
//        dd($user);
        if(!$user){
            return redirect('home/login')->with('errors','用户名不存在')->withInput();
        }
//
//        //3.3密码是否正确
        if( Crypt::decrypt($user->password) != trim($input['password']) ){
            return redirect('home/login')->with('errors','密码不正确')->withInput();
        }
//


        //将用户提交的数据保存到数据库users表中
        $res = \DB::table('users')->insert(
            ['uname' => $input['uname'], 'password' => $input['password']]
        );
        Session::put('user',$user);
        return redirect('home/index');
    }
public function crypt()
{

    $str = 666666;
    $name = Crypt::encrypt($str);
    dd($name);
}
////手机验证码
//    public function telyzm()
//    {
//        //载入ucpass类
//        require_once('lib/Ucpaas.class.php');
//
////初始化必填
//        $options['accountsid']='e85874b47ad67fa2273122fe1de0fed8';
//        $options['token']='0af8e8e98476032b2a246db2df0d2ffc';
//
//
//
////初始化 $options必填
//        $ucpass = new Ucpaas($options);
//
////开发者账号信息查询默认为json或xml
//        header("Content-Type:text/html;charset=utf-8");
//
////短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
//        $appId = "ff02050750a742c582a5a2b633c50dc6";
//        $to = "";
//        $templateId = "";
//        $param="";
//
//        echo $ucpass->templateSMS($appId,$to,$templateId,$param);
//    }



}
