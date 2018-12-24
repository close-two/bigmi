<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //前台首页
        if (!$request->ajax()) {

            // 手机
            $showPhone = PublicController::getShowData(1,8);

            /**********************公共头尾数据调用开始**********************************/
            // 侧边栏分类
            $catesAll = PublicController::getCatesByPid(0);
            // 导航分类
            $navdata = PublicController::getNav();

            $showHelp = PublicController::getHelpInfo();

            $showLinks = PublicController::getFriendLink();

            /**********************公共头尾数据调用结束**********************************/
            // dd($showHelp);exit;
            return view('Home.Home.index',['catesAll'=>$catesAll,'navdata'=>$navdata,'showPhone'=>$showPhone,'showHelp'=>$showHelp,'showLinks'=>$showLinks]);
        }
        // 如果是ajax请求
        $id = $request->get('id');
        $showdata = PublicController::getShowData($id,8);
        echo json_encode($showdata);

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


 // 获取搜索列表,到时候放到列表控制器
    public static function search(Request $request){
        $k = $request->input('keywords');
        // dd($keywords);
        $searchList = DB::TABLE('bm_goods_spu')->where("goods_title","like",'%'.$k.'%')->select('id','cate_id','goods_title','goods_thums','goods_market_price','goods_shop_price')->paginate(24);
        // dd($searchList);
        // foreach ($searchList as $key => $value) {
        //     var_dump($value);
        // }
        // exit;
        /**********************公共头尾数据调用开始**********************************/
            // 侧边栏分类
            $catesAll = PublicController::getCatesByPid(0);
            // 导航分类
            $navdata = PublicController::getNav();
            // 底部服务支持
            $showHelp = PublicController::getHelpInfo();
            // 友情链接
            $showLinks = PublicController::getFriendLink();

            /**********************公共头尾数据调用结束**********************************/
        return view('Home.List.search',['catesAll'=>$catesAll,'navdata'=>$navdata,'showHelp'=>$showHelp,'showLinks'=>$showLinks,'searchList'=>$searchList,'k'=>$k]);
    }
   

}
