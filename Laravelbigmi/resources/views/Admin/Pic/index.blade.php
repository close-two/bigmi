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
<title>图片列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 图片管理 <span class="c-gray en">&gt;</span> 图片列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<center>
	<div class="page-container">
		<form action="/adminpic" method="get">
			<input type="text" name="keywords" value="{{$request['keywords'] or ''}}" id="" placeholder=" 轮播图名称" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
		</form>
	</div>
</center>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover">
			<thead>
				<tr class="text-c">
					<th width="80">ID</th>
					<th width="100">图片名称</th>
					<th width="100">图片</th>
					<th width="60">轮播状态</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			@foreach($pic as $row)
				<tr class="text-c">
					<td>{{$row->id}}</td>
					<td>{{$row->name}}</td>
					<td><a href="javascript:;" onClick="picture_edit('图库编辑','picture-show.html','10001')"><img width="210" class="picture-thumb" src="{{$row->url}}"></a></td>
					<td><a class="btn btn-success radius edi status"><span >{{$row->status=0?'停止':'播放'}}</span></a></td>
					<!-- <td class="td-manage"> <a style="text-decoration:none" class="ml-5" onClick="picture_edit('图片修改','picture-add.html','10001')" href="javascript:;" title="编辑">编辑</a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,'10001')" href="javascript:;" title="删除">删除</a></td> -->
					<td>
						<a class="btn btn-success radius" href="/adminpic/{{$row->id}}/edit">修改</a>
						<a href="javascript:void(0)" class="btn btn-danger del radius">删除</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
      {{$pic->appends($request)->render()}}
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/static/admin/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

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
// ajax删除
$(".del").click(function(){
	// 获取id
	$id=$(this).parents('tr').find('td').eq(0).html();
		s=$(this).parents('tr');   
		ss=confirm('你确定删除吗');
		// 确定后         
		if (ss) {
			$.get('/adminpicdel',{id:$id,},function(data){
				// alert(data);
				s.remove();
				
			});
		}
        });
// ajax修改状态
$(".edi").click(function(){
	// 获取id
	$id=$(this).parents('tr').find('td').eq(0).html();
	s=$(this).parents('tr').find('td').eq(3).find('a');
	// alert($id);	
		$.get('/adminpicedi',{id:$id},function(data){
			if (data==0) {
				s.text('停止');
			}else{
				s.text('播放');
			}
			});
        });
</script>
</body>
</html>