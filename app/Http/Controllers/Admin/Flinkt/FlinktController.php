<?php

namespace App\Http\Controllers\Admin\Flinkt;

use App\Http\Model\Flinkt\Flinkt;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FlinktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    修改排序

    public  function changeOrder(Request $request){
        $fltid = $request->input('fltid');
//        dd($fltid);测试
//        var_dump($fltid);
        $flt_order= $request->input('flt_order');
        $flinkt = Flinkt::find($fltid);
        $res = $flinkt->update(['flt_order'=>$flt_order]);
        if($res){
            $data = [
                'status'=>'ok',
                'msg'=>'修改成功'
            ];
        }else{
            $data = [
                'status'=>'error',
                'msg'=>'修改失败'
            ];
        }
        //必有return,否则无传值
        return $data;
    }

    public function index()
    {
        $flinkts = (new Flinkt)->tree();
//        dd($flinkts);
//        数据格式化处理在模型flinkt.php中
        return view('admin.flinkt/index',compact('flinkts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//

        $ftypeOne = Flinkt::where('flt_pid','=',0)->get();//页面中只遍历父类为0的
//        dd($ftypeOne[0]->fltype_name);
        return view('admin.flinkt.create',compact('ftypeOne'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd(1111);
//        dd('store\'\'');
//        dd($request->input());
        $input = $request->except('_token');

        //表单验证
        $rule =[
            'fltype_name'=>'required|regex:/^[\x{4e00}-\x{9fa5}]+$/u|between:2,10',
        ];
        $mess = [
            'fltype_name.required'=>'分类名必须输入',
            'fltype_name.regex'=>'分类名必须为汉字',
            'fltype_name.between'=>'分类名必须在2-10之间',

        ];
        $validator = Validator::make($input,$rule,$mess);
//        如果表单验证失败

        if($validator->fails()){
            return redirect('admin/flinkt/create')  //返回原添加页面
                ->withErrors($validator)
                ->withInput();//让页面输入的用户名保持在输入框
        }
//        dd($input);
        if($input['fltype_name'] != null){
          $flinkt=new Flinkt();
          $flinkt->fltype_name = $input['fltype_name'];
          $flinkt->flt_pid = $input['flt_pid'];
          $res = $flinkt->save();
          if($res){
              return redirect('admin/flinkt')->with('msg','添加成功');
          }else{
              return redirect('admin/flinkt/create')->with('msg','添加失败');
          }
        }else{
            return redirect('admin/flinkt/create')->with('msg','分类名必须填写');
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

        $flinkt = Flinkt::find($id);
//        dd($flinkt->flt_pid);
        $flinkts = Flinkt::get();
//        dd($flinkts);
        return view('admin/flinkt/edit',compact('flinkt','flinkts'));
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
//        dd(99999);
        //1.通过id 找到要修改的那个类别
            $flinkt  = Flinkt::find($id);
            //2.获取要修改的值
        //only()和except()都是数字的形式input()是字符串的形式
        $input = $request->only('fltype_name');
        if($request->input('fltype_name')==$flinkt->fltype_name){
            return redirect('admin/flinkt/'.$flinkt->fltid.'/edit')->with('msg','类别名称已经存在');
        }
//        dd($input);
        //3.使用模型的update进行更新
        $res = $flinkt->update($input);
        //4.根据更新是否成功跳转页面
        if($res){
            return redirect('admin/flinkt')
                ->with('msg','更新成功');
        }else{
            return redirect('admin/flinkt/'.$flinkt->fltid.'/edit')
                ->with('msg','更新失败');
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
//        return $id;
    $flinkt = Flinkt::find($id);
    $flinkts = Flinkt::get();
//    return $flinkts;
        $mark=[];
    foreach($flinkts as $k=>$v){
        if($v->flt_pid == $id){
            $mark['error']='ok';
            break;
        }else{
            $mark['error']='no';//此步必须有,否则报错500
        }
    }
    $haslink = Flinkt::with('flink')->where('fltid',$id)->get()[0]->flink;
//        return $haslink;
        $data=[];
    if($mark['error'] =='ok' || $haslink != '[]'){
        $res=false;
        $data['msg']='有子分类或者有存在友情链接，无法删除！';
    }else{
        $res = $flinkt->delete();
    }
//



    if($res){
        $data['error']=0;
        $data['msg']='删除成功';
    }else{
        $data['error']=1;
        $data['msg'] ? $data['msg'] : '删除失败';
        }
        return $data;//不用json格式化,因为laravel框架已经格式化好了
    }
}
