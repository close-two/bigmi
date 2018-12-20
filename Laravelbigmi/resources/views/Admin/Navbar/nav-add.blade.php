<!DOCTYPE HTML>
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
<title>添加导航栏目 - 导航栏目管理 - H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add" action="/navbar" method="post">
	
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>导航栏目：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" placeholder="" id="adminName" name="nav_name">
			<label id="name-error" class="error" for="nav_name"></label>
		</div>
	</div>
	
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">sku商品选择：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<select id="select" multiple="multiple" size="10" class="large">
                <option value="41" mtitle="多啦A梦" atitle="红色的猫">红色的猫--------------------------￥989</option>
                <option value="36" mtitle="MI/小米 红米3" atitle="MI/小米 红米3 全网通 标准版 手机 32G 时尚深灰">MI/小米 红米3 全网通 标准版 手机 32G 时尚深灰--------------------------￥918.00</option>
                <option value="28" mtitle="MI/小米 红米" atitle="MI/小米 红米 Note 3 移动/联通4G 手机 2GB＋16G标准版 金色">MI/小米 红米 Note 3 移动/联通4G 手机 2GB＋16G标准版 金色--------------------------￥898.00</option>
                <option value="39" mtitle="MI/小米 红米3S" atitle="MI/小米 红米3S 高配版 全网通 手机 金色">MI/小米 红米3S 高配版 全网通 手机 金色--------------------------￥898.00</option>
                <option value="40" mtitle="多啦A梦" atitle="蓝色的猫">蓝色的猫--------------------------￥898</option>
                <option value="22" mtitle="MI/小米 红米" atitle="MI/小米 红米 Note 3 全网通 手机 2GB＋16G标准版 深灰">MI/小米 红米 Note 3 全网通 手机 2GB＋16G标准版 深灰--------------------------￥888.00</option>
                <option value="23" mtitle="MI/小米 红米" atitle="MI/小米 红米 Note 3 全网通 手机 2GB＋16G标准版 金色">MI/小米 红米 Note 3 全网通 手机 2GB＋16G标准版 金色--------------------------￥888.00</option>
                <option value="24" mtitle="MI/小米 红米" atitle="MI/小米 红米 Note 3 全网通 手机 2GB＋16G标准版 银白">MI/小米 红米 Note 3 全网通 手机 2GB＋16G标准版 银白--------------------------￥888.00</option>
                <option value="27" mtitle="MI/小米 红米" atitle="MI/小米 红米 Note 3 移动/联通4G 手机 2GB＋16G标准版 深灰">MI/小米 红米 Note 3 移动/联通4G 手机 2GB＋16G标准版 深灰--------------------------￥868.00</option>
                <option value="29" mtitle="MI/小米 红米" atitle="MI/小米 红米 Note 3 移动/联通4G 手机 2GB＋16G标准版 银白">MI/小米 红米 Note 3 移动/联通4G 手机 2GB＋16G标准版 银白--------------------------￥868.00</option>
                <option value="32" mtitle="MI/小米 红米" atitle="MI/小米 红米 Note2 双网通4G版 手机 2GB/16GB白色">MI/小米 红米 Note2 双网通4G版 手机 2GB/16GB白色--------------------------￥798.00</option>
                <option value="1" mtitle="MI/小米 4C" atitle="MI/小米 4C 标准版全网通 2GB内存＋16GB容量 手机 灰色">MI/小米 4C 标准版全网通 2GB内存＋16GB容量 手机 灰色--------------------------￥768.00</option>
                <option value="2" mtitle="MI/小米 4C" atitle="MI/小米 4C 标准版全网通 2GB内存＋16GB容量 手机 白色">MI/小米 4C 标准版全网通 2GB内存＋16GB容量 手机 白色--------------------------￥768.00</option>
                <option value="3" mtitle="MI/小米 4C" atitle="MI/小米 4C 标准版全网通 2GB内存＋16GB容量 手机 粉色">MI/小米 4C 标准版全网通 2GB内存＋16GB容量 手机 粉色--------------------------￥768.00</option>
                <option value="4" mtitle="MI/小米 4C" atitle="MI/小米 4C 标准版全网通 2GB内存＋16GB容量 手机 蓝色">MI/小米 4C 标准版全网通 2GB内存＋16GB容量 手机 蓝色--------------------------￥768.00</option>
                <option value="5" mtitle="MI/小米 4C" atitle="MI/小米 4C 标准版全网通 2GB内存＋16GB容量 手机 黄色">MI/小米 4C 标准版全网通 2GB内存＋16GB容量 手机 黄色--------------------------￥768.00</option>
                <option value="37" mtitle="MI/小米 红米3S" atitle="MI/小米 红米3S 标准版 全网通 手机 白色">MI/小米 红米3S 标准版 全网通 手机 白色--------------------------￥728.00</option>
                <option value="33" mtitle="MI/小米 红米3" atitle="MI/小米 红米3 全网通 标准版 手机 16G 时尚深灰">MI/小米 红米3 全网通 标准版 手机 16G 时尚深灰--------------------------￥698.00</option>
                <option value="35" mtitle="MI/小米 红米3" atitle="MI/小米 红米3 全网通 标准版 手机 16G 时尚银白">MI/小米 红米3 全网通 标准版 手机 16G 时尚银白--------------------------￥698.00</option>
                <option value="38" mtitle="MI/小米 红米3S" atitle="MI/小米 红米3S 标准版 全网通 手机 金色">MI/小米 红米3S 标准版 全网通 手机 金色--------------------------￥698.00</option>
                <option value="34" mtitle="MI/小米 红米3" atitle="MI/小米 红米3 全网通 标准版 手机 16G 时尚金色">MI/小米 红米3 全网通 标准版 手机 16G 时尚金色--------------------------￥688.00</option>
                <option value="10" mtitle="MI/小米 M5" atitle="MI/小米 M5  尊享版 3D玻璃版(4GRAM+128GROM) 白色">MI/小米 M5  尊享版 3D玻璃版(4GRAM+128GROM) 白色--------------------------￥3138.00</option>
                <option value="15" mtitle="MI/小米 小米5" atitle="MI/小米 小米5 全网通 高配版 手机 白色">MI/小米 小米5 全网通 高配版 手机 白色--------------------------￥2288.00</option>
                <option value="17" mtitle="MI/小米 小米5" atitle="MI/小米 小米5 全网通 高配版 手机 黑色">MI/小米 小米5 全网通 高配版 手机 黑色--------------------------￥2288.00</option>
                <option value="16" mtitle="MI/小米 小米5" atitle="MI/小米 小米5 全网通 高配版 手机 金色">MI/小米 小米5 全网通 高配版 手机 金色--------------------------￥2258.00</option>
                <option value="13" mtitle="MI/小米 小米5" atitle="MI/小米 小米5 全网通 标准版 白色">MI/小米 小米5 全网通 标准版 白色--------------------------￥1968.00</option>
                <option value="14" mtitle="MI/小米 小米5" atitle="MI/小米 小米5 全网通 标准版 黑色">MI/小米 小米5 全网通 标准版 黑色--------------------------￥1968.00</option>
                <option value="21" mtitle="MI/小米 小米MAX" atitle="MI/小米 小米MAX 全网通4G 双卡双待 3G+64GB 金色">MI/小米 小米MAX 全网通4G 双卡双待 3G+64GB 金色--------------------------￥1658.00</option>
                <option value="9" mtitle="MI/小米 4S" atitle="MI/小米 4S 全网通 3GB内存＋64GB容量 手机 黑色">MI/小米 4S 全网通 3GB内存＋64GB容量 手机 黑色--------------------------￥1558.00</option>
                <option value="11" mtitle="MI/小米 Note" atitle="MI/小米 Note 全网通 手机 白色 16GB">MI/小米 Note 全网通 手机 白色 16GB--------------------------￥1499.00</option>
                <option value="7" mtitle="MI/小米 4S" atitle="MI/小米 4S 全网通 3GB内存＋64GB容量 手机 白色">MI/小米 4S 全网通 3GB内存＋64GB容量 手机 白色--------------------------￥1488.00</option>
                <option value="8" mtitle="MI/小米 4S" atitle="MI/小米 4S 全网通 3GB内存＋64GB容量 手机 金色">MI/小米 4S 全网通 3GB内存＋64GB容量 手机 金色--------------------------￥1488.00</option>
                <option value="19" mtitle="MI/小米 小米MAX" atitle="MI/小米 小米MAX 全网通4G 双卡双待 3G+32GB 白色">MI/小米 小米MAX 全网通4G 双卡双待 3G+32GB 白色--------------------------￥1438.00</option>
                <option value="20" mtitle="MI/小米 小米MAX" atitle="MI/小米 小米MAX 全网通4G 双卡双待 3G+32GB 金色">MI/小米 小米MAX 全网通4G 双卡双待 3G+32GB 金色--------------------------￥1438.00</option>
                <option value="6" mtitle="MI/小米 4S" atitle="MI/小米 4S 2GB+16GB 全网通 手机 白色">MI/小米 4S 2GB+16GB 全网通 手机 白色--------------------------￥1398.00</option>
                <option value="18" mtitle="MI/小米 小米MAX" atitle="MI/小米 小米MAX 全网通4G 双卡双待 2G+16GB 金色">MI/小米 小米MAX 全网通4G 双卡双待 2G+16GB 金色--------------------------￥1158.00</option>
                <option value="31" mtitle="MI/小米 红米" atitle="MI/小米 红米 Note 3 移动/联通4G 手机 3GB＋32G高配版 银白">MI/小米 红米 Note 3 移动/联通4G 手机 3GB＋32G高配版 银白--------------------------￥1088.00</option>
                <option value="25" mtitle="MI/小米 红米" atitle="MI/小米 红米 Note 3 全网通 手机 3GB＋32G高配版 金色">MI/小米 红米 Note 3 全网通 手机 3GB＋32G高配版 金色--------------------------￥1058.00</option>
                <option value="26" mtitle="MI/小米 红米" atitle="MI/小米 红米 Note 3 全网通 手机 3GB＋32G高配版 银白">MI/小米 红米 Note 3 全网通 手机 3GB＋32G高配版 银白--------------------------￥1058.00</option>
                <option value="30" mtitle="MI/小米 红米" atitle="MI/小米 红米 Note 3 移动/联通4G 手机 3GB＋32G高配版 深灰">MI/小米 红米 Note 3 移动/联通4G 手机 3GB＋32G高配版 深灰--------------------------￥1018.00</option>
            </select>
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>状态：</label>
		<div class="formControls col-xs-8 col-sm-9">
		<input type="radio" name="status" id="" value="1" checked=""><label for="">启用</label>
		<input type="radio" name="status" id="status" value="0"><label for="">禁用</label>
			<label id="name-error" class="error" for="status"></label>
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
		{{csrf_field()}}
			<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			<input class="btn btn-primary radius" type="reset" value="&nbsp;&nbsp;重置&nbsp;&nbsp;">
		
		</div>
	</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去--> 
<script type="text/javascript" src="/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/static/admin/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
/*$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").validate({
		rules:{
			adminName:{
				required:true,
				minlength:4,
				maxlength:16
			},
			password:{
				required:true,
			},
			password2:{
				required:true,
				equalTo: "#password"
			},
			sex:{
				required:true,
			},
			phone:{
				required:true,
				isPhone:true,
			},
			email:{
				required:true,
				email:true,
			},
			adminRole:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit({
				type: 'post',
				url: "/admins" ,
				success: function(data){
					console.log(data);
					layer.msg('添加成功!',{icon:1,time:1000});
				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('error!',{icon:1,time:1000});
				}
			});
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});*/
</script> 
<!--/请在上方写此页面业务相关的脚本-->
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