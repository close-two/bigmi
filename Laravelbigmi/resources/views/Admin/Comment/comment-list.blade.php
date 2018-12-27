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

<title>评论列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 评论管理 <span class="c-gray en">&gt;</span> 评论列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c"> 日期范围：
		<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}' })" id="datemin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'datemin\')}',maxDate:'%y-%M-%d' })" id="datemax" class="input-text Wdate" style="width:120px;">
		<input type="text" class="input-text" style="width:250px" placeholder="输入关键词" id="" name="">
		<button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜评论</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> </span> <span class="r">共有数据：<strong>88</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="60">ID</th>
					<th width="60">用户名</th>
					<th width="60">评价的商品</th>
					<th>评论内容</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>

			@foreach($commentlist as $comment)
				<tr class="text-c">
					<td><input type="checkbox" value="1" name=""></td>
					<td>{{$comment->id}}</td>
					<td><a href="javascript:;" onclick="member_show('{{$comment->name}}','member-show.html','{{$comment->id}}','360','400')"><i class="avatar size-L radius"><img alt="" src="{{$comment->headpic or '/static/admin/h-ui/images/ucnter/avatar-default-S.gif'}}" /></i></a></td>
					<td><a href="javascript:;" onclick="member_show('{{$comment->goods_title}}','member-show.html','{{$comment->id}}','360','400')"><i class="avatar size-L"><img alt="{{$comment->goods_title}}" src="{{$comment->goods_img or '/static/admin/h-ui/images/ucnter/avatar-default-S.gif'}}" /></i></a></td>
					<td class="text-l"><div class="c-999 f-12">
							<u style="cursor:pointer" class="text-primary" onclick="member_show('{{$comment->name}}','member-show.html','{{$comment->uid}}','360','400')">{{$comment->name}}</u> <time title="{{$comment->created_at}}" datetime="{{$comment->created_at}}">{{$comment->created_at}}</time> <span class="ml-20">{{$comment->phone}}</span> <span class="ml-20">{{$comment->email}}</span></div>
							<div class="f-12 c-999"><a href="http://www.h-ui.net/Hui-4.22-comment.shtml" target="_blank">http://www.h-ui.net/Hui-4.22-comment.shtml</a></div>
						<div><a href=""><i class="Hui-iconfont">&#xe697;</i></a><span class="amount">  {{$comment->zan}} </span>&nbsp;&nbsp;{{$comment->content}}</div>
						<span style="color: #ff6700">官方回复:</span>
						<div style="height: 20px;color:red;">
							<input type="text" name="reply" placeholder="请输入官方回复内容,回复之后评价生效" style="width: 1200px" value="{{$comment->reply}}"" onblur="comment_reply(this,{{$comment->id}})">
						</div>
						</td>

					<td class="td-manage">

					
					<a title="查看" href="javascript:;" onclick="comment_show('查看','/index/{{$comment->id}}','{{$comment->id}}','','510')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>

					<a title="删除" href="javascript:;" onclick="member_del(this,'1')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
			@endforeach

			</tbody>
		</table>
	</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/lib/layer/2.4/layer.js"></script>  
<script type="text/javascript" src="/static/admin/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/static/admin/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$(function(){
	$('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  {"orderable":false,"aTargets":[0,2,4]}// 制定列不参与排序
		]
	});

});

// 评价-回复
function comment_reply(obj,id){
	reply = obj.value;
	layer.confirm('确认要提交回复吗？',function(index){
		$.ajax({
			type: 'POST',
			url: '/reply',
			data:{id:id,reply:reply,_token:'{{csrf_token()}}'},
			dataType: 'json',
			success: function(data){
				// console.log(data);
				layer.msg('已回复!',{icon:6,time:1000});
			},
			error:function(data) {
				console.log(data.msg);
			},
		});		
	});
}


/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*用户-查看*/
function member_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}

</script>
</body>
</html>