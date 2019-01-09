<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        



        /**********************公共头尾数据调用开始**********************************/
           
            $showHelp = PublicController::getHelpInfo();

            $showLinks = PublicController::getFriendLink();

            /**********************公共头尾数据调用结束**********************************/
        // 获取所有的顶级类
        //购车页面
        //获取session信息
        // dd(session('cart'));
        $cart=session('cart');
        // dd($cart);
        //获取当前商品的其他数据
        $data=array();
        //所有的总计之和
        $tot="";//总计变量
        if(!empty($cart)){
        //遍历
        foreach($cart as $key=>$value){
            //获取商品数据
            $info=DB::table("bm_goods_sku")->join('bm_goods_spu',"bm_goods_spu.id",'=',"bm_goods_sku.goods_id")->where("bm_goods_sku.id",'=',$value['id'])->first();
            // dd($info);
            $data['id']=$value['id'];//id值
            $data['name']=$info->title;//名字
            $data['pic']=$info->goods_thums;//图片
            $data['descr']=$info->goods_descr;//详情
            $data['num']=$value['num'];//数量
            $data['price']=$info->shop_price;//单价
            $data['stock']=$info->stock;//库存
            $tot+=$data['price']*$data['num'];//总价
            $data1[]=$data;
        }
        // var_dump($data1);
        // dd($data1);
        //加载模板分配到视图里
        // dd($data1);
        return view("Home.Cart.cart",['data1'=>$data1,'tot'=>$tot,'showHelp'=>$showHelp,'showLinks'=>$showLinks]);
    }else{
        return view("Home.Cart.cart",['showHelp'=>$showHelp,'showLinks'=>$showLinks]);
        }
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
    //购物车去重
    public function checkExists($id){
        //获取session信息
        $goods=session('cart');
        // echo 1;
        // dd($goods);
        //判断
        //当购物车为空
        if(empty($goods)){
            // dd(1);
            return false;
        }else{ 
            //当购物车有货物的时候
             foreach($goods as $key=>$value){
                //判断
                // 重复时
                // dd(1);

                if($value['id']==$id){
                    //购物车里有当前要购买数据
                    // dd(2);
                // // 加一
                    $value['num']+=1;
                    // dd($id);
                    return true;
                }else{
                    // dd(1);
                    // dd(3);
                    // return false;
                }
            }
                // dd(1);

        }
    }
    public function store(Request $request)
    {/*
        // dd($request->all());
        //把购买商品的数据存储在session里
        $data=$request->except('_token');
        if(!$this->checkExists($data['id'])){
        //把$data存储在session里
        $request->session()->push('cart',$data);
        // for ($i=0; $i < ; $i++) { 
        //     # code...
        // }
    }
        //跳转
        return redirect("/homecar");*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        //
        /*if(!$this->checkExists($id)){
        //把$data存储在session里
        $request->session()->push('cart',$id);
    }
        //跳转
        return redirect("/homecar");
        */
        // dd($id);
        $data=DB::table('bm_goods_sku')->where('id','=',$id)->first();
        // dd($data);
        $res['id']=$data->id;
        $res['num']=1;
        // dd($res);
        if(!$this->checkExists($id)){
        $request->session()->push('cart',$res);
        }
        // else{
        //     $this->updates($id);
        // }

        // dd()
        // echo 1;
        // dd(session('cart'));

        //跳转
        return redirect("/homecar");
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
    public function update(Request $request,$id)
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
     public function destroy(Request $request,$id)
        {
    //     // echo $id;
    //     //获取购物车数据
    //     $data=session('cart');
    //     //遍历
    //     foreach($data as $key=>$value){
    //         //对比
    //         if($value['id']==$id){
    //             //删除
    //             unset($data[$key]);
    //         }
    //     }
    //     session(['cart'=>$data]);
    //     return redirect("/homecar");
    }

    //减
    public function updatee(Request $request){
        // // echo $id;
        // dd($id);
        //获取购物车数据
        // echo 1;
        $data=session('cart');
        // echo $data;
        // var_dump($data);
        // 接受id
        $id=$request->input('id');
        $num=$request->input('num');
        // echo $num;
        //遍历
        foreach($data as $key=>$value){
            //判断 对比
            // 当id等于修改的id时
            if($value['id']==$id){
                // echo 1;
                // var_dump($value['id']);
                //数量减一
                $data[$key]['num'] = $data[$key]['num']-1;
                // echo $data[$key]['num'];
                if($data[$key]['num'] <= 1){
                    $data[$key]['num']=1;
                }

            }
        }
        //重新赋值session
        // session(['cart'=>$data]);
        session(['cart'=>$data]);
        // dd(session('cart'));
        // $request->session()->put('cart',$data);
        // echo 1;
        return 1;
    }

    //加
    public function updates(Request $request){
        // 购物车session
        // dd($id);
        $data=session('cart');
        // 修改的id
        $id=$request->input('id');
        // 找到数据库数据
        $res=DB::table('bm_goods_sku')->where('id','=',$id)->first();
        // 获取当前id的库存
        $stock=$res->stock;
        // dd($res);
        // echo $stock;
        // echo $stock;
        // echo $id;
        // var_dump($data);
        // 遍历session
        foreach($data as $key=>$value){
            //判断对比
            // echo $value['id'];
            // dd($key);
            // 找到修改的id
            if($value['id']==$id){
                // 数量加一
                // echo 1;
                // echo $stock;
                // echo ($value['num']);
                // 数量+1
                
                // var_dump($data[$key]['num']);
                // 当数量大于库存的时候
               if($value['num']>=$stock){
                // $data[$key]['num']=$stock;
                // 数量等于库存
                // $value['num']=$stock;
                $data[$key]['num'] = $data[$key]['num'];
                // echo $data[$key]['num'];
                // 将数量存放到$data中
            // $data[$key]['num']=$value['num'];

                // echo $value['num'];
            // var_dump($data);
            // echo $data[$key]['num'];
            // var_dump($data);
               }else{
                $data[$key]['num'] = $data[$key]['num']+1;
               }
                // echo 1;
               // dd($data);
            // echo $data[$key]['num'];
            // var_dump($data);


            }
            // dd($data);
             //重新赋值session
        $aa=session(['cart'=>$data]);
        // dd($aa);
        // $request->session()->put('cart',$data);
        // session('cart')=$data;
        // dd(session('cart'));
        // echo 1;
        }
     }
    //ajax删除购物车
     public function del(Request $request){
        $data=session('cart');
        //获取参数id
        $id=$request->input('id');
        // var_dump($data);
        // dd($id);
        $ress=array();
        $tot='';
        $ids=[];
        foreach ($data as $key => $value) {
            if ($value['id']==$id) {
                // dd($value['id']);
                unset($data[$key]);
                session(['cart'=>$data]);
                // echo 1;
                // return $res;
                $res=session('cart');
                // dd($res);
                // dd($res);
                 $arr=[];
                foreach ($res as $key => $value) {
                    // $arr[$key]=DB::table('bm_goods_spu')->where('id','=',$value['id'])->first();
                    // $arr[$key]->num=$value['num'];
                    $info=DB::table("bm_goods_sku")->where("id",'=',$value['id'])->first();
                    $infos=DB::table()->where('id','=',$info['goods_id'])->first();
                    $ress['id']=$value['id'];//id值
                    $ress['name']=$info->title;//名字
                    $ress['pic']=$infos->goods_img;//图片
                    $ress['descr']=$info->goods_descr;//详情
                    $ress['num']=$value['num'];//数量
                    $ress['price']=$info->goods_market_price;//单价
                    $ress['stock']=$info->stock;//库存
                    $tot+=$ress['price']*$ress['num'];//总价
                    $data2[]=$ress;

                }
                 if(!session('cart')){
             echo "真的删除吗？";
            }else{
            echo 1;
            }
                
                
            }
        }


     }

     // public function del(Request $request){
     //    // 购物车session
     //    $data=session('cart');
     //    // 修改的id
     //    $id=$request->input('id');
     // }
}
