<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Http\Model\Users_addr;

require_once app_path().'/MSG/lib/Ucpaas.class.php';
use App\MSG\lib\Ucpaas;


class PersonController extends Controller
{
    //个人中心
    public function percenter()
    {
        $users = Session::get('user');
        $users =User::find($users->uid);
        $users = $users->toArray();
//        dd($users);
        return view('home.person.percenter',compact('users'));
    }
    //个人资料
   public function index()
   {
       $users = Session::get('user');
       $users=User::find($users->uid);
       return view('home.person.person',compact('users'));

   }

   //修改用户名
   public function edit(Request $request)
   {
        //获取在表单中修改后的内容
        $input = $request->except('_token');
//        dd($input);
       //对修改的
       //表单中的uname进行验证
       $rule = [
           'uname'=>'required|regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9_]+$/u|between:5,20'
       ];
       $mess = [
           'uname.required'=>'用户名必须输入',
           'uname.regex'=>'用户名必须汉字字母下划线',
           'uname.between'=>'用户名必须在5到20位之间'

       ];

       $validator = Validator::make($input,$rule,$mess);
       //如果表单验证失败,
       if($validator->fails()){
           return redirect('home/person')->withErrors($validator)->withInput();
       }
       //将修改后的数据保存到users表中
       $user = \DB::table('users')
           ->where('uid', $input['uid'])
           ->update(['uname' => $input['uname']]);

      $user =  User::find($input['uid']);
       Session::put('user',$user);
       if($user)
       {
           return  redirect('home/person');
       }else{
           return redirect('home/person');
       }

   }


   //显示编辑头像的页面
    public function avatar()
    {
        $users = Session::get('user');
//        dd($users);
        $users=User::find($users->uid);
//        dd($users);
        return view('Home.person.avatar',compact('users'));
    }

    //执行头像上传


    public function upload(Request $request)
    {
        //获取客户端传过来的文件
        $file = $request->file('file_upload');
//        $file = $file[0];
//        $file = $request->all();
//        dd($file);

        if($file->isValid()){
            //获取文件上传对象的后缀名
            $ext = $file->getClientOriginalExtension();


            //生成一个唯一的文件名，保证所有的文件不重名
            $newfile = time().rand(1000,9999).uniqid().'.'.$ext;


            //设置上传文件的目录
            $dirpath = public_path().'/uploads/';

            //将文件移动到本地服务器的指定的位置，并以新文件名命名
//            $file->move(移动到的目录, 新文件名);
            $file->move($dirpath, $newfile);


            //将上传的图片名称返回到前台，目的是前台显示图片
            return $newfile;
        }

    }

    public function doupload(Request $request)
    {
        //获取从前台传过来的头像的路径
        $input = $request->except('_token','file_upload');
//        dd($input['avatar']);

        //将传过来的图片的路径保存到数据库中
        $uid = Session::get('user.uid');
//        dd($uid);
        $res = \DB::table('users')->where('uid',$uid)->update($input);
//        dd($res);


        return redirect('/home/person');

    }


    //显示地址管理页
    public function address()
    {
        $area = \DB::table('area')->get();

        $users = Session::get('user');
        $users = $users->toArray();
//        dd($users['uid']);
        $addr = Users_addr::orderBy('id','desc')->take(10)->where('uid',$users['uid'])->get();
//        dd($addr);
        return view('Home.person.address',compact('users','area','addr'));
    }
    //执行添加地址
    public function insertsite(Request $request)
    {
        $input = $request->except('_token');
//        dd($input);
        $rule = [
            'name'=>'required|regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9]+$/u|between:2,5',
            "sex"=>'required',
            "addr"=>'required',
            "areaid" =>'required',
            "phone"=>'required|regex:/^1[34578][0-9]{9}$/',
        ];


        $mess = [
            'name.require'=>'用户名必须输入',
            'name.regex'=>'用户名必须汉字字母',
            'name.between'=>'用户名必须在2到5位之间',
            'sex.require'=>'性别必须选择',
            'addr.required'=>'地址必须输入',
            'areaid.required'=>'商圈必须选择',
            'phone.required'=>'手机号必须输入',
            'phone.regex'=>'手机号格式不正确',

        ];


        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('/home/order/index')
                ->withErrors($validator)
                ->withInput();
        }
        $res  = \DB::table('users_addrs')->insert($input);
        if($res)
        {
            return redirect('/home/address');
        }else{
            return redirect('/home/address');
        }

    }

    //显示安全中心页面
    public function safe()
    {
        $users = Session::get('user');
        return view('Home.person.safe',compact('users'));
    }

    //显示更改手机号的页面
    //手机号发送验证码登录
    public function changephone()
    {
        return view('home.person.changephone');
    }
//执行短信验证码的方法
    public function sendcode(Request $request)
    {
        $input = $request->except('_token');

//        return $input;

        $options['accountsid']='e85874b47ad67fa2273122fe1de0fed8';
        $options['token']='0af8e8e98476032b2a246db2df0d2ffc';
        $ucpass = new Ucpaas($options);
//    1.appId：创建应用时系统分配的唯一标示，在“应用列表”中可以查询
//    2.templateId：创建短信模板时系统分配的唯一标示，在“短信管理”中可以查询
//    3. to：需要下发短信的手机号码,支持国际号码，需要加国家码。
//    4.param：模板中的替换参数，如果有多个参数则需要写在同一个字符串中，以逗号分隔. （如：param=“a,b,c”）
        $appId = "ff02050750a742c582a5a2b633c50dc6";
        $to =  $input['phone'];
//        return $to;
        $templateId = "238242";
        $param= mt_rand(1000,9999);
        //发送验证码成功后，将验证码存入session中
        Session::flash('phone',$param);
        return $ucpass->templateSMS($appId,$to,$templateId,$param);
    }
//
//    //实现手机号更改
    public function dochangephone(Request $request)
    {
//
        $uid =Session::get('user.uid');
//        dd($uid);
        //1.获取用户提交的数据
        $input = $request->except('_token');
//        dd($input);
        //对验证码进行表单验证
        $rule = [
            "code" => 'required'
        ];
        $mess = [
            'code.required' => '验证码不能为空'
        ];

        $validator = Validator::make($input, $rule, $mess);
        //如果表单验证失败,
        if ($validator->fails()) {
            return redirect('home/changephone')->withErrors($validator)->withInput();
        }


//        2 验证验证码
        if($input['code'] != session('phone')){
            return redirect('home/changephone')->withErrors('验证码错误')->withInput();
        }
        unset($input['code']);

//        $re = $request->session()->get('uid');
//        dd($re);

        //将新的手机号保存到数据库users表中
        $res = \DB::table('users')->where('uid',$uid)->update(['phone'=>$input['phone']]);
        if($res)
        {
//
            //保存成功就跳转到个人资料页面
            return redirect('home/person')->with('msg','修改成功');
        }else {
//
            //保存失败 就跳转到更改手机的页面
            return redirect('home/changephone')->with('msg','修改失败');
        }

    }


//设置密码
    public function setpwd()
    {
        $users = Session::get('user');
//        dd($users);
        return view('home.person.changepwd',compact('users'));
    }

    /*
     * 执行密码设置操作
     *
     * */
    public function dosetpwd(Request $request)
    {
//       dd(1111);
        //从数据库中获取信息
        //$users = \DB::table('users')->where('uname','bbbbb')->first();

        //接收传过来的密码值
        $input = $request->except('_token');
//        dd($input);

        //对密码进行验证
        $rule = ["password"=>'required',
            "re_password"=>'same:password'
        ];
        $mess = ['password.required'=>'密码必须输入',
            're_password.same'=>'两次密码不一致'

            ];
        $validator =  Validator::make($input,$rule,$mess);
        //如果密码验证失败 passes()
        if ($validator->fails()) {
            return redirect('home/setpwd')
                ->withErrors($validator)
                ->withInput();
        }

//        //判断两次密码是否一致
//        if($input['password'] !== $input['re_password'])
//        {
//            return redirect('home/setpwd')->with('errors','两次密码不一致');
//        }

//        加密
       $input['password']=encrypt($input['password']);
//       dd( $input['password']);

        //将设置密码的数据添加并保存到users表中

        $res = \DB::table('users')->where('uname','bbbbb')->update(['password'=>$input['password']]);
        if($res)
        {
            return  redirect('home/safe');
        }else{
            return redirect('home/setpwd');
        }

    }




   //修改密码

    public function changepwd()
    {
        $users = Session::get('user');
//        dd($users);
        return view('home.person.changepwd',compact('users'));
    }

    /*
     * 执行密码设置操作
     *
     * */
    public function dochangepwd(Request $request)
    {

        $users = Session::get('user');
//        dd($users);
        //接收传过来的密码值
        $input = $request->except('_token');
//        dd($input);

        //对密码进行验证
        $rule = ["password"=>'required',
            "re_password"=>'same:password'
        ];
        $mess = ['password.required'=>'密码必须输入',
            're_password.same'=>'两次密码不一致'

        ];
        $validator =  Validator::make($input,$rule,$mess);
        //如果密码验证失败 passes()
        if ($validator->fails()) {
            return redirect('home/changepwd')
                ->withErrors($validator)
                ->withInput();
        }


//        加密
        $input['password']=encrypt($input['password']);
//       dd( $input['password']);

        //将设置密码的数据添加并保存到users表中

        $res = \DB::table('users')->where('uid',$users['uid'])->update(['password'=>$input['password']]);
//        dd($res);
        if($res)
        {
            return  redirect('home/login');
        }else{
            return redirect('home/changepwd');
        }

    }

//邮箱绑定

//显示绑定邮箱的页面
    public function bdemail()
    {
        return view('home.person.bdemail');
    }


    //执行邮箱绑定
    public function dobdemail(Request $request)
    {
        $users = Session::get('user');
//    dd ($users);
        //接收从客户端传过来的绑定的邮箱数据
        $input = $request->except('_token');
//        return $input;
        // 3. 向用户表中添加注册记录
        $input['email'] = $input['email'];
        $input['is_active'] = 1;
        $input['token'] = md5(mt_rand(000000,999999));
        $input['code'] = mt_rand(111111,999999);
//        dd($input);
        //添加成功后，返回刚才添加的那条用户记录
        $res =  User::find($users->uid)->update($input);
        $res =User::find($users->uid);
//        return $res;
//       return  $res;
        if($res){

            //4. 给注册邮箱发送注册邮件

//        参数一： 对方收到的邮件模板
//        参数二：邮件模板中需要的变量
//        参数三：关于邮件注册的变量，如发件人，主题、收件人等信息

            Mail::send('home.person.active', ['user' => $res], function ($m) use ($res) {
                //$m->from('hello@app.com', 'Your Application');

                $m->to($res->email, $res->uname ,$res->code)->subject('blog邮箱激活!');
            });

            return ('home/yzemail');
        }else{
            return back();
        }

    }

    public function yzemail(Request $request)
    {
        $uid = Session::get('user.uid');
//        $users = $users->toArray();
        $users = User::find($uid);
        $code = $users['code'];
//        dd($code);
        $codes = $request->except('_token','email');
//        dd($codes['code'].'-----'.$code);
       if($code == $codes['code'] ){
                return redirect('home/person')->with('绑定成功');
       }else {
            return redirect('home/bdemail')->with('errors','绑定失败')->withInput();
       }
    }


}
