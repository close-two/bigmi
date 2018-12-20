<!DOCTYPE html>
<!-- saved from url=(0052)https://order.mi.com/buy/confirm?id=5181208779186014 -->
<html lang="zh-CN" xml:lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<title>@yield('title')</title>
<meta name="viewport" content="width=1226">
<link rel="shortcut icon" href="https://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="icon" href="https://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="static/homes/confirm/base.min.css">
<link rel="stylesheet" type="text/css" href="static/homes/confirm/pay-confirm.min.css">
<!-- <script type="text/javascript" async="" src="static/homes/confirm/mstr.js.下载"></script><script type="text/javascript" async="" src="static/homes/confirm/mstr.js(1).下载"></script><script type="text/javascript" async="" src="static/homes/confirm/mstr.js(2).下载"></script><script type="text/javascript" async="" src="static/homes/confirm/mstr.js(3).下载"></script><script type="text/javascript" async="" src="static/homes/confirm/mstr.js(4).下载"></script><script type="text/javascript" async="" src="static/homes/confirm/mstr.js(5).下载"></script><script type="text/javascript" async="" src="static/homes/confirm/mstr.js(6).下载"></script><script type="text/javascript" async="" src="static/homes/confirm/mstr.js(7).下载"></script><script type="text/javascript" async="" src="static/homes/confirm/mstr.js(8).下载"></script><script type="text/javascript" async="" src="static/homes/confirm/mstr.js(9).下载"></script><script type="text/javascript" async="" src="static/homes/confirm/mstr.js(10).下载"></script><script type="text/javascript" async="" src="static/homes/confirm/mstr.js(11).下载"></script><script type="text/javascript" async="" src="static/homes/confirm/jquery.statData.min.js.下载"></script><script type="text/javascript" async="" src="static/homes/confirm/xmst.js.下载"></script><script type="text/javascript">
 -->
/*<![CDATA[*/
var _STAT_HASHNAME="http://my.mi.com/buy/confirm";
/*]]>*/
</script>
<script src="static/homes/js/base.min.js"></script>

</head>
<body>
<div class="site-header site-mini-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo " href="https://www.mi.com/index.html" title="小米官网" data-stat-id="ea54c9fed6a874d7" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-ea54c9fed6a874d7&#39;, &#39;//www.mi.com/index.html&#39;, &#39;pcpid&#39;, &#39;&#39;]);"></a>
        </div>
        <div class="header-title" id="J_miniHeaderTitle"><h2>@yield('miniHeaderTitle')</h2></div>


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
          <a rel="nofollow" class="link link-order" href="/order" target="_blank">我的订单</a>
        @else
        <div class="topbar-info" id="J_userInfo">
            <a  rel="nofollow" class="link" href="/login" data-needlogin="true">登录</a><span class="sep">|</span><a  rel="nofollow" class="link" href="/register" >注册</a>        
        </div>
        @endif
	<!-- 	<div class="topbar-info" id="J_userInfo">
	    	   <span class="user"><a rel="nofollow" class="user-name" href="https://my.mi.com/portal" target="_blank" data-stat-id="9314689057ab9fd0" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-9314689057ab9fd0', '//my.mi.com/portal', 'pcpid', '']);"><span class="name">Huanwei_Guan</span><i class="iconfont"></i></a>
	    	    <ul class="user-menu">
	    	     <li><a rel="nofollow" href="https://my.mi.com/portal" target="_blank" data-stat-id="e09614238dff0a02" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-e09614238dff0a02', '//my.mi.com/portal', 'pcpid', '']);">个人中心</a></li>
	    	     <li><a rel="nofollow" href="https://order.mi.com/user/comment" target="_blank" data-stat-id="01a53cced1af41b3" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-01a53cced1af41b3', 'https://order.mi.com/user/comment', 'pcpid', '']);">评价晒单</a></li>
	    	     <li><a rel="nofollow" href="https://order.mi.com/user/favorite" target="_blank" data-stat-id="8df3032b2737115d" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-8df3032b2737115d', 'https://order.mi.com/user/favorite', 'pcpid', '']);">我的喜欢</a></li>
	    	     <li><a rel="nofollow" href="https://account.xiaomi.com/" target="_blank" data-stat-id="297db782136c0656" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-297db782136c0656', '//account.xiaomi.com/', 'pcpid', '']);">小米账户</a></li>
	    	     <li><a rel="nofollow" href="https://order.mi.com/site/logout" data-stat-id="8575a5145bab7fc5" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-8575a5145bab7fc5', 'https://order.mi.com/site/logout', 'pcpid', '']);">退出登录</a></li>
	    	    </ul></span>
	    	   <span class="sep">|</span>
	    	   <a rel="nofollow" class="link link-order" href="https://static.mi.com/order/" target="_blank" data-stat-id="e2a1efdf831d2629" onclick="_msq.push(['trackEvent', 'f1542ececd0b6bc5-e2a1efdf831d2629', '//static.mi.com/order/', 'pcpid', '']);">我的订单</a>
	    	</div>  -->    	
    </div>
</div>
<!-- .site-mini-header END -->
</body>
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
</html>