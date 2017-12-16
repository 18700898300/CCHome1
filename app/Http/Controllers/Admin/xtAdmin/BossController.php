<?php

namespace App\Http\Controllers\admin\xtAdmin;


use App\Http\Model\MerUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BossController extends Controller
{
   public function lists(Request $request)
   {
       $boss = \DB::table('boss_info')->first();
//       dd($boss);

       $boss = MerUser::orderBy('bid','asc')
           ->where(function($query) use($request){
               //检测关键字
               $bossname = $request->input('keywords1');
               //$email = $request->input('keywords2');
               //如果用户名不为空
               if(!empty($bossname)) {
                   $query->where('bname','like','%'.$bossname.'%');
               }

           })
           ->paginate($request->input('num', 2));
//        dd($request);
//        dd($user);
       return view('admin/xtAdmin/boss/lists',['boss'=>$boss, 'request'=> $request]);

   }

    public function del($id)
    {

        $res = MerUser::find($id)->delete();
//        return $res;
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
