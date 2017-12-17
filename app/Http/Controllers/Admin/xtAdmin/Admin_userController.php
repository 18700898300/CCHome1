<?php

namespace App\Http\Controllers\Admin\xtAdmin;

use App\Models\Admin\AdminUser;
use App\Models\Admin\CheckUser;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
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
        $adminUser = AdminUser::with('role')->get();

//        dd($adminUser);

//        2. 加载模板,显示到页面
        return view('admin/xtAdmin/adminUser/lists',compact('adminUser'));
    }

    /**
     *  返回管理员申请列表
     */
    public function ask()
    {
//        dd(1111);
        $asks = CheckUser::get();
//        dd($asks);
        return view('admin/xtAdmin/adminUser/ask',compact('asks'));
    }

    /**
     *  执行添加管理员
     */
    public function store(Request $request)
    {
//        1. 获得管理员数据
        $input = $request->except('_token','id');
//        $input = $input['user']['cid'];
//        return $input;

//        2. 加入数据库
        $res = AdminUser::create($input['user']);
        $data = [];
        if($res){
            $data =[
                'status'=> 0,
                'msg'=>'添加成功',
            ];
        }else{
            $data =[
                'status'=> 1,
                'msg'=>'添加失败'
            ];
        }
        return $data;
    }

    /**
     *  删除申请表中的记录
     */
    public function delask($id)
    {
        $res = \DB::table('check_user')->where('id',$id)->delete();
        if($res){
            return $id;
        }

    }
    public function delasks($id)
    {
        $res = \DB::table('check_user')->where('id',$id)->delete();
        if($res){
            return redirect('admin/xtAdmin/ask')->with('msg','已拒绝');
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
     * 删除管理员
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        找到要删除的记录
        $user = AdminUser::find($id);

//        开启事务
        DB::beginTransaction();
        try{
//            删除管理员拥有的角色
            DB::table('adminuser_role')->where('id',$id)->delete();
//            执行删除
            $res = $user->delete();
        }catch(Exception $e){
            DB::rollBack();
        }
        DB::commit();

        $data = [];
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
