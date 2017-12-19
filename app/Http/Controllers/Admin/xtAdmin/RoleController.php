<?php

namespace App\Http\Controllers\admin\xtAdmin;

use App\Models\Admin\Permission;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;

/*
 * 角色控制器
 */
class RoleController extends Controller
{
    /*
     * 给角色授权
     */
    public function auth($id)
    {
//        dd(11);
//        获取要授权的角色
        $role = Role::find($id);
//        获取所有权限
        $permissions = Permission::get();
//        获取当前已经拥有权限
        $own_permission = DB::table('role_permission')->where('rid',$id)->pluck('pid');
//        将集合转化为数组
        $arr = iterator_to_array($own_permission);
        return view('admin/xtAdmin/role/auth',compact('role','permissions','arr'));
    }

    /*
      * 执行角色授权
      */
    public function doauth(Request $request)
    {
//        获取提交的数据
        $input = $request->except('_token');
//        dd($input);

//        开启事务
        DB::beginTransaction();
        try{
            //删除角色以前拥有的权限
            DB::table('role_permission')->where('rid',$input['rid'])->delete();
//            给当前角色重新授权
            if(isset($input['pid'])){
                foreach ($input['pid'] as $k=>$v){
                    DB::table('role_permission')->insert(['rid'=>$input['rid'],'pid'=>$v]);
                }
            }
        }catch (Exception $e){
            DB::rollBack();
        };
//        提交
        DB::commit();

        //添加成功后，跳转到列表页
        return redirect('admin/xtAdmin/role');

    }


    /**
     * 浏览角色
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        1. 获取所有角色
        $roles = Role::get();
//        dd($roles);
//        2. 加载模板,显示到页面
        return view('admin/xtAdmin/role/lists',compact('roles'));
    }

    /**
     * 添加角色
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/xtAdmin/role/add');
    }

    /**
     *  执行添加
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd(111);
//        1. 获得表单提交数据
        $input = $request->except('_token');
//        dd($input);
//        2. 表单验证
        $rule = [
            'name'=>'required|between:2,10',
            "description"=>'required|between:0,200'
        ];


        $mess = [
            'name.required'=>'角色名称必须输入',
            'name.between'=>'角色名称必须在2到10位之间',
            'description.required'=>'角色描述必须输入',
            'description.between'=>'角色描述必须在0到200字之间',
        ];

        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('admin/xtAdmin/role/create')
                ->withErrors($validator)
                ->withInput();
        }
//        3. 执行添加操作
        $res = Role::create($input);
//        4. 判断是否成功
        if($res){
            return redirect('admin/xtAdmin/role')->with('msg','添加成功');
        }else{
            return redirect('admin/xtAdmin/role/create')->with('msg','添加失败');
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
     * 修改角色
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        通过ID找到要修改的角色
        $role = Role::find($id);
//        dd($role);
        return view('admin/xtAdmin/role/edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     * 执行修改角色
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        1. 获得表单提交的数据
        $input = $request->except('_token','_method');
//        dd($input);

//        2. 表单验证
        $rule = [
            'name'=>'required|between:2,10',
            "description"=>'required|between:0,200'
        ];


        $mess = [
            'name.required'=>'角色名称必须输入',
            'name.between'=>'角色名称必须在2到10位之间',
            'description.required'=>'角色描述必须输入',
            'description.between'=>'角色描述必须在0到200字之间',
        ];

        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('admin/xtAdmin/role/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }

//        3. 执行修改
        $res = Role::find($id)->update($input);

//        4. 判断是否成功
        if ($res) {
            return redirect('admin/xtAdmin/role')->with('msg','修改成功');
        } else {
            return redirect('admin/xtAdmin/role/'.$id.'/edit')->with('msg','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     * 删除角色
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        return 111;
        $role = Role::find($id);

//        开启事务
        DB::beginTransaction();
        try{
//            删除管理员中的此角色
//            DB::table('adminuser_role')->where('rid',$id)->delete();
//            删除此角色拥有的权限
//            DB::table('role_permission')->where('rid',$id)->delete();
//            执行删除
            $res = $role->delete();
//            return $res;
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
