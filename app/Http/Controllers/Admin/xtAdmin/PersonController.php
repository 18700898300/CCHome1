<?php

namespace App\Http\Controllers\Admin\xtAdmin;


use App\Http\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonController extends Controller
{
   public function lists(Request $request)
   {
       $users=User::all();
//       dd($users);
       $users = User::orderBy('uid','asc')
           ->where(function($query) use($request){
               //检测关键字
               $username = $request->input('keywords1');
               //$email = $request->input('keywords2');
               //如果用户名不为空
               if(!empty($username)) {
                   $query->where('uname','like','%'.$username.'%');
               }

           })
           ->paginate($request->input('num', 2));
//        dd($request);
//        dd($user);
       return view('admin/xtAdmin/person/lists',['users'=>$users, 'request'=> $request]);

   }

    public function del($id)
    {

        $res = User::find($id)->delete();
        $data = [];
        if($res){
            $data['error'] = 0;
            $data['msg'] ="删除成功";
        }else{
            $data['error'] = 1;
            $data['msg'] ="删除失败";
        }

//        return  json_encode($data);

        return $data;
    }


}
