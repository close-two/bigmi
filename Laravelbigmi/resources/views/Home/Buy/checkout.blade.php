@extends('Home.HomePublic.publicmini')


@section('container')
  <!-- .site-mini-header END --> 
  <script type="text/javascript" async="" src="static/homes/checkout/xmst.js"></script>
  <script type="text/javascript" async="" src="static/homes/checkout/base.min.js"></script>
  <script type="text/javascript" async="" src="static/homes/checkout/checkout.min.js"></script>
  <script type="text/javascript" async="" src="static/homes/checkout/jquery.statData.min.js"></script>


  <link rel="stylesheet" type="text/css" href="static/homes/checkout/base.min.css">
  <link rel="stylesheet" type="text/css" href="static/homes/checkout/checkout.min.css">
  <script type="text/javascript">
var checkoutConfig = {
    addressMatch:'common',
    addressMatchVarName: new Function('return ' + 'data'),
    hasPresales:false,
    hasBigTv:false,
    hasAir:false,
    hasScales:false,
    hasWater:false,
    hasWater2:false,
    hasMobile:false,
    hasEboiler:false,
    hasEvent:false,
    hasGiftcard:false,
    totalPrice:3599,
    needPayAmount:3599,
    postage:0,
    postFree:true,
    bcPrice:'150',
    activityDiscountMoney:0.00,//活动优惠
    showCouponBox:0,
    showCaptcha:'0',
    invoice:[{"type":"electron","value":4,"desc":"\u7535\u5b50\u53d1\u7968","checked":true},{"type":"personal","value":1,"desc":"\u7eb8\u8d28\u53d1\u7968","checked":false}],
    quickOrder: '',
    hasBigPro: false,
    onlinePayTips: '支持微信支付、支付宝、银联、财付通、小米钱包等',
    subsidyPrice: 0};
</script> 
  <div class="page-main"> 
   <!-- 春节发货公告 --> 
   <!-- 春节发货公告 END--> 
   <div class="container"> 
    <div class="checkout-box"> 



     <div class="section section-address"> 
      <div class="section-header clearfix"> 
       <h3 class="title">收货地址</h3> 
       <div class="more"> 
       </div> 
       <div class="mitv-tips hide" style="margin-left: 0;border: none;" id="J_bigproPostTip"></div> 
      </div> 
      <div class="section-body clearfix" id="J_addressList"> 
       <!-- addresslist begin --> 
       @foreach($address as $res)
       
       <div class="address-item J_addressItem chose " data-address_id="11000000014532919" data-consignee="{{$res->name}}" data-id="{{$res->id}}" data-tel="188****4325" data-province_id="20" data-province_name="{{$res->s_province}}" data-city_id="233" data-city_name="{{$res->s_city}}" data-district_id="2199" data-district_name="{{$res->s_county}}" data-area="2199011" data-area_name="棠下街道" data-address="大片路20号风行牛奶附近(先打电话)" data-tag_name="" data-zipcode="510630" data-editable="Y" data-neededit="N"> 
        <dl> 
         <dt> 
          <span class="tag"></span> 
          <em class="uname">{{$res->name}}</em> 
         </dt> 
         <dd class="utel">
           {{$res->phone}} 
         </dd> 
         <dd class="uaddress">
           {{$res->address}}
          <br /> 大片路20号风行牛奶附近(先打电话) 
         </dd> 
        </dl> 
        <div class="actions"> 
         <a href="javascript:void(0);" class="modify J_addressModify" data-stat-id="c893d143edbb3fec" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-c893d143edbb3fec', 'javascript:void0', 'pcpid', '']);">修改</a> 
        </div> 
       </div> 
        @endforeach
        <script type="">
          $('.chose').click(function(){
            // alert(1);
            // 清除选中
            $('.chose').removeClass('selected');
            $id=$(this).attr('data-id');
            $(this).addClass('selected');
            $.get('/address',{id:$id},function(data){

            });
            
          });
        </script>
       <!-- addresslist end --> 
       <div class="address-item address-item-new" id="J_newAddress"> 
        <a href="/useraddress"></a><i class="iconfont"></i> 添加新地址 </a>
       </div> 
      </div> 
     </div> 
     <div class="section section-goods"> 
      <div class="section-header clearfix"> 
       <h3 class="title">商品及优惠券</h3> 
       <div class="more"> 
        <a href="/homecar" data-stat-id="4b8666e26639b521" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-4b8666e26639b521', '//static.mi.com/cart/', 'pcpid', '']);">返回购物车<i class="iconfont"></i></a> 
       </div> 
      </div> 
      <div class="section-body "> 
       @foreach($goods as $res2)
       <ul class="goods-list num" id="J_goodsList"> 

        <li class="clearfix"> 
         <div class="col col-img"> 
          <img src="{{$res2->img}}" width="30" height="30" /> 
         </div> 
         <div class="col col-name"> 
          <a href="https://item.mi.com/1184200014.html" target="_blank" data-stat-id="386934cdcc5c805c" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-386934cdcc5c805c', '//item.mi.com/1184200014.html', 'pcpid', '']);">{{$res2->title}}</a> 
         </div> 
         <div class="col col-price">
           {{$res2->market_price}}元 x {{$res2->num}}
         </div> 
         <div class="col col-status">
           &nbsp; 
         </div> 
         <div class="col col-total total" style="width: 80px">
          {{$res2->total}}元
         </div> 
         </li> 
       </ul> 
         @endforeach
      </div> 
     </div> 
     <div class="section section-options section-payment clearfix hide"> 
      <div class="section-header"> 
       <h3 class="title">支付方式</h3> 
      </div> 
      <div class="section-body clearfix"> 
       <ul class="J_optionList options "> 
        <li data-type="pay" class="J_option selected" data-value="1"> 在线支付 <span> （支持微信支付、支付宝、银联、财付通、小米钱包等） </span> </li> 
       </ul> 
      </div> 
     </div> 
     <div class="section section-options section-shipment clearfix"> 
      <div class="section-header"> 
       <h3 class="title">配送方式</h3> 
      </div> 
      <div class="section-body clearfix"> 
       <ul class="clearfix J_optionList options "> 
        <li data-type="shipment" class="J_option selected" data-amount="0" data-value="2"> 包邮 </li> 
       </ul> 
       <div class="service-self-tip" id="J_serviceSelfTip" style="display: none;"></div> 
      </div> 
     </div> 
     <div class="section section-options section-time clearfix hide" style="display: block;"> 
      <div class="section-header"> 
       <h3 class="title">配送时间</h3> 
      </div> 
      <div class="section-body clearfix"> 
       <ul class="J_optionList options options-list clearfix"> 
        <!-- besttime start --> 
        <li data-type="time" class="J_option selected" data-value="1"> 不限送货时间：<span>周一至周日</span> </li> 
        <li data-type="time" class="J_option " data-value="2"> 工作日送货：<span>周一至周五</span> </li> 
        <li data-type="time" class="J_option " data-value="3"> 双休日、假日送货：<span>周六至周日</span> </li> 
        <!-- besttime end --> 
       </ul> 
      </div> 
     </div> 
     <div class="section section-options section-invoice clearfix"> 
      <div class="section-header"> 
       <h3 class="title">发票</h3> 
      </div> 
      <div class="section-body clearfix"> 
       <div class="invoice-result"> 
        <span id="J_invoiceDesc">电子发票</span> 
        <span id="J_invoiceTitle">个人</span> 
        <span>商品明细</span> 
        <a href="https://order.mi.com/buy/checkout?r=30133.1544360829#J_modalInvoiceInfo" data-toggle="modal" id="J_invoiceModify" data-stat-id="67efe13c31710c36" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-67efe13c31710c36', '#J_modalInvoiceInfo', 'pcpid', '']);">修改 &gt;</a> 
       </div> 
      </div> 
     </div> 
     <div class="section section-count clearfix"> 
       
      <div class="money-box" id="J_moneyBox"> 
       <ul> 
        <li class="clearfix"> <label>商品件数：</label> <span class="val nums"></span> </li> 
        <li class="clearfix"> <label>商品总价：</label> <span class="val">{{$total}}元</span> </li> 
        <li class="clearfix"> <label>活动优惠：</label> <span class="val">-0元</span> </li> 
        <li class="clearfix"> <label>优惠券抵扣：</label> <span class="val"><i id="J_couponVal">-0</i>元</span> </li> 
        <li class="clearfix"> <label>运费：</label> <span class="val"><i data-id="J_postageVal">0</i>元</span> </li> 
        <li class="clearfix total-price"> <label>应付总额：</label> <span class="val"><em data-id="J_totalPrice">{{$total}}</em>元</span> </li> 
       </ul> 
      </div> 
      <script>
        $('.nums').text($('.num').length+" 件");
      </script>
     </div> 
     <div class="section-bar clearfix"> 
      <div class="fl"> 
       <div class="seleced-address hide" id="J_confirmAddress"> 
       </div> 
       <div class="big-pro-tip hide J_confirmBigProTip"></div> 
      </div> 
      <div class="fr"> 
       <a href="/pay" class="btn btn-primary pay" id="J_checkoutToPay" data-stat-id="9dc0c7cf32a1c0ca" onclick="_msq.push(['trackEvent', '17a1f380b9d4cd2e-9dc0c7cf32a1c0ca', 'javascript:void0', 'pcpid', '']);">去结算</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <script type="text/javascript">
    // $('.pay').click(function(){
    //   $.get('/pay',{name:$goods});
    // });
  </script>
@endsection

@section('title','填写订单')