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
<title>分类添加</title>
 </head>

 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>分类添加</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 

    <form class="mws-form" action="/admincate" method="post">
    @if (count($errors) > 0)
      <div class="mws-form-message error">
      <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
      </ul>
      </div>
      </div>
    @endif 
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">分类名</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="catename"/> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">父类</label> 
       <div class="mws-form-item"> 

       <select class="large" name="pid">
          <option value="0">--请选择--</option>
          @foreach($cate as $row)
          <option  value="{{$row->id}}">{{$row->catename}}</option>
          @endforeach
        </select>

       </div> 
      </div>    
     </div> 
     <div class="mws-button-row">
      {{csrf_field()}} 
      <input type="submit" value="添加分类" class="btn btn-danger" /> 
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
</html>

