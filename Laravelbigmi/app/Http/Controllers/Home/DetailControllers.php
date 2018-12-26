<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class DetailController extends Controller
{
    //
    public function index($id){
        //
        // dd($id);
        // 获取商品表数据
        $data=DB::table('bm_goods_spu')->where('id','=',$id)->where('goods_status','=','1')->first();
        // dd($data);
        // 获取sku表数据
        $sku=DB::table('bm_goods_sku')->where('goods_id','=',$id)->where('status','=','1')->get();
        // 获取第一条找到的sku数据的attr的值
        $res=DB::table('bm_goods_sku')->where('goods_id','=',$id)->where('status','=','1')->first();
        $attr=$res->attr;
        // 通过这个值获取颜色的数据
        $color=DB::table('bm_goods_sku')->where('goods_id','=',$id)->where('status','=','1')->where('attr','=',$attr)->get();
        // 定义一个空数组
        $st=array();
        // 遍历数据
        foreach ($sku as $key => $value) {
            // 判断数组中是否含有这个值,如果有就将数据删除掉
            if (in_array($value->attr, $st)) unset($sku[$key]);
            // 当没有的时候将字段放入到st数组中
            else $st[] = $value->attr;
        }
        // dd($sku);
        return view('Home.Product.Product',['data'=>$data,'sku'=>$sku,'color'=>$color]);
    }
    // 版本挑选
    public function chose(){

    }
}
