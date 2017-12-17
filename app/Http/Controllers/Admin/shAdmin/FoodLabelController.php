<?php

namespace App\Http\Controllers\Admin\shAdmin;

use App\Models\Home\Food_label;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Validator;

class FoodLabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        获取所有分类
        $sid = session('meruser')['sid'];
        $labels = Food_label::where('sid',$sid)->get();
//        dd($labels);
        return view('admin/shAdmin/foodLabel/lists',compact('labels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/shAdmin/foodLabel/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd(11);
//        1. 获得提交数据
        $input = $request->except('_token');
//        2. 表单验证
        $rule = [
            'name'=>'required|between:2,10',
        ];


        $mess = [
            'name.required'=>'分类名称必须输入',
            'name.between'=>'分类名称必须在2到10位之间',
        ];

        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('admin/foodlabel/create')
                ->withErrors($validator)
                ->withInput();
        }


//        3. 执行添加操作

        $res = Food_label::create($input);
//        4. 判断是否成功
        if($res){
            return redirect('admin/foodlabel')->with('msg','添加成功');
        }else{
            return redirect('admin/foodlabel/create')->with('msg','添加失败');
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
     * 修改分类
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        dd($id);
//        获得要修改的分类信息
        $label = Food_label::find($id);
//        dd($label);
        return view('admin/shAdmin/foodLabel/edit',compact('label'));
    }

    /**
     * Update the specified resource in storage.
     * 执行修改分类
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        1.  获得提交的修改信息
        $input = $request->except('_token','_method');
//        dd($input);
//        2. 表单验证
        $rule = [
            'name'=>'required|between:2,10',
        ];


        $mess = [
            'name.required'=>'分类名称必须输入',
            'name.between'=>'分类名称必须在2到10位之间',
        ];

        $validator =  Validator::make($input,$rule,$mess);
        //如果表单验证失败 passes()
        if ($validator->fails()) {
            return redirect('admin/foodlabel/'.$id.'/edit')
                ->withErrors($validator)
                ->withInput();
        }
//        3. 执行修改
        $res = Food_label::find($id)->update($input);

//        4. 判断是否成功
        if($res){
            return redirect('admin/foodlabel')->with('msg','修改成功');
        }else{
            return redirect('admin/foodlabel/'.$id.'/edit')->with('msg','修改失败');
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
        $foods = Food_label::find($id)->food;
//        return $foods;
        $arr =[];
        foreach($foods as $k=>$v){
            $arr[] = $v;
        }
        if($arr){
            $data =[
                'status'=> 1,
                'msg'=>'删除失败,分类下含有菜品'
            ];
            return $data;
        }
//        开启事务
        DB::beginTransaction();
        try{
//        根据ID删除分类
            $res = Food_label::find($id)->delete();
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
