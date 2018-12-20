<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class SkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //列表
    public function index(Request $request)
    {
        //获取搜索条件
        $k=$request->input("keywords");
        //导入数据库
        $sku=DB::table("bm_goods_sku")->where("name","like",'%'.$k.'%')->get();
        //加载模块
        return view("Admin.Sku.index",['sku'=>$sku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //添加商品
    public function create(Request $request)
    {
        //加载模板
        $data = $request->only('id');
        $goods = DB::TABLE('bm_goods_spu')->find($data['id']);//查询刚刚插入的商品
        // dd($goods);
        return view('Admin.Sku.add',['goods'=>$goods]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //执行添加
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $data=$request->except("_token");
        // dd($_POST);
        // $data->paramter = htmlentities($data->paramter,ENT_QUOTES,"UTF-8");
        DB::table('bm_goods_sku')->insert($data);
    }
// 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //商品详情
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
    //修改商品
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
    // 执行修改
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
    //删除
    public function destroy($id)
    {
        //
    }
}
