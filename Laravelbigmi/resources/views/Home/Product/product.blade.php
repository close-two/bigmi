@extends('Home.HomePublic.public')


@section('container')
<!-- <link rel="stylesheet" href="/static/homes/css/base.min.css" />
<link rel="stylesheet" href="/static/homes/css/index.min.css" />
<link rel="stylesheet" type="text/css" href="/static/homes/product/product_buy.min.css" />  -->

<link rel="stylesheet" type="text/css" href="/static/homes/product/product_buy.min.css">
<link rel="stylesheet" type="text/css" href="/static/homes/product/base.min.css">
<!-- <script type="text/javascript"  src="/static/homes/product/mstr.js"></script> -->
<!-- <script type="text/javascript" async="" src="/static/homes/product/jquery.statData.min.js"></script> -->
<script type="text/javascript" async="" src="/static/homes/product/xmst.js"></script>


  <!-- 导航 --> 
  <div id="J_proHeader">
   <div class="xm-product-box"> 
    <div class="nav-bar" id="J_headNav"> 
     <div class="container J_navSwitch"> 
      <h2 class="J_proName">{{$data->goods_title}}</h2> 
      <div class="con">
       <div class="right"> 
        <a href="https://www.mi.com/mix3/">概述</a> 
        <span class="separator">|</span> 
        <a href="https://www.mi.com/mix3/specs/">参数</a> 
        <span class="separator">|</span> 
        <a href="https://www.mi.com/mix3/gallery/">图集</a> 
        <span class="separator">|</span> 
        <a href="https://order.mi.com/queue/f2code" target="_blank">F码通道</a> 
        <span class="separator">|</span> 
        <a href="https://item.mi.com/comment/10000123.html">用户评价</a> 
       </div>
      </div> 
     </div> 
    </div>
   </div>
   <!-- <div class="xm-product-box nav-bar-hidden nav_fix" id="J_fixNarBar"> 
    <div class="nav-bar"> 
     <div class="container J_navSwitch"> 
      <h2 class="J_proName">{{$data->goods_title}}</h2> 
      <div class="con">
       <div class="right"> 
        <a href="https://www.mi.com/mix3/">概述</a> 
        <span class="separator">|</span> 
        <a href="https://www.mi.com/mix3/specs/">参数</a> 
        <span class="separator">|</span> 
        <a href="https://www.mi.com/mix3/gallery/">图集</a> 
        <span class="separator">|</span> 
        <a href="https://order.mi.com/queue/f2code" target="_blank">F码通道</a> 
        <span class="separator">|</span> 
        <a href="https://item.mi.com/comment/10000123.html">用户评价</a> 
       </div>
      </div> 
     </div> 
    </div>
   </div> -->
  </div> 
  <div class="xm-buyBox" id="J_buyBox"> 
   <div class="box clearfix"> 
    <div class="login-notic J_notic"> 
     <!-- 未登录提示 --> 
     <div class="container">
       为方便您购买，请提前登录 
      <a href="https://order.mi.com/site/login?redirectUrl=https://item.mi.com/product/10000123.html" class="J_proLogin" data-stat-id="ff18180e96c5ba2e" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-ff18180e96c5ba2e', 'javascript:void0', 'pcpid', '']);">立即登录</a> 
      <a href="javascript:void(0);" class="iconfont J_proLoginClose" data-stat-id="07d1ebe2f8b0f9ff" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-07d1ebe2f8b0f9ff', 'javascript:void0', 'pcpid', '']);"></a> 
     </div> 
    </div> 
    <div class="pro-choose-main container clearfix"> 
     <div class="pro-view span10"> 
      <!-- 左侧轮播图 --> 
      <!-- <div class="J_imgload  imgload hide"></div>  -->
      <div id="J_img" class="img-con fix"> 
       <div class="ui-wrapper">
        <div class="ui-viewport">
         <div id="J_sliderView" class="sliderWrap" >
          <img data-src="//i8.mifile.cn/a1/pms_1540429613.4617799!560x560.jpg" class="slider done" src="{{$data->goods_img}}"/>
          <img data-src="//i8.mifile.cn/a1/pms_1540429613.5552066!560x560.jpg" class="slider done" src="/static/homes/product/pms_1540429613.5552066!560x560.jpg"  />
          <img data-src="//i8.mifile.cn/a1/pms_1540429613.5558254!560x560.jpg" class="slider done" src="{{$data->goods_img}}"  />
          <img data-src="//i8.mifile.cn/a1/pms_1540429613.45998687!560x560.jpg" class="slider" />
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
        <span class="price">{{$data->goods_market_price}}</span> 
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
       <!-- <div class="J_saleWrap sale-wrap">  -->
        <!-- 优惠券 --> 
        <!-- <div class="J_couponWrap coupon-wrap hide"> 
         <span class="coupon-tag">优惠券</span> 
         <span class="coupon-name J_couponName"></span> 
         <a class="J_getCouponList" href="javascript:void(0);" data-stat-id="7ac17e9d38644527" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-7ac17e9d38644527', 'javascript:void0', 'pcpid', '']);">立即领取</a> 
        </div>  -->
        <!-- 4g --> 
        <!-- <div class="J_flowWrap flow-wrap">
         <ul> 
          <li> <span class="flow-tag">赠品</span> <span class="flow-name">赠米粉卡，最高含100元话费</span> </li> 
         </ul>
        </div> 
       </div>  -->
       <!-- 分仓地址 --> 
       <!-- <div class="J_addressWrap address-wrap"> 
        <div class="user-default-address" id="J_userDefaultAddress"> 
         <i class="iconfont iconfont-location"></i> 
         <div> 
          <div class="address-info">
           <span class="item">北京</span>
           <span class="item">北京市</span>
           <span class="item">东城区</span>
           <span class="item">永定门外街道</span>
          </div> 
          <span class="switch-choose-regions" id="J_switchChooseRegions"> 修改 </span> 
         </div> 
         <div class="product-status active" id="J_productStatus"> 
          <span class="init">正在加载...</span> 
          <span class="sale">有现货</span> 
          <span class="over">该地区暂时缺货</span> 
          <span class="no">暂时无法送达</span> 
          <span class="pre">预售商品</span> 
          <span class="book">预售商品</span> 
          <span class="nohasAddress"></span> 
          <span class="time"></span> 
         </div> 
        </div>
       </div> --> 
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
        <li> <a href="https://order.mi.com/site/login?redirectUrl=https://item.mi.com/product/10000123.html" class="btn-gray btn-like btn-biglarge"> <i class="iconfont default"></i>喜欢 </a> </li>
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
            // $onchoses=$('.onchoses').attr("data-name");
            // $onchoses+=$('.onchoses').attr("data-value");
          $('.chose').click(function(){
            // 清除选中的样式
          $('.actives').children('li').removeClass('active');
            $id=$(this).attr('data-id');
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
                    // console.log(str);
                    // console.log($a);
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
          // console.log($price);
          // 赋值价格
          $('.qqq').text($price);
          $('.totlePrice').html('总计 ：'+$price);

         });
        </script>
      <!-- 获取商品失败 --> 
      <div class="error hide J_error"> 
       <h3>有点小问题，请点击按钮刷新重试</h3> 
       <a href="javascript:void(0)" class="btn btn-primary J_reload" data-stat-id="9b9ab6e736215b75" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-9b9ab6e736215b75', 'javascript:void0', 'pcpid', '']);">刷新</a> 
      </div> 
     </div> 
    </div> 
    <!-- 预售流程 --> 
    <div class="pro-infomation" id="J_proInfo"> 
     <div class="pro-book-flow container hide" id="J_bookFlow"> 
      <span class="book-name">预售流程</span> 
      <ul class="clearfix"> 
       <li class="item01"> <span class="icon icon1"></span> 
        <div> 
         <span class="item-name">1.支付预付款</span> 
         <span class="item-infor"></span> 
        </div> </li> 
       <li class="item02"> <span class="icon icon2"></span> 
        <div> 
         <span class="item-name">2.支付尾款 <em>（在我的订单完成）</em></span> 
         <span class="item-infor"></span> 
        </div> </li> 
       <li class="item03"> <span class="icon icon3"></span> 
        <div> 
         <span class="item-name">3.商品发货</span> 
         <span class="item-infor"></span> 
        </div> </li> 
      </ul> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 到货通知设置成功弹窗 --> 
  <div class="modal modal-setRemind modal-hide fade" id="J_setRemindModal"> 
   <span class="close iconfont" data-dismiss="modal"><i class="iconfont"></i></span> 
   <div class="modal-body"> 
    <h4>到货通知设置成功!</h4> 
    <p> 请下载小米商城App ，开启通知功能 </p> 
    <img src="/static/homes/product/apdownload-phone-code.png" alt="" /> 
    <span class="btn btn-primary" data-dismiss="modal">我知道了</span> 
   </div> 
  </div> 
  <!-- 收货地址选择 --> 
  <div class="modal modal-hide fade modal-choose-regions" id="J_modalChooseRegions"> 
   <span data-dismiss="modal" aria-hidden="true" class="close"><i class="iconfont"></i></span> 
   <div class="modal-body pro-choose-regions"> 
    <div class="J_chooseRegionsBox" data-type="search"> 
     <div class="search-address-wrapper" id="J_searchAddressWrapper"> 
      <div class="search-section"> 
       <i class="icon icon-search iconfont"></i> 
       <input class="search-input" id="J_searchRegionsInput" type="text" placeholder="输入街道、乡镇、小区或商圈名称" autocomplete="off" /> 
       <span class="icon icon-del iconfont hide" id="J_searchRegionsInputClear">&times;</span> 
      </div> 
      <div class="switch-type"> 
       <a href="javascript:void(0);" class="J_switchTypeTrigger" data-type="select" data-stat-id="84e04663a15814a1" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-84e04663a15814a1', 'javascript:void0', 'pcpid', '']);">手动选择地址&gt;</a> 
      </div> 
      <div class="loading">
       <div class="loader"></div>
      </div> 
      <!-- 我的收货地址 --> 
      <div class="my-address hide" id="J_myAddress"> 
       <div class="title">
        我的收货地址
       </div> 
       <div class="no-login " id="J_noLogin">
         现在
        <a href="https://order.mi.com/site/login?redirectUrl=https://item.mi.com/product/10000123.html" data-stat-id="9944fcda01fd1a99" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-9944fcda01fd1a99', '#', 'pcpid', '']);">登录</a>，可根据收货地址快速定位 
       </div> 
       <div class="list-wrapper"> 
        <ul class="list clearfix"></ul> 
       </div> 
      </div> 
      <!-- 附近商圈 --> 
      <div class="nearby-address hide" id="J_nearbyAddress"> 
       <div class="title">
        附近商圈
       </div> 
       <ul class="list clearfix"></ul> 
      </div> 
      <!-- 搜索列表 --> 
      <div class="search-address hide" id="J_searchAdress"> 
       <ul class="list clearfix"></ul> 
      </div> 
      <div class="no-result hide" id="J_noSearchResult">
        没有找到这个地方，
       <a href="javascript:void(0);" class="J_switchTypeTrigger" data-type="select" data-stat-id="bf4b6022f582f76a" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-bf4b6022f582f76a', 'javascript:void0', 'pcpid', '']);">手动选择&gt;</a> 
      </div> 
     </div> 
    </div> 
    <div class="J_chooseRegionsBox chooseRegionsBox hide" data-type="select"> 
     <div class="select-address-wrapper" id="J_selectAddressWrapper"> 
      <div class="select-box clearfix" id="J_selectWrapper"> 
       <div class="select-first select-item J_select" data-init-txt="选择省份/自治区">
        选择省份/自治区
       </div> 
       <div class="select-item J_select hide" data-init-txt="选择城市/地区"></div> 
       <div class="select-item J_select hide" data-init-txt="选择区县"></div> 
       <div class="select-last select-item J_select hide" data-init-txt="选择配送区域"></div> 
      </div> 
      <div class="options-box"> 
       <ul class="options-list J_optionsWrapper clearfix"> 
        <li class="option J_option" data-value="2" data-txt="北京">北京 </li> 
        <li class="option J_option" data-value="3" data-txt="天津">天津 </li> 
        <li class="option J_option" data-value="4" data-txt="河北">河北 </li> 
        <li class="option J_option" data-value="5" data-txt="山西">山西 </li> 
        <li class="option J_option" data-value="6" data-txt="内蒙古">内蒙古 </li> 
        <li class="option J_option" data-value="7" data-txt="辽宁">辽宁 </li> 
        <li class="option J_option" data-value="8" data-txt="吉林">吉林 </li> 
        <li class="option J_option" data-value="9" data-txt="黑龙江">黑龙江 </li> 
        <li class="option J_option" data-value="10" data-txt="上海">上海 </li> 
        <li class="option J_option" data-value="11" data-txt="江苏">江苏 </li> 
        <li class="option J_option" data-value="12" data-txt="浙江">浙江 </li> 
        <li class="option J_option" data-value="13" data-txt="安徽">安徽 </li> 
        <li class="option J_option" data-value="14" data-txt="福建">福建 </li> 
        <li class="option J_option" data-value="15" data-txt="江西">江西 </li> 
        <li class="option J_option" data-value="16" data-txt="山东">山东 </li> 
        <li class="option J_option" data-value="17" data-txt="河南">河南 </li> 
        <li class="option J_option" data-value="18" data-txt="湖北">湖北 </li> 
        <li class="option J_option" data-value="19" data-txt="湖南">湖南 </li> 
        <li class="option J_option" data-value="20" data-txt="广东">广东 </li> 
        <li class="option J_option" data-value="21" data-txt="广西">广西 </li> 
        <li class="option J_option" data-value="22" data-txt="海南">海南 </li> 
        <li class="option J_option" data-value="23" data-txt="重庆">重庆 </li> 
        <li class="option J_option" data-value="24" data-txt="四川">四川 </li> 
        <li class="option J_option" data-value="25" data-txt="贵州">贵州 </li> 
        <li class="option J_option" data-value="26" data-txt="云南">云南 </li> 
        <li class="option J_option" data-value="27" data-txt="西藏">西藏 </li> 
        <li class="option J_option" data-value="28" data-txt="陕西">陕西 </li> 
        <li class="option J_option" data-value="29" data-txt="甘肃">甘肃 </li> 
        <li class="option J_option" data-value="30" data-txt="青海">青海 </li> 
        <li class="option J_option" data-value="31" data-txt="宁夏">宁夏 </li> 
        <li class="option J_option" data-value="32" data-txt="新疆">新疆 </li> 
       </ul> 
       <ul class="options-list J_optionsWrapper clearfix hide"></ul> 
       <ul class="options-list J_optionsWrapper clearfix hide"></ul> 
       <ul class="options-list J_optionsWrapper clearfix hide"></ul> 
      </div>
     </div> 
     <div class="switch-type"> 
      <a href="javascript:void(0);" class="J_switchTypeTrigger" data-type="search" data-stat-id="08c5facd3f467933" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-08c5facd3f467933', 'javascript:void0', 'pcpid', '']);">地址不好找，直接搜一搜&gt;</a> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 地址初始化模板 --> 
  <script id="J_addressTmp" type="text/x-dot-template">
    <div class="user-default-address hide" id="J_userDefaultAddress">
        <i class="iconfont iconfont-location">&#xe90b;</i>
        <div>
            <div class="address-info">
            </div>
            <span class="switch-choose-regions" id="J_switchChooseRegions">
            修改
            </span>
        </div>
        <div class="product-status" id="J_productStatus" >
            <span class="init">正在加载...</span>
            <span class="sale">有现货</span>
            <span class="over">该地区暂时缺货</span>
            <span class="no">暂时无法送达</span>
            <span class="pre">预售商品</span>
            <span class="book">预售商品</span>
            <span class="nohasAddress"></span>
            <span class="time"></span>
        </div>
    </div>
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
  <script type="text/javascript">
    //判断库存
    var getStockDataName =  function(type ,data) {
      //根据type类型获取本地存储的数据名字
      //没有范围普通库存
      var json = {
        0: 'stockData',
        1: 'stockData'
      };
      if (data.bigTagJson[type]) {
        json = data.bigTagJson[type];
      }
      return json;
    };
    var getStockData = function(type, num , data) {
      //根据type类型 获取本地存储的库存数据
      return getStockDataName(type , data)[num];
    };
    var checkStock = function (json , data) {
        // console.log(json);
        // 如果没有子孩子则直接查询是否有库存
        // 否则遍历子孩子
        if(!json.list){
           
            var goods = json.goods;
            
            if (goods === undefined) {
                return false;
            }
            
            var id = goods ? goods.goods_id : json.id;
            
            var act = goods.action;
            var stock = act.isBigtap ? getStockData(act.type, 0 , data) :
            getStockData(act.type, 1 , data);
            stock = data[stock];
            if(act.type === "bigtap" || act.type === "presales" || act.type === "booking"){
                if(stock && stock[id]){
                    if( act.isBigtap ){
                        if( stock[id].hdstatus === 2){
                            return true;
                        }
                    }else{
                        if(stock[id]){
                            return true;
                        }
                    }
                }else{
                    return false;
                }
            } else{
                if(act.type !== "common"){
                    return true;
                }else{
                    if(stock && stock[id]){
                        return true;
                    }                   
                }
            }
              
        }else{
            var _stock = false;
            var list = json.list;
            for (var i = 0 , l = list.length; i < l; i++) {
                if(list[i].hasChild === undefined){
                     _stock = checkStock(list[i] , data);
                    if(_stock){
                        break ;
                    }                   
                }else if(list[i].hasChild !== undefined && list[i].hasChild){
                     _stock = checkStock(list[i] , data);
                    if(_stock){
                        break ;
                    }                   
                }
            }
    
            if(_stock){
                return true;
            }
            
        }
        return false; 
    }
</script> 
  <!-- 一级选择模板 --> 
   
  <!-- 搭售商品模板 --> 
  <script id="J_relationTmp" type="text/x-dot-template">
<div class="pro-choose list-choose list-choose-parts" id="J_parts">
    <div class="step-title">
        搭配购买
    </div>
    <div class="list-box">
        <a class="iconfont J_extend" href="javascript:void(0);">&#xe61b;</a>
        <p class="list-tips J_listTips">搭配一起购买
            <span class="J_saleMax hide">,
                <span>
                最多省
                <span class="J_salePrice"></span>元
                </span>
            </span>
        </p>
        <div class="list-desc J_listDescBox hide">
            <p class="tips">已选择 <span class="J_listNum">0</span> 款配件 <a href="javascript:void(0);" class="J_listDelete">移除</a></p>
            <p class="desc"></p>
            <p class="price"></p>
        </div>
    </div>
 
</div>
</script> 
  <!-- 预售规则 --> 
  <div id="J_aftersaleModal" class="modal fade modal-aftersale modal-hide "> 
   <div class="modal-header"> 
    <a class="close" data-dismiss="modal" data-stat-id="4aebe53d18e850e1" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-4aebe53d18e850e1', '', 'pcpid', '']);"><i class="iconfont"></i></a> 
    <h3>小米商城经营者资质信息公示</h3> 
   </div> 
   <div class="modal-body"> 
    <div class="title"></div> 
    <div class="modal-con"></div> 
   </div> 
  </div> 
  <!-- 预售规则 --> 
  <div id="J_rulePresales" class="modal fade modal-rule modal-hide "> 
   <div class="modal-header"> 
    <a class="close" data-dismiss="modal" data-stat-id="4aebe53d18e850e1" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-4aebe53d18e850e1', '', 'pcpid', '']);"><i class="iconfont"></i></a> 
    <h3>预售规则</h3> 
   </div> 
   <div class="modal-body"> 
    <p>包含预售商品的订单将在您成功支付后，按提示时间发货。如预售订单含有其他商品，将与预售商品一起发货，但小米商城保留提前发货的权利，具体发货时间请参考预售页面提示。</p> 
    <p>预售订单退换货流程同正常订单一致。</p> 
   </div> 
  </div> 
  <!-- 领取优惠券列表弹层 --> 
  <div id="J_couponModal" class="modal fade modal-coupon modal-hide"> 
   <a class="close" data-dismiss="modal" data-stat-id="fcb0d4352b4cef8a" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-fcb0d4352b4cef8a', '', 'pcpid', '']);"><i class="iconfont"></i></a> 
   <div class="modal-body"> 
    <div class="list"> 
     <h3>领取优惠券</h3> 
     <p class="tips">优惠券数量有限，先到先得</p> 
     <div class="con"> 
      <ul></ul> 
     </div> 
     <p class="no-coupon">优惠券已经被领光了</p>
    </div> 
    <div class="result hide"> 
     <div class="con succ hide"> 
      <i class="iconfont"></i> 
      <h3>领取成功</h3> 
      <p>可以前往 个人中心 - 我的优惠券 查看详情</p> 
     </div> 
     <div class="con fail hide"> 
      <i class="iconfont"></i> 
      <h3>领取失败</h3> 
      <p>优惠券已经被领完，或者您领取的数量已经达到上限</p> 
     </div> 
     <div class="con over hide"> 
      <i class="iconfont"></i> 
      <h3>您已领取过了</h3> 
      <p>可以前往 个人中心 - 我的优惠券 查看详情</p> 
     </div> 
     <a href="javascript:void(0);" class="J_getCouponReturn" data-stat-id="7f8bb9f1fbc81e9a" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-7f8bb9f1fbc81e9a', 'javascript:void0', 'pcpid', '']);">返回 &gt;</a> 
    </div> 
   </div> 
  </div> 
  <div id="J_orderModal" class="modal fade modal-order modal-hide"> 
   <a class="close" data-dismiss="modal" data-stat-id="16a72774a056bd90" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-16a72774a056bd90', '', 'pcpid', '']);"><i class="iconfont"></i></a> 
   <div class="modal-body"> 
   </div> 
  </div> 
  <!-- 预约成功提示 --> 
  <div id="J_orderModalSucc" class="modal fade modal-order-succ modal-hide"> 
   <a class="close" data-dismiss="modal" data-stat-id="483eb6f23ca1faf4" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-483eb6f23ca1faf4', '', 'pcpid', '']);"><i class="iconfont"></i></a> 
   <div class="modal-body"> 
    <i></i> 
    <h3>预约成功</h3> 
    <a class="btn btn-primary btn-biglarge" data-dismiss="modal" data-stat-id="5b5821966a95c8c5" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-5b5821966a95c8c5', '', 'pcpid', '']);">确定</a> 
   </div> 
  </div> 
  <div id="J_orderPrize" class="modal fade modal-order-prize modal-hide"> 
   <div class="modal-body"> 
   </div> 
  </div> 
  <div id="J_orderModalGlassBuy" class="modal fade modal-order modal-glass modal-hide"> 
   <div class="modal-header"> 
    <h2 class="title">填写镜片信息 <a href="https://www.mi.com/service/ts-glass/" target="_blank" data-stat-id="d619681044ec017f" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-d619681044ec017f', '//www.mi.com/service/ts-glass/', 'pcpid', '']);">如何查看验光单<i>?</i> </a></h2> 
   </div> 
   <a class="close" data-dismiss="modal" data-stat-id="37dfcff0f5146d42" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-37dfcff0f5146d42', '', 'pcpid', '']);"><i class="iconfont"></i></a> 
   <div class="modal-body"> 
    <div class="loading J_load"> 
     <div class="loader"></div> 
    </div> 
    <div class="modal-info"> 
     <div class="base-choose"> 
      <div class="row clearfix"> 
       <div class="cell"> 
        <label class="label" for="sph">选择度数<span>(SPH)</span></label> 
        <div class="xm-custom-selector right_sphType"> 
         <div class="dropdown"> 
          <span class="arrow"></span> 
          <div class="base-select"> 
           <div class="choose-item choose-info" data-value="">
            请选择右眼度数
           </div> 
          </div> 
          <div id="right_sphType" class="select-list"> 
           <div class="choose-item active">
            请选择右眼度数
           </div> 
          </div> 
         </div> 
         <p class="msg hr-hide"></p> 
        </div> 
        <div class="xm-custom-selector left_sphType last"> 
         <div class="dropdown"> 
          <span class="arrow"></span> 
          <div class="base-select"> 
           <div class="choose-item choose-info" data-value="">
            请选择左眼度数
           </div> 
          </div> 
          <div id="left_sphType" class="select-list"> 
           <div class="choose-item active">
            请选择左眼度数
           </div> 
          </div> 
         </div> 
         <p class="msg hr-hide"></p> 
        </div> 
       </div> 
      </div> 
      <div class="row clearfix"> 
       <div class="cell"> 
        <div class="xm-custom-selector pd_type"> 
         <label class="label" for="minzu">选择瞳距<span>(PD)</span></label> 
         <div class="dropdown"> 
          <span class="arrow"></span> 
          <div class="base-select"> 
           <div class="choose-item choose-info" data-value="">
            请选择瞳距
           </div> 
          </div> 
          <div id="pd_type" class="select-list"> 
           <div class="choose-item active" value="">
            请选择瞳距
           </div> 
          </div> 
         </div> 
         <p class="msg hr-hide"></p> 
        </div> 
       </div> 
      </div> 
      <div class="row clearfix"> 
       <div class="cell"> 
        <label class="label" for="sph">选择散光度数<span>(CYL)</span></label> 
        <div class="xm-custom-selector right_cyl_Type"> 
         <div class="dropdown"> 
          <span class="arrow"></span> 
          <div class="base-select"> 
           <div class="choose-item" data-value="0">
            请选择右眼散光
           </div> 
          </div> 
          <div id="right_cyl_Type" class="select-list"> 
           <div class="choose-item active" data-value="0">
            请选择右眼散光
           </div> 
          </div> 
         </div> 
         <p class="msg hr-hide"></p> 
        </div> 
        <div class="xm-custom-selector left_cyl_Type last"> 
         <div class="dropdown"> 
          <span class="arrow"></span> 
          <div class="base-select"> 
           <div class="choose-item" data-value="0">
            请选择左眼散光
           </div> 
          </div> 
          <div id="left_cyl_Type" class="select-list"> 
           <div class="choose-item active" data-value=" 0">
            请选择左眼散光
           </div> 
          </div> 
         </div> 
         <p class="msg hr-hide"></p> 
        </div> 
       </div> 
      </div> 
      <div class="row clearfix"> 
       <div class="cell"> 
        <label class="label" for="sph">选择轴距<span>(AXIS)</span></label> 
        <div class="xm-custom-selector right_axis_Type"> 
         <div class="dropdown"> 
          <span class="arrow"></span> 
          <div class="base-select"> 
           <div class="choose-item" data-value="0">
            请选择右眼轴距
           </div> 
          </div> 
          <div id="right_axis_Type" class="select-list"> 
           <div class="choose-item active" data-value="0">
            请选择右眼轴距
           </div> 
          </div> 
         </div> 
         <p class="msg hr-hide"></p> 
        </div> 
        <div class="xm-custom-selector left_axis_Type last"> 
         <div class="dropdown"> 
          <span class="arrow"></span> 
          <div class="base-select"> 
           <div class="choose-item" data-value="0">
            请选择左眼轴距
           </div> 
          </div> 
          <div id="left_axis_Type" class="select-list"> 
           <div class="choose-item active" data-value="0">
            请选择左眼轴距
           </div> 
          </div> 
         </div> 
         <p class="msg hr-hide"></p> 
        </div> 
       </div> 
      </div> 
      <div class="tips">
       <span><i>!</i> 请仔细核对验光单左右眼度数填写顺序</span>
      </div> 
     </div> 
     <div class="other-choose"> 
      <h2>选择镜片折射率</h2> 
      <ul class="refractive_list J_refractive_list"> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <div class="modal-footer"> 
    <p class="J_modalFooterGlassValue">总计: <span></span>元</p> 
    <a class="btn btn-primary J_modalFooterGlassBtn" data-stat-id="33df12bc224203a1" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-33df12bc224203a1', '', 'pcpid', '']);">加入购物车</a> 
   </div> 
  </div> 
  <div id="J_orderCheckGlassBuy" class="modal fade modal-order modal-check modal-hide"> 
   <a class="close" data-dismiss="modal" data-stat-id="8ddc27466322ce93" onclick="_msq.push(['trackEvent', 'ae2a5d804d0902c3-8ddc27466322ce93', '', 'pcpid', '']);"><i class="iconfont"></i></a> 
   <div class="modal-body"> 
   </div> 
   <div class="modal-footer"> 
    <div class="actions"> 
     <button class="btn btn-green" id="J_GlasschooseBack">修改信息</button> 
     <button class="btn btn-primary" id="J_GlassAddCart">我已确认</button> 
    </div> 
   </div> 
  </div> 
@endsection

@section('title','商品详情')