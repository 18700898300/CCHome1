<?php

namespace App\Http\Controllers\Admin\Flink;

use App\Http\Model\Flink\Flink;
use App\Http\Model\Flinkt\Flinkt;
use App\Services\OSS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FlinkController extends Controller
{

//    public function test()
//    {
//        $obj = Flink::find(1)->flinkt;
//        dd($obj);
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public  function upload(Request $request)
{


//    $file = $request->file('fpic');
//    dd($file);
        // 多文件上传????????????
        $file = $request->file('fpic');
        //dd($file);
//        $file =$file[0];
//        return $file[2];
//        return $request;
//        $arr=[];
//        foreach($file as $k=>$file){
//            return $file;
            if($file->isValid()){
                //获取文件上传对象后的后缀名
                $ext = $file->getClientOriginalExtension();
                //生成一个唯一的文件名,保证所有的文件不重名
                $newfile=time().rand(1000,9999).uniqid().'.'.$ext;
                //设置上传文件的目录
//            $dirpath  = public_path().'/uploads/'; //获取public目录的绝对路径并拼接新的上传文件路径
//            将文件移动到本地服务器的指定位置,并以新文件名命名
//            $file->move(移动到的目录,新文件名);
//            $file->move($dirpath,$newfile);
                //将文件移动到七牛云,并以新文件名命名

                $disk = Storage::disk('qiniu')->writeStream('uploads/'.$newfile, fopen($file->getRealPath(), 'r'));
                //将文件移动到阿里云并以新文件名命名

//                OSS::upload($newfile,$file->getRealPath());
//                 $arr[]=$file;
//

            }
//        }
        return $newfile;
//        return $arr;

}
    public function index()
    {

//    dd(1111);

        $flink = Flink::with('flinkt')->paginate(2);
//        $flink=Flink::get()->flinkt;
//        dd($flink);
        return view('admin/flink/index',compact('flink'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        dd(99999);
        $fltype = Flinkt::get();
        $flinkts = (new Flinkt)->tree();//二级列表显示
//        dd($flinkts);
        return view('admin/flink/create',compact('fltype','flinkts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd(111);
//        dd($request->input());
            $input = $request->except('_token','fpic');
//            dd($input);查看排除的字段fpic
            //表单验证
            $rule =[
                'fname'=>'required',
                'fpath'=>'required',
                'ffpic'=>'required',
            ];
            $mess = [
                'fname.required'=>'友情链接名称必须填写',
                'fpath'=>'友情链接网址必须填写',
                'ffpic'=>'友情链接图片链接必须填写',
            ];
            $validator = Validator::make($input,$rule,$mess);
    //        如果表单验证失败

            if($validator->fails()){
                return redirect('admin/flink/create')
                    ->withErrors($validator)
                    ->withInput();//让页面输入的用户名保持在输入框
            }
            //添加到数据库
        $res = Flink::create($input);
            if($res){
                return redirect('admin/flink')
                    ->with('msg','添加成功');
            }else{
                return back()
                    ->with('msg','添加失败');
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
        //获取所有分类
        $flinkts = (new Flinkt)->tree();
        //根据id找到要修改的友情链接记录
        $flink=Flink::find($id);
        return view('admin/flink/edit',compact('flinkts','flink'));
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
//        dd(1111);

        $input = $request->except('_token','fpic');
//        dd($input);
        $flink=Flink::find($id);
        $res = $flink->update($input);
        if($res){
            return redirect('admin/flink')->with('msg','修改成功');
        }else{
            return back();
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
        //
    }
}
