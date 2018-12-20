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
<title>类别列表</title>
<link rel="stylesheet" href="/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
</head>
<body class="pos-r">
<div >
	<div class="page-container">
		<form action="/sku" method="get">    
     <div class="dataTables_filter" id="DataTables_Table_1_filter" style="float:right;">
      <label>用户名: <input type="text" aria-controls="DataTables_Table_1" name="keywords" value="{{$request['keywords'] or ''}}" /></label>
      <input type="submit" class="btn btn-success" value="搜索">
     </div>
     </form>
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
							
					<tr class="text-c">
						<th>ID</th>
						<th>商品id</th>
						<th>标题</th>
						<th>运行和内存</th>
						<th>颜色</th>
						<th>市场价</th>
						<th>销售价</th>
						<th>库存</th>
						<th>状态</th>
						<th>参数</th>
						<th>操作</th>	
					</tr>
				</thead>
				<tbody>
				@foreach($sku as $v)
					<tr>
						<td width="50px">{{$v->id}}</td> 
						<td width="50px">{{$v->goods_id}}</td>
						<td width="50px">{{$v->title}}</td>
						<td width="50px">{{$v->attr}}</td>
						<td width="50px">{{$v->color}}</td>
						<td width="50px">{{$v->market_price}}</td>
						<td width="50px">{{$v->shop_price}}</td>
						<td width="50px">{{$v->stock}}</td>
						<td width="50px">{{$v->status==1?'上架':'下架'}}</td>
						<td width="50px">{{!!$v->parameter!!}}</td>
						<td width="50px">
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
		</div>
	</div>
</div>
</body>
</html>