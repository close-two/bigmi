<!-- 通用大头部 -->
<!doctype html>
<html lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="UTF-8" />
<title>@yield('title')</title>
<meta name="description" content="小米商城直营小米公司旗下所有产品，囊括小米手机系列小米MIX 3、小米8、小米Note 3，红米手机系列红米5 Plus、红米6 Pro，智能硬件，配件及小米生活周边，同时提供小米客户服务及售后支持。" />
<meta name="keywords" content="小米,小米8,小米Note3,红米5Plus,小米MIX3,小米商城" />
<meta name="viewport" content="width=1226" />
<meta http-equiv="x-dns-prefetch-control" content="on">
<link rel="dns-prefetch" href="//s01.mifile.cn" />
<link rel="dns-prefetch" href="//c1.mifile.cn" />
<link rel="dns-prefetch" href="//i3.mifile.cn" />
<link rel="dns-prefetch" href="//i2.mifile.cn" />
<link rel="dns-prefetch" href="//i1.mifile.cn" />
<link rel="dns-prefetch" href="//i8.mifile.cn" />
<link rel="dns-prefetch" href="//v.mifile.cn" />
<link rel="dns-prefetch" href="//a.huodong.mi.cn" />


<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="search" title="mi.com" href="//s1.mi.com/search.xml?v1.0" type="application/opensearchdescription+xml" />
<meta http-equiv="Cache-Control" content="no-transform " />
<meta http-equiv="Cache-Control" content="no-siteapp" />

@section('css')
<link rel="icon" href="/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="static/homes/css/base.min.css" />

@show
@section('myCss')
@show


<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>


</head>
<body>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="/"   >小米商城</a><span class="sep">|</span><a rel="nofollow" href="https://www.miui.com/" target="_blank"  >MIUI</a><span class="sep">|</span><a rel="nofollow" href="https://iot.mi.com/index.html"   >IoT</a><span class="sep">|</span><a rel="nofollow" href="https://i.mi.com/" target="_blank"  >云服务</a><span class="sep">|</span><a rel="nofollow" href="https://jr.mi.com?from=micom" target="_blank"  >金融</a><span class="sep">|</span><a rel="nofollow" href="https://youpin.mi.com/" target="_blank"  >有品</a><span class="sep">|</span><a rel="nofollow" href="https://shuidi.mi.com/" target="_blank"  >小爱开放平台</a><span class="sep">|</span><a rel="nofollow" href="https://b.mi.com/?client_id=180100031058&masid=17409.0358" target="_blank"  >政企服务</a><span class="sep">|</span><a rel="nofollow" href="//www.mi.com/appdownload/" target="_blank" id="J_downloadapp"  >下载app</a><span class="sep">|</span><a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal"  >Select Region</a>
        </div>
        <div class="topbar-cart" id="J_miniCartTrigger">
            <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="//static.mi.com/cart/"><i class="iconfont">&#xe60c;</i>购物车<span class="cart-mini-num J_cartNum"></span></a>
            <div class="cart-menu" id="J_miniCartMenu">
                <div class="loading"><div class="loader"></div></div>
            </div>
        </div>
        @if(session('miid'))
        <div class="topbar-info" id="J_userInfo">
           <span class="user" id="J_user"><a rel="nofollow" class="user-name" href="//my.mi.com/portal" target="_blank"><span class="name">@if(session('username')){{session('username')}}@else{{session('miid')}}@endif</span><i class="iconfont"></i></a>
           <ul class="user-menu" id="J_userMenu" style="display: none;">
            <li><a rel="nofollow" href="/homeperson" target="_blank">个人中心</a></li>
            <li><a rel="nofollow" href="#" target="_blank">评价晒单</a></li>
            <li><a rel="nofollow" href="/favorite" target="_blank">我的喜欢</a></li>
            <li><a rel="nofollow" href="#" target="_blank">小米账户</a></li>
            <li><a rel="nofollow" href="/login">退出登录</a></li>
           </ul></span>
          <span class="sep">|</span>
          <span class="message"><a rel="nofollow" data-href="#" class="J_needAgreement">消息通知<i class="J_miMessageTotal"></i></a></span>
          <span class="sep">|</span>
          <a rel="nofollow" class="link link-order" href="/order" target="_blank">我的订单</a>
        @else
        <div class="topbar-info" id="J_userInfo">
            <a  rel="nofollow" class="link" href="/login" data-needlogin="true">登录</a><span class="sep">|</span><a  rel="nofollow" class="link" href="/register" >注册</a>        
        </div>
        @endif



    </div>
</div>
<div class="site-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="/" title="小米官网">小米官网</a>
                    </div>
        <div class="header-nav">
            <ul class="nav-list J_navMainList clearfix">

                <li id="J_navCategory" class="nav-category"> <a class="link-category" href="" data-stat-id="" onclick=""><span class="text">全部商品分类</span></a> 
                   <div class="site-category" style="display: none;"> 

                        <ul id="J_categoryList" class="site-category-list clearfix">
                        @foreach($catesAll as $catesTop) 
                            <li class="category-item"> <a class="title" href="//www.mi.com/p/1915.html">{{$catesTop->catename}}<i class="iconfont"></i></a> 
                              <div class="children clearfix children-col-4"> 
                            @foreach($catesTop->suv as $key => $rows)
                            @if($key%6 == 0)
                               <ul class="children-list children-list-col children-list-col-{{($key/6+1)}}">
                                <li> <a class="link" href="https://www.mi.com/mix3/"><img class="thumb" src="//i1.mifile.cn/f/i/g/2015/cn-index/mix3-80.png?width=80&amp;height=80" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/mix3-80.png?width=80&amp;height=80" width="40" height="40" alt="" /><span class="text">{{$rows->catename}}</span></a> </li> 
                         
                            @elseif($key==5||$key==11||$key==17)
                                <li> <a class="link" href="https://www.mi.com/mix3/"><img class="thumb" src="//i1.mifile.cn/f/i/g/2015/cn-index/mix3-80.png?width=80&amp;height=80" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/mix3-80.png?width=80&amp;height=80" width="40" height="40" alt="" /><span class="text">{{$rows->catename}}</span></a> </li> 
                                </ul> 

                            @else
                                 <li> <a class="link" href="https://www.mi.com/mix3/"><img class="thumb" src="//i1.mifile.cn/f/i/g/2015/cn-index/mix3-80.png?width=80&amp;height=80" data-src="//i1.mifile.cn/f/i/g/2015/cn-index/mix3-80.png?width=80&amp;height=80" width="40" height="40" alt="" /><span class="text">{{$rows->catename}}</span></a> </li> 
                            @endif
                               @endforeach
                              </div> 
                            </li> 
                        @endforeach
                        </ul> 
                   </div>
               </li>









            @foreach($navdata as $nav => $rows)
                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">{{$nav}}</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                            @foreach($rows as $spu)
                                <li> 
                                   <div class="figure figure-thumb"> 
                                        <a href="/goodsdetail/{{$spu->id}}"><img src="/uploads/onload.jpg" data-src="{{$spu->goods_thums}}" alt="小米MIX 3" width="160" height="110" /></a> 
                                    </div> 
                                   <div class="title">
                                    <a href="https://www.mi.com/mix3/">{{$spu->goods_title}}</a>
                                   </div> <p class="price">{{round($spu->market_price)}}元</p> 
                                   <div class="flags">
                                    <div class="flag">
                                     新品
                                    </div>
                                   </div> 
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
            @endforeach
                          
            </ul>
        </div>
        <div class="header-search">
            <form id="J_searchForm-bak" class="search-form clearfix" action="/search" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input class="search-text" type="search" id="search" name="keywords" autocomplete="off" data-search-config="{'defaultWords':[{'Key':'小米6X','Rst':6},{'Key':'小米MIX&nbsp;2S','Rst':5},{'Key':'黑鲨游戏手机','Rst':3},{'Key':'红米Note&nbsp;5','Rst':6},{'Key':'红米5A','Rst':13},{'Key':'小米电视4C','Rst':5},{'Key':'电视32英寸','Rst':3},{'Key':'笔记本pro','Rst':5},{'Key':'空气净化器','Rst':11},{'Key':'净水器','Rst':8}]}" />
                <input type="submit" class="search-btn iconfont" value="&#xe616;" />
                <div class="search-hot-words">
                    <a href="https://www.mi.com/mi8/">小米8</a><a href="https://item.mi.com/product/10000085.html">小米MIX 2S</a>                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="/static/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
// 写下拉特效
   //鼠标滑过显示个人中心菜单效果
    $('#J_userInfo').on('mouseenter','.user',function(){
        $(this).addClass('user-active');
        $(this).find('.user-menu').stop().slideDown(200);
    }).on('mouseleave','.user',function(){
        $(this).removeClass('user-active');
        $(this).find('.user-menu').stop().slideUp(200);
    })

</script>
</body>
</html>