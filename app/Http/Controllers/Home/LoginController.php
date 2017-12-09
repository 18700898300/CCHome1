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
require_once app_path().'/MSG/lib/Ucpaas.class.php';
use App\MSG\lib\Ucpaas;

/*
 * 前台登录
 *
 * */
class LoginController extends Controller
{
    //密码登录的页面
    public function login()
    {
        return view('Home.login.login');
    }
//验证码
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
        Session::put('user',$user);
        return redirect('home/index');
    }


    //手机号发送验证码登录
    public function login2()
    {
//        dd (1111);
        return view('Home.login.login2');
    }
//执行短信验证码的方法
    public function sendcode(Request $request)
    {
        $input = $request->except('_token');

       // return $input;

        $options['accountsid']='e85874b47ad67fa2273122fe1de0fed8';
        $options['token']='0af8e8e98476032b2a246db2df0d2ffc';
        $ucpass = new Ucpaas($options);
        //dd($ucpass);


//        1 短信发送接口
//
//    1.appId：创建应用时系统分配的唯一标示，在“应用列表”中可以查询
//    2.templateId：创建短信模板时系统分配的唯一标示，在“短信管理”中可以查询
//    3. to：需要下发短信的手机号码,支持国际号码，需要加国家码。
//    4.param：模板中的替换参数，如果有多个参数则需要写在同一个字符串中，以逗号分隔. （如：param=“a,b,c”）
        $appId = "ff02050750a742c582a5a2b633c50dc6";
        $to =  $input['phone'];
        $templateId = "238242";
        $param= mt_rand(1000,9999);
////        //发送验证码成功后，将验证码存入session中
        session('phone',$param);
       return $ucpass->templateSMS($appId,$to,$templateId,$param);
    }

    //实现手机号注册
    public function dologin2(Request $request)
    {
        //1.获取用户提交的数据
        $input = $request->except('_token','code');
//        dd($input);

        //2.验证验证码
//        if($input['code'] !== session('phone')){
//            return redirect('home/login2');
//        }

        //3.向用户表添加注册用户
        $phone = $input['phone'];
        $name = mt_rand(1000000,9999999);
       $aa =  \DB::table('users')->where('phone',$phone)->get();

       if($aa !=$phone){
           //如果没有就将传过来的手机号保存在数据库users表中
           $res = \DB::table('users')->insert(['phone'=>$phone,'uname'=>$name]);
           if($res)
           {
               //保存成功就跳转到前台首页
               return redirect('home/index');
           }else{
               //保存失败就跳回短信登录页
               return redirect('home/login2');
           }
       }else{
           return redirect('home/index');
       }


//
    }



}
