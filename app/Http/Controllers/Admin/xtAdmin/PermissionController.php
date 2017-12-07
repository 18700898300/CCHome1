<?php

namespace App\Http\Controllers\Admin\xtAdmin;

use App\Models\Admin\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

/*
 * 系统后台 权限模块
 */
class PermissionController extends Controller
{
    /**
     * 浏览权限
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::get();
        return view('admin/xtAdmin/permission/lists',compact('permissions'));
    }

    /**
     * 添加权限
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/xtAdmin/permission/add');
    }

    /**
     * 执行添加
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        1. 获得表单提交数据
        $input = $request->except('_token');
//        dd($input);
//        2. 表单验证
        $rule = [
            'name'=>'required|between:2,10',
            "description"=>'required|between:0,200'
        ];

        $mess = [
            'name.required'=>'权限名称必须输入',
            'name.between'=>'权限名称必须在2到10位之间',
            'description.required'=>'权限描述必须输入',
            'description.between'=>'权限描述必须在0到200字之间',
        ];

        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('admin/xtAdmin/permission/create')
                ->withErrors($validator)
                ->withInput();
        }
//        3. 执行添加操作
        $res = Permission::create($input);
//        4. 判断是否成功
        if($res){
            return redirect('admin/xtAdmin/permission')->with('msg','添加成功');
        }else{
            return redirect('admin/xtAdmin/permission/create')->with('msg','添加失败');
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
}
