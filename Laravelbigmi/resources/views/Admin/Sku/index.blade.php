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
						<td>{{$v->id}}</td> 
						<td>{{$v->goods_id}}</td>
						<td>{{$v->title}}</td>
						<td>{{$v->attr}}</td>
						<td>{{$v->color}}</td>
						<td>{{$v->market_price}}</td>
						<td>{{$v->shop_price}}</td>
						<td>{{$v->stock}}</td>
						<td><a class="btn btn-success radius edi status"><span >{{$v->status==1?'上架':'下架'}}</span></a></td>
						<td>{{substr($v->parameter,0,10)}}</td>
						<td width="100px"><a href="#" class="delete btn btn-danger radius" ><i class="Hui-iconfont"></i></a>
						<a href="/sku/{{$v->id}}/edit" class=" btn btn-success radius" ><i class="Hui-iconfont"></i></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			
		</div>
	</div>
</div>
</body>
<script type="text/javascript">
// ajax删除
// alert($);exit;
$(".delete").click(function(){
	// 获取删除数据的id
	$id=$(this).parents("tr").find("td:first").html();
	s=$(this).parents("tr");   
	ss=confirm('你确定删除吗');
	// 确定后         
	if (ss) {
		$.get("/skudel",{id:$id},function(data){
		if(data==1){
			s.remove();
				}
		   });
		}
});
// ajax修改状态
$(".edi").click(function(){
	// 获取id
	$id=$(this).parents('tr').find('td:first').html();
	// console.log($id);
	s=$(this).parents('tr').find('td').eq(8).find('a');
	// alert($this)
	// alert($id);	
	// console.log($(this).text);
		$.get('/skuedi',{id:$id},function(data){
			// alert(data);
			if (data==0) {
				// $(this).text('下架');
				s.text('下架');
				// console.log(s.text);
			}else{
				// $(this).text('上架');
				s.text('上架');
			}
			});
        });
</script>
</html>