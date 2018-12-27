﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="//favicon.ico" >
<link rel="Shortcut Icon" href="//favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/lib/html5shiv.js"></script>
<script type="text/javascript" src="/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/Admin/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/Admin/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/Admin/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/Admin/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>Bigmi后台管理系统</title>
<meta name="keywords" content="Bigmi后台管理系统 v3.1">
<meta name="description" content="H-ui.admin ">
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="//aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="//aboutHui.shtml">H-ui</a> 
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.1</span> 
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="/javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="/javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="/javascript:;" onclick="article_add('添加资讯','article-add.html')"><i class="Hui-iconfont">&#xe616;</i> 资讯</a></li>
							<li><a href="/javascript:;" onclick="picture_add('添加资讯','picture-add.html')"><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
							<li><a href="/javascript:;" onclick="product_add('添加资讯','product-add.html')"><i class="Hui-iconfont">&#xe620;</i> 产品</a></li>
							<li><a href="/javascript:;" onclick="member_add('添加用户','member-add.html','','510')"><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
			<ul class="cl">
				<li>{{session('rname')}}</li>
				<li class="dropDown dropDown_hover">
					<a href="/#" class="dropDown_A">{{session('name')}}<i class="Hui-iconfont">&#xe6d5;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
						<li><a href="/javascript:;" onClick="myselfinfo()">个人信息</a></li>
						<li><a href="/adminlogin">切换账户</a></li>
						<li><a href="/adminlogin">退出</a></li>
				</ul>
			</li>
				<!-- <li id="Hui-msg"> <a href="/#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li> -->
				<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
						<li><a href="/javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
						<li><a href="/javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
						<li><a href="/javascript:;" data-val="green" title="绿色">绿色</a></li>
						<li><a href="/javascript:;" data-val="red" title="红色">红色</a></li>
						<li><a href="/javascript:;" data-val="yellow" title="黄色">黄色</a></li>
						<li><a href="/javascript:;" data-val="orange" title="橙色">橙色</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>
</header>
<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
	<dl id="menu-admin">
		<dt><i class="Hui-iconfont">&#xe62d;</i> 管理中心<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
		<dd>
			<ul>
				<li><a data-href="/roles" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
				<li><a data-href="/permissions" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>
				<li><a data-href="/admins" data-title="管理员列表" href="javascript:void(0)">管理员列表</a></li>
			</ul>
		</dd>
	</dl>
	<dl id="menu-member">
			<dt><i class="Hui-iconfont">&#xe60d;</i> 会员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/adminuser" data-title="会员列表" href="javascript:;">会员列表</a></li>
			</ul>
		</dd>
	</dl>
	<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 商品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/goods" data-title="商品列表" href="javascript:void(0)">商品列表</a></li>
					<li><a data-href="/goods/create" data-title="商品添加" href="javascript:void(0)">商品添加</a></li>
					<li><a data-href="/sku" data-title="sku商品详情列表" href="javascript:void(0)">sku商品详情列表</a></li>
			</ul>
		</dd>
	</dl>
	<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe667;</i> 导航栏目<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/navbar" data-title="导航列表" href="javascript:void(0)">导航列表</a></li>
					
			</ul>
		</dd>
	</dl>

	<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 分类管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/admincate" data-title="分类管理" href="javascript:void(0)">分类列表</a></li>
					<li><a data-href="/admincate/create" data-title="分类管理" href="javascript:">分类添加</a></li>
			</ul>
		</dd>
	</dl>
	<dl id="menu-product">
			<dt><i class="Hui-iconfont">&#xe620;</i> 订单管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/adminorder" data-title="订单列表" href="javascript:void(0)">订单列表</a></li>
				</ul>
			</dd>
	</dl>

	<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
	
					<li><a data-href="/comments" data-title="评论列表" href="javascript:;">评论列表</a></li>
					<!-- <li><a data-href="/feedbacks" data-title="意见反馈" href="javascript:void(0)">意见反馈</a></li> -->
			</ul>
		</dd>
	</dl>
	
	<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe612;</i> 轮播管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/adminpic" data-title="轮播图列表" href="javascript:void(0)">轮播图列表</a></li>
					
			</ul>
		</dd>
	</dl>

	<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe616;</i> 广告管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/adminads" data-title="广告列表" href="javascript:void(0)">广告列表</a></li>
					
			</ul>
		</dd>
	</dl>
	<dl id="menu-comments">
			<dt><i class="Hui-iconfont">&#xe650;</i>视频管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/adminvideo" data-title="视频列表" href="javascript:">视频位管理</a></li>
			</ul>
		</dd>
	</dl>
	<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe6d0;</i> 服务管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/botton" data-title="服务支持列表" href="javascript:void(0)">服务支持列表</a></li>
					<li><a data-href="/botton/create" data-title="服务支持添加" href="javascript:void(0)">服务支持添加</a></li>
					
			</ul>
		</dd>
	</dl>
	<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe72c;</i> 友链管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/friendlink" data-title="友链列表" href="javascript:void(0)">友链列表</a></li>
					
			</ul>
		</dd>
	</dl>
	
	
	



	
</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active">
					<span title="我的桌面" data-href="/welcome">我的桌面</span>
					<em></em></li>
		</ul>
	</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="/javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="/javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="/welcome"></iframe>
	</div>
</div>
</section>

<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">关闭当前 </li>
		<li id="closeall">关闭全部 </li>
</ul>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">
$(function(){
	/*$("#min_title_list li").contextMenu('Huiadminmenu', {
		bindings: {
			'closethis': function(t) {
				console.log(t);
				if(t.find("i")){
					t.find("i").trigger("click");
				}		
			},
			'closeall': function(t) {
				alert('Trigger was '+t.id+'\nAction was Email');
			},
		}
	});*/
});
/*个人信息*/
function myselfinfo(){
	layer.open({
		type: 1,
		area: ['300px','200px'],
		fix: false, //不固定
		maxmin: true,
		shade:0.4,
		title: '查看信息',
		content: '<div>管理员信息</div>'
	});
}

/*资讯-添加*/
function article_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*产品-添加*/
function product_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}


</script> 

<!--此乃百度统计代码，请自行删除-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<!--/此乃百度统计代码，请自行删除-->
<script>
  // 提示弹框,有时间再加样式
  @if (session('success')) 
    alert("{{session('success')}}");
  @endif
   @if (session('error')) 
    alert("{{session('error')}}");
  @endif

</script>
</body>
</html>