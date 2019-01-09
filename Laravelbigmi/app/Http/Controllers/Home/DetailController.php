<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show($id)
    {
        /**********************公共头尾数据调用开始**********************************/
            // 侧边栏分类
            $catesAll = PublicController::getCatesByPid(0);
            // 导航分类
            $navdata = PublicController::getNav();

            $showHelp = PublicController::getHelpInfo();

            $showLinks = PublicController::getFriendLink();

            /**********************公共头尾数据调用结束**********************************/
            // dd($showHelp);exit;
            // return view('Home.Home.index',['catesAll'=>$catesAll,'navdata'=>$navdata,'showHelp'=>$showHelp,'showLinks'=>$showLinks]);
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
        return view('Home.Product.product',['data'=>$data,'sku'=>$sku,'res'=>$res,'color'=>$color,'catesAll'=>$catesAll,'navdata'=>$navdata,'showHelp'=>$showHelp,'showLinks'=>$showLinks]);
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

    // 选择版本ajax
    public function chose(Request $request)
    {
        //接收跟换版本的id sku表
        $id=$request->input('id');
        // 获取数据
        $data=DB::table('bm_goods_sku')->where('id','=',$id)->get();
        // 选出goods_id和attr
        $goods_id=$data['0']->goods_id;
        $attr=$data['0']->attr;
        // 通过attr和goods_id获取当前版本所有的颜色
        $data1=DB::table('bm_goods_sku')->where('goods_id','=',$goods_id)->where('attr','=',$attr)->get();

        // dd($data1);
        return $data1;
        // return view('');
        // return view('Home.Product.Product',['data'=>$data,'sku'=>$sku,'color'=>$data1]);

    }

    // 评论
    public function comment($id){
        /**********************公共头尾数据调用开始**********************************/
        // 侧边栏分类
        $catesAll = PublicController::getCatesByPid(0);
        // 导航分类
        $navdata = PublicController::getNav();

        $showHelp = PublicController::getHelpInfo();

        $showLinks = PublicController::getFriendLink();

        /**********************公共头尾数据调用结束**********************************/
        $data=DB::table('bm_comments')->where('goods_id','=',$id)->get();
        $user=DB::table('bm_users')->get();
        // dd($id);
        // dd($user);
        // dd($data);
        return view('Home.Product.product_comment',['id'=>$id,'data'=>$data,'user'=>$user,'catesAll'=>$catesAll,'navdata'=>$navdata,'showHelp'=>$showHelp,'showLinks'=>$showLinks]);

    }

    // 收藏商品
    public function collection(Request $request){
        // dd($id);
        // dd(session()->all());
        $id=$request->input('id');
        // dd($id);
        if (session('miid')) {
            $miid=session('miid');
            // dd($id);
            $data=DB::table('bm_users')->where('miid','=',$miid)->get();
            // dd($id);
            $res['uid']=$data[0]->id;
            $res['goods_id']=$id;
            // dd($res);
            if (DB::table('bm_user_like')->where('uid','=',$res['uid'])->where('goods_id','=',$res['goods_id'])->first()) {
                return 1;
                // echo 1;
                // dd(1);
                // $data=DB::table('bm_user_like')->where('uid','=',$res['uid'])->where('goods_id','=',$res['goods_id'])->first();
                // dd($data);
            }else{
            if (DB::table('bm_user_like')->insert($res)) {
                return 0;
                }
            }
            
        }else{
            // 没登录的时候转到登录界面
            return 2;
        }
    }
    public function gaishu($id){

        /**********************公共头尾数据调用开始**********************************/
            // 侧边栏分类
            $catesAll = PublicController::getCatesByPid(0);
            // 导航分类
            $navdata = PublicController::getNav();

            $showHelp = PublicController::getHelpInfo();

            $showLinks = PublicController::getFriendLink();

            /**********************公共头尾数据调用结束**********************************/
        // dd($id);
        $data=DB::table('bm_goods_spu')->where('id','=',$id)->first();
        // dd($data);
        return view('Home.Product.gaishu',['data'=>$data,'catesAll'=>$catesAll,'navdata'=>$navdata,'showHelp'=>$showHelp,'showLinks'=>$showLinks]);
    }
}
