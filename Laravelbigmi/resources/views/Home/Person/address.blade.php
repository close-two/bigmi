@extends('Home.HomePublic.publicperson')
@section('right')
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="/lib/Hui-iconfont/1.0.8/iconfont.css" />
  <script type="text/javascript" src="/static/homes/address/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="/static/homes/address/jquery.reveal.js"></script>
 </head>

  <link rel="stylesheet" href="/bootstrap/css/bootstrap-select.css">
 <style type="text/css">
*{margin:0;padding:0;list-style-type:none;}
a,img{border:0;}
body{font:12px/180% Arial, Helvetica, sans-serif, "新宋体";}
/* reveal-modal */
.reveal-modal-bg{position:fixed;height:100%;width:100%;background-color:#000;z-index:100;display:none;top:0;left:0;}
.reveal-modal{visibility:hidden;top:100px;left:50%;margin-left:-300px;width:420px;background:#eee url(modal-gloss.png) no-repeat -200px -80px;position:absolute;z-index:101;padding:30px 40px 34px;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;-moz-box-shadow:0 0 10px rgba(0,0,0,.4);-webkit-box-shadow:0 0 10px rgba(0,0,0,.4);-box-shadow:0 0 10px rgba(0,0,0,.4);}
.reveal-modal .close-reveal-modal {
font-size:22px;line-height:.5;position:absolute;top:8px;right:11px;color:#aaa;text-shadow:0 -1px 1px rbga(0,0,0,.6);font-weight:bold;cursor:pointer;} 
.reveal-modal h2{font-size:18px;color:#990000;padding:0 0 20px 0;}
.reveal-modal p{padding:0 0 15px 0;}
/*弹出框*/
.black_overlay{ 
            display: none; 
            position: absolute; 
            top: 0%; 
            left: 0%; 
            width: 100%; 
            height: 100%; 
            background-color: black; 
            z-index:1001; 
            -moz-opacity: 0.8; 
            opacity:.80; 
            filter: alpha(opacity=88); 
} 
.white_content { 
            display: none; 
            position: absolute; 
            top: 25%; 
            left: 25%; 
            width: 55%; 
            height: 230px; 
            padding: 20px; 
            border: 10px solid orange; 
            background-color: white; 
            z-index:1002; 
            overflow: auto; 
 } 
 /*地址联动*/
 .top{ margin:5px auto; color:#990000; text-align:center;}

.info select{ border:1px #993300 solid; background:#FFFFFF;}

.info{ margin:5px; text-align:center;}

.info #show{ color:#3399FF; }

.bottom{ text-align:right; font-size:12px; color:#CCCCCC; width:1000px;}
</style>
 <body>
  <div class="container">
      @if(session('success'))
        <div class="mws-form-message success">
          <b style="color:yellow">{{session('success')}}</b>
        </div>
      @endif
                    
      @if(session('error'))    
        <div class="mws-form-message warning">
        {{session('error')}}
        </div>
      @endif
  </div>
  <div class="uc-box uc-main-box"> 
   <div class="uc-content-box"> 
    <div class="box-hd"> 
     <h1 class="title">收货地址</h1> 
    </div> 
    <div class="box-bd"> 
     <div class="user-address-list J_addressList clearfix"> 
      <!-- 添加地址 -->
      <div class="address-item " style="text-align: center" id="newaddress"> 
              <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'" class="Hui-iconfont">&#xe61f;<br>添加地址</a>
              
      </div> 
      <!-- 结束 -->

      <!-- 地址框 -->
      @foreach($address as $row)

      <div class="address-item J_addressItem kkp-{{$row->id}}"  id="parent">
        @if($row->status==1)
         <img class="default-{{$row->status}}"  style="float:right" 
          src="/static/homes/images/right.jpg" width="30" height="30"></img>
        @endif
       <dl> 
        <dt> 
         <em class="uname">{{$row->name}}</em> 
        </dt> 
        <dd class="utel">
          {{$row->phone}}
        </dd> 
        <dd class="uaddress">
          {{$row->address}}
         <br />{{$row->detailed}} 
        </dd> 
       </dl> 
       
       <div class="actions"> 
        <a class="modify J_addressModify"  href="/addressedit/{{$row->id}}/edit">修改</a> 
        <a class="modify J_addressDel" onclick="address_del(this,{{$row->id}})"  href="javascript:;" >删除</a>
        <a class="modify status" onclick="status(this,{{$row->id}})"  href="javascript:;">设为默认地址</a> 
       </div> 
      </div>
      @endforeach
      <!-- 地址框 -->
    
     </div> 
    </div> 
   </div> 
  </div>
    <!-- 添加地址弹出 -->
  <div id="light" class="white_content">请选择添加的地址:<br> 
    <a href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">
      <em style="position: absolute;top:0px;right:0px;color:black;font-size:20px">X</em>
    </a>
    <!-- 地址下拉联动开始 -->
    <div class="top">

  <h1>收货地址</h1>

</div>

<div class="info">
  <div style="color:red;display:none" id="warn">请选择你的省份/市/区!!<b id="shut" style="display: none;cursor: pointer;">X</b></div>
  <div>
    <form action="/useraddress" method="post" onsubmit="return check()">
      <select id="s_province" name="s_province"></select>  
      <select id="s_city" name="s_city" ></select>  
      <select id="s_county" name="s_county"></select>
      <script class="resources library" src="/js/area.js" type="text/javascript"></script>
      <script type="text/javascript">_init_area();</script>
      {{csrf_field()}}
      详细地址: <input class="form-control" type="text" id="detailed" name="detailed">
      <br>
      联系人: <input class="form-control" type="text" id="whoget" name="name">
      <br>
      联系电话: <input class="form-control" type="text" id="phone" name="phone">
      <input type="hidden" name="id" value="{{$row->uid}}">
      <br>
      <input type="submit" class="btn btn-primary" value="添加">
      <input type="reset" class="btn btn-success" value="重置">
    </form>  
  </div>
    <div id="show"></div>
</div>
    <!-- 结束 -->
  </div> 
        <div id="fade" class="black_overlay"></div> 
        <!-- 添加地址结束 -->

        <!-- 修改地址 -->
        <div class="edit">
          
        </div>
 </body>
 <script type="text/javascript">

var Gid  = document.getElementById ;

var showArea = function(){

  Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +  

  Gid('s_city').value + " - 县/区" + 

  Gid('s_county').value + "</h3>"

              }

Gid('s_county').setAttribute('onchange','showArea()');

</script>

<script>
  
//表单验证
function check(){
  s_province=$('#s_province').val();
  s_city=$('#s_city').val();
  s_county=$('#s_county').val();
  detailed=$('#detailed').val();
  //校验手机
  phoneReg = /(^1[3|4|5|7|8]\d{9}$)|(^09\d{8}$)/;
  phone=$('#phone').val();
  //校验名字
   ret = /^.{1,24}$/;
  whoget=$('#whoget').val();
  // alert(s_province);
  if(s_province=='省'||s_city=='市'||s_county=='区'){
      $('#warn').css('display','block');
      $('#shut').css('display','block');
      $('#shut').click(function(){
        $('#warn').css('display','none');
        $(this).css('display','none');
      });

      return false;
  }else if(detailed==''){
    $('<div style="color:red">详细地址不能为空</div>').appendTo($('.info'));
    return false;
  }else if((whoget=='')||(!ret.test(whoget))){
     $('<div style="color:red">联系人不能为空,请填写正确的1-8位收货人名字</div>').appendTo($('.info'));
     return false;
  }else if((phone=='')||(!phoneReg.test(phone))){
     $('<div style="color:red">联系电话不能为空,请填写正确的手机号</div>').appendTo($('.info'));
     return false;
  }else{
    return true;
  }

  
}
//ajax删除地址
function  address_del(obj,id){
  // alert(id);
  s=$('.kkp-'+id);
  // console.log(s);
  s.remove();
 //Ajax
      $.ajax({
        url: "/addressdel",
        type: 'get',
        //数据发送方式 
        dataType: 'json',
        //接受数据格式 (这里有很多,常用的有html,xml,js,json) 
        data: {'id': id},
        //要传递的数据 
          error: function(data) { //失败 
            alert('删除失败');
          },
          success: function(data) { //成功 
            s.remove();
            $('.warninginfo').append('<b style="color:yellow;float:right">删除成功</b>');
          }
      });

}

//点击消失提示
$('.success').click(function(){
  $(this).remove();
});
//设置默认地址
function status(obj,id){
  // alert(id);
  // 删除旧默认地址的图标
  s=('.default'+status);
  $.get('/addressstatus',{'id':id},function(data){
  history.go(0);
        alert(data);
  });
}
</script>
</html>
@endsection

@section('title','收货地址')
@section('subtitle','收货地址')