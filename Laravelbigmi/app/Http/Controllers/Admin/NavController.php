<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class NavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //导航列表
        $pagesize = 5;
        $navlist = DB::TABLE('bm_nav')->select()->paginate($pagesize);
        // dd($navlist);
        return view('Admin.Navbar.nav-list',['navlist'=>$navlist,'request'=>$request->all(),'pagesize'=>$pagesize]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      
        // dd($skulist);
        $skulist = $this::getAllSku();
        return view('Admin.Navbar.nav-add',['skulist'=>$skulist]);
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
        // dd($request->all());
        
        $data = $request->except('_token'); 
        if(DB::TABLE('bm_nav')->insert($data)){
            return redirect('/navbar')->with('success','添加导航成功');
        }else{
            return redirect()->back()->with('error','添加导航失败');
        }
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
        $skulist = $this::getAllSku();
        $nav = DB::TABLE('bm_nav')->find($id);
        $sku_id_group = explode(',', $nav->sku_id_group);
        $skudata = $this::getSkuData($sku_id_group);
        // var_dump($skudata);exit;
        return view('Admin.Navbar.nav-edit',['skulist'=>$skulist,'nav'=>$nav,'skudata'=>$skudata]);

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
        // dd($request->all());
        $data = $request->except('_token','_method');
        // dd($id);
        if (DB::TABLE('bm_nav')->where('id','=',$id)->update($data)) {
            return redirect('/navbar')->with('success','修改成功');
        }else{
            return redirect()->back()->with('error','修改失败');
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

    // 获取所有sku的商品表
    public function getAllSku(){
        $skulist = DB::TABLE('bm_goods_sku')->select('id','goods_id','title','attr','color','shop_price','stock')
        ->where('status','=','1')
        ->orderBy('goods_id')
        ->get();
        return $skulist;
    }

    //获取已有的sku_id_group对应的sku商品信息
    private function getSkuData($sku_id_group){
        $skudata = [];
        foreach ($sku_id_group as $value) {
            $skudata[] = DB::TABLE('bm_goods_sku')->select('id','goods_id','title','attr','color','shop_price','stock')
            ->where('status','=','1')
            ->find($value);
        }
        return $skudata;
    }

    public function del(Request $request){
        $id = $request->input('id');
        if (DB::table('bm_nav')->where('id','=',$id)->delete()) {
            echo 1;
        }else{
            echo 0;
        }
    }
}
