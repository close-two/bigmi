﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<style>



</style>
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
<title>视频管理</title>
</head>
<body>
	<div class="container">
      @if(session('success'))
        <div class="mws-form-message success">
          <b style="color:yellow">{{session('success')}}</b>
        </div>
      @endif
                    
      @if(session('error'))    
        <div class="mws-form-message warning">
        {{session('error')}}
        </div>
      @endif
  </div>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 视频管理 <span class="c-gray en">&gt;</span> 视频列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<form action="/adminvideo" method="get">
		<input type="text" name="keywords" id="" value="{{$request['keywords'] or ''}}" placeholder=" 视频名称" style="width:250px" class="input-text">
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 视频名称</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a class="btn btn-primary radius" onclick="picture_add('添加视频','/adminvideo/create')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加视频</a></span> <span class="r">共有数据：<strong>{{$video->total()}}</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="100">视频标题</th>
					<th width="100">视频播放</th>
					<th width="100">来源</th>
					<th>创建时间</th>
					<th width="150">修改时间</th>
					<th width="60">发布状态</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			
				@foreach($video as $row)
				<div id="showit" ></div>
				<tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td class="text-id">{{$row->id}}</td>
					<td>{{$row->videoname}}</td>
					<td><a style="color:blue;" class="btn btn-default showit" href="{{$row->video}}">{{$row->videoname}}的视频</a></td>
					<td class="text-l">{{$row->source}}</td>
					<td class="text-c">{{$row->create_time}}</td>
					<td>{{$row->update_time}}</td>
					@if($row->status=='已下架')
					<td class="td-status"><span class="label label-defaunt radius">{{$row->status}}</span></td>
					@else
					<td class="td-status"><span class="label label-success radius">{{$row->status}}</span></td>
					@endif
					<td class="td-manage">
						@if($row->status=='已下架')
						<a style="text-decoration:none" onClick="picture_start(this,'{{$row->id}}')" href="javascript:;" title="上架"><i class="Hui-iconfont">&#xe603;</i></a>

						@else
						<a style="text-decoration:none" onClick="picture_stop(this,'{{$row->id}}')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> 
						@endif
						<a style="text-decoration:none" class="ml-5" onClick="picture_edit('视频编辑','/adminvideo/{{$row->id}}/edit',{{$row->id}})" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="product_del(this,{{$row->id}})" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
				@endforeach
		
			</tbody>
				{{($video->currentPage()-1)*$num+1}}/{{($video->currentpage()-1)*$num+$video->count()}}
		</table>
	{{$video->appends($request)->render()}}
	
	</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/Admin/h-ui/js/H-ui.min.js"></script> 

<script type="text/javascript" src="/static/admin/h-ui.admin/js/H-ui.admin.js"></script>
 <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8]}// 制定列不参与排序
	]
});

/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*图片-查看*/
function picture_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*图片-审核*/
function picture_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过'], 
		shade: false
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}

/*图片-下架*/
function picture_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){

		//获取当前状态status
		// alert(id);
		//ajax修改上架状态为下架
			history.go(0);
		$.get('/adminvideodown',{'id':id},function(data){
			alert(data);
		});
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_start(this,{{$row->id}})" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
		$(obj).remove();
		layer.msg('已下架!',{icon: 5,time:1000});
	});
}

/*图片-发布*/
function picture_start(obj,id){
	layer.confirm('确认要上架吗？',function(index){

			history.go(0);
		$.get('/adminvideoup',{'id':id},function(data){
			alert(data);
		});

		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_stop(this,{{$row->id}})" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');

		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">正在上架</span>');
		$(obj).remove();
		layer.msg('已上架!',{icon: 6,time:1000});
	});
}

/*图片-申请上线*/
function picture_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}

/*图片-编辑*/
function picture_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*图片-删除*/
/*产品-删除*/
function product_del(obj,id){
	// alert(id);
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			type: 'GET',
			url: '/adminvideodel',
			dataType: 'json',
			data:{'id':id},
			success: function(data){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			},
			error:function(data) {
				alert('删除失败');
			},
		});		
	});
}
</script>
<script>
$('#DataTables_Table_0_info').remove();
$('#DataTables_Table_0_paginate').remove();
$('#DataTables_Table_0_length').remove();
$('#DataTables_Table_0_filter').remove();

$('video').click(function(){
	$(this).remove();
});
</script>

</body>
</html>