<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入DB
use DB;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取搜索条件
        $k=$request->input("keywords");
        $goodslist=DB::table("bm_goods_spu")->where("goods_title","like",'%'.$k.'%')->get();

        // 获取商品分类的数据
        $type=DB::table('bm_cates')->get();
        // dd($type);
        //加载模板
        return view("Admin.Goods.index",['goodslist'=>$goodslist,'type'=>$type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 添加商品
    public function create()
    {
        //商品类型
        $type=DB::table('bm_cates')->get();
        // dd($type);
        //加载模板
        return view('Admin.Goods.add',['type'=>$type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 执行添加
    public function store(Request $request)
    {
        // dd($request->all());
        $data=$request->except(['_token']);
        // dd($data);
        //执行文件上传
        //1检测是否有文件上传
        if($request->hasFile('goods_img')&&$request->hasFile('goods_thums')){
            //初始化文件名字
            $name=time()+rand(1,10000);
            //获取上传文件后缀
            $ext=$request->file("goods_img")->getClientOriginalExtension();
            $ext1=$request->file("goods_thums")->getClientOriginalExtension();
            //2.把上传文件移动到指定目录下
            $request->file("goods_img")->move('./uploads/goodsimg/',$name.".".$ext);
            $request->file("goods_thums")->move('./uploads/goodsthums/',$name.".".$ext1);
            //修改入库时的goods_img
            $data['goods_img']='/uploads/goodsimg/'.$name.".".$ext;
            $data['goods_thums']='/uploads/goodsthums/'.$name.".".$ext1;
            $data['created_at']=date("Y-m-d H:i:s");
            $data['updated_at']=date("Y-m-d H:i:s");
            // dd($data);
            $goodid = DB::table('bm_goods_spu')->insertGetId($data);
                // dd($goodid);
            if($goodid){
                return redirect('/sku/create?id='.$goodid);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 商品详情
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
    // 修改商品
    public function edit($id)
    {
        //获取修改的数据
        $goodslist=DB::table("bm_goods_spu")->where('id','=',$id)->first();
        // dd($goodslist);
        //商品类型
        $type=DB::table('bm_cates')->get();
        //加载模块
        return view("Admin.Goods.edit",['goodslist'=>$goodslist,'type'=>$type]);


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
        //获取修改后的数据
        // dd($request->all());
        $data=$request->except(['_token','_method']);

        if($request->hasFile('goods_img')&&$request->hasFile('goods_thums')){
            //初始化文件名字
            $name=time()+rand(1,10000);
            //获取上传文件后缀
            $ext=$request->file("goods_img")->getClientOriginalExtension();
            $ext1=$request->file("goods_thums")->getClientOriginalExtension();
            //2.把上传文件移动到指定目录下
            $request->file("goods_img")->move('./uploads/goodsimg/',$name.".".$ext);
            $request->file("goods_thums")->move('./uploads/goodsthums/',$name.".".$ext1);
            //修改入库时的goods_img
            $data['goods_img']='/uploads/goodsimg/'."/".$name.".".$ext;
            $data['goods_thums']='/uploads/goodsthums/'."/".$name.".".$ext1;
            $data['created_at']=date("Y-m-d H:i:s");
            $data['updated_at']=date("Y-m-d H:i:s");
            DB::table('bm_goods_spu')->update($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 删除
    public function destroy($id)
    {
        //
    }

    // 商品库存表
    // public function sku(Request $request)
    // {
    //     //获取搜索关键字
    //     $k=$request->input("keywords");
    //     //获取数据库数据
    //     $goodsku=DB::table("bm_goods_sku")->get();
    //     // dd($goodsku);
    //     //$goodsku['parameter']= $goodsku['parameter'].Substring(0,10);
    //     return view('Admin.Goods.sku',['goodsku'=>$goodsku]);
    // }
    // ajax删除商品
    public function del(Request $request){
        //获取参数id
        // dd($request->all());
        $id=$request->input('id');
        // echo $id;
        //执行删除
        if (DB::table("bm_goods_spu")->where("id",'=',$id)->delete()) {
            echo 1;exit;
        }else{
            echo "请先删除该商品下面sku的商品";exit;
        }
    }
    // ajax修改图片状态
public function edi(Request $request){
    // 获取参数id
     $id=$request->input('id');
     // dd($id);
     // 获取当前的数据
     $res=DB::table('bm_goods_spu')->where('id','=',$id)->first();
     $data=[];
        // 将数据遍历到数组中
     foreach ($res as $key=>$v) {
         $data[$key]=$v;

     }
     // dd($data);
     // 判断当前状态,将状态相反
     if ($data['goods_status']==1) {
         $data['goods_status']=0;
         $data['updated_at']=date("Y-m-d H:i:s");
     }else{
       $data['goods_status']=1;
       $data['updated_at']=date("Y-m-d H:i:s");
     }
     // var_dump($data);
     // dd($data);
     if (DB::table('bm_goods_spu')->where('id','=',$id)->update($data)) {
        if ($data['goods_status']==1) {
            echo 1;
        }else{
            echo 0;
        }
     }
     
     
}
}
