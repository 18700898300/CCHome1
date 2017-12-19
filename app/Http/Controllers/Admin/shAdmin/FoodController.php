<?php

namespace App\Http\Controllers\Admin\shAdmin;

use App\Http\Model\MerUser;
use App\Models\Home\Food;
use App\Models\Home\Food_label;
use App\Models\Home\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;

class FoodController extends Controller
{
    /**
     * 菜品列表
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        1. 获取店铺所有标签
//        1.1 当前用户id
        $id = session('meruser')['bid'];
//        1.2 获取当前商户的店铺
//        $sid = MerUser::find($id)->shop;
//        $sid = $sid->sid;
        $sid = session('meruser')['sid'];
//dd($sid);
//        通过标签获得所有菜品
        $labels = Shop::find($sid)->food_label;
//        dd($labels);
        $lids = [];
        foreach($labels as $k=>$v){
            $lids[] = $v->lid;
        }
//        dd($lids);
       $arr = Food_label::with('food')->whereIn('lid',$lids)->get();


//        dd($arr);
//        dd($labels);

//        dd($arr[0]->food[0]['fname']);

        return view('admin/shAdmin/food/lists',compact('arr'));
    }


    /**
     * Show the form for creating a new resource.
     * 添加菜品分类,返回添加模板
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 获取当前商户ID
        $id = session('meruser')['bid'];
//        dd(session('meruser'));
//        获取当前商户的店铺
        $sid = session('meruser')['sid'];
//        dd($sid);
//        获取店铺拥有的菜品分类
        $labels = Shop::find($sid)->food_label;
//        dd($labels);
        return view('admin/shAdmin/food/add',compact('labels','sid'));
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
        $food = $request->except('_token','pic');
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
     * 修改菜品
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        获得要修改的菜品
        $food = Food::find($id);
//        dd($food);

//        获得店铺ID
        $sid = session('meruser')['sid'];
//        dd($sid);
//        获取店铺拥有的菜品分类
        $labels = Shop::find($sid)->food_label;
        return view('admin/shAdmin/food/edit',compact('food','labels','sid'));
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
//        1. 获取要修改的提交信息
        $input = $request->except('_token','_method','pic');
//        dd($input);
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

        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('admin/food/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

//        3. 执行修改操作
        $res = Food::find($id)->update($input);
//        4. 判断是否成功
        if($res){
            return redirect('admin/food')->with('msg','修改成功');
        }else{
            return redirect('admin/food/'.$id.'/edit')->with('msg','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        开启事务
        DB::beginTransaction();
        try{
//        根据ID删除分类
            $res = Food::find($id)->delete();
        }catch(Exception $e){
            DB::rollBack();
        }
        DB::commit();


//        判断是否删除
        if($res){
            $data =[
                'status'=> 0,
                'msg'=>'删除成功'
            ];
        }else{
            $data =[
                'status'=> 1,
                'msg'=>'删除失败'
            ];
        }

        return $data;
    }

    /**
     * 执行文件上传
     * @param Request $request
     * @return string
     */
    public function upload(Request $request)
    {
//        获取客户端传过来的文件
        $file = $request->file('pic');
//        return $file;
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
//            $file->move($dirpath, $newfile);

            //将文件移动到七牛云，并以新文件名命名
            \Storage::disk('qiniu')->writeStream('uploads/'.$newfile, fopen($file->getRealPath(), 'r'));

            //将文件移动到阿里OSS
//            OSS::upload($newfile,$file->getRealPath());

            //将上传的图片名称返回到前台，目的是前台显示图片
            return $newfile;
//            return 1;

        }
    }

}
