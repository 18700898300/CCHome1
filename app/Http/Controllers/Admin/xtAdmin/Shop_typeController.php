<?php

namespace App\Http\Controllers\Admin\xtAdmin;

use App\Models\Admin\Shop_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class Shop_typeController extends Controller
{
    /* 添加分类
    * 获得一级分类
     * return 添加分类视图
    */
    public function add()
    {
        $cateOne = Shop_type::where('pid',0)->get();
        return view('admin/xtAdmin/shop_type/add',compact('cateOne'));
    }
    /*
     * 执行添加操作
     */
    public function insert(Request $request)
    {
//        1. 获取用户提交的表单数据
        $input = $request->except('_token');
//        dd($input);

//        2. 表单验证
       $rule = [
            'tname'=>'required|between:2,10',
            "torder"=>'required|between:0,20|regex:/^\d$/'
        ];


        $mess = [
            'tname.required'=>'分类名必须输入',
            'tname.between'=>'分类名必须在2到10位之间',
            'torder.required'=>'分类排序必须输入',
            'torder.between'=>'分类排序必须在0到20之间',
            'torder.regex'=>'分类排序是数字'
        ];

        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('admin/xtAdmin/shop_type/add')
                ->withErrors($validator)
                ->withInput();
        }

//        3. 执行添加操作
        $cate = new Shop_type();
        $cate->tname = $input['tname'];
        $cate->torder = $input['torder'];
        $cate->pid = $input['pid'];
//        dd($cate);
        $res = $cate->save();

//        4. 判断是否成功
        if($res){
            return redirect('admin/xtAdmin/shop_type/lists')->with('msg','添加成功');
        }else{
            return redirect('admin/xtAdmin/shop_type/add')->with('msg','添加失败');
        }
    }

    /*
     * 商户分类列表
     * 调用分类模型中的方法tree(),进行排序
     */
    public function lists()
    {
//        获取所有的分类列表
        $cates =  (new Shop_type)->tree();
        //dd($cates);
        return view('admin/xtAdmin/shop_type/lists',compact('cates'));
    }

    /**
     * 修改排序
     */
    public function changeOrder(Request $request)
    {
//        修改要排序的那条记录的cate_order字段为用户指定的值
        //要修改的那条记录
        $tid = $request->input('tid');

        //要修改的值
        $torder = $request->input('torder');

        $cate = Shop_type::find($tid);
        $res = $cate->update(['torder'=>$torder]);

        if($res){
            $data =[
                'status'=> 0,
                'msg'=>'修改成功'
            ];
        }else{
            $data =[
                'status'=> 1,
                'msg'=>'修改失败'
            ];
        }

        return $data;
    }

    /*
     * 修改分类
     */
    public function edit($id)
    {
//        1. 获取所有一级分类
        $cateOne = Shop_type::where('pid',0)->get();
//        dd($cateOne);
//        2. 获取要修改的分类信息
        $cate = Shop_type::find($id);
//        dd($cate);
//        3. 携带信息引入视图
        return view('admin/xtAdmin/shop_type/edit',compact('cateOne','cate'));
    }

    public function update(Request $request)
    {
//        1. 接收要进行修改的数据
        $input = $request->except('_token');
//        dd($input);
//        2. 表单验证
        $rule = [
            'tname'=>'required|between:2,10',
            "torder"=>'required|between:0,20|regex:/^\d$/'
        ];


        $mess = [
            'tname.required'=>'分类名必须输入',
            'tname.between'=>'分类名必须在2到10位之间',
            'torder.required'=>'分类排序必须输入',
            'torder.between'=>'分类排序必须在0到20之间',
            'torder.regex'=>'分类排序是数字'
        ];

        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('admin/xtAdmin/shop_type/edit/'.$input['tid'])
                ->withErrors($validator)
                ->withInput();
        }
//        3. 执行修改
        $res = Shop_type::find($input['tid'])->update($input);
//        4. 判断是否成功
        if ($res) {
            return redirect('admin/xtAdmin/shop_type/lists')->with('msg','修改成功');
        } else {
            return redirect('admin/xtAdmin/shop_type/edit/'.$input['tid'])->with('msg','修改失败');
        }


    }


//    删除分类
    public function del($id)
    {
//      1.  找到要删除的记录
        $cate = Shop_type::find($id);

//        获得所有分类的父类字段
        $pids = Shop_type::pluck('pid');
        $a = [];
        foreach ($pids as $k=>$v){
            $a[] = $v;
        }
        $pids = array_unique($a);
//        return $pids;
//      2.  判断要删除的分类ID是否在父类中
        if(in_array($id,$pids)){
            $data =[
                'status'=> 1,
                'msg'=>'删除失败,含有子分类'
            ];
            return $data;
        }

//        3. 判断要删除的分类下面是否存在商户
        $shop = Shop_type::find($id)->shop;
        $b = [];
        foreach($shop as $m=>$n){
            $b[] = $n->sid;
        }
        if($b){
            $data =[
                'status'=> 1,
                'msg'=>'删除失败,分类下含有商家'
            ];
            return $data;
        }

//        4. 执行删除
        $res = $cate->delete();
//        5. 判断是否删除
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



}
