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
        return view('Home.Product.product',['data'=>$data,'sku'=>$sku,'res'=>$res,'color'=>$color]);
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
        $data=DB::table('bm_comments')->where('id','=',$id)->get();
        $id=array();
        foreach ($data as $key => $value) {
            $id=$value->users_id;
        }
        // dd($id);
        
        dd($data);
        return view('Home.Product.product_comment',['data'=>$data]);

    }
}
