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
   <div class="mws-panel-header"> 
    <span>分类修改</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <!-- 修改 -->
    <form class="mws-form" action="/admincate/{{$cates->id}}" method="post">
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


     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">分类名称</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="catename" value="{{$cates->catename}}" /> 
       </div> 
      </div> 

       <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">path</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="path" value="{{$cates->path}}" /> 
       </div> 
      </div> 

      <div class="mws-form-row"> 
       <label class="mws-form-label">父类</label> 
       <div class="mws-form-item"> 
        <select class="large" name="pid">
          <!-- 默认 -->
          <option value="{{$pcate->id}}">----{{$pcate->catename}}----</option>
           @foreach($cate as $row)
           @if($pcate->catename!=$row->catename)
          <option   value="{{$row->id}}">{{$row->catename}}</option>
          @endif

          @endforeach
        </select>
       </div> 
      </div>    

      </div>    
     </div> 
     <div class="mws-button-row">
      {{csrf_field()}}
      {{method_field("PUT")}} 
      <input type="submit" value="确认修改" class="btn btn-danger" /> 
      <input type="reset" value="重置" class="btn " /> 
     </div> 
    </form> 

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



    </script>
</html>

