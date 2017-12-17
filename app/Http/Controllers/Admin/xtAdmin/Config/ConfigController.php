<?php

namespace App\Http\Controllers\Admin\xtAdmin\Config;

use App\Http\Model\Config\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PutRedis()
    {
        $conf = Config::pluck('conf_content','conf_name')->all();
        $conf = serialize($conf);
        $values = Redis::set('conf', $conf);

    }
    public function GetRedis(){
        $conf = Redis::get('conf');
        $conf = unserialize($conf);
        return $conf;
    }

    public function PutFile(){
        //获取网站配置表中的两列数据数据,lists无法使用
        $conf = Config::pluck('conf_content','conf_name')->all();
//        dd($conf);
        //创建网站配置文件,写入数据
            $filename = config_path().'\cchome.php';
//            dd($filename);
//        将数据库中查到的数据(数组形式),变成字符串形式
        $context = "<?php return \n".var_export($conf,true).';';
        file_put_contents($filename,$context);
    }


    public function  ContentChange(Request $request){
//        dd(11111);
        $input = $request -> all();
//        根据conf_id[]数组获取要修改的网站记录,然后从conf_content的同下标中取出次网站配置需要修改成的值
//        dd($input);
//        dd($input['conf_id']);
//        dd($input['conf_content']);
//        dd($input);
            foreach($input['conf_id'] as $k=>$v){
//                找到一条需要修改的网站配置记录
                $conf = Config::find($v);
//                if($conf->field_type=='image') {
//                    //$k--;
//                    //dd($k);
//                    continue;
//                }
//                dd($conf);
//                return $input['conf_content'][$k];
                $conf->update(['conf_content'=>$input['conf_content'][$k]]);
            }
                $this::PutRedis();
//            $this->PutFile();
        return redirect('admin/xtAdmin/config');
    }
    public function index()
    {
//        dd(55555555);
//        网站配置数据
        $config = Config::get();//分页paginate(5),若此处分页,提交修改时只传递当前页的id
//        dd($config);
        foreach($config as $k=>$v){
            switch($v->field_type){
                case 'input':
                    $v->conf_contents = "<input type='text'   class='lg' name = 'conf_content[]' value = '".htmlspecialchars($v->conf_content)."'>";
                    break;
                case 'textarea':
                    $v->conf_contents = "<textarea id=''  cols = '30' class='lg' rows = '10' name = 'conf_content[]'>".htmlspecialchars($v->conf_content)."</textarea>";
                    break;
                case 'radio':
                    $str='';
//                    1|开启,0|关闭
//                    =====>
//                  arr=  [
//                        0=>'1|开启',
//                        1=>'0|关闭'
//                    ]
//                    $item =[
//                        0=>1,
//                        1=>'开启'
//                    ]
//                ========》
//                    <input type="radio" name="field_type" value="1" >开启　
//                    <input type="radio" name="field_type" value="0" >关闭　
                    $arr = explode(',',$v->field_value);
                    foreach($arr as $m=>$n){
                        $item = explode('|',$n);
                        //如果当前网站配置记录的conf_content的值==单选按钮的值,应该给单选按钮添加checked属性
                        if($item[0] == $v->conf_content){
                            $str .= '<input type="radio" name="conf_content[]"  checked value = "'.$item[0].'">'.$item[1];

                        }else{
                            $str.='<input type="radio" name="conf_content[]" value = "'.$item[0].'">'.$item[1];
                        }
                    }
                    $v->conf_contents=$str;
                    break;
                case 'image':
//                    name 属性中的[]必须有，否则值被覆盖最终只有一个值,隐藏域的作用。
                    $v->conf_contents =  '<img src = "'.$v->conf_content.'"   style="width:80px;height:80px;">
                    <input type ="hidden" name = "conf_content[]" value = "'.$v->conf_content.'"> ';
                    break;
            }
        }
            return view('admin/config/index',compact('config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        dd(11);
        $conf = $this::GetRedis();
        return view('admin/config/create',compact('conf'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token','fpic');
//        dd($input);
        //表单验证
        $rule =[
            'conf_title'=>'required',
            'conf_name'=>'required',
            'field_type'=>'required',

        ];
        $mess = [
            'conf_title.required'=>'网站配置标题必须填写',
            'conf_name.required'=>'配置项名称必须填写',
            'field_type.between'=>'网站配置项类型必须填写',

        ];

        $validator = Validator::make($input,$rule,$mess);
//        如果表单验证失败

        if($validator->fails()){
            return redirect('admin/xtAdmin/config/create')  //返回原添加页面
            ->withErrors($validator)
                ->withInput();//让页面输入的用户名保持在输入框
        }
       $res =  Config::create($input);


        if($res){
//            $this->PutFile();
            $this->PutRedis();
            return redirect('admin/xtAdmin/config')->with('msg','网站配置添加成功');
        }else{
            return back()->with('msg','网站配置添加成功失败');
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
//        dd($id);
        $config = Config::find($id);
        return view('admin/config/edit',compact('config'));
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
//        dd($request->input);
        $input = $request->except('_token','_method','fpic');
//        dd($input);
        $res = Config::where('conf_id',$id)->update($input);
        if($res){
            $this::PutRedis();
            return  redirect('/admin/xtAdmin/config')->with('msg','修改成功');
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
        $res = Config::find($id)->delete();
        if($res){
            $data['error']=0;
            $data['msg']='删除成功！';
            return $data;
        }else{
            $data['error']=1;
            $data['msg']='删除失败，请重试！';
            return $data;
        };
    }

    public  function upload(Request $request)
    {

//    return 1111;
//    $file = $request->file('fpic');
//
        // 多文件上传????????????
//        return $request->input();
        $file = $request->file('fpic');

//        return $file;
//        return 111;
//        return $file;
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
}
