<?php

namespace App\Http\Controllers\Admin\xtAdmin;

use App\Models\Admin\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;

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
     * 修改权限
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        根据ID找到要修改的权限
        $perm = Permission::find($id);
//        dd($perm);
        return view('admin/xtAdmin/permission/edit',compact('perm'));
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
//        1. 接收提交的数据
        $input = $request->except('_token','_method');
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
//        3. 执行修改
        $res = Permission::find($id)->update($input);

//        4. 判断是否成功
        if($res){
            return redirect('admin/xtAdmin/permission')->with('msg','修改成功');
        }else{
            return redirect('admin/xtAdmin/permission'.$id.'/edit')->with('msg','修改失败');
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
        $perm = Permission::find($id);

//        开启事务
        DB::beginTransaction();
        try{
//            执行删除
            $res = $perm->delete();
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
}
