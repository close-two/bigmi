<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// 导入DB
use DB;
class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // 本路由方法仅做测试前台页面使用,业务逻辑后期自己补全

        // return view('Home.Login.login');//测试,登录页面
        // return view('Home.Register.register');//测试,注册页面
        
        // return view('Home.Buy.buySuccess');//测试,成功加入购物车页面
        // return view('Home.Cart.cart');//测试,购物车页面
        // return view('Home.Buy.checkout');//测试,结算页面
        return view('Home.Buy.confirm');//测试,提交订单成功,未支付页面,后面写业务逻辑

        // return view('Home.Person.person');//测试,个人中心页面
        // return view('Home.Person.security');//测试,账号安全页面
        // return view('Home.Person.profile');//测试,个人信息页面
        // return view('Home.Person.address');//测试,收货地址页面
        // return view('Home.Person.favorite');//测试,我的收藏夹
        // return view('Home.Person.message');//测试,消息通知
        
        // return view('Home.Order.order');//测试,我的订单中心
        // return view('Home.Order.comment');//测试,评价晒单
        // return view('Home.Product.product');//测试,商品详情页
        // return view('Home.List.list');//测试,商品列表页
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 商品详情页
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    // 支付页面
    public function cartpay(){
         /**********************公共头尾数据调用开始**********************************/
            // 侧边栏分类
            $catesAll = PublicController::getCatesByPid(0);
            // 导航分类
            $navdata = PublicController::getNav();

            $showHelp = PublicController::getHelpInfo();

            $showLinks = PublicController::getFriendLink();

            /**********************公共头尾数据调用结束**********************************/
        $data=session('cart');
        // $id=[];
        // foreach ($data as $key => $value) {
        //     $id[$key]=$value['id'];
        // }
        $miid=session('miid');
        $user=DB::table('bm_users')->where('miid','=',$miid)->first();
        $address=DB::table('bm_user_address')->where('uid','=',$user->id)->get();
        // dd($data[0]['id']);
        // dd($user);
        $gid=[];
        $goods=[];
        $total='';
        foreach ($data as $key => $value) {
            $gid[$key]=$value['id'];
            $goods[$key]=DB::table('bm_goods_sku')->where('id','=',$value['id'])->first();
            $goods[$key]->num=$value['num'];
            $spu=DB::table('bm_goods_spu')->where('id','=',$goods[$key]->goods_id)->first();
            $goods[$key]->img=$spu->goods_img;  
            $goods[$key]->total=$goods[$key]->market_price*$goods[$key]->num;
            $total+=$goods[$key]->total;
        }
        // dd($spu);
        // dd($total);
        // var_dump($goods);
        // dd(1);   
        // $data->id
        $a=session(['total'=>$total]);
        if ($miid) {
            return view('Home.Buy.checkout',['total'=>$total,'goods'=>$goods,'address'=>$address,'catesAll'=>$catesAll,'navdata'=>$navdata,'showHelp'=>$showHelp,'showLinks'=>$showLinks]);
        }
        return view('Home.Login.login');
        
    }
    public function address(Request $request){
        $id=$request->input('id');
        // sesseion('address');
        $request->session()->put('address',$id);
        // dd(session('address'));
    }
    // 支付接口
    public function pay(){
        $data=session('cart');
        // dd($data);
        $id=$data[0]['id'];
        // dd($id);
        $name=DB::table('bm_goods_sku')->where('id','=',$id)->first()->title;
        // dd($name);   
        pay(time()+rand(1,1000),$name,'0.01',$name);
    }
    // 返回地址
    public function returnurl(){
        // 获取手机栏位
            $showPhone = PublicController::getShowData(1,8);

            //获取轮播图
            $slidelist = DB::table('bm_plant_pic')->where('status','=','1')->limit(5)->select('name','url')->get()->toArray();

            // 获取广告位7个
            $adslist = DB::TABLE('bm_ads')->where('status','=','1')->select('adsname','source','file')->limit(7)->get()->toArray();
            foreach ($adslist as $key => $value) {
                $adslist[$key]=$value->file;
            }

            $showvideo = DB::TABLE('bm_video')->where('status','=','1')->select('video','videoname','comment')->limit(4)->get()->toArray();
           
            // var_dump($adslist);exit;

            /**********************公共头尾数据调用开始**********************************/
            // 侧边栏分类
            $catesAll = PublicController::getCatesByPid(0);
            // 导航分类
            $navdata = PublicController::getNav();

            $showHelp = PublicController::getHelpInfo();

            $showLinks = PublicController::getFriendLink();

            /**********************公共头尾数据调用结束**********************************/
        // echo "123";
        $data=session('cart');
        $miid=session('miid');
        $aid=session('address');
        $total=session('total');
        $user=DB::table('bm_users')->where('miid','=',$miid)->first();
        // dd($data);
        foreach ($data as $key => $value) {
            $id=$value['id'];
            $order['order_id']=rand(1,10000)+time();
            $order['goods_id']=$id;
            $order['uid']=$user->id;
            $order['aid']=$aid;
            $order['status']=1;
            $order['total']=$total;

            DB::table('bm_order')->insert($order);

        }

        // return view('');
        // return view('Home.Home.index');
        // return view('Home.Home.index',['showPhone'=>$showPhone,'catesAll'=>$catesAll,'navdata'=>$navdata,'showHelp'=>$showHelp,'showLinks'=>$showLinks]);
        return view('Home.Home.index',['catesAll'=>$catesAll,'navdata'=>$navdata,'slidelist'=>$slidelist,'showPhone'=>$showPhone,'showHelp'=>$showHelp,'showLinks'=>$showLinks,'adslist'=>$adslist,'showvideo'=>$showvideo]);
        // return redirect('/');
    }
}
