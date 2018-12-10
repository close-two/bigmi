<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        // return view('Home.Buy.confirm');//测试,提交订单成功,未支付页面,后面写业务逻辑

        return view('Home.Person.person');//测试,个人中心页面
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

}
