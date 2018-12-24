@extends('Home.HomePublic.publicperson')
@section('right')
<html>
 <head>
  <link rel="stylesheet" type="text/css" href="/lib/Hui-iconfont/1.0.8/iconfont.css" />
  <script type="text/javascript" src="/static/homes/address/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="/static/homes/address/jquery.reveal.js"></script>
 </head>
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
</style>
 <body>
  <div class="uc-box uc-main-box"> 
   <div class="uc-content-box"> 
    <div class="box-hd"> 
     <h1 class="title">收货地址</h1> 
    </div> 
    <div class="box-bd"> 
     <div class="user-address-list J_addressList clearfix"> 
      <!-- 添加地址 -->
      <div class="address-item " style="text-align: center" id="newaddress"> 
              <a style="display:block;width:300px;margin:50px auto;text-align:center;font-size:18px;color:#5e5e5e;text-decoration:none;" href="javascript:void(0);" data-reveal-id="myModal" class="Hui-iconfont">&#xe61f;<br>添加地址</a>
              
      </div> 
      <!-- 结束 -->

      <!-- 地址框 -->
      @foreach($address as $row)
      <div class="address-item J_addressItem" > 
       <dl> 
        <dt> 
         <em class="uname">{{$row->name}}</em> 
        </dt> 
        <dd class="utel">
          {{$row->phone}}
        </dd> 
        <dd class="uaddress">
          {{$row->address}}
         <br />大片路20号风行牛奶附近(先打电话) (510630) 
        </dd> 
       </dl> 
       <div id="myModal" class="reveal-modal">
          <h2>模拟帐户申请</h2>
          <p>用户姓名：<input name="111" type="text" class="input" size="20"></p>
          <p>手机号码：<input name="111" type="text" class="input" size="20"></p>
          <p>身份证号：<input name="111" type="text" class="input" size="35"></p>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="sub" type="button"  value="提交申请"/></p>
          <a class="close-reveal-modal">&#215;</a>
      </div>
       <div class="actions"> 
        <a class="modify J_addressModify"  href="">修改</a> 
        <a class="modify J_addressDel" >删除</a> 
       </div> 
      </div>
      @endforeach
      <!-- 地址框 -->

     </div> 
    </div> 
   </div> 
  </div>  
 </body>
</html>
@endsection

@section('title','收货地址')
@section('subtitle','收货地址')