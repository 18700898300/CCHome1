<?php

namespace App\Http\Controllers\Home\Comment;

use App\Http\Model\Comment\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=array();
        $data=$this->getCommlist();//获取评论列表
        return view('home.comment.comment',compact('data'));
//        return $data[0]->children;
        //dd($data[0]->children);
    }
    /**
     *递归获取评论列表
     */

    protected function getCommlist($parent_id = 0,&$result = array()){
        $arr = Comment::where('parent_id',$parent_id)->get();
        if(empty($arr)){
            return array();
        }
        foreach ($arr as $cm) {
            $thisArr=&$result[];
            $cm["children"] = $this->getCommlist($cm["id"],$thisArr);
            $thisArr = $cm;// 函数引用传参的作用
        }
        return $result;
    }

    /**
     *添加评论
     */
    public function addComment(){
        //return '111';
        //return $_POST["comment"];
        $data=array();
        if((isset($_POST["comment"]))&&(!empty($_POST["comment"]))){
            $cm = json_decode($_POST["comment"],true);//通过第二个参数true，将json字符串转化为键值对数组对象
            $cm['create_time']=date('Y-m-d H:i:s',time());
            $cm['IP']=$_SERVER['REMOTE_ADDR'];
            $cm = Comment::create($cm);//返回插入的数据
//            return $cm;//测试数据,看字段,模型中有可能没有改
            $data = $cm;
            //return ($data);

        }else{
            $data["error"] = "0";
        }
        //返回json格式的字符串
        echo json_encode($data);
    }


}
