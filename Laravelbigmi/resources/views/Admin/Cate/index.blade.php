<!DOCTYPE html>
<html>
 <head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/static/Admin/cate/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/Admin/cate/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/static/Admin/cate/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/Admin/cate/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/Admin/cate/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/static/Admin/cate/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/Admin/cate/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/Admin/cate/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/Admin/cate/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/Admin/cate/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/Admin/cate/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/Admin/cate/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/Admin/cate/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/Admin/cate/css/my.css" media="screen">


<title>@yield('title')</title>

</head>
 <script type="text/javascript" src="/static/jquery-1.8.3.min.js"></script>
 <body>
  <div class="mws-panel grid_8"> 
  <div class="container">
      @if(session('success'))
        <div class="mws-form-message success">
          {{session('success')}}
        </div>
      @endif
                    
      @if(session('error'))    
        <div class="mws-form-message warning">
        {{session('error')}}
        </div>
      @endif
  </div>
   <div class="mws-panel-header"> 
    <span class="warninginfo"><i class="icon-table"></i>分类管理</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
    <form action="/admincate" method="get">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
      <b style="float:left;color:red;font-size:18px">友情提示:每个(一丨)代表一层子分类</b>
      <label>类名: <input type="text" aria-controls="DataTables_Table_1" name="keywords" value="{{$request['keywords'] or ''}}"/></label>
      <input type="submit" class="btn btn-success" value="搜索">
     </div>
     </form>
     <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info"> 
      <thead> 
       <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 157px;">ID</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 209px;">类别名</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 191px;">pid</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 137px;">path</th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th>
       </tr> 
      </thead> 
      <tbody role="alert" aria-live="polite" aria-relevant="all">
        

      @foreach($cate as $row)
       <tr class="odd"> 
        <td class="  sorting_1">{{$row->id}}</td> 
        <td class=" ">{{$row->catename}}</td> 
        <td class=" ">{{$row->pid}}</td> 
        <td class=" ">{{$row->path}}</td> 
        <td class=" ">
          <a href="javascript:void(0)"  class="btn btn-mini btn-danger del"><i class="icon-trash"></i></a>
          <a href="/admincate/{{$row->id}}/edit"  class="btn btn-mini btn-info"><i class="icon-wrench"></i></a>

        </td> 
       </tr>
      @endforeach
      </tbody>

     </table>

     <div class="dataTables_paginate paging_full_numbers" id="pages">
    {{$cate->appends($request)->render()}}
     </div>
    </div> 
   </div> 
  </div>
 </body>
  <!-- JavaScript Plugins -->
    <script src="/static/Admin/cate/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/static/Admin/cate/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/static/Admin/cate/js/libs/jquery.placeholder.min.js"></script>
    <script src="/static/Admin/cate/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/static/Admin/cate/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/static/Admin/cate/jui/jquery-ui.custom.min.js"></script>
    <script src="/static/Admin/cate/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/static/Admin/cate/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/static/Admin/cate/plugins/flot/jquery.flot.min.js"></script>
    <script src="/static/Admin/cate/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/static/Admin/cate/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/static/Admin/cate/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/static/Admin/cate/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/static/Admin/cate/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/static/Admin/cate/plugins/validate/jquery.validate-min.js"></script>
    <script src="/static/Admin/cate/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/static/Admin/cate/bootstrap/js/bootstrap.min.js"></script>
    <script src="/static/Admin/cate/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/static/Admin/cate/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/static/Admin/cate/js/demo/demo.dashboard.js"></script>

    <script>
  //ajax删除
  $('.del').click(function(){
    id=$(this).parents('tr').find('td:first').html();
    // alert(id);
    s=$(this).parents('tr');
    ss=confirm("你确认删除吗");
    //Ajax
      $.ajax({
        url: "/admincatedel",
        type: 'get',
        //数据发送方式 
        dataType: 'json',
        //接受数据格式 (这里有很多,常用的有html,xml,js,json) 
        data: {'id': id},
        //要传递的数据 
           error: function(data) { //失败 
            alert('请先删除子分类');
          },
          success: function(data) { //成功 
            s.remove();
            $('.warninginfo').append('<b style="color:yellow;float:right">删除成功</b>');
          }
      });
  });



    </script>
</html>

