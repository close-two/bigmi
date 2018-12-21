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
	<form action="/goods" method="get">    
     <div class="dataTables_filter" id="DataTables_Table_1_filter" style="float:right;">
      <label>用户名: <input type="text" aria-controls="DataTables_Table_1" name="keywords" value="{{$request['keywords'] or ''}}" />
      <input type="submit" class="btn btn-success" value="搜索">
     </div>
     </form>
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th>ID</th>
						<th>商品标题</th>
						<th>市场价</th>
						<th>销售价</th>
						<th>总销量</th>
						<th>库存</th>
						<th>商品主图</th>
						<th>商品缩略图</th>
						<th>状态</th>
						<th>类型</th>
						<td>商品详情</td>		
						<td>操作</td>
					</tr>
				</thead>
				<tbody>
				@foreach($goodslist as $row)
					<tr class="text-c va-m">
						<td>{{$row->id}}</td> 
						<td>{{$row->goods_title}}</td>
						<td>{{$row->goods_market_price}}</td>
						<td>{{$row->goods_shop_price}}</td>
						<td>{{$row->goods_sale_count}}</td>
						<td>{{$row->goods_stock}}</td>
						<td><img width="60px" src="{{$row->goods_img}}"></td>
						<td><img width="60px" src="{{$row->goods_thums}}"></td>
						<td><a class="btn btn-success radius edi status"><span >{{$row->goods_status==1?'上架':'下架'}}</span></a></td>
						@foreach($type as $ress)
						@if($ress->id==$row->cate_id)
						<td>{{$ress->catename}}</td>
						@endif	
						@endforeach
						<td>{{substr($row->goods_detail,0,10)}}</td>
						<!-- <td>
						<a href="#" class="delete btn btn-danger radius" ><i class="Hui-iconfont"></i></a>&nbsp;&nbsp;<a href="/friendlink/{{$row->id}}/edit" class="edit btn btn-success radius"><i class="Hui-iconfont"></i></a>&nbsp;&nbsp;<a href="/friendlink/{{$row->id}}/edit" class="edit btn btn-success radius">详情</a>
						</td> -->
						<td>
						<a href="#" class="delete btn btn-danger radius" ><i class="Hui-iconfont"></i></a>
						<a href="/goods/{{$row->id}}/edit" class=" btn btn-success radius" ><i class="Hui-iconfont"></i> </a>
						<a href="/sku/create?id={{$row->id}}" class=" btn btn-success radius" ><i class="Hui-iconfont"></i> </a>
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
// ajax删除
// alert($);exit;
$(".delete").click(function(){
	// 获取删除数据的id
	id=$(this).parents("tr").find("td:first").html();
	// alert(id);
	s=$(this).parents("tr");   
	ss=confirm('你确定删除吗');
	// 确定后         
	if (ss) {
		$.get("/goodsdel",{id:id},function(data){
			alert(data);
		if(data==1){
			s.remove();
				}
		   });
		}else{
			alert(data);
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
		$.get('/goodsedi',{id:$id},function(data){
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