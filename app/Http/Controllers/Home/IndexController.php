<?php

namespace App\Http\Controllers\Home;


use App\Models\Admin\Shop_type;
use App\Models\Home\Food_label;
use App\Models\Home\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
//    前台首页
    public function index()
    {
//        获得所有分类
        $cates = Shop_type::get();
//        dd($cates);
//        获得所有商家
        $shops = Shop::with('food')->orderBy('status')->get();
//        dd($shops);
        $sum = 0;
//        foreach ($shops as $key => $value) {
//            foreach($value->food as $k=>$v){
//                $sum += $v->sum;
//                $value['sum'] = $sum;
//            }
//
//
//        }
//        dd($shops);
        return view('home/index',compact('cates','shops','pids','sum'));
    }

//    显示二级分类
    public function type($id)
    {
        $data = [];
        if($id!=0) {
//        显示二级分类

            $type = Shop_type::where('pid', $id)->get();


            $data[] = '<a onclick="sho('.$id .')" class="excavator-filter-item ng-binding ng-scope active" href="javascript:">全部</a>';
            foreach ($type as $k => $v) {
                $data[] = '<a onclick="sho('.$v->tid.')" id="'.$v->tid .'" class="excavator-filter-item ng-binding ng-scope" href="javascript:;">' . $v->tname . '</a>';
            }
        }else{
            $data[] = '';
        }

//        显示选中分类下商家
        $shops = [];
        $shop = [];
        if($id==0) {
            $shops = Shop::orderBy('status')->get();
            foreach($shops as $k=>$v){
                if ($v->status == 1) {
                    $shop[] = '<a class=" rstblock" href="/home/shop/' . $v->sid . '" data-rst-id="2218439" data-bidding="" target="_blank">
                        <div class="rstblock-logo">
                            <img class="rstblock-logo-icon" src="' . $v->avatar . '" alt="麻辣香锅" width="70" height="70">
                            <span class="rstblock-left-timeout">' . $v->statime . ' 分钟</span>
                        </div>
                        <div class="rstblock-content">
                            <div class="rstblock-title">' . $v->name . '</div>
                            <div class="starrating icon-star">
                                <span class="icon-star" style="width:90%;"></span>
                            </div>
                            <span class="rstblock-monthsales">月售999单</span>
                            <div class="rstblock-cost">配送费¥' . $v->sprice . '</div>
                            <div class="rstblock-activity"></div>
                        </div>
                    </a>';
                } else {
                    $shop[] = '<a class="rstblock-closed rstblock" href="/home/shop/' . $v->sid . '" data-rst-id="2218439" data-bidding="" target="_blank">
                        <div class="rstblock-logo">
                            <img class="rstblock-logo-icon" src="' . $v->avatar . '" alt="麻辣香锅" width="70" height="70">
                            <span class="rstblock-left-timeout">' . $v->statime . ' 分钟</span>
                        </div>
                        <div class="rstblock-content">
                            <div class="rstblock-title">' . $v->name . '</div>
                            <div class="starrating icon-star">
                                <span class="icon-star" style="width:90%;"></span>
                            </div>
                            <span class="rstblock-monthsales">月售999单</span>
                            <div class="rstblock-cost">配送费¥' . $v->sprice . '</div>
                            <div class="rstblock-activity">商家休息,暂不接单</div>
                        </div>
                    </a>';
                }
            }
        }else {
//        1. 获得选中分类及其子分类
            $type = \DB::table('shop_type')
                ->where('tid', $id)
                ->orWhere('pid', $id)
                ->get();
//        2. 获得分类下商家

            foreach ($type as $m => $n) {
                $shops[] = \DB::table('shop')->where('tid', $n->tid)->get();
            }

//        $shop[0][0]['name'];

            foreach ($shops as $s => $h) {
                foreach ($h as $mm => $nn) {
                    if ($nn->status == 1) {
                        $shop[] = '<a class=" rstblock" href="/home/shop/' . $nn->sid . '" data-rst-id="2218439" data-bidding="" target="_blank">
                        <div class="rstblock-logo">
                            <img class="rstblock-logo-icon" src="' . $nn->avatar . '" alt="麻辣香锅" width="70" height="70">
                            <span class="rstblock-left-timeout">' . $nn->statime . ' 分钟</span>
                        </div>
                        <div class="rstblock-content">
                            <div class="rstblock-title">' . $nn->name . '</div>
                            <div class="starrating icon-star">
                                <span class="icon-star" style="width:90%;"></span>
                            </div>
                            <span class="rstblock-monthsales">月售999单</span>
                            <div class="rstblock-cost">配送费¥' . $nn->sprice . '</div>
                            <div class="rstblock-activity"></div>
                        </div>
                    </a>';
                    } else {
                        $shop[] = '<a class="rstblock-closed rstblock" href="/home/shop/' . $nn->sid . '" data-rst-id="2218439" data-bidding="" target="_blank">
                        <div class="rstblock-logo">
                            <img class="rstblock-logo-icon" src="' . $nn->avatar . '" alt="麻辣香锅" width="70" height="70">
                            <span class="rstblock-left-timeout">' . $nn->statime . ' 分钟</span>
                        </div>
                        <div class="rstblock-content">
                            <div class="rstblock-title">' . $nn->name . '</div>
                            <div class="starrating icon-star">
                                <span class="icon-star" style="width:90%;"></span>
                            </div>
                            <span class="rstblock-monthsales">月售999单</span>
                            <div class="rstblock-cost">配送费¥' . $nn->sprice . '</div>
                            <div class="rstblock-activity">商家休息,暂不接单</div>
                        </div>
                    </a>';
                    }
                }
            }
        }

        return [$data,$shop];
    }

    public function shop($id)
    {
//        获得当前店铺信息
        $shop = Shop::find($id);
//        dd($shop);
//        获得当前店铺所有菜品标签
        $labels = $shop->food_label;
//        dd($labels);
//        通过标签获得标签与菜品
        $lids = [];
        foreach($labels as $key=>$value){
            $lids[] = $value->lid;
        }
        $f = Food_label::with('food')->whereIn('lid',$lids)->get();
//        dd($f);
//        dd($foods[0]['food'][0]['sum']);
//        求得店铺总销量
        $flink = Shop::with('flink')->where('sid',$id)->get();
        $flink = $flink[0]->flink;
//        dd($flink);
        $sum = 0;
//        所有菜品
        $foods = [];
//        $s = [];
        foreach ($f as $k=>$v){
            foreach($v->food as $n){
                $foods[] = $n;
                $sum += $n['sum'];
//                $s[] = $n['sum'];
            }
        }
//        dd($sum);
//        dd($foods);
//        dd($s);
        $shop->sum = $sum;

        return view('home/shop',compact('shop','foods','labels','id','flink'));

    }

    //退出登录
    public function quit()
    {

      $res =  session()->forget('user');
        if($res)
        {
            return redirect('home/login');
        }else{
            return back();
        }

    }
}
