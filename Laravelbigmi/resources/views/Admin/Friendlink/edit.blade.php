<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="/static/jquery-1.8.3.min.js"></script>
</head>
<body>
<form action="/friendlink/{{$link->id}}" method="post">
    status:<input type="text" class="large" name="status" value="{{$link->status}}" /> 
      {{csrf_field()}}
     {{method_field("PUT")}}
     <input type="submit" value="提交">
</form>
</body>
</html>