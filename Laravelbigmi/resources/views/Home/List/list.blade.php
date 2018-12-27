@extends('Home.HomePublic.public')

@section('container')
<!-- <script type="text/javascript" src="/static/homes/cart/cart.min.js.下载"></script> -->

 <script type="text/javascript" async="" src="static/homes/list/mstr.js.下载"></script>
  <script type="text/javascript" async="" src="static/homes/list/jquery.statData.min.js.下载"></script>
  <script type="text/javascript" async="" src="static/homes/list/xmst.js.下载"></script> 
  <link rel="stylesheet" href="static/homes/list/base.min.css" /> 
  <link rel="stylesheet" type="text/css" href="static/homes/list/category.min.css" /> 
  <script src="static/homes/list/userInfoJsonP" type="text/javascript" async=""></script>

    <div class="breadcrumbs"> 
   <div class="container">
    <a href="/index">首页</a>
    <span class="sep">&gt;</span>
    <a href="#">所有分类</a>
   </div> 
  </div>
  <div class="container J_category category-index">
  @foreach($type as $res) 
   <div class="xm-plain-box category-list"> 
    <div class="box-hd J_box-hd"> 
     <h2 class="title"><i class="iconfont"></i>{{$res->catename}}</h2> 
    </div> 
    <div class="box-bd J_box-bd"> 
     <ul class="clearfix">
     @foreach($goods as $ress) 
     @if($ress->cate_id==$res->id)
      <li> <a href="/goodsdetail/{{$ress->id}}" class="category-list-img"><img src="{{$ress->goods_img}}" width="70" height="70" alt="{{$ress->goods_title}}" srcset="{{$ress->goods_img}}" /></a> <a href="#" class="category-list-title">{{$ress->goods_title}}</a> </li> 
      @endif
      @endforeach
     </ul> 
    </div> 
   </div>
   @endforeach
  </div> 
  <script>
(function() {
    MI.namespace('GLOBAL_CONFIG');
    MI.GLOBAL_CONFIG = {
        orderSite: '//order.mi.com',
        wwwSite: '//www.mi.com',
        cartSite: '//cart.mi.com',
        itemSite: '//item.mi.com',
        assetsSite: '//s01.mifile.cn',
        listSite: '//list.mi.com',
        searchSite: '//search.mi.com',
        mySite: '//my.mi.com',
        damiaoSite: 'http://tp.hd.mi.com/',
        damiaoGoodsId: [],
        logoutUrl: '//order.mi.com/site/logout',
        staticSite: '//static.mi.com',
        quickLoginUrl: 'https://account.xiaomi.com/pass/static/login.html'
    };
    MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + '/user/order';
    MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;
    MI.setLoginInfo.init(MI.GLOBAL_CONFIG);
    MI.miniCart.init();
    MI.updateMiniCart();
})();
</script> 
  <script type="text/javascript">
$(function(){
    $(".J_box-hd").on("click",function(){
        $(this).toggleClass("current");
        var $bd = $(this).siblings(".J_box-bd");
        var $icon = $(this).find("i.iconfont");

        if($bd.is(":visible")){
            $bd.hide();
            $icon.html("&#xe611;");
        } else {
            $bd.fadeIn();
            $icon.html("&#xe61a;");
        }
    });
});
</script> 
  <script>
var _msq = _msq || [];
_msq.push(['setDomainId', 100]);
_msq.push(['trackPageView']);
(function() {
    var ms = document.createElement('script');
    ms.type = 'text/javascript';
    ms.async = true;
    ms.src = '//s1.mi.com/stat/18/xmst.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ms, s);
})();
</script>
@endsection


@section('title','商品列表')