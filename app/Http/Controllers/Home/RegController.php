<?php

namespace App\Http\Controllers\Home;

use App\Models\Admin\Shop_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Home\Shop;
use  Illuminate\Support\Facades\Session;
class RegController extends Controller
{
    public function reg()
    {
        $cates =  (new Shop_type)->tree();
        return view('home/reg',compact('cates'));
    }

    public function doreg(Request $request)
    {
//        dd(111);
//        dd($request->input());
        $input = $request->except('_token','fpic');
//        dd($input);
        //表单验证
        $rule =[
            'name'=>'bail|required|regex:/^[\x{4e00}-\x{9fa5}A-Za-z0-9_]+$/u|between:1,20',
            'phone'=>'bail|required|size:11',
            'email'=>'bail|required|email',
            'avatar'=>'required',//不可以加image,因此处为路径不是图片
//            'description'=>'required',
            'time'=>'required',//营业时间
            'statime'=>'required',//配送时长
            'staprice'=>'required',//起送价
            'sprice'=>'required',//配送费
            'address'=>'required',
            'position'=>'required',
        ];
        $mess = [
            'name.required'=>'公司名必须输入',
            'name.regex'=>'公司名必须汉字字母数字下划线',
            'name.between'=>'公司名必须在1-20之间',
            'phone.required'=>'手机号必须输入',
            'phone.size'=>'手机号必须为11位',
            'avatar.required'=>'图片必须上传',
//            'avatar.image'=>'请选择一张图片',
            'email.required'=>'邮箱必须输入',
            'email.email'=>'邮箱格不正确',
//            'description.required'=>''
            'time.required'=>'营业时间必须输入',
            'statime.required'=>'配送时长必须输入',
            'staprice.required'=>'起送价必须输入',
            'sprice.required'=>'配送费必须输入',
            'position.required'=>'公司地址不合法',
            'address.required'=>'公司地址必须输入',

        ];

        $validator = Validator::make($input,$rule,$mess);
//        如果表单验证失败

        if($validator->fails()){
            return redirect('home/reg')
                ->withErrors($validator)
                ->withInput();//让页面输入的用户名保持在输入框
        }
        $input['ctime']=time();
        //可以加入判断number是否已经存在
        $input['number']=time().rand(10000,99999);
        $input['bid']=Session::get('meruser')['bid'];
//        dd($input);
        $res = Shop::create($input);

        if($res){
            $msg=$input['number'];
            return  redirect('home/status')->with('msg',$msg); //redirect('');
        }else{
            return redirect('home/reg')->with('errors','申请未提交成功,请重新提交,谢谢配合');
        }
    }

    public function status()
    {
        return view('home/status/status');
    }

    public function qstatus()
    {
        return view('home.status.qstatus');
    }

    public function doqstatus(Request $request){
        $input = $request->except('_token');
//        dd($input);
        $shop = Shop::where('number',$input['number'])->first();
        if($shop==null){
            return back()->with('errors','您提交的申请件编号不存在，请查清后重新提交！');
        }
//        dd($shop);
        return view('home/status/doqstatus',compact('shop',$shop));
    }




    public  function upload(Request $request)
    {

//    return 1111;
//    $file = $request->file('fpic');
//    dd($file);
        // 多文件上传????????????
        $file = $request->file('fpic');
//        return 111;
//        return $file;
//        $file =$file[0];
//        return $file[2];
//        return $request;
//        $arr=[];
//        foreach($file as $k=>$file){
//            return $file;
        if($file->isValid()){
            //获取文件上传对象后的后缀名
            $ext = $file->getClientOriginalExtension();
            //生成一个唯一的文件名,保证所有的文件不重名
            $newfile=time().rand(1000,9999).uniqid().'.'.$ext;
            //设置上传文件的目录
//            $dirpath  = public_path().'/uploads/'; //获取public目录的绝对路径并拼接新的上传文件路径
//            将文件移动到本地服务器的指定位置,并以新文件名命名
//            $file->move(移动到的目录,新文件名);
//            $file->move($dirpath,$newfile);
            //将文件移动到七牛云,并以新文件名命名

            $disk = Storage::disk('qiniu')->writeStream('uploads/'.$newfile, fopen($file->getRealPath(), 'r'));
            //将文件移动到阿里云并以新文件名命名

//                OSS::upload($newfile,$file->getRealPath());
//                 $arr[]=$file;


        }
//        }
        return $newfile;
//        return $arr;

    }





}
