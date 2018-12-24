<!DOCTYPE html>
<!-- saved from url=(0117)file:///C:/Users/Administrator/Desktop/%E5%8F%8B%E6%83%85%E9%93%BE%E6%8E%A5/%E5%8F%8B%E6%83%85%E9%93%BE%E6%8E%A5.html -->
<html class="root61">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- <script async="" charset="uft-8" src="file://dc.3.cn/cathot/get2?callback=jQuery7818802&amp;_=1538808714567">
			
		</script> -->

		<title>友情链接</title>

			<link type="text/css" rel="stylesheet" href="/static/homes/friendlink/saved_resource">
		 	<!-- <script type="text/javascript">
				window.pageConfig={
					compatible:true
				};
				
			</script> -->
			<link type="text/css" rel="stylesheet" href="/static/homes/friendlink/link.2012.css">    
			<!-- <script type="text/javascript" src="/static/homes/friendlink/base.js"></script> -->
	</head>
<body>

	<div class="w">
		<div class="link_box">
			<div class="link_top"><div class="top_right"></div><div class="top_left"></div></div>	
			<div class="link_content">
				<h3 class="link_tit">友情链接</h3>
				<ul class="link_list">
			@if(!empty($links))
				@foreach($links as $key=>$values)
						<li>
						<img src="{{$values->logosrc}}" width='30' height='30'>
						<a href="{{$values->url}}" target="_blank">{{$values->name}}</a>
						</li>

				@endforeach
			@else
						<li style="color: red">暂无可展示友情链接,请在下方申请</li>
			@endif
						<!-- <li><a href="https://yp.jd.com/zhishi_sitemap.html" target="_blank">京东知识库</a></li>
						<li><a href="https://yp.jd.com/brand_sitemap.html" target="_blank">京东品牌榜</a></li> -->
					
				</ul>
				<div class="Pagination">
							<a class="current">1</a>
						
							<a href="#/links.action?page=2">2</a>
						
							<a href="#/links.action?page=3">3</a>
						
						<a class="next" href="#/links.action?page=2">下一页<b></b></a>
				</div>
			</div>
			<div class="link_bottom"><div class="bottom_right"></div><div class="bottom_left"></div></div>
		</div>
		<div class="link_box_a">
			<div class="link_top">
				<div class="top_right"></div>
				<div class="top_left"></div>
			</div>
			<div class="link_content">
				<h3 class="link_tit">申请友情链接</h3>
				<ul class="link_step">
					<li class="link_step_tit">申请步骤：</li>
					<li>
						<div class="float_Left">
							1.</div>
						<div class="margin_l_12">
							请先在贵网站做好bigmi.shop的文字友情链接：
							<br> 链接文字：bigmi.shop链接地址：
							<a href="www.bigmi.shop" target="_blank">www.bigmi.shop</a></div>
					</li>
					<li>2.做好链接后，请在右侧填写申请信息。bigmi.shop只接受申请文字友情链接。</li>
					<li>
						<div class="float_Left"> 3.</div>
						<div class="margin_l_12">
							已经开通我站友情链接且内容健康，符合本站友情链接要求的网站，经管理员审核后，可以显示在此友情链接页面。</div>
					</li>
					<li>
						<div class="float_Left"> 4.</div>
						<div class="margin_l_12">
							请通过右侧提交申请，注明：友情链接申请。</div>
					</li>
				</ul>
				<form id="frm_submit" method="post" action="/applylink" enctype="multipart/form-data">
				<table cellpadding="0" cellspacing="0" class="link_table" width="309">
					<tbody><tr>
						<td height="29" colspan="2" valign="top" class="link_step_tit">
							申请信息</td>
					</tr>
					<tr>
						<td height="29">
							网站名称：
						</td>
						<td height="29">
							<input id="name" name="name" type="text" class="w247">
						</td>
					</tr>
					<tr>
						<td height="29">
							网&nbsp;&nbsp;&nbsp;&nbsp;址：
						</td>
						<td height="29">
							<input id="url" name="url" type="text" class="w247" value="http://">
						</td>
					</tr>
					<tr>
						<td height="29">
							网站logo：
						</td>
						<td height="29">
							<input id="l_logosrc" name="logosrc" type="file" class="w247" value="">
						</td>
					</tr>

					<tr>
						<td height="35">
							电子邮箱：
						</td>
						<td height="29">
							<input id="email" name="email" type="text" class="w247">
						</td>
					</tr>
					<tr>
						<td width="61" height="29" valign="top">
							网站介绍：
						</td>
						<td width="348" valign="top">
							<textarea id="intro" name="intro" cols="" rows="" class="w247h60"></textarea>
						</td>
					</tr>
					<tr>
						<td height="45" colspan="2" align="center" valign="middle">

						{{csrf_field()}}
							<input type="submit" value="提交申请" id="btnSubmit" class="link_button">
						</td>
					</tr>

				</tbody></table>
				</form>
			</div>
			<div class="link_bottom">
				<div class="bottom_right"></div>
				<div class="bottom_left"></div>
			</div>
		</div>
	</div>

	
	
<!-- <script type="text/javascript" src="/static/homes/friendlink/jquery-1.6.4.js"></script>
	<script type="text/javascript" src="/static/homes/friendlink/jquery.validate.js"></script>
	<script type="text/javascript" src="/static/homes/friendlink/links.js"></script><script type="text/javascript">
	seajs.use(['jdf/1.0.0/unit/globalInit/2.0.0/globalInit.js'],function(globalInit){
		globalInit();
	});
	seajs.use("jdf/1.0.0/unit/hotwords/1.0.0/hotwords",function(hotwords){
	    hotwords();
	});
</script>
<script type="text/javascript" src="/static/homes/friendlink/wl.js"></script>

<script src="/static/homes/friendlink/td.js"></script><script src="/static/homes/friendlink/y.html"></script><script src="/static/homes/friendlink/y(1).html"></script><div id="userdata_el" style="visibility: hidden; position: absolute;"></div><script src="file://payrisk.jd.com/js/td.js"></script> -->
</body>
</html>