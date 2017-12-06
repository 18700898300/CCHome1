<?php

namespace App\Http\Controllers\Admin\shAdmin;

use App\Models\Home\Food;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    /**
     * 菜品列表
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin/shAdmin/food/lists');
    }

    /**
     * Show the form for creating a new resource.
     * 添加菜品分类,返回添加模板
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 获取店铺ID
//        获取菜品分类
        return view('admin/shAdmin/food/add');
    }

    /**
     * Store a newly created resource in storage.
     * 执行添加
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd(11);
//        1. 获得提交的信息
        $food = $request->except('_token');
//        dd($food);
//        2. 表单验证
       $rule = [
           'fname'=>'required|between:2,10',
           "price"=>'required|numeric',
       ];


        $mess = [
            'fname.required'=>'菜品名称必须输入',
            'fname.between'=>'菜品名称必须在2到10位之间',
            'price.required'=>'菜品价格必须输入',
            'price.numeric'=>'菜品价格必须是数字',
        ];

        $validator =  Validator::make($food,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('admin/food/create')
                ->withErrors($validator)
                ->withInput();
        }

//        3. 执行添加操作
        $res = Food::create($food);
//        4. 判断是否成功
        if($res){
            return redirect('admin/food')->with('msg','添加成功');
        }else{
            return redirect('admin/food/create')->with('msg','添加失败');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 执行文件上传
     * @param Request $request
     * @return string
     */
    public function upload(Request $request)
    {
//        获取客户端传过来的文件
        $file = $request->file('fpic');
//        $file = $file[0];
//        $file = $request->all();

//        $file = $request->all();
        //dd($file);

        if($file->isValid()){
            //        获取文件上传对象的后缀名
            $ext = $file->getClientOriginalExtension();

            //生成一个唯一的文件名，保证所有的文件不重名
            $newfile = time().rand(1000,9999).uniqid().'.'.$ext;

            //设置上传文件的目录
            $dirpath = public_path().'/uploads/';

            //将文件移动到本地服务器的指定的位置，并以新文件名命名
//            $file->move(移动到的目录, 新文件名);
            $file->move($dirpath, $newfile);

            //将文件移动到七牛云，并以新文件名命名
            //\Storage::disk('qiniu')->writeStream('uploads/'.$newfile, fopen($file->getRealPath(), 'r'));

            //将文件移动到阿里OSS
//            OSS::upload($newfile,$file->getRealPath());

            //将上传的图片名称返回到前台，目的是前台显示图片
            return $newfile;

        }
    }
}
