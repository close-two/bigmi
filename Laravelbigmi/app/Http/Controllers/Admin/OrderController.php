<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        // 获取关键词
        $name=$request->input('keywords');
        // dd($name);
        // 获取数据  每次显示5条
        $data=DB::table('bm_order')->where('order_id','like','%'.$name.'%')->paginate(5);
        $user=DB::table('bm_users')->get();
        $goods=DB::table('bm_goods_spu')->get();
        // dd($goods);
        // dd($user);
        //订单模块页
        return view('Admin.Order.index',['data'=>$data,'goods'=>$goods,'user'=>$user,'request'=>$request->all()]);

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
        $order=DB::table('bm_order')->where('id','=',$id)->first();
        $aid=$order->aid;
        // dd($aid);
        $goods=DB::table('bm_goods_spu')->get();
        $user=DB::table('bm_users')->get();
        
        $address=DB::table('bm_address')->where('id','=',$aid)->get();
        // dd($order);
        //订单详情
        return view('Admin.Order.detail',['order'=>$order,'address'=>$address,'user'=>$user,'goods'=>$goods]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=DB::table('bm_users')->get();
        $goods=DB::table('bm_goods_spu')->get();
        $data=DB::table('bm_order')->where('id','=',$id)->first();
        //加载模板
        return view('Admin.Order.edit',['data'=>$data,'user'=>$user,'goods'=>$goods]);
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
        $data=$request->except('_token','_method','payform','paytype','goods_id','uid');
        // dd($data);
        if (DB::table('bm_order')->where('id','=',$id)->update($data)) {
                    return redirect('/adminorder')->with('success','修改成功');
                }else{
                    //失败回滚
                    return back()->with('error','修改失败');
                }
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

    public function del(Request $request){
        //获取参数id
        $id=$request->input('id');
        // echo $id;
        // dd($id);
        //执行删除
        if(DB::table("bm_order")->where("id",'=',$id)->delete()){
            echo 1;
        }
    }
}
