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
<title>订单详情</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 订单管理 <span class="c-gray en">&gt;</span> 订单详情 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover  table-responsive">
			<thead>
				<tr class="text-c">
					<th>ID</th>
					<th>订单号</th>
					<th>商品名字</th>
					<th>用户名字</th>
					<th>地址</th>
					<th>支付来源</th>
					<th>支付方式</th>
					<th>状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<tr class="text-c">
					<td>{{$order->id}}</td>
					<td class="text-l">{{$order->order_id}}</td>
					<td>
					@foreach($goods as $goodss)
					@if($goodss->id==$order->id)
					{{$goodss->goods_title}}
					@endif
					@endforeach
					</td>
					<td>
					@foreach($user as $users)
					@if($users->id==$order->id)
					{{$users->name}}
					@endif
					@endforeach
					</td>
					<td>{{$order->aid}}</td>
					<td>
					@switch($order->payform)	
					@case(0)
					支付宝
					@break
					@case(1)
					微信支付
					@break
					@case(2)
					银行卡
					@break
					@case(3)
					货到付款
					@break
					@endswitch
					</td>
					<td>@if($order->paytype==0)
					货到付款
					@else
					在线支付
					@endif</td>
					<td><select>
						<option value="0" @if($order->status==0) selected @endif> 未支付 </option>
						<option value="1" @if($order->status==1) selected @endif> 已支付 </option>
						<option value="2" @if($order->status==2) selected @endif> 已发货 </option>
						<option value="3" @if($order->status==3) selected @endif> 已收货 </option>
						<option value="4" @if($order->status==4) selected @endif> 交易完成 </option>
						<option value="5" @if($order->status==5) selected @endif> 退换货 </option>
					</select></td>
					<td class="f-14 td-manage"><a style="text-decoration:none" class="btn btn-success radius"  href="/adminorder/{{$order->id}}/edit" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="btn btn-danger radius del" onClick="article_del(this,'10001')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a><a href="/adminorder/{{$order->id}}">详情</a></td>
				</tr>
			</tbody>
		</table>
	</div>
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
// ajax删除
$(".del").click(function(){
	// 获取id
	$id=$(this).parents('tr').find('td:first').html();
		s=$(this).parents('tr');   
		ss=confirm('你确定删除吗');
		// 确定后    
		// alert($id);     
		if (ss) {
			$.get('/adminorderdel',{id:$id},function(data){
				// alert(data);
				s.remove();
				
			});
		}
        });
</script> 
</body>
</html>