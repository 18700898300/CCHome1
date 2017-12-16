<?php

namespace App\Http\Controllers\Admin\xtAdmin;

use App\Models\Admin\AdminUser;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;

class Admin_userController extends Controller
{
    /*
     * 管理员授权
     */
    public function auth($id)
    {
//        获取当前管理员
        $adminUser = AdminUser::find($id);
//        获取当前所有角色
        $roles = Role::get();
//        获取当前管理员已经拥有的角色
        $own_roles = DB::table('adminUser_role')->where('id',$id)->pluck('rid');
//        将集合转化为数组
        $arr = iterator_to_array($own_roles);
//        dd($arr);
        return view('admin/xtAdmin/adminUser/auth',compact('adminUser','roles','arr'));
    }

    public function doauth(Request $request)
    {
        $input = $request->except('_token');
//        dd($input);
//        开启事务
        DB::beginTransaction();
        try{
            //删除用户以前拥有的角色
            DB::table('adminUser_role')->where('id',$input['id'])->delete();
//            给当前用户重新授权
            if(isset($input['rid'])){
                foreach ($input['rid'] as $k=>$v){
                    DB::table('adminUser_role')->insert(['id'=>$input['id'],'rid'=>$v]);
                }
            }
        }catch (Exception $e){
            DB::rollBack();
        };
//        提交
        DB::commit();

        //添加成功后，跳转到列表页
        return redirect('admin/xtAdmin/adminUser');

    }

    /** 管理员列表
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        1. 获取所有管理员
        $adminUser = AdminUser::get();
//        dd($roles);
//        2. 加载模板,显示到页面
        return view('admin/xtAdmin/adminUser/lists',compact('adminUser'));
    }

    /**
     * 添加管理员
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/xtAdmin/adminUser/add');
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
            'aname'=>'required|between:2,10',
            "password"=>'required|between:2,11'
        ];


        $mess = [
            'aname.required'=>'管理员名称必须输入',
            'aname.between'=>'管理员名称必须在2到10位之间',
            'password.required'=>'密码必须输入',
            'password.between'=>'密码必须在2到11字之间',
        ];

        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('admin/xtAdmin/role/create')
                ->withErrors($validator)
                ->withInput();
        }
//        3. 执行添加操作
        $res = AdminUser::create($input);
//        4. 判断是否成功
        if($res){
            return redirect('admin/xtAdmin/adminUser')->with('msg','添加成功');
        }else{
            return redirect('admin/xtAdmin/adminUser/create')->with('msg','添加失败');
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
