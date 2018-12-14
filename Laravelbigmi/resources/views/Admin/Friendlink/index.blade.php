<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="/static/jquery-1.8.3.min.js"></script>
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
<title>建材列表</title>
<link rel="stylesheet" href="/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
</head>
<body class="pos-r">

<div >
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
		<form action="/friendlink" method="get">    
     <div class="dataTables_filter" id="DataTables_Table_1_filter" style="float:right;">
      <label>用户名: <input type="text" aria-controls="DataTables_Table_1" name="keywords" value="{{$request['keywords'] or ''}}" />邮箱:<input type="text" aria-controls="DataTables_Table_1" name="keywordss" value="{{$request['keywordss'] or ''}}" /></label>
      <input type="submit" class="btn btn-success" value="搜索">
     </div>
     </form>
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="40">ID</th>
						<th width="60">name</th>
						<th width="100">url</th>
						<th width="100">logosrc</th>
						<th width="60">email</th>
						<th width="100">intro</th>
						<th width="50">status</th>
						<th width="100">created_at</th>
						<td width="100">操作</td>
					</tr>
				</thead>
				<tbody>
				@foreach($fk as $v)
					<tr class="text-c va-m">
						<td>{{$v->id}}</td> 
						<td>{{$v->name}}</td>
						<td>{{$v->url}}</td>
						<td><img width="60px" src="{{$v->logosrc}}"></td>
						<td>{{$v->email}}</td>
						<td>{{$v->intro}}</td>
						<td>{{$v->status}}</td>
						<td>{{$v->created_at}}</td>
						<td>
						<a href="#" class="delete btn btn-danger radius" ><i class="Hui-iconfont"></i></a>&nbsp;&nbsp;<a href="/friendlink/{{$v->id}}/edit" class="edit btn btn-success radius"><i class="Hui-iconfont"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
		</div>
	</div>
</div>
</body>
<script type="text/javascript">
	// alert($);
	//绑定单击事件
	$(".delete").click(function(){
		//获取删除数据的id
		id=$(this).parents("tr").find("td:first").html();
		s=$(this).parents("tr");
	    ss=confirm('你确定删除这个链接吗？');
		if(ss){
			//Ajax 删除
			$.get("friendlinkdel",{id:id},function(data){
				if(data==1){
					// alert("扑街");
					//把删除数据所在的tr从dom移除  remove()
					s.remove();
				}
			})
		}
	})
</script>
</html>