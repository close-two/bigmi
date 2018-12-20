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
<link rel="stylesheet" href="/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
</head>
<body class="pos-r">

<div >
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
</div>
<form action="/botton/{{$kk->id}}" method="post">
{{csrf_field()}}
{{method_field("PUT")}}
    <div style="margin-left: 200px;">
    <label>分类名 :</label><input type="text" name="name" value="{{$kk->name}}"><br>
    <label>status:</label><select name="status" type="text">
        <option value="1" {{$kk->status==1?'selected':''}}>显示</option>
        <option value="0" {{$kk->status==0?'selected':''}}>隐藏</option>
    </select><br>
    <label>父　类:</label>
    <select type="text"name="pid">
    @foreach($vv as $row)
    @if($kk->pid == 0)
    <option value="{{$row->id}} " {{$row->id==$kk->id?'selected':''}}>{{$row->name}}</option>
    @else
    <option value="{{$row->id}} " {{$row->id==$kk->pid?'selected':''}}>{{$row->name}}</option>
    @endif
    @endforeach
    </select><br>
     <input type="submit" class="btn btn-danger" value="提交">
    </div>
</form>

</body>
</html>