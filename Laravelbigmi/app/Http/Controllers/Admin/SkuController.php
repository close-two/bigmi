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
        $sku=DB::table("bm_goods_sku")->where("title","like",'%'.$k.'%')->get();
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
        // echo $data['goods_id'];
        $data['created_at']=date("Y-m-d H:i:s");
        $data['updated_at']=date("Y-m-d H:i:s");
        // dd($data);
        // $data->paramter = htmlentities($data->paramter,ENT_QUOTES,"UTF-8");
        // if(DB::table('bm_goods_sku')->insert($data)){
            // return redirect('/Admin/Goods/index');
        // }
        if(DB::table('bm_goods_sku')->insert($data)){
            return redirect("/sku");
        }else{
            return redirect("")->back();
        }
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
        //获取数据
        $sku=DB::table("bm_goods_sku")->where('id','=',$id)->get();
        // dd($sku);
        //加载视图
        return view('Admin.Sku.edit',['sku'=>$sku]);
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
        // dd($request->all());
        $data=$request->except('_token','_method');
        DB::table("bm_goods_sku")->where('id',"=",$id)->update($data);
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

// ajax删除商品
public function del(Request $request){
    //获取参数id
    $id=$request->input('id');
    // echo $id;
    //执行删除
    if(DB::table("bm_goods_sku")->where("id",'=',$id)->delete()){
        echo 1;
        }
    }
// ajax修改状态
public function edi(Request $request){
    // 获取参数id
     $id=$request->input('id');
     // dd($id);
     // 获取当前的数据
     $res=DB::table('bm_goods_sku')->where('id','=',$id)->first();
     $data=[];
        // 将数据遍历到数组中
     foreach ($res as $key=>$v) {
         $data[$key]=$v;

     }
     // dd($data);
     // 判断当前状态,将状态相反
     if ($data['status']==1) {
         $data['status']=0;
         $data['updated_at']=date("Y-m-d H:i:s");
     }else{
       $data['status']=1;
       $data['updated_at']=date("Y-m-d H:i:s");
     }
     // var_dump($data);
     // dd($data);
     if (DB::table('bm_goods_sku')->where('id','=',$id)->update($data)) {
        if ($data['status']==1) {
            echo 1;
        }else{
            echo 0;
        }
     }
     
     
}
}
