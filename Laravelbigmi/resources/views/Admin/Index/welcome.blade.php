﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/lib/html5shiv.js"></script>
<script type="text/javascript" src="/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/admin/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>我的桌面</title>
</head>
<body>
<div class="page-container">
	<p class="f-20 text-success">欢迎使用Bigmi<span class="f-14">v3.1</span>后台管理系统</p>
	<p>登录次数：18 </p>
	<p>上次登录IP：{{$_SERVER['REMOTE_ADDR']}}  上次登录时间：{{date("Y-m-d H:i:s")}}</p>
	
	<table class="table table-border table-bordered table-bg mt-20">
		<thead>
			<tr>
				<th colspan="2" scope="col">服务器信息</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th width="30%">服务器计算机名</th>
				<td><span id="lbServerName">{{$_SERVER['SERVER_NAME']}}</span></td>
			</tr>
			<tr>
				<td>服务器IP地址</td>
				<td>{{$_SERVER['SERVER_ADDR']}}</td>
			</tr>
			<tr>
				<td>服务器域名</td>
				<td>{{$_SERVER['SERVER_NAME']}}</td>
			</tr>
			<tr>
				<td>服务器端口 </td>
				<td>{{$_SERVER['SERVER_PORT']}}</td>
			</tr>
			<tr>
				<td>服务器php版本 </td>
				<td>{{PHP_VERSION}}</td>
			</tr>
			<tr>
				<td>Laravel版本</td>
				<td>{{app()::VERSION}}</td>
			</tr>
			<tr>
				<td>本文件所在文件夹 </td>
				<td>{{DEFAULT_INCLUDE_PATH}}</td>
			</tr>
			<tr>
				<td>服务器操作系统 </td>
				<td>{{php_uname()}}</td>
			</tr>
			<tr>
				<td>系统所在文件夹 </td>
				<td>{{$_SERVER['SystemRoot']}}</td>
			</tr>
			<tr>
				<td>服务器脚本超时时间 </td>
				<td>{{get_cfg_var("max_execution_time")}}秒</td>
			</tr>
			<tr>
				<td>服务器的语言种类 </td>
				<td>{{$_SERVER['HTTP_ACCEPT_LANGUAGE']}}</td>
			</tr>
			<tr>
				<td>服务器当前时间 </td>
				<td>{{date("Y-m-d H:i:s")}}</td>
			</tr>
			
			<tr>
				<td>虚拟内存 </td>
				<td>{{get_cfg_var ("memory_limit")?get_cfg_var("memory_limit"):"无"}}</td>
			</tr>
			
			
		</tbody>
	</table>
</div>
<footer class="footer mt-20">
	<div class="container">
		<p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br>
			Copyright &copy;2015-2017 H-ui.admin v3.1 All Rights Reserved.<br>
			本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
	</div>
</footer>
<script type="text/javascript" src="/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/admin/h-ui/js/H-ui.min.js"></script> 
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