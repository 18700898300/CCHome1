<?php

namespace App\Http\Controllers\Home;


use App\Http\Model\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Http\Model\Users_addr;

class PersonController extends Controller
{
   public function index()
   {
       $users = Session::get('user');
       return view('home.person.person',compact('users'));

   }

   //修改用户名
   public function edit(Request $request)
   {
        //获取在表单中修改后的内容
        $input = $request->except('_token');
       //对修改的表单中的uname进行验证
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
        return view('Home.person.avatar',compact('users'));
    }

    //显示地址管理页
    public function address()
    {
        $area = \DB::table('area')->get();
        $users = Session::get('user');

        $addr = Users_addr::orderBy('id','desc')->take(10)->where('uid',$users['uid'])->get();
//
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
        $uid = session('user.uid');
        $input['uid'] = $uid;

//        dd($input);
        $res  = \DB::table('users_addrs')->insert($input);
//        dd($res);
        if($res)
        {
            return redirect('/home/address');
        }else{
            return redirect('/home/address');
        }

    }
    public function editsite(Request $request)
    {
      $id = $request->except('_token');

//      获取当前要修改的地址
        $addrs = Users_addr::find($id);
//        return $addrs;
//        //获取所有商圈
        $areas = \DB::table('area')->get();
        $data = ['addrs'=>$addrs,'areas'=>$areas];
        return  $data;
    }

    public function updatesite(Request $request)
    {
        $addr = $request->except('_token');
//
//        dd($addr);
        $res  = Users_addr::find($addr['id'])->update($addr);


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
    public function changephone()
    {
        $users = Session::get('user');
//        dd($users['uid']);
        $users = \DB::table('users')->where('uid',$users['uid'])->first();
//        dd($users);
        return view('Home.person.changephone',compact('users'));
    }

//设置密码
    public function setpwd()
    {
        $users = Session::get('user');
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
    //设置密码
    public function changepwd()
    {
        $users = Session::get('user');
        return view('home.person.changepwd',compact('users'));
    }

    /*
     * 执行密码设置操作
     *
     * */
    public function dochangepwd(Request $request)
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
       dd( $input['password']);

        //将设置密码的数据添加并保存到users表中

        $res = \DB::table('users')->where('uname','bbbbb')->update(['password'=>$input['password']]);
        if($res)
        {
            return  redirect('home/safe');
        }else{
            return redirect('home/setpwd');
        }

    }

}
