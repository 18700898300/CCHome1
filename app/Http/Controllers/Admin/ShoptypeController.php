<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Shop_cate;

class ShoptypeController extends Controller
{
    //商户分类控制器
    /*
     * 添加商户分类
     * argu $tilte标题  $cates 已有商户分类
     * auth wangfei
     * date 2017-11-29 11:20
     * return 添加分类页面
     */
    public function add()
    {
        $title = '添加商户分类';
        // 由添加子分类传递过来
//        $cid = empty($_GET['cid']) ? 0 : $_GET['cid'];
//        // 获取之前已有的类别信息

        $cates = Shop_cate::get();
        return view('admin/shop_type/add',compact('title','cates'));
    }
    /*
     * 执行添加
     */
    public function store(Request $request)
    {
//        获得提交数据,去除_token
        $data = $request->except('_token');

//        dd($data);
//        dd($data['pid']);
//        验证规则
        $rule = [
            "tname"=>'required|between:2,10'
        ];
//        提示信息
        $mess = [
            'tname.required'=>'分类名必须输入',
            'tname.between'=>'分类名必须在2到10位之间'
        ];
        $validator =  \Validator::make($data,$rule,$mess);
        //如果表单验证失败
        if ($validator->fails()) {
            return redirect('admin/user/create')
                ->withErrors($validator)
                ->withInput();
        }
        // 如果新类别的 pid 为 0
        if ($data['pid'] === '0') {
            $data['path'] = '0,';
        } else {
            $cateInfo = Shop_cate::where('tid', $data['pid'])->first();
//            dd($cateInfo);
            $data['path'] = $cateInfo->path . $data['pid'] . ',';
        }
//            dd($data['path']);
//            dd($data);
            $res = Shop_cate::create($data);
//            判断是否成功
            if($res){
                return redirect('/admin/shop_type/list')->with('msg','添加成功');
            }else{
                return redirect('/admin/shop_type/add')->with('msg','添加失败');
            }

    }
    /*
     * 浏览分类
     * arg  $title
     */
    public function list()
    {
        $title = '浏览商户分类';
        $cates = Shop_cate::get();
//        dd($cates);
        return view('admin/shop_type/lists',compact('title','cates'));
    }
    /*
     * 修改类别
     */
    public function edit($tid)
    {
        $title = '修改分类';
        $cate = Shop_cate::find($tid);
//        dd($cate['196']);
//        dd($cate);

        return view('admin/shop_type/edit',compact('title','cate'));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');
//        dd($data);
        $shop_cate = Shop_cate::find($data['tid']);
        $res = $shop_cate->update($data);
        if($res){
            return redirect('/admin/shop_type/list')->with('msg','修改成功');
        }else{
            return redirect('/admin/shop_type/edit')->with('msg','修改失败');
        }
    }

    /*
     *  删除类别
     */
    public function delete($tid)
    {
       //dd($tid);
        $res = Shop_cate::find($tid)->delete();
        if($res){
            return redirect('/admin/shop_type/list')->with('msg','删除成功');
        }else{
            return redirect('/admin/shop_type/list')->with('msg','删除失败');
        }
    }
}
