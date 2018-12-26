@extends('Home.HomePublic.publicperson')
@section('right')
<html>
 <head></head>
 <body>

   <div class="protal-content-update hide"> 
    <div class="protal-username">
      Hi, Huanwei_Guan 
    </div> 
    <p class="msg">我们做了一个小升级：你的用户名可以直接修改啦，去换个酷炫的名字吧。<a href="https://account.xiaomi.com/pass/auth/profile/home" target="_blank"> 立即前往&gt;</a></p> 
   </div> 
   <div class="uc-box uc-main-box"> 
    <div class="uc-content-box portal-content-box"> 
     <div class="box-bd"> 
      <div class="portal-main clearfix"> 
       <div class="user-card"> 
        <h2 class="username">{{$user->name}}</h2> 
        <p class="tip">晚上好</p> 
        <a class="link" href="/userinfo">修改个人信息 &gt;</a> 
        <img class="avatar" @if($user->headpic) src="{{$user->headpic}}" @else src="/uploads/headpic/default/1.jpg" 
                @endif width="150" height="150" alt="Huanwei_Guan" /> 
       </div> 
       <div class="user-actions"> 
        <ul class="action-list"> 
         <li>账户安全：<span class="level level-3">较高</span></li> 
         <li>绑定手机：<span class="tel">
          {{$user->phone}}</span></li> 
         <li>绑定邮箱：<span class="tel">{{$user->email}}</span></li> 
        </ul> 
       </div> 
      </div> 
      <div class="portal-sub"> 
       <ul class="info-list clearfix"> 
        <li> <h3>待支付的订单：<span class="num">0</span></h3> <a href="//static.mi.com/order/?type=7">查看待支付订单<i class="iconfont"></i></a> <img src="//s01.mifile.cn/i/user/portal-icon-1.png" alt="" /> </li> 
        <li> <h3>待收货的订单：<span class="num">0</span></h3> <a href="//static.mi.com/order/?type=8">查看待收货订单<i class="iconfont"></i></a> <img src="//s01.mifile.cn/i/user/portal-icon-2.png" alt="" /> </li> 
        <li> <h3>待评价商品数：<span class="num">0</span></h3> <a href="http://order.mi.com/user/comment?filter=1&amp;r=39890.1545229318">查看待评价商品<i class="iconfont"></i></a> <img src="//s01.mifile.cn/i/user/portal-icon-3.png" alt="" /> </li> 
        <li> <h3>喜欢的商品：<span class="num">4</span></h3> <a href="http://order.mi.com/user/favorite?r=39890.1545229318">查看喜欢的商品<i class="iconfont"></i></a> <img src="//s01.mifile.cn/i/user/portal-icon-4.png" alt="" /> </li> 
       </ul> 
      </div> 
     </div> 
    </div> 
   </div> 
 </body>
</html>
@endsection
@section('title','个人中心页面')
@section('subtitle','个人中心')
