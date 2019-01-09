<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrderController extends Controller
{
    //
    public function index(Request $request){
        /**********************公共头尾数据调用开始**********************************/
            // 侧边栏分类
            $catesAll = PublicController::getCatesByPid(0);
            // 导航分类
            $navdata = PublicController::getNav();

            $showHelp = PublicController::getHelpInfo();

            $showLinks = PublicController::getFriendLink();

            /**********************公共头尾数据调用结束*******************************/
            // 用户信息
            $miid=session('miid');
            $user=DB::table('bm_users')->where('miid','=',$miid)->first();
            $id=$user->id;
            // 获取所有订单
            $order=DB::table('bm_order')->where('uid','=',$id)->get();
            // 获取订单详细信息
            $orderdetail=DB::table('bm_order_detail')->where('uid','=',$id)->get();
            // 获取订单地址信息
            $address=DB::table('bm_user_address')->where('uid','=',$id)->get();
            // 获取商品表数据
            $goods=DB::table('bm_goods_spu')->get();
            // dd($aid );
            // dd($order);
            // dd($address);
            // dd($goods);
            // dd($orderdetail);
        return view('Home.Order.order',['goods'=>$goods,'user'=>$user,'address'=>$address,'order'=>$order,'orderdetail'=>$orderdetail,'catesAll'=>$catesAll,'navdata'=>$navdata,'showHelp'=>$showHelp,'showLinks'=>$showLinks]);
    }
}
