@extends('Home.HomePublic.public')


@section('container')

<link rel="stylesheet" type="text/css" href="/static/homes/product/product_buy.min.css">
<link rel="stylesheet" type="text/css" href="/static/homes/product/base.min.css">
<script type="text/javascript" async="" src="/static/homes/product/xmst.js"></script>


  <!-- 导航 --> 
  <div id="J_proHeader">
   <div class="xm-product-box"> 
    <div class="nav-bar" id="J_headNav"> 
     <div class="container J_navSwitch"> 
      <h2 class="J_proName">{{$data->goods_title}}</h2> 
      <div class="con">
       <div class="right"> 
        <a href="/gaishu/{{$data->id}}">概述</a> 
        <span class="separator">|</span> 
        <a href="/goodsdetailscomment/{{$data->id}}">用户评价</a> 
       </div>
      </div> 
     </div> 
    </div>
   </div>
  </div> 
  <div class="xm-buyBox" id="J_buyBox"> 
   <div class="box clearfix">  
    <div class="pro-choose-main container clearfix"> 
     <div class="pro-view span10"> 
      <!-- 左侧轮播图 --> 
      <div id="J_img" class="img-con "> 
       <div class="ui-wrapper">
        <div class="ui-viewport">
         <div id="J_sliderView" class="sliderWrap" >
          <img data-src="{{$data->goods_img}}" class="slider done" src="{{$data->goods_img}}"/>
         </div>
        </div>
        <div class="ui-controls ui-has-pager ui-has-controls-direction">
         <div class="ui-pager ui-default-pager">
          <div class="ui-pager-item">
           <a href="https://item.mi.com/product/10000123.html" data-slide-index="0" class="ui-pager-link">1</a>
          </div>
          <div class="ui-pager-item">
           <a href="https://item.mi.com/product/10000123.html" data-slide-index="1" class="ui-pager-link">2</a>
          </div>
          <div class="ui-pager-item">
           <a href="https://item.mi.com/product/10000123.html" data-slide-index="2" class="ui-pager-link active">3</a>
          </div>
          <div class="ui-pager-item">
           <a href="https://item.mi.com/product/10000123.html" data-slide-index="3" class="ui-pager-link">4</a>
          </div>
         </div>
         <div class="ui-controls-direction">
          <a class="ui-prev" href="https://item.mi.com/product/10000123.html">上一张</a>
          <a class="ui-next" href="https://item.mi.com/product/10000123.html">下一张</a>
         </div>
        </div>
       </div> 
      </div> 
     </div> 
     <div class="pro-info span10"> 
      <h1 class="pro-title J_proName"> <span class="img"></span> <span class="name">{{$data->goods_title}}</span> </h1> 
      <!-- 提示 --> 
      <p class="sale-desc" id="J_desc"><font color="#ff4a00">{{$data->goods_sale_descr}}</font>{{$data->goods_descr}}</p> 
      <div class="loading J_load hide"> 
       <div class="loader"></div> 
      </div> 
      <!-- 主体 --> 
      <div class="J_main"> 
       <!-- 经营主题 --> 
       <p class="aftersale-company" id="J_aftersaleCompany" type="1" desc="null">小米自营</p> 
       <!-- 价格 --> 
       <div class="pro-price J_proPrice"> 
        <span class="price qqq">{{$data->goods_market_price}}</span> 
        <span class="seckill-notic hide"><em></em>闪购预告 <span><span> </span> </span></span>
       </div> 
       <!-- 预售提示倒计时 --> 
       <div class="pro-time hide J_proBook"> 
        <div class="pro-time-head">
          预售 
         <span class="time J_bookTime"></span> 
        </div> 
        <div class="pro-time-con">
          预付款
         <span class="pro-time-price">￥<em class="J_bookPrice"></em></span> 
         <span class="pro-book-rule J_bookRuleTips hide">预售规则<em class="icon J_bookRule">?</em></span> 
        </div> 
        <div class="pro-book-rule-con J_bookRuleCon hide"> 
         <em><i></i></em> 
         <div> 
         </div> 
        </div> 
       </div> 
       <!-- 预约提示倒计时 --> 
       <div class="pro-time hide J_proOrder"> 
        <div class="pro-time-head">
          限时预约 
         <span class="time J_orderTime"></span> 
        </div> 
        <div class="pro-time-con"> 
         <span class="pro-time-price">￥<em class="J_orderPrice"></em></span> 
         <span class="pro-order-count J_orderCount hide"></span> 
        </div> 
       </div> 
       <!-- 常态秒杀提示倒计时 --> 
       <div class="pro-time hide J_proSeckill"> 
        <div class="pro-time-head"> 
         <em class="seckill-icon"></em> 闪购 
         <span class="time J_seckillTime"></span> 
        </div> 
        <div class="pro-time-con"> 
         <span class="pro-time-price">￥<em class="J_seckillPrice"></em>
          <del>
           ￥
           <em class="J_seckillPriceDel"></em>
          </del></span> 
        </div> 
       </div>  
       <!-- 产品版本 --> 
       <div class="list-wrap" id="J_list"> 
        <div class="pro-choose pro-choose-col2 J_step" data-index="0"> 
         <div class="step-title" data-name="选择版本">
           选择版本 
         </div> 
         <ul class="step-list step-one clearfix actives"> 
         @foreach($sku as $k=>$row)
          <li class="btn btn-biglarge @if($k==0) active @endif chose" data-id="{{$row->id}}" data-name="{{$row->title}}" data-price="{{$row->market_price}}元  " data-index="0" data-value="{{$row->attr}}"> <a href="javascript:void(0);"> <span class="name">{{$row->attr}}</span> <span class="price">{{$row->market_price}} </span></a></li>
          @endforeach
         </ul> 
        </div> 
        <div class="pro-choose pro-choose-col2 J_step" data-index="1"> 
         <div class="step-title" data-name="选择颜色">
           选择颜色 
         </div> 
         <ul class="step-list clearfix activex"> 
         <!-- 遍历颜色 -->
         @foreach($color as $k=>$col)
          <li class="btn btn-biglarge choses @if($k==0)active onchoses @endif"  data-id="{{$col->id}}" data-cid="1184200013" data-name="{{$col->title}}" data-price="{{$col->market_price}}元" data-value="{{$col->color}}" data-index="0"> <a href="javascript:void(0);"> <img src="/static/homes/product/pms_1540429613.4617799.jpg" data-src="//i8.mifile.cn/a1/pms_1540429613.4617799.jpg" alt="{{$col->color}}" class="done" />{{$col->color}}</a></li>
          @endforeach
         </ul> 
        </div> 
       <div id="J_relation"></div> 
       <!-- 已选择的产品 --> 
       <div class="pro-list" id="J_proList">
        <ul> 
         <li class="zzz">{{$res->title}} {{$res->color}}<span class="qqq">{{$res->market_price}}元 </span> </li> 
         <li class="totlePrice"> 总计 ：{{$res->market_price}}元 </li>
        </ul>
       </div> 
       <!-- 购买按钮 --> 
       <ul class="btn-wrap clearfix" id="J_buyBtnBox"> 
        <li> <a href="/homecar/{{$res->id}}" class="btn btn-primary  btn-biglarge J_proBuyBtn" data-type="common" data-isbigtap="false" data-name="加入购物车">加入购物车</a> </li> 
        <li> <a data-id="{{$res->id}}" href="javascript:void(0);" class="btn-gray btn-like btn-biglarge collection" > <i class="iconfont default"></i>喜欢 </a> </li>
       </ul> 
       <div class="pro-policy" id="J_policy"> 
        <a href="javascript:void(0);" title=""> <span class="support"> <i class="iconfont"></i> <em>小米自营</em> </span> </a> 
        <a href="javascript:void(0);" title="由小米发货"> <span class="support"> <i class="iconfont"></i> <em>小米发货</em> </span> </a> 
        <a href="javascript:void(0);" title=""> <span class="support"> <i class="iconfont"></i> <em>7天无理由退货</em> </span> </a> 
        <a href="javascript:void(0);" title="由小米发货的商品，单笔满150元免运费;
由第三方商家发货的商品，免运费;
特殊商品需要单独收取运费，具体以实际结算金额为准；优惠券等不能抵扣运费金额;"> <span class="support"> <i class="iconfont"></i> <em>运费说明</em> </span> </a> 
       </div> 
      </div> 
      <script> 
          $('.collection').click(function(){
              // alert(1);
              $id=$(this).attr('data-id');
              $.get('/collection',{id:$id},function(data){
                if (data==1) {
                  alert('你已经添加收藏了');
                }else if(data==0){
                  alert('已添加收藏');
                }else{
                  alert('收藏请先登录');
                }
              })
          });
          // 选择版本
          $('.chose').click(function(){
            // 清除选中的样式
          $('.actives').children('li').removeClass('active');
            $id=$(this).attr("id");
            // 加上选中的样式
            $(this).addClass('active');
            // 搜索选中当前版本的颜色
            $.get('/goodsdetailschose',{id:$id},function($res){
                if($res){
                  // 删除颜色的选择的ul
                  $('.activex').children('li').remove();
                  // 重新写上各种颜色
                  var str='';
                  var span='';
                  // 将接收到的数据遍历到一个字符串中
                  for (var i = 0; i <$res.length; i++) {
                    var $a='';
                    if (i==0) {
                      $a='active onchoses';
                    }
                    str='<li class="btn btn-biglarge choses '+$a+'" data-id="'+$res[i]["id"]+'" data-cid="1184200013" data-name="'+$res[i]['title']+'" data-price="'+$res[i]['market_price']+'元" data-value="'+$res[i]['color']+'" data-index="0"> <a href="javascript:void(0);"><img src="/static/homes/product/pms_1540429613.4617799.jpg" data-src="//i8.mifile.cn/a1/pms_1540429613.4617799.jpg" alt="黑色" class="done" />'+$res[i]["color"]+'</a></li>';
                $('.activex').append(str);
                  }
                }
                // 获取版本名字
                $onchoses=$('.onchoses').attr("data-name");
                // 获取名字
            $onchoses+=$('.onchoses').attr("data-value");
          // 获取价格
          $price=$(".onchoses").attr("data-price");
            // 赋值
          $('.zzz').text($onchoses).append('<span class="qqq"></span>');
          $('.qqq').text($price);
          $('.totlePrice').html('总计 ：'+$price);
            },'json');
          });
          // 选择颜色的时候
          $(document).on("click", ".choses", function () {
            // 删除原本的颜色
            $('.activex').children('li').removeClass('active onchoses');
            // 加上选中的样式
            $(this).addClass('active onchoses');
            // 获取版本名字
            $onchoses=$('.onchoses').attr("data-name");
            // 获取颜色
            $onchoses+=$('.onchoses').attr("data-value");
            // 获取价格
          $price=$(".onchoses").attr("data-price");
            // 赋值版本
          $('.zzz').html($onchoses).append('<span class="qqq"></span>');
          // 赋值价格
          $('.qqq').text($price);
          $('.totlePrice').html('总计 ：'+$price);

         });
          
        </script> 
  <script type="text/javascript">
    //设置图片大小
    var getImage = function (image , size) {
        if(typeof image === 'string'){
            var type = image.substr(-4,4);
            var path = image.substring(0,image.length-4);
            if (type == 'jpeg') {
                type = image.substr(-5,5);
                path = image.substring(0,image.length-5);
            }
            return path + '!'+ size + 'x' + size + type;
        }
    }
</script> 
  </div> 
</div>
</div>
@endsection

@section('title','商品详情')