@extends('Home.HomePublic.public')
@section('myCss')
<!-- <link rel="stylesheet" href="/homes/common/css/base.min.css" /> -->
@show

@section('container')
  <div class="home-hero-container container"> 
   <div class="home-hero"> 


    <div class="home-hero-slider"> 
     <div class="ui-wrapper" style="max-width: 100%;">
      <div class="ui-viewport" style="width: 100%; overflow: hidden; position: relative; height: 460px;">
       <div id="J_homeSlider" class="xm-slider" data-stat-title="焦点图轮播" style="width: auto; position: relative;">

      
       <!--  <div class="slide exposure loaded" data-bg-set="{'img':'//i1.mifile.cn/a4/xmad_15452976609747_CYJQj.jpg','imgHd':'//i1.mifile.cn/a4/xmad_15452976656423_goFTH.jpg'}" style="float: none; list-style: none; position: absolute; width: 1226px; z-index: 50; display: block;"> 
        <a href="https://item.mi.com/product/6222.html" data-stat-aid="AA21294" data-stat-pid="2_15_4_70" data-log_code="31pchometop_slide004001#t=normal&amp;act=other&amp;page=home&amp;bid=3030335.4&amp;adm=5810" target="_blank" data-stat-id="AA21294+2_15_4_70" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21294+2_15_4_70', 'https://item.mi.com/product/6222.html', 'pcpid', '31pchometop_slide004001#t=normal&amp;act=other&amp;page=home&amp;bid=3030335.4&amp;adm=5810']);"><img src="//i1.mifile.cn/a4/xmad_15452976609747_CYJQj.jpg" srcset="//i1.mifile.cn/a4/xmad_15452976656423_goFTH.jpg 2x" /></a> 
       </div>  -->

      @foreach($slidelist as $key=>$slide)

        <div class="slide exposure loaded" name="slideList" onmouseover="over(this,{{$key}})" onmouseout="out(this,{{$key}})" style="float: none; list-style: none; position: absolute; width: 1226px; z-index: 0; display: none;"> 
         <a href="#" data-stat-aid="AA21253" data-stat-pid="2_15_5_71" data-log_code="31pchometop_slide005001#t=normal&amp;act=other&amp;page=home&amp;bid=3030335.5&amp;adm=5785" target="_blank" data-stat-id="AA21253+2_15_5_71" onclick="#"><img src="{{$slide->url}}" srcset="//i1.mifile.cn/a4/xmad_15451388264508_DjkNb.jpg 2x" /></a> 
        </div> 
      
      @endforeach

       </div>
      </div>
      <div class="ui-controls ui-has-pager ui-has-controls-direction">
       <div class="ui-pager ui-default-pager">

      @for($i=1;$i<=5;$i++)
        <div class="ui-pager-item" >
         <a href="" name="slidePager" data-slide-index="0" class="ui-pager-link" data-stat-id="e8ddbf63cd7192ba" onclick="">{{$i}}</a>
        </div>
      @endfor
      
       </div>
       <div class="ui-controls-direction">
        <a class="ui-prev"  data-stat-id="ad34778ec64de2bb" onclick="func('-')">上一张</a>
        <a class="ui-next"  data-stat-id="012e47433fd216e2" onclick="func('+')">下一张</a>
       </div>
      </div>
     </div> 
    </div> 










    <div class="home-hero-sub row"> 
     <div class="span4"> 
      <ul class="home-channel-list clearfix"> 
       <li class="exposure top left"><a href="http://www.mi.com/compare/" data-stat-aid="AA13424" data-stat-pid="2_44_1_250" data-log_code="31pchomesix_small_icon001003#t=normal&amp;act=other&amp;page=home&amp;bid=3030363.1&amp;adm=2227" target="_blank" data-stat-id="AA13424+2_44_1_250" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13424+2_44_1_250', 'http://www.mi.com/compare/', 'pcpid', '31pchomesix_small_icon001003#t=normal&amp;act=other&amp;page=home&amp;bid=3030363.1&amp;adm=2227']);"><i class="iconfont"></i>选购手机</a></li> 
       <li class="exposure top"><a href="http://qiye.mi.com/" data-stat-aid="AA10868" data-stat-pid="2_44_2_251" data-log_code="31pchomesix_small_icon002003#t=normal&amp;act=other&amp;page=home&amp;bid=3030363.2&amp;adm=613" target="_blank" data-stat-id="AA10868+2_44_2_251" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10868+2_44_2_251', 'http://qiye.mi.com/', 'pcpid', '31pchomesix_small_icon002003#t=normal&amp;act=other&amp;page=home&amp;bid=3030363.2&amp;adm=613']);"><i class="iconfont"></i>企业团购</a></li> 
       <li class="exposure top"><a href="//order.mi.com/f" data-stat-aid="AA17703" data-stat-pid="2_44_3_252" data-log_code="31pchomesix_small_icon003003#t=normal&amp;act=other&amp;page=home&amp;bid=3030363.3&amp;adm=616" target="_blank" data-stat-id="AA17703+2_44_3_252" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17703+2_44_3_252', '//order.mi.com/f', 'pcpid', '31pchomesix_small_icon003003#t=normal&amp;act=other&amp;page=home&amp;bid=3030363.3&amp;adm=616']);"><i class="iconfont"></i>F码通道</a></li> 
       <li class="exposure left"><a href="https://www.mi.com/mimobile/" data-stat-aid="AA11244" data-stat-pid="2_44_4_253" data-log_code="31pchomesix_small_icon004003#t=normal&amp;act=other&amp;page=home&amp;bid=3030363.4&amp;adm=862" target="_blank" data-stat-id="AA11244+2_44_4_253" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11244+2_44_4_253', 'https://www.mi.com/mimobile/', 'pcpid', '31pchomesix_small_icon004003#t=normal&amp;act=other&amp;page=home&amp;bid=3030363.4&amp;adm=862']);"><i class="iconfont"></i>米粉卡</a></li> 
       <li class="exposure "><a href="//huanxin.mi.com" data-stat-aid="AA12084" data-stat-pid="2_44_5_254" data-log_code="31pchomesix_small_icon005003#t=normal&amp;act=other&amp;page=home&amp;bid=3030363.5&amp;adm=1386" target="_blank" data-stat-id="AA12084+2_44_5_254" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12084+2_44_5_254', '//huanxin.mi.com', 'pcpid', '31pchomesix_small_icon005003#t=normal&amp;act=other&amp;page=home&amp;bid=3030363.5&amp;adm=1386']);"><i class="iconfont"></i>以旧换新</a></li> 
       <li class="exposure "><a href="http://recharge.10046.mi.com/" data-stat-aid="AA10871" data-stat-pid="2_44_6_255" data-log_code="31pchomesix_small_icon006003#t=normal&amp;act=other&amp;page=home&amp;bid=3030363.6&amp;adm=617" target="_blank" data-stat-id="AA10871+2_44_6_255" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10871+2_44_6_255', 'http://recharge.10046.mi.com/', 'pcpid', '31pchomesix_small_icon006003#t=normal&amp;act=other&amp;page=home&amp;bid=3030363.6&amp;adm=617']);"><i class="iconfont"></i>话费充值</a></li> 
      </ul> 
     </div> 
     <div class="span16" id="J_homePromo" data-stat-title="焦点图下方小图"> 
      <ul class="home-promo-list clearfix"> 
       <li class="first"> <a class="item exposure" href="https://item.mi.com/product/10000117.html" data-stat-aid="AA20986" data-stat-pid="2_16_1_77" data-log_code="31pchomethree_line001002#t=normal&amp;act=other&amp;page=home&amp;bid=3030336.1&amp;adm=5596" target="_blank" data-stat-id="AA20986+2_16_1_77" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20986+2_16_1_77', 'https://item.mi.com/product/10000117.html', 'pcpid', '31pchomethree_line001002#t=normal&amp;act=other&amp;page=home&amp;bid=3030336.1&amp;adm=5596']);"><img alt="青春版 小焦点" src="//i1.mifile.cn/a4/xmad_15381015124677_QcEGp.jpg" srcset="//i1.mifile.cn/a4/xmad_15381015157577_Xqwkx.jpg 2x" /></a> </li> 
       <li> <a class="item exposure" href="https://item.mi.com/product/10000103.html" data-stat-aid="AA20873" data-stat-pid="2_16_2_78" data-log_code="31pchomethree_line002002#t=normal&amp;act=other&amp;page=home&amp;bid=3030336.2&amp;adm=5506" target="_blank" data-stat-id="AA20873+2_16_2_78" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20873+2_16_2_78', 'https://item.mi.com/product/10000103.html', 'pcpid', '31pchomethree_line002002#t=normal&amp;act=other&amp;page=home&amp;bid=3030336.2&amp;adm=5506']);"><img alt="红米6 常态" src="//i1.mifile.cn/a4/xmad_15410029988871_TdzPQ.jpg" srcset="//i1.mifile.cn/a4/xmad_15410030018854_yBESF.jpg 2x" /></a> </li> 
       <li> <a class="item exposure" href="https://item.mi.com/product/4802.html" data-stat-aid="AA21245" data-stat-pid="2_16_3_79" data-log_code="31pchomethree_line003002#t=normal&amp;act=other&amp;page=home&amp;bid=3030336.3&amp;adm=4947" target="_blank" data-stat-id="AA21245+2_16_3_79" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21245+2_16_3_79', 'https://item.mi.com/product/4802.html', 'pcpid', '31pchomethree_line003002#t=normal&amp;act=other&amp;page=home&amp;bid=3030336.3&amp;adm=4947']);"><img alt="米家空气净化器pro-立减300" src="//i1.mifile.cn/a4/xmad_15216851889979_XatQS.jpg" srcset="//i1.mifile.cn/a4/xmad_1521685167608_EJnXk.jpg 2x" /></a> </li> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <!-- 开始闪购 --> 
   <div class="xm-flashPurchase xm-carousel-container"> 
    <div class="xm-plain-box"> 
     <div class="box-hd"> 
      <h2 class="title">小米闪购</h2> 
      <div class="more">
       <div class="xm-controls xm-controls-line-small xm-carousel-controls">
        <a class="control control-prev iconfont control-disabled" href="javascript: void(0);" data-stat-id="70ffeb73314cfa81" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-70ffeb73314cfa81', 'javascript:void0', 'pcpid', '']);"></a>
        <a class="control control-next iconfont" href="javascript: void(0);" data-stat-id="05250db888a976f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-05250db888a976f0', 'javascript:void0', 'pcpid', '']);"></a>
       </div>
      </div> 
     </div> 
     <div class="box-bd"> 
      <div class="flash-loading loading" id="J_flashLoading" style="display: none;"> 
       <div class="loader"></div> 
      </div> 
      <div class="xm-carousel-list goods-list rainbow-list clearfix J_flashPurchaseList"> 
       <ul class="xm-flashPurchase-countdown"> 
        <li class="rainbow-item-4 J_flashPurchaseInfo"> 
         <div class="time-title J_falshRound">
          18:00 场
         </div> <img src="//i1.mifile.cn/f/i/2018/mihome/flashpurchase.png" /> 
         <div class="sub J_falshDesc">
          距离结束还有
         </div> 
         <div class="countdown clearfix J_falshTime"> 
          <div class="box">
           00
          </div>
          <div class="dosh">
           :
          </div>
          <div class="box">
           00
          </div>
          <div class="dosh">
           :
          </div>
          <div class="box">
           00
          </div>
         </div> </li> 
       </ul> 
       <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
        <ul class="xm-flashPurchase-list xm-carousel-col-5-list J_purchase_temp J_carouselList" style="width: 2976px; margin-left: 0px; transition: margin-left 0.5s ease 0s;"> 
         <li class="item rainbow-item-1"> <a href="/seckill/" target="_blank" data-log_code="31activity_homeseckill#goodsid=2182600005&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494" data-stat-id="2c008be0a844b198" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-2c008be0a844b198', '/seckill/', 'pcpid', '31activity_homeseckill#goodsid=2182600005&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494']);"> 
           <div class="bg"></div> </a> 
          <div class="content"> 
           <a class="thumb exposure" data-stat-id="e99bb480dd25e1f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e99bb480dd25e1f0', '', 'pcpid', '']);"> <img src="https://i8.mifile.cn/a1/pms_1529921713.88899257.jpg" alt="" /> </a> 
           <h3 class="title"><a data-stat-id="9fbc2583f0a6e4ff" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-9fbc2583f0a6e4ff', '', 'pcpid', '']);">小米手环3腕带 热力橙</a></h3> 
           <p class="desc">顺滑柔软 触感舒适</p> 
           <p class="price"> <span>1</span>&nbsp;<span>元</span>&nbsp; 
            <del>
             19.9元
            </del> </p> 
           <div class="flag flag-saleoff">
             1元秒杀
           </div> 
          </div> </li> 
         <li class="item rainbow-item-2"> <a href="/seckill/" target="_blank" data-log_code="31activity_homeseckill#goodsid=2173100001&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494" data-stat-id="a7817074fc28f1f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-a7817074fc28f1f0', '/seckill/', 'pcpid', '31activity_homeseckill#goodsid=2173100001&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494']);"> 
           <div class="bg"></div> </a> 
          <div class="content"> 
           <a class="thumb exposure" data-stat-id="e99bb480dd25e1f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e99bb480dd25e1f0', '', 'pcpid', '']);"> <img src="https://i8.mifile.cn/v1/a1/761af25d-aebe-7568-dc6d-08e0690d69d2.png" alt="" /> </a> 
           <h3 class="title"><a data-stat-id="8f35332d142c839f" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-8f35332d142c839f', '', 'pcpid', '']);">米家电水壶 白色</a></h3> 
           <p class="desc">一杯水，是一家人的安心</p> 
           <p class="price"> <span>1</span>&nbsp;<span>元</span>&nbsp; 
            <del>
             99元
            </del> </p> 
           <div class="flag flag-saleoff">
             1元秒杀
           </div> 
          </div> </li> 
         <li class="item rainbow-item-3"> <a href="/seckill/" target="_blank" data-log_code="31activity_homeseckill#goodsid=2182500046&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494" data-stat-id="637f0e0408ce1473" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-637f0e0408ce1473', '/seckill/', 'pcpid', '31activity_homeseckill#goodsid=2182500046&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494']);"> 
           <div class="bg"></div> </a> 
          <div class="content"> 
           <a class="thumb exposure" data-stat-id="e99bb480dd25e1f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e99bb480dd25e1f0', '', 'pcpid', '']);"> <img src="https://i8.mifile.cn/a1/pms_1531132647.86254322.jpg" alt="" /> </a> 
           <h3 class="title"><a data-stat-id="5025e45407519753" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-5025e45407519753', '', 'pcpid', '']);">小米米家智能摄像机 白色</a></h3> 
           <p class="desc">智能侦测 安全守护</p> 
           <p class="price"> <span>1</span>&nbsp;<span>元</span>&nbsp; 
            <del>
             129元
            </del> </p> 
           <div class="flag flag-saleoff">
             1元秒杀
           </div> 
          </div> </li> 
         <li class="item rainbow-item-4"> <a href="/seckill/" target="_blank" data-log_code="31activity_homeseckill#goodsid=2165100002&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494" data-stat-id="e49ab2e88948f731" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e49ab2e88948f731', '/seckill/', 'pcpid', '31activity_homeseckill#goodsid=2165100002&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494']);"> 
           <div class="bg"></div> </a> 
          <div class="content"> 
           <a class="thumb exposure" data-stat-id="e99bb480dd25e1f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e99bb480dd25e1f0', '', 'pcpid', '']);"> <img src="https://i8.mifile.cn/v1/a1/0e7068d7-30f5-e6b6-4d7a-c2941c244c83.jpg" alt="" /> </a> 
           <h3 class="title"><a data-stat-id="eb76a88cc3e0568f" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-eb76a88cc3e0568f', '', 'pcpid', '']);">小米活塞耳机 清新版 银色</a></h3> 
           <p class="desc">新鲜绽放</p> 
           <p class="price"> <span>1</span>&nbsp;<span>元</span>&nbsp; 
            <del>
             29元
            </del> </p> 
           <div class="flag flag-saleoff">
             1元秒杀
           </div> 
          </div> </li> 
         <li class="item rainbow-item-5"> <a href="/seckill/" target="_blank" data-log_code="31activity_homeseckill#goodsid=2181000016&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494" data-stat-id="e47e45f513829d02" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e47e45f513829d02', '/seckill/', 'pcpid', '31activity_homeseckill#goodsid=2181000016&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494']);"> 
           <div class="bg"></div> </a> 
          <div class="content"> 
           <a class="thumb exposure" data-stat-id="e99bb480dd25e1f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e99bb480dd25e1f0', '', 'pcpid', '']);"> <img src="https://i8.mifile.cn/a1/pms_1545014648.4686186.jpg" alt="" /> </a> 
           <h3 class="title"><a data-stat-id="ef9dd8b07ed88e25" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-ef9dd8b07ed88e25', '', 'pcpid', '']);">红米Note 5 4GB+ 64GB 金色 </a></h3> 
           <p class="desc">1.4μm大像素 AI 双摄</p> 
           <p class="price"> <span>1029</span>&nbsp;<span>元</span>&nbsp; 
            <del>
             1399元
            </del> </p> 
          </div> </li> 
         <li class="item rainbow-item-6"> <a href="/seckill/" target="_blank" data-log_code="31activity_homeseckill#goodsid=2181000017&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494" data-stat-id="ad5dbd7e6d741fc2" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-ad5dbd7e6d741fc2', '/seckill/', 'pcpid', '31activity_homeseckill#goodsid=2181000017&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494']);"> 
           <div class="bg"></div> </a> 
          <div class="content"> 
           <a class="thumb exposure" data-stat-id="e99bb480dd25e1f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e99bb480dd25e1f0', '', 'pcpid', '']);"> <img src="https://i8.mifile.cn/a1/pms_1545014714.37643097.jpg" alt="" /> </a> 
           <h3 class="title"><a data-stat-id="2e13886d7de596cc" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-2e13886d7de596cc', '', 'pcpid', '']);">红米Note 5 4GB+ 64GB 魔力蓝 </a></h3> 
           <p class="desc">1.4μm大像素 AI 双摄</p> 
           <p class="price"> <span>1029</span>&nbsp;<span>元</span>&nbsp; 
            <del>
             1399元
            </del> </p> 
          </div> </li> 
         <li class="item rainbow-item-7"> <a href="/seckill/" target="_blank" data-log_code="31activity_homeseckill#goodsid=2181000018&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494" data-stat-id="01931213eb9e1c64" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-01931213eb9e1c64', '/seckill/', 'pcpid', '31activity_homeseckill#goodsid=2181000018&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494']);"> 
           <div class="bg"></div> </a> 
          <div class="content"> 
           <a class="thumb exposure" data-stat-id="e99bb480dd25e1f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e99bb480dd25e1f0', '', 'pcpid', '']);"> <img src="https://i8.mifile.cn/a1/pms_1545014688.36986299.jpg" alt="" /> </a> 
           <h3 class="title"><a data-stat-id="c56e952944d00b65" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-c56e952944d00b65', '', 'pcpid', '']);">红米Note 5 4GB+ 64GB 玫瑰金 </a></h3> 
           <p class="desc">1.4μm大像素 AI 双摄</p> 
           <p class="price"> <span>1029</span>&nbsp;<span>元</span>&nbsp; 
            <del>
             1399元
            </del> </p> 
          </div> </li> 
         <li class="item rainbow-item-8"> <a href="/seckill/" target="_blank" data-log_code="31activity_homeseckill#goodsid=2164800016&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494" data-stat-id="7cd746dc7fe4c5af" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-7cd746dc7fe4c5af', '/seckill/', 'pcpid', '31activity_homeseckill#goodsid=2164800016&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494']);"> 
           <div class="bg"></div> </a> 
          <div class="content"> 
           <a class="thumb exposure" data-stat-id="e99bb480dd25e1f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e99bb480dd25e1f0', '', 'pcpid', '']);"> <img src="https://i8.mifile.cn/v1/a1/300ed118-dc69-902b-eb19-6ec2fcfe95be.jpg" alt="" /> </a> 
           <h3 class="title"><a data-stat-id="db0d600ca525b29e" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-db0d600ca525b29e', '', 'pcpid', '']);">小米手环2专用充电器</a></h3> 
           <p class="desc">轻松携带，充电无忧</p> 
           <p class="price"> <span>4</span>&nbsp;<span>元</span>&nbsp; 
            <del>
             9.9元
            </del> </p> 
          </div> </li> 
         <li class="item rainbow-item-9"> <a href="/seckill/" target="_blank" data-log_code="31activity_homeseckill#goodsid=2182400071&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494" data-stat-id="3749c0dc56023d41" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-3749c0dc56023d41', '/seckill/', 'pcpid', '31activity_homeseckill#goodsid=2182400071&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494']);"> 
           <div class="bg"></div> </a> 
          <div class="content"> 
           <a class="thumb exposure" data-stat-id="e99bb480dd25e1f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e99bb480dd25e1f0', '', 'pcpid', '']);"> <img src="https://i8.mifile.cn/a1/pms_1529131568.29222117.jpg" alt="" /> </a> 
           <h3 class="title"><a data-stat-id="cef8a41e6f1b0a13" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-cef8a41e6f1b0a13', '', 'pcpid', '']);">小米路由器4Q 蓝色</a></h3> 
           <p class="desc">一键快连智能设备</p> 
           <p class="price"> <span>79</span>&nbsp;<span>元</span>&nbsp; 
            <del>
             99元
            </del> </p> 
          </div> </li> 
         <li class="item rainbow-item-10"> <a href="/seckill/" target="_blank" data-log_code="31activity_homeseckill#goodsid=2171300015&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494" data-stat-id="7620101c8e7ec9ec" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-7620101c8e7ec9ec', '/seckill/', 'pcpid', '31activity_homeseckill#goodsid=2171300015&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494']);"> 
           <div class="bg"></div> </a> 
          <div class="content"> 
           <a class="thumb exposure" data-stat-id="e99bb480dd25e1f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e99bb480dd25e1f0', '', 'pcpid', '']);"> <img src="https://i8.mifile.cn/v1/a1/7fe00029-d6c0-a048-5deb-8df1fc86a1b4.jpg" alt="" /> </a> 
           <h3 class="title"><a data-stat-id="81aaf7b496067c14" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-81aaf7b496067c14', '', 'pcpid', '']);">电力猫套装</a></h3> 
           <p class="desc">有插座的地方，就有WiFi</p> 
           <p class="price"> <span>185</span>&nbsp;<span>元</span>&nbsp; 
            <del>
             249元
            </del> </p> 
          </div> </li> 
         <li class="item rainbow-item-11"> <a href="/seckill/" target="_blank" data-log_code="31activity_homeseckill#goodsid=2183700002&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494" data-stat-id="282a1ebcbaaf7199" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-282a1ebcbaaf7199', '/seckill/', 'pcpid', '31activity_homeseckill#goodsid=2183700002&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494']);"> 
           <div class="bg"></div> </a> 
          <div class="content"> 
           <a class="thumb exposure" data-stat-id="e99bb480dd25e1f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e99bb480dd25e1f0', '', 'pcpid', '']);"> <img src="https://i8.mifile.cn/a1/pms_1536571975.28359503.jpg" alt="" /> </a> 
           <h3 class="title"><a data-stat-id="8cd707daec188491" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-8cd707daec188491', '', 'pcpid', '']);">90分轻薄无缝一体织鹅绒羽绒服 黑色 </a></h3> 
           <p class="desc">轻薄无缝一体织，仅限黑色 M</p> 
           <p class="price"> <span>255</span>&nbsp;<span>元</span>&nbsp; 
            <del>
             299元
            </del> </p> 
          </div> </li> 
         <li class="item rainbow-item-12"> <a href="/seckill/" target="_blank" data-log_code="31activity_homeseckill#goodsid=2183700024&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494" data-stat-id="51e40e94d2eca76a" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-51e40e94d2eca76a', '/seckill/', 'pcpid', '31activity_homeseckill#goodsid=2183700024&amp;start_time=1545472800&amp;end_time=1545479820&amp;bid=3184494']);"> 
           <div class="bg"></div> </a> 
          <div class="content"> 
           <a class="thumb exposure" data-stat-id="e99bb480dd25e1f0" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e99bb480dd25e1f0', '', 'pcpid', '']);"> <img src="https://i8.mifile.cn/a1/pms_1536571972.45916240.jpg" alt="" /> </a> 
           <h3 class="title"><a data-stat-id="63970bf8b4907365" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-63970bf8b4907365', '', 'pcpid', '']);">90分轻薄无缝一体织鹅绒羽绒服 蓝色</a></h3> 
           <p class="desc">轻薄无缝一体织，仅限蓝色 XL</p> 
           <p class="price"> <span>255</span>&nbsp;<span>元</span>&nbsp; 
            <del>
             299元
            </del> </p> 
          </div> </li> 
        </ul>
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
   <!-- 结束闪购 --> 

   <div class="J_itemBox J_homeBanner home-banner-box home-banner-box-hero is-visible" data-index="1">
    <a href="https://www.mi.com/a/h/7988.html?client_id=180100041086&amp;masid=17409.0499" target="_blank" data-log_code="31pchomebanner_1001011#t=normal&amp;act=other&amp;page=home&amp;bid=3186790.1&amp;adm=5796" data-stat-id="c932a3c7d4cba69d" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-c932a3c7d4cba69d', 'https://www.mi.com/a/h/7988.htmlclient_id=180100041086&amp;masid=17409.0499', 'pcpid', '31pchomebanner_1001011#t=normal&amp;act=other&amp;page=home&amp;bid=3186790.1&amp;adm=5796']);"> 
    <img class="" alt="小米Play 1224" width="1226" src="111.jpg" />
    </a>
   </div> 
  </div>







  <div class="page-main home-main"> 
   <div class="container"> 
    <div id="phone" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox no-comment-total is-visible loaded" data-from-stat="false"> 
     <div class="box-hd"> 
      <h2 class="title">手机</h2> 
      <div class="more J_brickNav">
       <a class="more-link" href="https://www.mi.com/p/1915.html" target="_blank" data-stat-id="34ca2aa6a92adae8" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-34ca2aa6a92adae8', 'https://www.mi.com/p/1915.html', 'pcpid', '']);">查看全部<i class="iconfont"></i></a>
      </div> 
     </div> 
     <div class="box-bd J_brickBd">
      <div class="row">
       <div class="span4 span-first">
        <ul class="brick-promo-list clearfix"> 
         <li class="brick-item brick-item-l"> <a href="http://www.mi.com/mix3/" class="exposure" data-stat-aid="AA21247" data-stat-pid="2_57_1_331" data-log_code="31pchomephone_left001018#t=normal&amp;act=other&amp;page=home&amp;bid=3185160.1&amp;adm=5778" target="_blank" data-stat-id="AA21247+2_57_1_331" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21247+2_57_1_331', 'http://www.mi.com/mix3/', 'pcpid', '31pchomephone_left001018#t=normal&amp;act=other&amp;page=home&amp;bid=3185160.1&amp;adm=5778']);"><img src="//i1.mifile.cn/a4/xmad_1544580545953_UvEXK.jpg" alt="" /></a> </li>
        </ul>
       </div>
       <div class="span16">
        <ul class="brick-list clearfix"> 
       @foreach($showPhone as $phone)
         <li class="brick-item brick-item-m brick-item-m-2" data-gid="2183600007"> 
              <div class="figure figure-img"> 
               <a class="exposure" href="/goodsdetail/{{$phone->goods_id}}" data-stat-aid="AA20957" data-stat-pid="2_58_1_333" data-log_code="31pchomephone_right_0001019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.1&amp;pid=2183600007&amp;adm=5580" target="_blank" data-stat-id="AA20957+2_58_1_333" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20957+2_58_1_333', 'https://item.mi.com/product/10000117.html', 'pcpid', '31pchomephone_right_0001019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.1&amp;pid=2183600007&amp;adm=5580']);"> <img src="{{$phone->goods_thums}}" width="160" height="160" alt="{{$phone->title}}" /> </a> 
              </div> <h3 class="title"><a href="/goodsdetail/{{$phone->goods_id}}" data-stat-aid="AA20957" data-stat-pid="2_58_1_333" data-log_code="31pchomephone_right_0001019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.1&amp;pid=2183600007&amp;adm=5580" target="_blank" data-stat-id="AA20957+2_58_1_333" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20957+2_58_1_333', 'https://item.mi.com/product/10000117.html', 'pcpid', '31pchomephone_right_0001019#t=normal&amp;act=other&amp;page=home&amp;bid=3185161.1&amp;pid=2183600007&amp;adm=5580']);">{{$phone->title}}</a></h3> <p class="desc">{{$phone->goods_descr}}</p> <p class="price"> <span class="num">{{round($phone->shop_price)}}</span>元 
                <del>
                    <span class="num">{{round($phone->market_price)}}</span>元
                </del>
              </p> 
              <div class="flag flag-new">
               新品
              </div> 
          </li> 
        @endforeach
         
        </ul>
       </div>
      </div>
     </div> 
    </div> 
    <div class="J_itemBox J_homeBanner home-banner-box home-banner-box-brick is-visible" data-index="2">
     <a href="https://item.mi.com/product/9144.html" target="_blank" data-log_code="31pchomebanner_2001012#t=normal&amp;act=other&amp;page=home&amp;bid=3186791.1&amp;adm=5803" data-stat-id="ec1b0db1a148de86" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-ec1b0db1a148de86', 'https://item.mi.com/product/9144.html', 'pcpid', '31pchomebanner_2001012#t=normal&amp;act=other&amp;page=home&amp;bid=3186791.1&amp;adm=5803']);"> <img class="" alt="空调一级能效预约" width="1226" src="//i1.mifile.cn/a4/xmad_15452699406995_cRLfW.jpg" /></a>
    </div> 
    <div id="homeelec" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox no-comment-total is-visible loaded" data-from-stat="false"> 
     <div class="box-hd"> 
      <h2 class="title">家电</h2> 
      <div class="more J_brickNav">
       <ul class="tab-list J_brickTabSwitch" data-tab-target="homeelec-content">
        <li class="tab-active" cid=1>热门</li>
        <li cid=115>电视影音</li>
        <li cid=121>电脑</li>
        <li cid=145>家居</li>
       </ul>
      </div> 
     </div> 
     <div class="box-bd J_brickBd">
      <div class="row">
       <div class="span4 span-first">
        <ul class="brick-promo-list clearfix">
        
         <li class="brick-item brick-item-m"> <a href="https://item.mi.com/product/3377.html" class="exposure" data-stat-aid="AA21269" data-stat-pid="2_52_1_298" data-log_code="31pchomehomeelec_left001020#t=normal&amp;act=other&amp;page=home&amp;bid=3030368.1&amp;adm=5536" target="_blank" data-stat-id="AA21269+2_52_1_298" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21269+2_52_1_298', 'https://item.mi.com/product/3377.html', 'pcpid', '31pchomehomeelec_left001020#t=normal&amp;act=other&amp;page=home&amp;bid=3030368.1&amp;adm=5536']);"><img src="//i1.mifile.cn/a4/xmad_15453810333749_hDsXv.jpg" alt="" /></a> </li> 
         <li class="brick-item brick-item-m"> <a href="https://item.mi.com/product/4348.html" class="exposure" data-stat-aid="AA21271" data-stat-pid="2_52_2_341" data-log_code="31pchomehomeelec_left002020#t=normal&amp;act=other&amp;page=home&amp;bid=3030368.2&amp;adm=5651" target="_blank" data-stat-id="AA21271+2_52_2_341" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21271+2_52_2_341', 'https://item.mi.com/product/4348.html', 'pcpid', '31pchomehomeelec_left002020#t=normal&amp;act=other&amp;page=home&amp;bid=3030368.2&amp;adm=5651']);"><img src="//i1.mifile.cn/a4/xmad_15407948090121_sNfyZ.jpg" alt="" /></a> 
         </li>
     
        </ul>
       </div>
       <div class="span16">
        <div id="homeelec-content" class="tab-container">
         <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive"> 
    @foreach($showPhone as $key => $phone) 
        @if($key<7)
          <li class="brick-item brick-item-m" data-gid="1185000014"> 
               <div class="figure figure-img"> 
                <a class="exposure" href="/goodsdetail/{{$phone->goods_id}}" data-stat-aid="AA21293" data-stat-pid="2_53_1_299" target="_blank" data-log_code="31pchomehomeelec_right_0001021#t=normal&amp;act=other&amp;page=home&amp;bid=3030369.1&amp;pid=1185000014&amp;adm=5808" data-stat-id="AA21293+2_53_1_299" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21293+2_53_1_299', '//item.mi.com/1185000014.html', 'pcpid', '31pchomehomeelec_right_0001021#t=normal&amp;act=other&amp;page=home&amp;bid=3030369.1&amp;pid=1185000014&amp;adm=5808']);"><img src="{{$phone->goods_thums}}" width="150" height="150" alt="{{$phone->title}}" /></a> 
               </div> <h3 class="title"> <a href="/goodsdetail/{{$phone->goods_id}}" data-stat-aid="AA21293" data-stat-pid="2_53_1_299" data-log_code="31pchomehomeelec_right_0001021#t=normal&amp;act=other&amp;page=home&amp;bid=3030369.1&amp;pid=1185000014&amp;adm=5808" target="_blank" data-stat-id="AA21293+2_53_1_299" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21293+2_53_1_299', '//item.mi.com/1185000014.html', 'pcpid', '31pchomehomeelec_right_0001021#t=normal&amp;act=other&amp;page=home&amp;bid=3030369.1&amp;pid=1185000014&amp;adm=5808']);">{{$phone->title}}</a></h3> <p class="desc">{{$phone->goods_descr}}</p> <p class="price"> <span class="num">{{round($phone->shop_price)}}</span>元 
                <del>
                 <span class="num">{{round($phone->market_price)}}</span>元
                </del> </p> <p class="rank"></p> 
               <div class="flag flag-new">
                新品
               </div> 
           </li> 
        @elseif($key=7)
          
          <li class="brick-item brick-item-s" data-gid="2160800022"> 
           <div class="figure figure-img"> 
            <a href="/goodsdetail/{{$phone->goods_id}}" class="exposure" data-stat-aid="AA17492" data-stat-pid="2_53_8_306" data-log_code="31pchomehomeelec_right_0008021#t=normal&amp;act=other&amp;page=home&amp;bid=3030369.8&amp;pid=2160800022&amp;adm=3941" target="_blank" data-stat-id="AA17492+2_53_8_306" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17492+2_53_8_306', '/goodsdetail/{{$phone->goods_id}}', 'pcpid', '31pchomehomeelec_right_0008021#t=normal&amp;act=other&amp;page=home&amp;bid=3030369.8&amp;pid=2160800022&amp;adm=3941']);"> <img src="{{$phone->goods_thums}}" width="80" height="80" alt="{{$phone->title}}" /> </a> 
           </div> <h3 class="title"><a href="/goodsdetail/{{$phone->goods_id}}" class="exposure" data-stat-aid="AA17492" data-stat-pid="2_53_8_306" data-log_code="31pchomehomeelec_right_0008021#t=normal&amp;act=other&amp;page=home&amp;bid=3030369.8&amp;pid=2160800022&amp;adm=3941" target="_blank" data-stat-id="AA17492+2_53_8_306" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17492+2_53_8_306', '/goodsdetail/{{$phone->goods_id}}', 'pcpid', '31pchomehomeelec_right_0008021#t=normal&amp;act=other&amp;page=home&amp;bid=3030369.8&amp;pid=2160800022&amp;adm=3941']);">{{$phone->title}}</a></h3> <p class="price"><span class="num">{{$phone->shop_price}}</span>元</p> </li> 
        @endif
    @endforeach
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="http://www.mi.com/a/h/7839.html" target="_blank" data-stat-id="67b9b8405b41a10e" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-67b9b8405b41a10e', 'http://www.mi.com/a/h/7839.html', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="http://www.mi.com/a/h/7839.html" target="_blank" data-stat-id="046b29875b0ab548" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-046b29875b0ab548', 'http://www.mi.com/a/h/7839.html', 'pcpid', '']);">浏览更多<small>热门</small></a></li>
         </ul>

        </div>
       </div>
      </div>
     </div> 
    </div> 
    <div class="J_itemBox J_homeBanner home-banner-box home-banner-box-brick is-visible" data-index="3">
     <a href="http://www.mi.com/a/h/7839.html" target="_blank" data-log_code="31pchomebanner_3001013#t=normal&amp;act=other&amp;page=home&amp;bid=3186792.1&amp;adm=5791" data-stat-id="8a9b0b2bed4e169a" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-8a9b0b2bed4e169a', 'http://www.mi.com/a/h/7839.html', 'pcpid', '31pchomebanner_3001013#t=normal&amp;act=other&amp;page=home&amp;bid=3186792.1&amp;adm=5791']);"> <img class="" alt="12.14电视特惠" width="1226" src="//i1.mifile.cn/a4/xmad_1544696497711_QqUIw.jpg" /></a>
    </div> 
    <div id="smart" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox no-comment-total is-visible loaded" data-from-stat="false"> 
     <div class="box-hd"> 
      <h2 class="title">智能</h2> 
      <div class="more J_brickNav">
       <ul class="tab-list J_brickTabSwitch" data-tab-target="smart-content">
        <li class="tab-active">热门</li>
        <li>出行</li>
        <li>健康</li>
        <li>酷玩</li>
        <li>路由器</li>
       </ul>
      </div> 
     </div> 
     <div class="box-bd J_brickBd">
      <div class="row">
       <div class="span4 span-first">
        <ul class="brick-promo-list clearfix"> 
         <li class="brick-item brick-item-m"> <a href="https://item.mi.com/product/8026.html" class="exposure" data-stat-aid="AA21273" data-stat-pid="2_18_1_90" data-log_code="31pchomesmart_left001025#t=normal&amp;act=other&amp;page=home&amp;bid=3030338.1&amp;adm=5743" target="_blank" data-stat-id="AA21273+2_18_1_90" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21273+2_18_1_90', 'https://item.mi.com/product/8026.html', 'pcpid', '31pchomesmart_left001025#t=normal&amp;act=other&amp;page=home&amp;bid=3030338.1&amp;adm=5743']);"><img src="//i1.mifile.cn/a4/xmad_15435448534832_SAPDq.jpg" alt="" /></a> </li> 
         <li class="brick-item brick-item-m"> <a href="https://item.mi.com/product/2774.html" class="exposure" data-stat-aid="AA21276" data-stat-pid="2_18_2_91" data-log_code="31pchomesmart_left002025#t=normal&amp;act=other&amp;page=home&amp;bid=3030338.2&amp;pid=2154300001&amp;adm=3492" target="_blank" data-stat-id="AA21276+2_18_2_91" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21276+2_18_2_91', 'https://item.mi.com/product/2774.html', 'pcpid', '31pchomesmart_left002025#t=normal&amp;act=other&amp;page=home&amp;bid=3030338.2&amp;pid=2154300001&amp;adm=3492']);"><img src="//i1.mifile.cn/a4/xmad_14950995035103_fhWtH.jpg" alt="" /></a> </li>
        </ul>
       </div>
       <div class="span16">
        <div id="smart-content" class="tab-container">
         <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive"> 
          <li class="brick-item brick-item-m" data-gid="2162500023"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/desklamp2/" data-stat-aid="AA20198" data-stat-pid="2_19_1_92" target="_blank" data-log_code="31pchomesmart_right_0001026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.1&amp;pid=2162500023&amp;adm=2450" data-stat-id="AA20198+2_19_1_92" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20198+2_19_1_92', 'http://www.mi.com/desklamp2/', 'pcpid', '31pchomesmart_right_0001026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.1&amp;pid=2162500023&amp;adm=2450']);"><img src="//i1.mifile.cn/a4/cf6660a3-d424-4248-889f-0eed1e99a342" width="150" height="150" alt="米家飞利浦智睿台灯二代" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/desklamp2/" data-stat-aid="AA20198" data-stat-pid="2_19_1_92" data-log_code="31pchomesmart_right_0001026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.1&amp;pid=2162500023&amp;adm=2450" target="_blank" data-stat-id="AA20198+2_19_1_92" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20198+2_19_1_92', 'http://www.mi.com/desklamp2/', 'pcpid', '31pchomesmart_right_0001026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.1&amp;pid=2162500023&amp;adm=2450']);">米家飞利浦智睿台灯二代</a></h3> <p class="desc">感知环境光，主动优化场景照明</p> <p class="price"> <span class="num">189</span>元 
            <del>
             <span class="num">199</span>元
            </del> </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/desklamp2/" data-stat-aid="AA20198" data-stat-pid="2_19_1_92" data-log_code="31pchomesmart_right_0001026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.1&amp;pid=2162500023&amp;adm=2450" target="_blank" data-stat-id="AA20198+2_19_1_92" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20198+2_19_1_92', 'http://www.mi.com/desklamp2/', 'pcpid', '31pchomesmart_right_0001026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.1&amp;pid=2162500023&amp;adm=2450']);"> <span class="review">简洁～不失高贵～ 大方～不失档次～ 小米的智能～飞利...</span> <span class="author"> 来自于 ♎️一念之间 的评价 <span class="date" data-date="1514387119"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="8134"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://item.mi.com/product/8134.html" data-stat-aid="AA20703" data-stat-pid="2_19_2_93" target="_blank" data-log_code="31pchomesmart_right_0002026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.2&amp;pid=8134&amp;adm=5418" data-stat-id="AA20703+2_19_2_93" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20703+2_19_2_93', 'https://item.mi.com/product/8134.html', 'pcpid', '31pchomesmart_right_0002026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.2&amp;pid=8134&amp;adm=5418']);"><img src="//i1.mifile.cn/a1/pms_1527754949.17141338!220x220.jpg" width="150" height="150" alt="小米手环3" /></a> 
           </div> <h3 class="title"> <a href="https://item.mi.com/product/8134.html" data-stat-aid="AA20703" data-stat-pid="2_19_2_93" data-log_code="31pchomesmart_right_0002026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.2&amp;pid=8134&amp;adm=5418" target="_blank" data-stat-id="AA20703+2_19_2_93" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20703+2_19_2_93', 'https://item.mi.com/product/8134.html', 'pcpid', '31pchomesmart_right_0002026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.2&amp;pid=8134&amp;adm=5418']);">小米手环3</a></h3> <p class="desc"></p> <p class="price"> <span class="num">169</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="https://item.mi.com/product/8134.html" data-stat-aid="AA20703" data-stat-pid="2_19_2_93" data-log_code="31pchomesmart_right_0002026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.2&amp;pid=8134&amp;adm=5418" target="_blank" data-stat-id="AA20703+2_19_2_93" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20703+2_19_2_93', 'https://item.mi.com/product/8134.html', 'pcpid', '31pchomesmart_right_0002026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.2&amp;pid=8134&amp;adm=5418']);"> <span class="review">话不多说，看图。ps.快递也太快了吧！膜拜</span> <span class="author"> 来自于 178572663 的评价 <span class="date" data-date="1529575263"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2151100003"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/scale/" data-stat-aid="AA19639" data-stat-pid="2_19_3_94" target="_blank" data-log_code="31pchomesmart_right_0003026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.3&amp;pid=2151100003&amp;adm=4810" data-stat-id="AA19639+2_19_3_94" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19639+2_19_3_94', 'https://www.mi.com/scale/', 'pcpid', '31pchomesmart_right_0003026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.3&amp;pid=2151100003&amp;adm=4810']);"><img src="//i1.mifile.cn/a1/T1sWd_B7VT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米体重秤" /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/scale/" data-stat-aid="AA19639" data-stat-pid="2_19_3_94" data-log_code="31pchomesmart_right_0003026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.3&amp;pid=2151100003&amp;adm=4810" target="_blank" data-stat-id="AA19639+2_19_3_94" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19639+2_19_3_94', 'https://www.mi.com/scale/', 'pcpid', '31pchomesmart_right_0003026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.3&amp;pid=2151100003&amp;adm=4810']);">小米体重秤</a></h3> <p class="desc">高精度压力传感器 / 手机管理全家健康</p> <p class="price"> <span class="num">99</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/scale/" data-stat-aid="AA19639" data-stat-pid="2_19_3_94" data-log_code="31pchomesmart_right_0003026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.3&amp;pid=2151100003&amp;adm=4810" target="_blank" data-stat-id="AA19639+2_19_3_94" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19639+2_19_3_94', 'https://www.mi.com/scale/', 'pcpid', '31pchomesmart_right_0003026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.3&amp;pid=2151100003&amp;adm=4810']);"> <span class="review">真好我500kg都能用</span> <span class="author"> 来自于 的评价 <span class="date" data-date="1512987469"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2171300014"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/dianfanbao2-4l/" data-stat-aid="AA19615" data-stat-pid="2_19_4_95" target="_blank" data-log_code="31pchomesmart_right_0004026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.4&amp;pid=2171300014&amp;adm=4818" data-stat-id="AA19615+2_19_4_95" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19615+2_19_4_95', 'http://www.mi.com/dianfanbao2-4l/', 'pcpid', '31pchomesmart_right_0004026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.4&amp;pid=2171300014&amp;adm=4818']);"><img src="//i1.mifile.cn/a1/pms_1490770630.65576964!220x220.png" width="150" height="150" alt="米家IH电饭煲 4L" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/dianfanbao2-4l/" data-stat-aid="AA19615" data-stat-pid="2_19_4_95" data-log_code="31pchomesmart_right_0004026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.4&amp;pid=2171300014&amp;adm=4818" target="_blank" data-stat-id="AA19615+2_19_4_95" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19615+2_19_4_95', 'http://www.mi.com/dianfanbao2-4l/', 'pcpid', '31pchomesmart_right_0004026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.4&amp;pid=2171300014&amp;adm=4818']);">米家IH电饭煲 4L</a></h3> <p class="desc">IH 电磁环绕加热 </p> <p class="price"> <span class="num">599</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/dianfanbao2-4l/" data-stat-aid="AA19615" data-stat-pid="2_19_4_95" data-log_code="31pchomesmart_right_0004026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.4&amp;pid=2171300014&amp;adm=4818" target="_blank" data-stat-id="AA19615+2_19_4_95" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19615+2_19_4_95', 'http://www.mi.com/dianfanbao2-4l/', 'pcpid', '31pchomesmart_right_0004026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.4&amp;pid=2171300014&amp;adm=4818']);"> <span class="review">煮出来的饭很好吃，而且功能很多，想怎么煮都可以，</span> <span class="author"> 来自于 王礼洪 的评价 <span class="date" data-date="1514465527"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2173700036"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1173700028.html" data-stat-aid="AA19552" data-stat-pid="2_19_5_96" target="_blank" data-log_code="31pchomesmart_right_0005026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.5&amp;pid=2173700036&amp;adm=4258" data-stat-id="AA19552+2_19_5_96" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19552+2_19_5_96', '//item.mi.com/1173700028.html', 'pcpid', '31pchomesmart_right_0005026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.5&amp;pid=2173700036&amp;adm=4258']);"><img src="//i1.mifile.cn/a1/pms_1506733860.3164711!220x220.jpg" width="150" height="150" alt="车载空气净化器(USB车充版)" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1173700028.html" data-stat-aid="AA19552" data-stat-pid="2_19_5_96" data-log_code="31pchomesmart_right_0005026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.5&amp;pid=2173700036&amp;adm=4258" target="_blank" data-stat-id="AA19552+2_19_5_96" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19552+2_19_5_96', '//item.mi.com/1173700028.html', 'pcpid', '31pchomesmart_right_0005026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.5&amp;pid=2173700036&amp;adm=4258']);">车载空气净化器(USB车充版)</a></h3> <p class="desc">高效净化车内空气</p> <p class="price"> <span class="num">389</span>元 
            <del>
             <span class="num">449</span>元
            </del> </p> <p class="rank"></p> 
           <div class="flag flag-saleoff">
             减 60 元 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1173700028.html" data-stat-aid="AA19552" data-stat-pid="2_19_5_96" data-log_code="31pchomesmart_right_0005026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.5&amp;pid=2173700036&amp;adm=4258" target="_blank" data-stat-id="AA19552+2_19_5_96" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19552+2_19_5_96', '//item.mi.com/1173700028.html', 'pcpid', '31pchomesmart_right_0005026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.5&amp;pid=2173700036&amp;adm=4258']);"> <span class="review">真正的米粉</span> <span class="author"> 来自于 段海清 的评价 <span class="date" data-date="1511576670"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1183800054"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1183800054.html" data-stat-aid="AA21027" data-stat-pid="2_19_6_97" target="_blank" data-log_code="31pchomesmart_right_0006026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.6&amp;pid=1183800054&amp;adm=5622" data-stat-id="AA21027+2_19_6_97" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21027+2_19_6_97', '//item.mi.com/1183800054.html', 'pcpid', '31pchomesmart_right_0006026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.6&amp;pid=1183800054&amp;adm=5622']);"><img src="//i1.mifile.cn/a1/pms_1539051273.95659582!220x220.jpg" width="150" height="150" alt="小米米家行车记录仪1S" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1183800054.html" data-stat-aid="AA21027" data-stat-pid="2_19_6_97" data-log_code="31pchomesmart_right_0006026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.6&amp;pid=1183800054&amp;adm=5622" target="_blank" data-stat-id="AA21027+2_19_6_97" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21027+2_19_6_97', '//item.mi.com/1183800054.html', 'pcpid', '31pchomesmart_right_0006026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.6&amp;pid=1183800054&amp;adm=5622']);">小米米家行车记录仪1S</a></h3> <p class="desc"></p> <p class="price"> <span class="num">319</span>元 
            <del>
             <span class="num">349</span>元
            </del> </p> <p class="rank"></p> 
           <div class="flag flag-new">
            新品
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1183800054.html" data-stat-aid="AA21027" data-stat-pid="2_19_6_97" data-log_code="31pchomesmart_right_0006026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.6&amp;pid=1183800054&amp;adm=5622" target="_blank" data-stat-id="AA21027+2_19_6_97" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21027+2_19_6_97', '//item.mi.com/1183800054.html', 'pcpid', '31pchomesmart_right_0006026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.6&amp;pid=1183800054&amp;adm=5622']);"> <span class="review">好！（此评论虽然才1个字，但语法严谨，用词工整，结构...</span> <span class="author"> 来自于 wj54prince 的评价 <span class="date" data-date="1543381075"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2172500003"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/electric-toothbrush/" data-stat-aid="AA19616" data-stat-pid="2_19_7_98" target="_blank" data-log_code="31pchomesmart_right_0007026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.7&amp;pid=2172500003&amp;adm=3765" data-stat-id="AA19616+2_19_7_98" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19616+2_19_7_98', 'https://www.mi.com/electric-toothbrush/', 'pcpid', '31pchomesmart_right_0007026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.7&amp;pid=2172500003&amp;adm=3765']);"><img src="//i1.mifile.cn/a1/pms_1498564154.53184175!220x220.jpg" width="150" height="150" alt="米家声波电动牙刷" /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/electric-toothbrush/" data-stat-aid="AA19616" data-stat-pid="2_19_7_98" data-log_code="31pchomesmart_right_0007026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.7&amp;pid=2172500003&amp;adm=3765" target="_blank" data-stat-id="AA19616+2_19_7_98" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19616+2_19_7_98', 'https://www.mi.com/electric-toothbrush/', 'pcpid', '31pchomesmart_right_0007026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.7&amp;pid=2172500003&amp;adm=3765']);">米家声波电动牙刷</a></h3> <p class="desc">磁悬浮声波马达，定制多种刷牙模式</p> <p class="price"> <span class="num">179</span>元 
            <del>
             <span class="num">199</span>元
            </del> </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/electric-toothbrush/" data-stat-aid="AA19616" data-stat-pid="2_19_7_98" data-log_code="31pchomesmart_right_0007026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.7&amp;pid=2172500003&amp;adm=3765" target="_blank" data-stat-id="AA19616+2_19_7_98" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19616+2_19_7_98', 'https://www.mi.com/electric-toothbrush/', 'pcpid', '31pchomesmart_right_0007026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.7&amp;pid=2172500003&amp;adm=3765']);"> <span class="review">刷的嘴超痒，老想笑，刷牙都不能好好刷了(￣∇￣)</span> <span class="author"> 来自于 风，吹过…… 的评价 <span class="date" data-date="1501328324"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="1181100019"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1181100019.html" class="exposure" data-stat-aid="AA20999" data-stat-pid="2_19_8_99" data-log_code="31pchomesmart_right_0008026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.8&amp;pid=1181100019&amp;adm=5605" target="_blank" data-stat-id="AA20999+2_19_8_99" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20999+2_19_8_99', '//item.mi.com/1181100019.html', 'pcpid', '31pchomesmart_right_0008026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.8&amp;pid=1181100019&amp;adm=5605']);"> <img src="//i1.mifile.cn/a1/pms_1528698828.42759625!220x220.jpg" width="80" height="80" alt="小米插线板（含3口USB 2A快充） 白色" /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1181100019.html" class="exposure" data-stat-aid="AA20999" data-stat-pid="2_19_8_99" data-log_code="31pchomesmart_right_0008026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.8&amp;pid=1181100019&amp;adm=5605" target="_blank" data-stat-id="AA20999+2_19_8_99" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20999+2_19_8_99', '//item.mi.com/1181100019.html', 'pcpid', '31pchomesmart_right_0008026#t=normal&amp;act=other&amp;page=home&amp;bid=3030339.8&amp;pid=1181100019&amp;adm=5605']);">小米插线板（含3口USB 2A快充） 白色</a></h3> <p class="price"><span class="num">49</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="http://www.mi.com/smart/" target="_blank" data-stat-id="0fee864bc6a2cb58" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-0fee864bc6a2cb58', 'http://www.mi.com/smart/', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="http://www.mi.com/smart/" target="_blank" data-stat-id="92532d9c9ad3be56" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-92532d9c9ad3be56', 'http://www.mi.com/smart/', 'pcpid', '']);">浏览更多<small>热门</small></a></li>
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="2170600006"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/scooter2/" data-stat-aid="AA17853" data-stat-pid="2_50_1_282" target="_blank" data-log_code="31pchomesmart_right_1001027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.1&amp;pid=2170600006&amp;adm=2834" data-stat-id="AA17853+2_50_1_282" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17853+2_50_1_282', 'http://www.mi.com/scooter2/', 'pcpid', '31pchomesmart_right_1001027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.1&amp;pid=2170600006&amp;adm=2834']);"><img src="//i1.mifile.cn/a1/pms_1488272686.62666302!220x220.jpg" width="150" height="150" alt="小米米家电动滑板车" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/scooter2/" data-stat-aid="AA17853" data-stat-pid="2_50_1_282" data-log_code="31pchomesmart_right_1001027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.1&amp;pid=2170600006&amp;adm=2834" target="_blank" data-stat-id="AA17853+2_50_1_282" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17853+2_50_1_282', 'http://www.mi.com/scooter2/', 'pcpid', '31pchomesmart_right_1001027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.1&amp;pid=2170600006&amp;adm=2834']);">小米米家电动滑板车</a></h3> <p class="desc">极简几何设计，1 分钟轻松上手</p> <p class="price"> <span class="num">1949</span>元 
            <del>
             <span class="num">1999</span>元
            </del> </p> <p class="rank"></p> 
           <div class="flag flag-saleoff">
             减 50 元 
           </div> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/scooter2/" data-stat-aid="AA17853" data-stat-pid="2_50_1_282" data-log_code="31pchomesmart_right_1001027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.1&amp;pid=2170600006&amp;adm=2834" target="_blank" data-stat-id="AA17853+2_50_1_282" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17853+2_50_1_282', 'http://www.mi.com/scooter2/', 'pcpid', '31pchomesmart_right_1001027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.1&amp;pid=2170600006&amp;adm=2834']);"> <span class="review">小米有很多“缺点”: 1 产品优秀 2 价格厚道 3...</span> <span class="author"> 来自于 王诗源 的评价 <span class="date" data-date="1512289229"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2162400039"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/mibicycle/" data-stat-aid="AA16931" data-stat-pid="2_50_2_283" target="_blank" data-log_code="31pchomesmart_right_1002027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.2&amp;pid=2162400039&amp;adm=2283" data-stat-id="AA16931+2_50_2_283" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16931+2_50_2_283', 'http://www.mi.com/mibicycle/', 'pcpid', '31pchomesmart_right_1002027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.2&amp;pid=2162400039&amp;adm=2283']);"><img src="//i1.mifile.cn/a4/2b69b930-a2fd-4d09-a46a-8690cb79f764" width="150" height="150" alt="电助力折叠自行车" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/mibicycle/" data-stat-aid="AA16931" data-stat-pid="2_50_2_283" data-log_code="31pchomesmart_right_1002027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.2&amp;pid=2162400039&amp;adm=2283" target="_blank" data-stat-id="AA16931+2_50_2_283" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16931+2_50_2_283', 'http://www.mi.com/mibicycle/', 'pcpid', '31pchomesmart_right_1002027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.2&amp;pid=2162400039&amp;adm=2283']);">电助力折叠自行车</a></h3> <p class="desc">力矩传感电助力，折叠便携设计</p> <p class="price"> <span class="num">2999</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/mibicycle/" data-stat-aid="AA16931" data-stat-pid="2_50_2_283" data-log_code="31pchomesmart_right_1002027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.2&amp;pid=2162400039&amp;adm=2283" target="_blank" data-stat-id="AA16931+2_50_2_283" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16931+2_50_2_283', 'http://www.mi.com/mibicycle/', 'pcpid', '31pchomesmart_right_1002027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.2&amp;pid=2162400039&amp;adm=2283']);"> <span class="review">好玩，安装好方便</span> <span class="author"> 来自于 江思毅 的评价 <span class="date" data-date="1476233233"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1181300006"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1181300006.html" data-stat-aid="AA20819" data-stat-pid="2_50_3_284" target="_blank" data-log_code="31pchomesmart_right_1003027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.3&amp;pid=1181300006&amp;adm=5148" data-stat-id="AA20819+2_50_3_284" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20819+2_50_3_284', '//item.mi.com/1181300006.html', 'pcpid', '31pchomesmart_right_1003027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.3&amp;pid=1181300006&amp;adm=5148']);"><img src="//i1.mifile.cn/a1/pms_1522071421.29489244!220x220.jpg" width="150" height="150" alt="米兔遥控小飞机" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1181300006.html" data-stat-aid="AA20819" data-stat-pid="2_50_3_284" data-log_code="31pchomesmart_right_1003027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.3&amp;pid=1181300006&amp;adm=5148" target="_blank" data-stat-id="AA20819+2_50_3_284" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20819+2_50_3_284', '//item.mi.com/1181300006.html', 'pcpid', '31pchomesmart_right_1003027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.3&amp;pid=1181300006&amp;adm=5148']);">米兔遥控小飞机</a></h3> <p class="desc">米兔遥控小飞机</p> <p class="price"> <span class="num">389</span>元 
            <del>
             <span class="num">399</span>元
            </del> </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1181300006.html" data-stat-aid="AA20819" data-stat-pid="2_50_3_284" data-log_code="31pchomesmart_right_1003027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.3&amp;pid=1181300006&amp;adm=5148" target="_blank" data-stat-id="AA20819+2_50_3_284" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20819+2_50_3_284', '//item.mi.com/1181300006.html', 'pcpid', '31pchomesmart_right_1003027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.3&amp;pid=1181300006&amp;adm=5148']);"> <span class="review">还不错，建议大家第一次飞找一块大点的空地</span> <span class="author"> 来自于 未知 的评价 <span class="date" data-date="1525336915"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2173700036"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1173700028.html" data-stat-aid="AA17077" data-stat-pid="2_50_4_285" target="_blank" data-log_code="31pchomesmart_right_1004027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.4&amp;pid=2173700036&amp;adm=3156" data-stat-id="AA17077+2_50_4_285" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17077+2_50_4_285', '//item.mi.com/1173700028.html', 'pcpid', '31pchomesmart_right_1004027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.4&amp;pid=2173700036&amp;adm=3156']);"><img src="//i1.mifile.cn/a1/pms_1506733860.3164711!220x220.jpg" width="150" height="150" alt="米家车载空气净化器（USB车充版） 灰色" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1173700028.html" data-stat-aid="AA17077" data-stat-pid="2_50_4_285" data-log_code="31pchomesmart_right_1004027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.4&amp;pid=2173700036&amp;adm=3156" target="_blank" data-stat-id="AA17077+2_50_4_285" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17077+2_50_4_285', '//item.mi.com/1173700028.html', 'pcpid', '31pchomesmart_right_1004027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.4&amp;pid=2173700036&amp;adm=3156']);">米家车载空气净化器（USB车充版） 灰色</a></h3> <p class="desc">双风机循环气流，高效净化车内空气</p> <p class="price"> <span class="num">389</span>元 
            <del>
             <span class="num">449</span>元
            </del> </p> <p class="rank"></p> 
           <div class="flag flag-saleoff">
             减 60 元 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1173700028.html" data-stat-aid="AA17077" data-stat-pid="2_50_4_285" data-log_code="31pchomesmart_right_1004027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.4&amp;pid=2173700036&amp;adm=3156" target="_blank" data-stat-id="AA17077+2_50_4_285" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17077+2_50_4_285', '//item.mi.com/1173700028.html', 'pcpid', '31pchomesmart_right_1004027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.4&amp;pid=2173700036&amp;adm=3156']);"> <span class="review">真正的米粉</span> <span class="author"> 来自于 段海清 的评价 <span class="date" data-date="1511576670"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2164300004"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/hmwatch/" data-stat-aid="AA16605" data-stat-pid="2_50_5_286" target="_blank" data-log_code="31pchomesmart_right_1005027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.5&amp;pid=2164300004&amp;adm=3486" data-stat-id="AA16605+2_50_5_286" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16605+2_50_5_286', 'http://www.mi.com/hmwatch/', 'pcpid', '31pchomesmart_right_1005027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.5&amp;pid=2164300004&amp;adm=3486']);"><img src="//i1.mifile.cn/a1/pms_1478761096.92412274!220x220.jpg" width="150" height="150" alt="Amazfit 运动手表" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/hmwatch/" data-stat-aid="AA16605" data-stat-pid="2_50_5_286" data-log_code="31pchomesmart_right_1005027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.5&amp;pid=2164300004&amp;adm=3486" target="_blank" data-stat-id="AA16605+2_50_5_286" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16605+2_50_5_286', 'http://www.mi.com/hmwatch/', 'pcpid', '31pchomesmart_right_1005027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.5&amp;pid=2164300004&amp;adm=3486']);">Amazfit 运动手表</a></h3> <p class="desc">蓝牙听歌，运动心率，智能通知提醒</p> <p class="price"> <span class="num">799</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/hmwatch/" data-stat-aid="AA16605" data-stat-pid="2_50_5_286" data-log_code="31pchomesmart_right_1005027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.5&amp;pid=2164300004&amp;adm=3486" target="_blank" data-stat-id="AA16605+2_50_5_286" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16605+2_50_5_286', 'http://www.mi.com/hmwatch/', 'pcpid', '31pchomesmart_right_1005027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.5&amp;pid=2164300004&amp;adm=3486']);"> <span class="review">妥妥的社会人...哈哈哈</span> <span class="author"> 来自于 聪多多 的评价 <span class="date" data-date="1522893817"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2171200008"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/yi-camera-m1/" data-stat-aid="AA17034" data-stat-pid="2_50_6_287" target="_blank" data-log_code="31pchomesmart_right_1006027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.6&amp;pid=2171200008&amp;adm=3728" data-stat-id="AA17034+2_50_6_287" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17034+2_50_6_287', 'http://www.mi.com/yi-camera-m1/', 'pcpid', '31pchomesmart_right_1006027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.6&amp;pid=2171200008&amp;adm=3728']);"><img src="//i1.mifile.cn/a1/pms_1496730880.16174470!220x220.jpg" width="150" height="150" alt="小蚁微单相机M1双镜头套机" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/yi-camera-m1/" data-stat-aid="AA17034" data-stat-pid="2_50_6_287" data-log_code="31pchomesmart_right_1006027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.6&amp;pid=2171200008&amp;adm=3728" target="_blank" data-stat-id="AA17034+2_50_6_287" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17034+2_50_6_287', 'http://www.mi.com/yi-camera-m1/', 'pcpid', '31pchomesmart_right_1006027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.6&amp;pid=2171200008&amp;adm=3728']);">小蚁微单相机M1双镜头套机</a></h3> <p class="desc">2016 万有效像素，4K视频录制</p> <p class="price"> <span class="num">2999</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/yi-camera-m1/" data-stat-aid="AA17034" data-stat-pid="2_50_6_287" data-log_code="31pchomesmart_right_1006027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.6&amp;pid=2171200008&amp;adm=3728" target="_blank" data-stat-id="AA17034+2_50_6_287" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17034+2_50_6_287', 'http://www.mi.com/yi-camera-m1/', 'pcpid', '31pchomesmart_right_1006027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.6&amp;pid=2171200008&amp;adm=3728']);"> <span class="review">特别喜欢微距拍照的效果，携带也特方便！</span> <span class="author"> 来自于 fanbixian 的评价 <span class="date" data-date="1499328085"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2171200009"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/mj-panorama-camera/" data-stat-aid="AA19205" data-stat-pid="2_50_7_288" target="_blank" data-log_code="31pchomesmart_right_1007027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.7&amp;pid=2171200009&amp;adm=3582" data-stat-id="AA19205+2_50_7_288" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19205+2_50_7_288', 'http://www.mi.com/mj-panorama-camera/', 'pcpid', '31pchomesmart_right_1007027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.7&amp;pid=2171200009&amp;adm=3582']);"><img src="//i1.mifile.cn/a1/pms_1491312153.28261682!220x220.jpg" width="150" height="150" alt="米家全景相机套装" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/mj-panorama-camera/" data-stat-aid="AA19205" data-stat-pid="2_50_7_288" data-log_code="31pchomesmart_right_1007027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.7&amp;pid=2171200009&amp;adm=3582" target="_blank" data-stat-id="AA19205+2_50_7_288" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19205+2_50_7_288', 'http://www.mi.com/mj-panorama-camera/', 'pcpid', '31pchomesmart_right_1007027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.7&amp;pid=2171200009&amp;adm=3582']);">米家全景相机套装</a></h3> <p class="desc">2388万有效像素 / 3.5K视频录制 </p> <p class="price"> <span class="num">1699</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/mj-panorama-camera/" data-stat-aid="AA19205" data-stat-pid="2_50_7_288" data-log_code="31pchomesmart_right_1007027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.7&amp;pid=2171200009&amp;adm=3582" target="_blank" data-stat-id="AA19205+2_50_7_288" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19205+2_50_7_288', 'http://www.mi.com/mj-panorama-camera/', 'pcpid', '31pchomesmart_right_1007027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.7&amp;pid=2171200009&amp;adm=3582']);"> <span class="review">不仅会买，我还会玩这个！</span> <span class="author"> 来自于 长得比较安全 的评价 <span class="date" data-date="1514101719"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="2171200010"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1171200026.html" class="exposure" data-stat-aid="AA16256" data-stat-pid="2_50_8_289" data-log_code="31pchomesmart_right_1008027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.8&amp;pid=2171200010&amp;adm=3487" target="_blank" data-stat-id="AA16256+2_50_8_289" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16256+2_50_8_289', '//item.mi.com/1171200026.html', 'pcpid', '31pchomesmart_right_1008027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.8&amp;pid=2171200010&amp;adm=3487']);"> <img src="//i1.mifile.cn/a1/pms_1492509229.84515978!220x220.jpg" width="80" height="80" alt="米家车载空气净化器滤芯" /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1171200026.html" class="exposure" data-stat-aid="AA16256" data-stat-pid="2_50_8_289" data-log_code="31pchomesmart_right_1008027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.8&amp;pid=2171200010&amp;adm=3487" target="_blank" data-stat-id="AA16256+2_50_8_289" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16256+2_50_8_289', '//item.mi.com/1171200026.html', 'pcpid', '31pchomesmart_right_1008027#t=normal&amp;act=other&amp;page=home&amp;bid=3030366.8&amp;pid=2171200010&amp;adm=3487']);">米家车载空气净化器滤芯</a></h3> <p class="price"><span class="num">69</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="http://www.mi.com/smart/" target="_blank" data-stat-id="0fee864bc6a2cb58" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-0fee864bc6a2cb58', 'http://www.mi.com/smart/', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="http://www.mi.com/smart/" target="_blank" data-stat-id="b07ba784aea82462" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-b07ba784aea82462', 'http://www.mi.com/smart/', 'pcpid', '']);">浏览更多<small>出行</small></a></li>
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="2172500003"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/electric-toothbrush/" data-stat-aid="AA18720" data-stat-pid="2_48_1_266" target="_blank" data-log_code="31pchomesmart_right_2001028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.1&amp;pid=2172500003&amp;adm=3765" data-stat-id="AA18720+2_48_1_266" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18720+2_48_1_266', 'https://www.mi.com/electric-toothbrush/', 'pcpid', '31pchomesmart_right_2001028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.1&amp;pid=2172500003&amp;adm=3765']);"><img src="//i1.mifile.cn/a1/pms_1498564154.53184175!220x220.jpg" width="150" height="150" alt="米家声波电动牙刷" /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/electric-toothbrush/" data-stat-aid="AA18720" data-stat-pid="2_48_1_266" data-log_code="31pchomesmart_right_2001028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.1&amp;pid=2172500003&amp;adm=3765" target="_blank" data-stat-id="AA18720+2_48_1_266" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18720+2_48_1_266', 'https://www.mi.com/electric-toothbrush/', 'pcpid', '31pchomesmart_right_2001028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.1&amp;pid=2172500003&amp;adm=3765']);">米家声波电动牙刷</a></h3> <p class="desc">磁悬浮声波马达，定制多种刷牙模式</p> <p class="price"> <span class="num">179</span>元 
            <del>
             <span class="num">199</span>元
            </del> </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/electric-toothbrush/" data-stat-aid="AA18720" data-stat-pid="2_48_1_266" data-log_code="31pchomesmart_right_2001028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.1&amp;pid=2172500003&amp;adm=3765" target="_blank" data-stat-id="AA18720+2_48_1_266" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18720+2_48_1_266', 'https://www.mi.com/electric-toothbrush/', 'pcpid', '31pchomesmart_right_2001028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.1&amp;pid=2172500003&amp;adm=3765']);"> <span class="review">刷的嘴超痒，老想笑，刷牙都不能好好刷了(￣∇￣)</span> <span class="author"> 来自于 风，吹过…… 的评价 <span class="date" data-date="1501328324"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1181100013"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://item.mi.com/product/7797.html" data-stat-aid="AA20988" data-stat-pid="2_48_2_267" target="_blank" data-log_code="31pchomesmart_right_2002028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.2&amp;pid=1181100013&amp;adm=5598" data-stat-id="AA20988+2_48_2_267" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20988+2_48_2_267', 'https://item.mi.com/product/7797.html', 'pcpid', '31pchomesmart_right_2002028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.2&amp;pid=1181100013&amp;adm=5598']);"><img src="//i1.mifile.cn/a1/pms_1522204891.45957856!220x220.jpg" width="150" height="150" alt="米家电动剃须刀" /></a> 
           </div> <h3 class="title"> <a href="https://item.mi.com/product/7797.html" data-stat-aid="AA20988" data-stat-pid="2_48_2_267" data-log_code="31pchomesmart_right_2002028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.2&amp;pid=1181100013&amp;adm=5598" target="_blank" data-stat-id="AA20988+2_48_2_267" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20988+2_48_2_267', 'https://item.mi.com/product/7797.html', 'pcpid', '31pchomesmart_right_2002028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.2&amp;pid=1181100013&amp;adm=5598']);">米家电动剃须刀</a></h3> <p class="desc"></p> <p class="price"> <span class="num">179</span>元 
            <del>
             <span class="num">199</span>元
            </del> </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="https://item.mi.com/product/7797.html" data-stat-aid="AA20988" data-stat-pid="2_48_2_267" data-log_code="31pchomesmart_right_2002028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.2&amp;pid=1181100013&amp;adm=5598" target="_blank" data-stat-id="AA20988+2_48_2_267" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20988+2_48_2_267', 'https://item.mi.com/product/7797.html', 'pcpid', '31pchomesmart_right_2002028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.2&amp;pid=1181100013&amp;adm=5598']);"> <span class="review">360&deg;无死角，全方位帅是一辈子的事！</span> <span class="author"> 来自于 米粉 的评价 <span class="date" data-date="1541995836"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2151100003"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/scale/" data-stat-aid="AA16602" data-stat-pid="2_48_3_268" target="_blank" data-log_code="31pchomesmart_right_2003028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.3&amp;pid=2151100003&amp;adm=3579" data-stat-id="AA16602+2_48_3_268" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16602+2_48_3_268', 'http://www.mi.com/scale/', 'pcpid', '31pchomesmart_right_2003028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.3&amp;pid=2151100003&amp;adm=3579']);"><img src="//i1.mifile.cn/a1/T1sWd_B7VT1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米体重秤" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/scale/" data-stat-aid="AA16602" data-stat-pid="2_48_3_268" data-log_code="31pchomesmart_right_2003028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.3&amp;pid=2151100003&amp;adm=3579" target="_blank" data-stat-id="AA16602+2_48_3_268" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16602+2_48_3_268', 'http://www.mi.com/scale/', 'pcpid', '31pchomesmart_right_2003028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.3&amp;pid=2151100003&amp;adm=3579']);">小米体重秤</a></h3> <p class="desc">100克，喝杯水都可感知的精准</p> <p class="price"> <span class="num">99</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/scale/" data-stat-aid="AA16602" data-stat-pid="2_48_3_268" data-log_code="31pchomesmart_right_2003028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.3&amp;pid=2151100003&amp;adm=3579" target="_blank" data-stat-id="AA16602+2_48_3_268" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16602+2_48_3_268', 'http://www.mi.com/scale/', 'pcpid', '31pchomesmart_right_2003028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.3&amp;pid=2151100003&amp;adm=3579']);"> <span class="review">真好我500kg都能用</span> <span class="author"> 来自于 的评价 <span class="date" data-date="1512987469"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1182500054"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1182500054.html" data-stat-aid="AA15969" data-stat-pid="2_48_4_269" target="_blank" data-log_code="31pchomesmart_right_2004028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.4&amp;pid=1182500054&amp;adm=3132" data-stat-id="AA15969+2_48_4_269" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15969+2_48_4_269', '//item.mi.com/1182500054.html', 'pcpid', '31pchomesmart_right_2004028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.4&amp;pid=1182500054&amp;adm=3132']);"><img src="//i1.mifile.cn/a1/pms_1531132647.86213611!220x220.jpg" width="150" height="150" alt="小米米家智能摄像机" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1182500054.html" data-stat-aid="AA15969" data-stat-pid="2_48_4_269" data-log_code="31pchomesmart_right_2004028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.4&amp;pid=1182500054&amp;adm=3132" target="_blank" data-stat-id="AA15969+2_48_4_269" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15969+2_48_4_269', '//item.mi.com/1182500054.html', 'pcpid', '31pchomesmart_right_2004028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.4&amp;pid=1182500054&amp;adm=3132']);">小米米家智能摄像机</a></h3> <p class="desc"></p> <p class="price"> <span class="num">129</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1182500054.html" data-stat-aid="AA15969" data-stat-pid="2_48_4_269" data-log_code="31pchomesmart_right_2004028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.4&amp;pid=1182500054&amp;adm=3132" target="_blank" data-stat-id="AA15969+2_48_4_269" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15969+2_48_4_269', '//item.mi.com/1182500054.html', 'pcpid', '31pchomesmart_right_2004028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.4&amp;pid=1182500054&amp;adm=3132']);"> <span class="review">小米从来就没让我失望过，摄像头特别棒，用手机数据也能...</span> <span class="author"> 来自于 张强 的评价 <span class="date" data-date="1542073038"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2172400011"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1172400037.html" data-stat-aid="AA20314" data-stat-pid="2_48_5_270" target="_blank" data-log_code="31pchomesmart_right_2005028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.5&amp;pid=2172400011&amp;adm=4104" data-stat-id="AA20314+2_48_5_270" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20314+2_48_5_270', '//item.mi.com/1172400037.html', 'pcpid', '31pchomesmart_right_2005028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.5&amp;pid=2172400011&amp;adm=4104']);"><img src="//i1.mifile.cn/a1/pms_1497801904.81994356!220x220.jpg" width="150" height="150" alt="小米净水器（厨上式） 增强版" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1172400037.html" data-stat-aid="AA20314" data-stat-pid="2_48_5_270" data-log_code="31pchomesmart_right_2005028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.5&amp;pid=2172400011&amp;adm=4104" target="_blank" data-stat-id="AA20314+2_48_5_270" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20314+2_48_5_270', '//item.mi.com/1172400037.html', 'pcpid', '31pchomesmart_right_2005028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.5&amp;pid=2172400011&amp;adm=4104']);">小米净水器（厨上式） 增强版</a></h3> <p class="desc">400 加仑大流量，纯水更多，废水更少</p> <p class="price"> <span class="num">1499</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1172400037.html" data-stat-aid="AA20314" data-stat-pid="2_48_5_270" data-log_code="31pchomesmart_right_2005028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.5&amp;pid=2172400011&amp;adm=4104" target="_blank" data-stat-id="AA20314+2_48_5_270" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20314+2_48_5_270', '//item.mi.com/1172400037.html', 'pcpid', '31pchomesmart_right_2005028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.5&amp;pid=2172400011&amp;adm=4104']);"> <span class="review">此乃王母娘娘蟠桃大会指定专用净水器，每个滤芯都经瑶池...</span> <span class="author"> 来自于 北极星 的评价 <span class="date" data-date="1449801147"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2164300025"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/pmdetec/" data-stat-aid="AA15972" data-stat-pid="2_48_6_271" target="_blank" data-log_code="31pchomesmart_right_2006028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.6&amp;pid=2164300025&amp;adm=2643" data-stat-id="AA15972+2_48_6_271" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15972+2_48_6_271', 'http://www.mi.com/pmdetec/', 'pcpid', '31pchomesmart_right_2006028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.6&amp;pid=2164300025&amp;adm=2643']);"><img src="//i1.mifile.cn/a1/pms_1477980865.4569720!220x220.jpg" width="150" height="150" alt="米家PM2.5检测仪" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/pmdetec/" data-stat-aid="AA15972" data-stat-pid="2_48_6_271" data-log_code="31pchomesmart_right_2006028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.6&amp;pid=2164300025&amp;adm=2643" target="_blank" data-stat-id="AA15972+2_48_6_271" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15972+2_48_6_271', 'http://www.mi.com/pmdetec/', 'pcpid', '31pchomesmart_right_2006028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.6&amp;pid=2164300025&amp;adm=2643']);">米家PM2.5检测仪</a></h3> <p class="desc">一体黑 OLED 屏，智能联动</p> <p class="price"> <span class="num">399</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/pmdetec/" data-stat-aid="AA15972" data-stat-pid="2_48_6_271" data-log_code="31pchomesmart_right_2006028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.6&amp;pid=2164300025&amp;adm=2643" target="_blank" data-stat-id="AA15972+2_48_6_271" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15972+2_48_6_271', 'http://www.mi.com/pmdetec/', 'pcpid', '31pchomesmart_right_2006028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.6&amp;pid=2164300025&amp;adm=2643']);"> <span class="review">颜值很高的检测仪，虽然功能上不够强大，只有PM2.5...</span> <span class="author"> 来自于 何中奇 的评价 <span class="date" data-date="1520009218"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2164000002"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1164000002.html" data-stat-aid="AA15973" data-stat-pid="2_48_7_272" target="_blank" data-log_code="31pchomesmart_right_2007028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.7&amp;pid=2164000002&amp;adm=2476" data-stat-id="AA15973+2_48_7_272" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15973+2_48_7_272', '//item.mi.com/1164000002.html', 'pcpid', '31pchomesmart_right_2007028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.7&amp;pid=2164000002&amp;adm=2476']);"><img src="//i1.mifile.cn/a1/pms_1476425102.6997704!220x220.jpg" width="150" height="150" alt="空气净化器滤芯" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1164000002.html" data-stat-aid="AA15973" data-stat-pid="2_48_7_272" data-log_code="31pchomesmart_right_2007028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.7&amp;pid=2164000002&amp;adm=2476" target="_blank" data-stat-id="AA15973+2_48_7_272" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15973+2_48_7_272', '//item.mi.com/1164000002.html', 'pcpid', '31pchomesmart_right_2007028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.7&amp;pid=2164000002&amp;adm=2476']);">空气净化器滤芯</a></h3> <p class="desc">高效净化，可吸入颗粒物、甲醛</p> <p class="price"> <span class="num">139</span>元 
            <del>
             <span class="num">149</span>元
            </del> </p> <p class="rank"></p> 
           <div class="flag flag-saleoff">
             减 10 元 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1164000002.html" data-stat-aid="AA15973" data-stat-pid="2_48_7_272" data-log_code="31pchomesmart_right_2007028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.7&amp;pid=2164000002&amp;adm=2476" target="_blank" data-stat-id="AA15973+2_48_7_272" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15973+2_48_7_272', '//item.mi.com/1164000002.html', 'pcpid', '31pchomesmart_right_2007028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.7&amp;pid=2164000002&amp;adm=2476']);"> <span class="review">好的的没话说，好喜欢</span> <span class="author"> 来自于 OK刘 的评价 <span class="date" data-date="1489124123"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="2152800032"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1152800035.html" class="exposure" data-stat-aid="AA15975" data-stat-pid="2_48_8_273" data-log_code="31pchomesmart_right_2008028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.8&amp;pid=2152800032&amp;adm=595" target="_blank" data-stat-id="AA15975+2_48_8_273" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15975+2_48_8_273', '//item.mi.com/1152800035.html', 'pcpid', '31pchomesmart_right_2008028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.8&amp;pid=2152800032&amp;adm=595']);"> <img src="//i1.mifile.cn/a4/T1KzbQBvbT1RXrhCrK.jpg" width="80" height="80" alt="小米水质TDS检测笔" /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1152800035.html" class="exposure" data-stat-aid="AA15975" data-stat-pid="2_48_8_273" data-log_code="31pchomesmart_right_2008028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.8&amp;pid=2152800032&amp;adm=595" target="_blank" data-stat-id="AA15975+2_48_8_273" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15975+2_48_8_273', '//item.mi.com/1152800035.html', 'pcpid', '31pchomesmart_right_2008028#t=normal&amp;act=other&amp;page=home&amp;bid=3030364.8&amp;pid=2152800032&amp;adm=595']);">小米水质TDS检测笔</a></h3> <p class="price"><span class="num">29</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="http://www.mi.com/smart/" target="_blank" data-stat-id="0fee864bc6a2cb58" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-0fee864bc6a2cb58', 'http://www.mi.com/smart/', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="http://www.mi.com/smart/" target="_blank" data-stat-id="d06212b59385fe61" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-d06212b59385fe61', 'http://www.mi.com/smart/', 'pcpid', '']);">浏览更多<small>健康</small></a></li>
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="2172300005"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/rover/" data-stat-aid="AA19123" data-stat-pid="2_51_1_290" target="_blank" data-log_code="31pchomesmart_right_3001029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.1&amp;pid=2172300005&amp;adm=3805" data-stat-id="AA19123+2_51_1_290" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19123+2_51_1_290', 'https://www.mi.com/rover/', 'pcpid', '31pchomesmart_right_3001029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.1&amp;pid=2172300005&amp;adm=3805']);"><img src="//i1.mifile.cn/a1/pms_1499048837.78256911!220x220.jpg" width="150" height="150" alt="米兔积木机器人 履带机甲" /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/rover/" data-stat-aid="AA19123" data-stat-pid="2_51_1_290" data-log_code="31pchomesmart_right_3001029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.1&amp;pid=2172300005&amp;adm=3805" target="_blank" data-stat-id="AA19123+2_51_1_290" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19123+2_51_1_290', 'https://www.mi.com/rover/', 'pcpid', '31pchomesmart_right_3001029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.1&amp;pid=2172300005&amp;adm=3805']);">米兔积木机器人 履带机甲</a></h3> <p class="desc">履带底盘，智能操控，百变拼插</p> <p class="price"> <span class="num">459</span>元 
            <del>
             <span class="num">499</span>元
            </del> </p> <p class="rank"></p> 
           <div class="flag flag-saleoff">
             减 40 元 
           </div> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/rover/" data-stat-aid="AA19123" data-stat-pid="2_51_1_290" data-log_code="31pchomesmart_right_3001029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.1&amp;pid=2172300005&amp;adm=3805" target="_blank" data-stat-id="AA19123+2_51_1_290" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19123+2_51_1_290', 'https://www.mi.com/rover/', 'pcpid', '31pchomesmart_right_3001029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.1&amp;pid=2172300005&amp;adm=3805']);"> <span class="review">超赞，特别电量超足，还有许多的编程玩法，积木玩法，看...</span> <span class="author"> 来自于 1409168095 的评价 <span class="date" data-date="1532095826"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2162100003"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/mitu/" data-stat-aid="AA17175" data-stat-pid="2_51_2_291" target="_blank" data-log_code="31pchomesmart_right_3002029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.2&amp;pid=2162100003&amp;adm=2273" data-stat-id="AA17175+2_51_2_291" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17175+2_51_2_291', 'http://www.mi.com/mitu/', 'pcpid', '31pchomesmart_right_3002029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.2&amp;pid=2162100003&amp;adm=2273']);"><img src="//i1.mifile.cn/a1/pms_1464615180.86261317!220x220.jpg" width="150" height="150" alt="米兔智能故事机" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/mitu/" data-stat-aid="AA17175" data-stat-pid="2_51_2_291" data-log_code="31pchomesmart_right_3002029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.2&amp;pid=2162100003&amp;adm=2273" target="_blank" data-stat-id="AA17175+2_51_2_291" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17175+2_51_2_291', 'http://www.mi.com/mitu/', 'pcpid', '31pchomesmart_right_3002029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.2&amp;pid=2162100003&amp;adm=2273']);">米兔智能故事机</a></h3> <p class="desc">微信远程互动，智能语音交互</p> <p class="price"> <span class="num">189</span>元 
            <del>
             <span class="num">199</span>元
            </del> </p> <p class="rank"></p> 
           <div class="flag flag-saleoff">
             减 10 元 
           </div> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/mitu/" data-stat-aid="AA17175" data-stat-pid="2_51_2_291" data-log_code="31pchomesmart_right_3002029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.2&amp;pid=2162100003&amp;adm=2273" target="_blank" data-stat-id="AA17175+2_51_2_291" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17175+2_51_2_291', 'http://www.mi.com/mitu/', 'pcpid', '31pchomesmart_right_3002029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.2&amp;pid=2162100003&amp;adm=2273']);"> <span class="review">儿子挺喜欢的，每天晚上睡觉的时候必须听</span> <span class="author"> 来自于 魔头 的评价 <span class="date" data-date="1484630206"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2162400039"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/mibicycle/" data-stat-aid="AA19063" data-stat-pid="2_51_3_292" target="_blank" data-log_code="31pchomesmart_right_3003029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.3&amp;pid=2162400039&amp;adm=3031" data-stat-id="AA19063+2_51_3_292" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19063+2_51_3_292', 'http://www.mi.com/mibicycle/', 'pcpid', '31pchomesmart_right_3003029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.3&amp;pid=2162400039&amp;adm=3031']);"><img src="//i1.mifile.cn/a4/31ae6df6-b672-491e-ab95-7b83a965c694" width="150" height="150" alt="米家骑记电助力折叠自行车" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/mibicycle/" data-stat-aid="AA19063" data-stat-pid="2_51_3_292" data-log_code="31pchomesmart_right_3003029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.3&amp;pid=2162400039&amp;adm=3031" target="_blank" data-stat-id="AA19063+2_51_3_292" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19063+2_51_3_292', 'http://www.mi.com/mibicycle/', 'pcpid', '31pchomesmart_right_3003029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.3&amp;pid=2162400039&amp;adm=3031']);">米家骑记电助力折叠自行车</a></h3> <p class="desc">力矩传感电助力，折叠便携设计</p> <p class="price"> <span class="num">2999</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/mibicycle/" data-stat-aid="AA19063" data-stat-pid="2_51_3_292" data-log_code="31pchomesmart_right_3003029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.3&amp;pid=2162400039&amp;adm=3031" target="_blank" data-stat-id="AA19063+2_51_3_292" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19063+2_51_3_292', 'http://www.mi.com/mibicycle/', 'pcpid', '31pchomesmart_right_3003029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.3&amp;pid=2162400039&amp;adm=3031']);"> <span class="review">好玩，安装好方便</span> <span class="author"> 来自于 江思毅 的评价 <span class="date" data-date="1476233233"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2164800012"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/wangguan/" data-stat-aid="AA15948" data-stat-pid="2_51_4_293" target="_blank" data-log_code="31pchomesmart_right_3004029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.4&amp;pid=2164800012&amp;adm=3482" data-stat-id="AA15948+2_51_4_293" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15948+2_51_4_293', 'http://www.mi.com/wangguan/', 'pcpid', '31pchomesmart_right_3004029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.4&amp;pid=2164800012&amp;adm=3482']);"><img src="//i1.mifile.cn/a1/pms_1480474019.52478532!220x220.jpg" width="150" height="150" alt="米家多功能网关" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/wangguan/" data-stat-aid="AA15948" data-stat-pid="2_51_4_293" data-log_code="31pchomesmart_right_3004029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.4&amp;pid=2164800012&amp;adm=3482" target="_blank" data-stat-id="AA15948+2_51_4_293" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15948+2_51_4_293', 'http://www.mi.com/wangguan/', 'pcpid', '31pchomesmart_right_3004029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.4&amp;pid=2164800012&amp;adm=3482']);">米家多功能网关</a></h3> <p class="desc">米家智能配件控制中心</p> <p class="price"> <span class="num">139</span>元 
            <del>
             <span class="num">149</span>元
            </del> </p> <p class="rank"></p> 
           <div class="flag flag-saleoff">
             减 10 元 
           </div> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/wangguan/" data-stat-aid="AA15948" data-stat-pid="2_51_4_293" data-log_code="31pchomesmart_right_3004029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.4&amp;pid=2164800012&amp;adm=3482" target="_blank" data-stat-id="AA15948+2_51_4_293" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15948+2_51_4_293', 'http://www.mi.com/wangguan/', 'pcpid', '31pchomesmart_right_3004029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.4&amp;pid=2164800012&amp;adm=3482']);"> <span class="review">非常不错，用起来很方便。可以和家里的任何智能小米设备...</span> <span class="author"> 来自于 张忠利 的评价 <span class="date" data-date="1511871243"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1181000030"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1181000030.html" data-stat-aid="AA19754" data-stat-pid="2_51_5_294" target="_blank" data-log_code="31pchomesmart_right_3005029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.5&amp;pid=1181000030&amp;adm=4895" data-stat-id="AA19754+2_51_5_294" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19754+2_51_5_294', '//item.mi.com/1181000030.html', 'pcpid', '31pchomesmart_right_3005029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.5&amp;pid=1181000030&amp;adm=4895']);"><img src="//i1.mifile.cn/a1/pms_1520564952.59464287!220x220.jpg" width="150" height="150" alt="米兔积木矿山卡车" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1181000030.html" data-stat-aid="AA19754" data-stat-pid="2_51_5_294" data-log_code="31pchomesmart_right_3005029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.5&amp;pid=1181000030&amp;adm=4895" target="_blank" data-stat-id="AA19754+2_51_5_294" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19754+2_51_5_294', '//item.mi.com/1181000030.html', 'pcpid', '31pchomesmart_right_3005029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.5&amp;pid=1181000030&amp;adm=4895']);">米兔积木矿山卡车</a></h3> <p class="desc">方向盘控制系统，翻斗升降系统</p> <p class="price"> <span class="num">99</span>元 </p> <p class="rank"></p> 
           <div class="flag flag-new">
            新品
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1181000030.html" data-stat-aid="AA19754" data-stat-pid="2_51_5_294" data-log_code="31pchomesmart_right_3005029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.5&amp;pid=1181000030&amp;adm=4895" target="_blank" data-stat-id="AA19754+2_51_5_294" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19754+2_51_5_294', '//item.mi.com/1181000030.html', 'pcpid', '31pchomesmart_right_3005029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.5&amp;pid=1181000030&amp;adm=4895']);"> <span class="review">质量可以，</span> <span class="author"> 来自于 赵县卫 的评价 <span class="date" data-date="1543898347"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2172300001"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/mtwatch-2/" data-stat-aid="AA18465" data-stat-pid="2_51_6_295" target="_blank" data-log_code="31pchomesmart_right_3006029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.6&amp;pid=2172300001&amp;adm=3761" data-stat-id="AA18465+2_51_6_295" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18465+2_51_6_295', 'https://www.mi.com/mtwatch-2/', 'pcpid', '31pchomesmart_right_3006029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.6&amp;pid=2172300001&amp;adm=3761']);"><img src="//i1.mifile.cn/a1/pms_1498526059.78899603!220x220.jpg" width="150" height="150" alt="米兔儿童电话手表2" /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/mtwatch-2/" data-stat-aid="AA18465" data-stat-pid="2_51_6_295" data-log_code="31pchomesmart_right_3006029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.6&amp;pid=2172300001&amp;adm=3761" target="_blank" data-stat-id="AA18465+2_51_6_295" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18465+2_51_6_295', 'https://www.mi.com/mtwatch-2/', 'pcpid', '31pchomesmart_right_3006029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.6&amp;pid=2172300001&amp;adm=3761']);">米兔儿童电话手表2</a></h3> <p class="desc">AMOLED高清彩屏，6 天超长续航</p> <p class="price"> <span class="num">349</span>元 
            <del>
             <span class="num">399</span>元
            </del> </p> <p class="rank"></p> 
           <div class="flag flag-saleoff">
             减 50 元 
           </div> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/mtwatch-2/" data-stat-aid="AA18465" data-stat-pid="2_51_6_295" data-log_code="31pchomesmart_right_3006029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.6&amp;pid=2172300001&amp;adm=3761" target="_blank" data-stat-id="AA18465+2_51_6_295" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18465+2_51_6_295', 'https://www.mi.com/mtwatch-2/', 'pcpid', '31pchomesmart_right_3006029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.6&amp;pid=2172300001&amp;adm=3761']);"> <span class="review">货以收到，感觉还可以，功能方便。没装卡是不是过一段时...</span> <span class="author"> 来自于 1324723682 的评价 <span class="date" data-date="1510678638"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2180100012"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/toyblock2/" data-stat-aid="AA19590" data-stat-pid="2_51_7_296" target="_blank" data-log_code="31pchomesmart_right_3007029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.7&amp;pid=2180100012&amp;adm=4804" data-stat-id="AA19590+2_51_7_296" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19590+2_51_7_296', 'https://www.mi.com/toyblock2/', 'pcpid', '31pchomesmart_right_3007029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.7&amp;pid=2180100012&amp;adm=4804']);"><img src="//i1.mifile.cn/a1/pms_1515662525.51823819!220x220.jpg" width="150" height="150" alt="米兔智能积木" /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/toyblock2/" data-stat-aid="AA19590" data-stat-pid="2_51_7_296" data-log_code="31pchomesmart_right_3007029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.7&amp;pid=2180100012&amp;adm=4804" target="_blank" data-stat-id="AA19590+2_51_7_296" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19590+2_51_7_296', 'https://www.mi.com/toyblock2/', 'pcpid', '31pchomesmart_right_3007029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.7&amp;pid=2180100012&amp;adm=4804']);">米兔智能积木</a></h3> <p class="desc">动手又动脑，启发孩子创造力</p> <p class="price"> <span class="num">189</span>元 
            <del>
             <span class="num">199</span>元
            </del> </p> <p class="rank"></p> 
           <div class="flag flag-saleoff">
             减 10 元 
           </div> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/toyblock2/" data-stat-aid="AA19590" data-stat-pid="2_51_7_296" data-log_code="31pchomesmart_right_3007029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.7&amp;pid=2180100012&amp;adm=4804" target="_blank" data-stat-id="AA19590+2_51_7_296" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19590+2_51_7_296', 'https://www.mi.com/toyblock2/', 'pcpid', '31pchomesmart_right_3007029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.7&amp;pid=2180100012&amp;adm=4804']);"> <span class="review">这款积木的设计原始想法很不错，app最赞，声音好听，...</span> <span class="author"> 来自于 何乐 的评价 <span class="date" data-date="1544362099"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="2183800003"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1183800003.html" class="exposure" data-stat-aid="AA21111" data-stat-pid="2_51_8_297" data-log_code="31pchomesmart_right_3008029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.8&amp;pid=2183800003&amp;adm=5696" target="_blank" data-stat-id="AA21111+2_51_8_297" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21111+2_51_8_297', '//item.mi.com/1183800003.html', 'pcpid', '31pchomesmart_right_3008029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.8&amp;pid=2183800003&amp;adm=5696']);"> <img src="//i1.mifile.cn/a1/pms_1538031692.35815325!220x220.jpg" width="80" height="80" alt="小米米家小白智能摄像机增强版" /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1183800003.html" class="exposure" data-stat-aid="AA21111" data-stat-pid="2_51_8_297" data-log_code="31pchomesmart_right_3008029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.8&amp;pid=2183800003&amp;adm=5696" target="_blank" data-stat-id="AA21111+2_51_8_297" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21111+2_51_8_297', '//item.mi.com/1183800003.html', 'pcpid', '31pchomesmart_right_3008029#t=normal&amp;act=other&amp;page=home&amp;bid=3030367.8&amp;pid=2183800003&amp;adm=5696']);">小米米家小白智能摄像机增强版</a></h3> <p class="price"><span class="num">369</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="http://www.mi.com/smart/" target="_blank" data-stat-id="0fee864bc6a2cb58" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-0fee864bc6a2cb58', 'http://www.mi.com/smart/', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="http://www.mi.com/smart/" target="_blank" data-stat-id="40734fbd51fd6e62" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-40734fbd51fd6e62', 'http://www.mi.com/smart/', 'pcpid', '']);">浏览更多<small>酷玩</small></a></li>
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="2182000036"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1182000044.html" data-stat-aid="AA21113" data-stat-pid="2_49_1_274" target="_blank" data-log_code="31pchomesmart_right_4001030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.1&amp;pid=2182000036&amp;adm=5697" data-stat-id="AA21113+2_49_1_274" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21113+2_49_1_274', '//item.mi.com/1182000044.html', 'pcpid', '31pchomesmart_right_4001030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.1&amp;pid=2182000036&amp;adm=5697']);"><img src="//i1.mifile.cn/a1/pms_1532340112.44581128!220x220.png" width="150" height="150" alt="小米路由器4" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1182000044.html" data-stat-aid="AA21113" data-stat-pid="2_49_1_274" data-log_code="31pchomesmart_right_4001030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.1&amp;pid=2182000036&amp;adm=5697" target="_blank" data-stat-id="AA21113+2_49_1_274" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21113+2_49_1_274', '//item.mi.com/1182000044.html', 'pcpid', '31pchomesmart_right_4001030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.1&amp;pid=2182000036&amp;adm=5697']);">小米路由器4</a></h3> <p class="desc"></p> <p class="price"> <span class="num">169</span>元 
            <del>
             <span class="num">199</span>元
            </del> </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1182000044.html" data-stat-aid="AA21113" data-stat-pid="2_49_1_274" data-log_code="31pchomesmart_right_4001030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.1&amp;pid=2182000036&amp;adm=5697" target="_blank" data-stat-id="AA21113+2_49_1_274" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21113+2_49_1_274', '//item.mi.com/1182000044.html', 'pcpid', '31pchomesmart_right_4001030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.1&amp;pid=2182000036&amp;adm=5697']);"> <span class="review">挺漂亮的，就是不会装好笨呀！</span> <span class="author"> 来自于 1512066930 的评价 <span class="date" data-date="1534770623"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2183000006"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1183000009.html" data-stat-aid="AA21112" data-stat-pid="2_49_2_275" target="_blank" data-log_code="31pchomesmart_right_4002030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.2&amp;pid=2183000006&amp;adm=5698" data-stat-id="AA21112+2_49_2_275" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21112+2_49_2_275', '//item.mi.com/1183000009.html', 'pcpid', '31pchomesmart_right_4002030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.2&amp;pid=2183000006&amp;adm=5698']);"><img src="//i1.mifile.cn/a1/pms_1532604005.80875371!220x220.jpg" width="150" height="150" alt="小米路由器4C" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1183000009.html" data-stat-aid="AA21112" data-stat-pid="2_49_2_275" data-log_code="31pchomesmart_right_4002030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.2&amp;pid=2183000006&amp;adm=5698" target="_blank" data-stat-id="AA21112+2_49_2_275" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21112+2_49_2_275', '//item.mi.com/1183000009.html', 'pcpid', '31pchomesmart_right_4002030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.2&amp;pid=2183000006&amp;adm=5698']);">小米路由器4C</a></h3> <p class="desc"></p> <p class="price"> <span class="num">59</span>元 
            <del>
             <span class="num">99</span>元
            </del> </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1183000009.html" data-stat-aid="AA21112" data-stat-pid="2_49_2_275" data-log_code="31pchomesmart_right_4002030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.2&amp;pid=2183000006&amp;adm=5698" target="_blank" data-stat-id="AA21112+2_49_2_275" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21112+2_49_2_275', '//item.mi.com/1183000009.html', 'pcpid', '31pchomesmart_right_4002030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.2&amp;pid=2183000006&amp;adm=5698']);"> <span class="review">路由器4c非常不错，包装豪华大气 给人一种高尚经典的...</span> <span class="author"> 来自于 蒋兵 的评价 <span class="date" data-date="1541402835"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2164700008"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1164700010.html" data-stat-aid="AA15816" data-stat-pid="2_49_3_276" target="_blank" data-log_code="31pchomesmart_right_4003030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.3&amp;pid=2164700008&amp;adm=3427" data-stat-id="AA15816+2_49_3_276" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15816+2_49_3_276', '//item.mi.com/1164700010.html', 'pcpid', '31pchomesmart_right_4003030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.3&amp;pid=2164700008&amp;adm=3427']);"><img src="//i1.mifile.cn/a1/pms_1481188619.07736357!220x220.jpg" width="150" height="150" alt="小米WiFi放大器 2" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1164700010.html" data-stat-aid="AA15816" data-stat-pid="2_49_3_276" data-log_code="31pchomesmart_right_4003030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.3&amp;pid=2164700008&amp;adm=3427" target="_blank" data-stat-id="AA15816+2_49_3_276" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15816+2_49_3_276', '//item.mi.com/1164700010.html', 'pcpid', '31pchomesmart_right_4003030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.3&amp;pid=2164700008&amp;adm=3427']);">小米WiFi放大器 2</a></h3> <p class="desc">适配主流路由器，两步完成设置</p> <p class="price"> <span class="num">29</span>元 
            <del>
             <span class="num">49</span>元
            </del> </p> <p class="rank"></p> 
           <div class="flag flag-saleoff">
             享6折 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1164700010.html" data-stat-aid="AA15816" data-stat-pid="2_49_3_276" data-log_code="31pchomesmart_right_4003030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.3&amp;pid=2164700008&amp;adm=3427" target="_blank" data-stat-id="AA15816+2_49_3_276" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15816+2_49_3_276', '//item.mi.com/1164700010.html', 'pcpid', '31pchomesmart_right_4003030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.3&amp;pid=2164700008&amp;adm=3427']);"> <span class="review">一直至爱小米</span> <span class="author"> 来自于 我爱小米 的评价 <span class="date" data-date="1512467072"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2170900001"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/miwifihd/" data-stat-aid="AA17207" data-stat-pid="2_49_4_277" target="_blank" data-log_code="31pchomesmart_right_4004030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.4&amp;pid=2170900001&amp;adm=3136" data-stat-id="AA17207+2_49_4_277" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17207+2_49_4_277', 'http://www.mi.com/miwifihd/', 'pcpid', '31pchomesmart_right_4004030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.4&amp;pid=2170900001&amp;adm=3136']);"><img src="//i1.mifile.cn/a1/pms_1488268224.14952632!220x220.jpg" width="150" height="150" alt="小米路由器 HD" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/miwifihd/" data-stat-aid="AA17207" data-stat-pid="2_49_4_277" data-log_code="31pchomesmart_right_4004030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.4&amp;pid=2170900001&amp;adm=3136" target="_blank" data-stat-id="AA17207+2_49_4_277" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17207+2_49_4_277', 'http://www.mi.com/miwifihd/', 'pcpid', '31pchomesmart_right_4004030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.4&amp;pid=2170900001&amp;adm=3136']);">小米路由器 HD</a></h3> <p class="desc">4x4全向性天线，802.11ac wave2</p> <p class="price"> <span class="num">1299</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/miwifihd/" data-stat-aid="AA17207" data-stat-pid="2_49_4_277" data-log_code="31pchomesmart_right_4004030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.4&amp;pid=2170900001&amp;adm=3136" target="_blank" data-stat-id="AA17207+2_49_4_277" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17207+2_49_4_277', 'http://www.mi.com/miwifihd/', 'pcpid', '31pchomesmart_right_4004030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.4&amp;pid=2170900001&amp;adm=3136']);"> <span class="review">优点：好，很好，非常好。网速也行，50兆用它有点小马...</span> <span class="author"> 来自于 兰陵王 的评价 <span class="date" data-date="1489807207"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2171300015"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/plc/" data-stat-aid="AA17208" data-stat-pid="2_49_5_278" target="_blank" data-log_code="31pchomesmart_right_4005030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.5&amp;pid=2171300015&amp;adm=3883" data-stat-id="AA17208+2_49_5_278" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17208+2_49_5_278', 'http://www.mi.com/plc/', 'pcpid', '31pchomesmart_right_4005030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.5&amp;pid=2171300015&amp;adm=3883']);"><img src="//i1.mifile.cn/a1/pms_1491009389.88616921!220x220.jpg" width="150" height="150" alt="小米WiFi电力猫" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/plc/" data-stat-aid="AA17208" data-stat-pid="2_49_5_278" data-log_code="31pchomesmart_right_4005030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.5&amp;pid=2171300015&amp;adm=3883" target="_blank" data-stat-id="AA17208+2_49_5_278" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17208+2_49_5_278', 'http://www.mi.com/plc/', 'pcpid', '31pchomesmart_right_4005030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.5&amp;pid=2171300015&amp;adm=3883']);">小米WiFi电力猫</a></h3> <p class="desc">有插座的地方 就有WiFi</p> <p class="price"> <span class="num">189</span>元 
            <del>
             <span class="num">249</span>元
            </del> </p> <p class="rank"></p> 
           <div class="flag flag-saleoff">
             享8折 
           </div> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/plc/" data-stat-aid="AA17208" data-stat-pid="2_49_5_278" data-log_code="31pchomesmart_right_4005030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.5&amp;pid=2171300015&amp;adm=3883" target="_blank" data-stat-id="AA17208+2_49_5_278" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17208+2_49_5_278', 'http://www.mi.com/plc/', 'pcpid', '31pchomesmart_right_4005030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.5&amp;pid=2171300015&amp;adm=3883']);"> <span class="review">好东西，我家的信号全覆盖了！！！</span> <span class="author"> 来自于 akinicn 的评价 <span class="date" data-date="1509533893"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2170300007"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/miwifihd/" data-stat-aid="AA17209" data-stat-pid="2_49_6_279" target="_blank" data-log_code="31pchomesmart_right_4006030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.6&amp;pid=2170300007&amp;adm=3134" data-stat-id="AA17209+2_49_6_279" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17209+2_49_6_279', 'http://www.mi.com/miwifihd/', 'pcpid', '31pchomesmart_right_4006030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.6&amp;pid=2170300007&amp;adm=3134']);"><img src="//i1.mifile.cn/a1/pms_1488268195.02396947!220x220.jpg" width="150" height="150" alt="小米路由器 Pro" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/miwifihd/" data-stat-aid="AA17209" data-stat-pid="2_49_6_279" data-log_code="31pchomesmart_right_4006030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.6&amp;pid=2170300007&amp;adm=3134" target="_blank" data-stat-id="AA17209+2_49_6_279" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17209+2_49_6_279', 'http://www.mi.com/miwifihd/', 'pcpid', '31pchomesmart_right_4006030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.6&amp;pid=2170300007&amp;adm=3134']);">小米路由器 Pro</a></h3> <p class="desc">全新金属机身设计，AC2600双频</p> <p class="price"> <span class="num">499</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/miwifihd/" data-stat-aid="AA17209" data-stat-pid="2_49_6_279" data-log_code="31pchomesmart_right_4006030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.6&amp;pid=2170300007&amp;adm=3134" target="_blank" data-stat-id="AA17209+2_49_6_279" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17209+2_49_6_279', 'http://www.mi.com/miwifihd/', 'pcpid', '31pchomesmart_right_4006030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.6&amp;pid=2170300007&amp;adm=3134']);"> <span class="review">外觀大氣，美觀，希望妹子多多加持，讓它長命百歲</span> <span class="author"> 来自于 陳正峯 的评价 <span class="date" data-date="1491126186"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2171900023"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1171900014.html" data-stat-aid="AA16527" data-stat-pid="2_49_7_280" target="_blank" data-log_code="31pchomesmart_right_4007030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.7&amp;pid=2171900023&amp;adm=3699" data-stat-id="AA16527+2_49_7_280" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16527+2_49_7_280', '//item.mi.com/1171900014.html', 'pcpid', '31pchomesmart_right_4007030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.7&amp;pid=2171900023&amp;adm=3699']);"><img src="//i1.mifile.cn/a1/pms_1496289112.05343314!220x220.jpg" width="150" height="150" alt="小米路由器3G" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1171900014.html" data-stat-aid="AA16527" data-stat-pid="2_49_7_280" data-log_code="31pchomesmart_right_4007030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.7&amp;pid=2171900023&amp;adm=3699" target="_blank" data-stat-id="AA16527+2_49_7_280" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16527+2_49_7_280', '//item.mi.com/1171900014.html', 'pcpid', '31pchomesmart_right_4007030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.7&amp;pid=2171900023&amp;adm=3699']);">小米路由器3G</a></h3> <p class="desc">双核全千兆设计，USB 3.0</p> <p class="price"> <span class="num">179</span>元 
            <del>
             <span class="num">249</span>元
            </del> </p> <p class="rank"></p> 
           <div class="flag flag-new">
            新品
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1171900014.html" data-stat-aid="AA16527" data-stat-pid="2_49_7_280" data-log_code="31pchomesmart_right_4007030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.7&amp;pid=2171900023&amp;adm=3699" target="_blank" data-stat-id="AA16527+2_49_7_280" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA16527+2_49_7_280', '//item.mi.com/1171900014.html', 'pcpid', '31pchomesmart_right_4007030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.7&amp;pid=2171900023&amp;adm=3699']);"> <span class="review">顺丰就是快，昨天订，今天到。朋友用过，说质量不错，今...</span> <span class="author"> 来自于 Llf801483618 的评价 <span class="date" data-date="1512799841"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="2150500004"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1150500009.html" class="exposure" data-stat-aid="AA15820" data-stat-pid="2_49_8_281" data-log_code="31pchomesmart_right_4008030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.8&amp;pid=2150500004&amp;adm=520" target="_blank" data-stat-id="AA15820+2_49_8_281" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15820+2_49_8_281', '//item.mi.com/1150500009.html', 'pcpid', '31pchomesmart_right_4008030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.8&amp;pid=2150500004&amp;adm=520']);"> <img src="//i1.mifile.cn/a1/T13y_vBgJT1RXrhCrK!220x220.jpg" width="80" height="80" alt="小米千兆网线" /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1150500009.html" class="exposure" data-stat-aid="AA15820" data-stat-pid="2_49_8_281" data-log_code="31pchomesmart_right_4008030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.8&amp;pid=2150500004&amp;adm=520" target="_blank" data-stat-id="AA15820+2_49_8_281" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15820+2_49_8_281', '//item.mi.com/1150500009.html', 'pcpid', '31pchomesmart_right_4008030#t=normal&amp;act=other&amp;page=home&amp;bid=3030365.8&amp;pid=2150500004&amp;adm=520']);">小米千兆网线</a></h3> <p class="price"><span class="num">14.9</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="http://www.mi.com/smart/" target="_blank" data-stat-id="0fee864bc6a2cb58" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-0fee864bc6a2cb58', 'http://www.mi.com/smart/', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="http://www.mi.com/smart/" target="_blank" data-stat-id="4a6256bb163ac7bc" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4a6256bb163ac7bc', 'http://www.mi.com/smart/', 'pcpid', '']);">浏览更多<small>路由器</small></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div> 
    </div> 
    <div class="J_itemBox J_homeBanner home-banner-box home-banner-box-brick is-visible" data-index="4">
     <a href="https://www.mi.com/a/h/8005.html?client_id=180100041086&amp;masid=17409.0502" target="_blank" data-log_code="31pchomebanner_4001014#t=normal&amp;act=other&amp;page=home&amp;bid=3186793.1&amp;adm=5805" data-stat-id="f224c7ab299309d9" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-f224c7ab299309d9', 'https://www.mi.com/a/h/8005.htmlclient_id=180100041086&amp;masid=17409.0502', 'pcpid', '31pchomebanner_4001014#t=normal&amp;act=other&amp;page=home&amp;bid=3186793.1&amp;adm=5805']);"> <img class="" alt="圣诞专题" width="1226" src="//i1.mifile.cn/a4/xmad_15452706977541_Eiubm.jpg" /></a>
    </div> 
    <div id="match" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded" data-from-stat="true" data-region-stat="1" data-log_codes="reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6334&amp;bid=3038463.0&amp;page=home;reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.1&amp;page=home;reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home;reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8760&amp;bid=3038463.3&amp;page=home;reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.4&amp;page=home;reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6271&amp;bid=3038463.5&amp;page=home;reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7091&amp;bid=3038463.6&amp;page=home;reccom_Collection_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5677&amp;bid=3038463.7&amp;page=home;31pchomematch_right_1001033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.1&amp;pid=2181100035&amp;adm=4961;31pchomematch_right_1002033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.2&amp;pid=2181200008&amp;adm=5413;31pchomematch_right_1003033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.3&amp;pid=1182100012&amp;adm=5542;31pchomematch_right_1004033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.4&amp;pid=2160800015&amp;adm=4963;31pchomematch_right_1005033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.5&amp;pid=2163700009&amp;adm=4964;31pchomematch_right_1006033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.6&amp;pid=2173000007&amp;adm=4965;31pchomematch_right_1007033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.7&amp;pid=2172600001&amp;adm=4966;31pchomematch_right_1008033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.8&amp;pid=2154300022&amp;adm=4967;31pchomematch_right_2001034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845;31pchomematch_right_2002034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160;31pchomematch_right_2003034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32;31pchomematch_right_2004034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.4&amp;pid=1154900068&amp;adm=5039;31pchomematch_right_2005034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844;31pchomematch_right_2006034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577;31pchomematch_right_2007034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.7&amp;pid=1172100023&amp;adm=5687;31pchomematch_right_2008034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.8&amp;pid=2155200004&amp;adm=1662;31pchomematch_right_3001035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.1&amp;pid=1183400004&amp;adm=5691;31pchomematch_right_3002035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165;31pchomematch_right_3003035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141;31pchomematch_right_3004035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.4&amp;pid=1180500019&amp;adm=5689;31pchomematch_right_3005035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.5&amp;pid=1174100029&amp;adm=5688;31pchomematch_right_3006035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.6&amp;pid=1180800004&amp;adm=5798;31pchomematch_right_3007035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.7&amp;pid=1172100023&amp;adm=5716;31pchomematch_right_3008035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.8&amp;pid=1184300031&amp;adm=5717"> 
     <div class="box-hd"> 
      <h2 class="title">搭配</h2> 
      <div class="more J_brickNav">
       <ul class="tab-list J_brickTabSwitch" data-tab-target="match-content">
        <li class="tab-active">热门</li>
        <li>耳机音箱</li>
        <li>电源</li>
        <li>电池存储卡</li>
       </ul>
      </div> 
     </div> 
     <div class="box-bd J_brickBd">
      <div class="row">
       <div class="span4 span-first">
        <ul class="brick-promo-list clearfix"> 
         <li class="brick-item brick-item-m"> <a href="//item.mi.com/1182700045.html" class="exposure" data-stat-aid="AA21064" data-stat-pid="2_20_1_100" data-log_code="31pchomematch_left001031#t=normal&amp;act=other&amp;page=home&amp;bid=3030340.1&amp;pid=1182700045&amp;adm=5481" target="_blank" data-stat-id="AA21064+2_20_1_100" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21064+2_20_1_100', '//item.mi.com/1182700045.html', 'pcpid', '31pchomematch_left001031#t=normal&amp;act=other&amp;page=home&amp;bid=3030340.1&amp;pid=1182700045&amp;adm=5481']);"><img src="//i1.mifile.cn/a4/xmad_15338967362713_dmRBh.jpg" alt="" /></a> </li> 
         <li class="brick-item brick-item-m"> <a href="https://item.mi.com/product/8967.html" class="exposure" data-stat-aid="AA21065" data-stat-pid="2_20_2_101" data-log_code="31pchomematch_left002031#t=normal&amp;act=other&amp;page=home&amp;bid=3030340.2&amp;adm=5638" target="_blank" data-stat-id="AA21065+2_20_2_101" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21065+2_20_2_101', 'https://item.mi.com/product/8967.html', 'pcpid', '31pchomematch_left002031#t=normal&amp;act=other&amp;page=home&amp;bid=3030340.2&amp;adm=5638']);"><img src="//i1.mifile.cn/a4/xmad_15408890613338_IOdDV.jpg" alt="" /></a> </li>
        </ul>
       </div>
       <div class="span16">
        <div id="match-content" class="tab-container">
         <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive"> 
          <li class="brick-item brick-item-m" data-gid="2181400001"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1181400002.html" data-log_code="reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6334&amp;bid=3038463.0&amp;page=home" data-stat-method="1_1" data-stat-index="0" data-stat-text="小米AI音箱" target="_blank" data-stat-pid="stat_首页.搭配热门_0_1_1" data-stat-aid="小米AI音箱" data-stat-id="小米AI音箱+stat_首页.搭配热门_0_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米AI音箱+stat_首页.搭配热门_0_1_1', '//item.mi.com/1181400002.html', 'pcpid', 'reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6334&amp;bid=3038463.0&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1522666970.27937468.jpg?width=150&amp;height=150" width="150" height="150" alt="小米AI音箱" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1181400002.html" data-log_code="reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6334&amp;bid=3038463.0&amp;page=home" data-stat-method="1_1" data-stat-index="0" data-stat-text="小米AI音箱" target="_blank" data-stat-pid="stat_首页.搭配热门_0_1_1" data-stat-aid="小米AI音箱" data-stat-id="小米AI音箱+stat_首页.搭配热门_0_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米AI音箱+stat_首页.搭配热门_0_1_1', '//item.mi.com/1181400002.html', 'pcpid', 'reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6334&amp;bid=3038463.0&amp;page=home']);"> 小米AI音箱 </a></h3> <p class="price"> <span class="num">299</span>元 </p> <p class="rank">6.2万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1181400002.html" data-log_code="reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6334&amp;bid=3038463.0&amp;page=home" data-stat-method="1_1" data-stat-index="0" data-stat-text="小米AI音箱" target="_blank" data-stat-pid="stat_首页.搭配热门_0_1_1" data-stat-aid="小米AI音箱" data-stat-id="小米AI音箱+stat_首页.搭配热门_0_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米AI音箱+stat_首页.搭配热门_0_1_1', '//item.mi.com/1181400002.html', 'pcpid', 'reccom_Collection_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6334&amp;bid=3038463.0&amp;page=home']);"> <span class="review">音质挺好的，收音也很灵敏</span> <span class="author"> 来自于 、 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2175000002"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1175000003.html" data-log_code="reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.1&amp;page=home" data-stat-method="1_1" data-stat-index="1" data-stat-text="新小米移动电源2（10000mAh）" target="_blank" data-stat-pid="stat_首页.搭配热门_1_1_1" data-stat-aid="新小米移动电源2（10000mAh）" data-stat-id="新小米移动电源2（10000mAh）+stat_首页.搭配热门_1_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-新小米移动电源210000mAh+stat_首页.搭配热门_1_1_1', '//item.mi.com/1175000003.html', 'pcpid', 'reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.1&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1513948456.57461422.jpg?width=150&amp;height=150" width="150" height="150" alt="新小米移动电源2（10000mAh）" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1175000003.html" data-log_code="reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.1&amp;page=home" data-stat-method="1_1" data-stat-index="1" data-stat-text="新小米移动电源2（10000mAh）" target="_blank" data-stat-pid="stat_首页.搭配热门_1_1_1" data-stat-aid="新小米移动电源2（10000mAh）" data-stat-id="新小米移动电源2（10000mAh）+stat_首页.搭配热门_1_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-新小米移动电源210000mAh+stat_首页.搭配热门_1_1_1', '//item.mi.com/1175000003.html', 'pcpid', 'reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.1&amp;page=home']);"> 新小米移动电源2（10000mAh） </a></h3> <p class="price"> <span class="num">79</span>元 </p> <p class="rank">1.7万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1175000003.html" data-log_code="reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.1&amp;page=home" data-stat-method="1_1" data-stat-index="1" data-stat-text="新小米移动电源2（10000mAh）" target="_blank" data-stat-pid="stat_首页.搭配热门_1_1_1" data-stat-aid="新小米移动电源2（10000mAh）" data-stat-id="新小米移动电源2（10000mAh）+stat_首页.搭配热门_1_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-新小米移动电源210000mAh+stat_首页.搭配热门_1_1_1', '//item.mi.com/1175000003.html', 'pcpid', 'reccom_Collection_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7463&amp;bid=3038463.1&amp;page=home']);"> <span class="review">还不错，外形不大还挺漂亮，颜色我也喜欢</span> <span class="author"> 来自于 杨显康 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2173600008"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1173600040.html" data-log_code="reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home" data-stat-method="1_1" data-stat-index="2" data-stat-text="小米移动电源2C（20000mAh）" target="_blank" data-stat-pid="stat_首页.搭配热门_2_1_1" data-stat-aid="小米移动电源2C（20000mAh）" data-stat-id="小米移动电源2C（20000mAh）+stat_首页.搭配热门_2_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源2C20000mAh+stat_首页.搭配热门_2_1_1', '//item.mi.com/1173600040.html', 'pcpid', 'reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1505264799.43246303.jpg?width=150&amp;height=150" width="150" height="150" alt="小米移动电源2C（20000mAh）" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1173600040.html" data-log_code="reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home" data-stat-method="1_1" data-stat-index="2" data-stat-text="小米移动电源2C（20000mAh）" target="_blank" data-stat-pid="stat_首页.搭配热门_2_1_1" data-stat-aid="小米移动电源2C（20000mAh）" data-stat-id="小米移动电源2C（20000mAh）+stat_首页.搭配热门_2_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源2C20000mAh+stat_首页.搭配热门_2_1_1', '//item.mi.com/1173600040.html', 'pcpid', 'reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home']);"> 小米移动电源2C（20000mAh） </a></h3> <p class="price"> <span class="num">119</span>元 
            <del>
             <span class="num">129</span>元
            </del> </p> <p class="rank">2.6万人评价</p> 
           <div class="flag flag-saleoff">
             享9.3折 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1173600040.html" data-log_code="reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home" data-stat-method="1_1" data-stat-index="2" data-stat-text="小米移动电源2C（20000mAh）" target="_blank" data-stat-pid="stat_首页.搭配热门_2_1_1" data-stat-aid="小米移动电源2C（20000mAh）" data-stat-id="小米移动电源2C（20000mAh）+stat_首页.搭配热门_2_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源2C20000mAh+stat_首页.搭配热门_2_1_1', '//item.mi.com/1173600040.html', 'pcpid', 'reccom_Collection_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6802&amp;bid=3038463.2&amp;page=home']);"> <span class="review">很好，不错！就是太重了。</span> <span class="author"> 来自于 788807311 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2183400004"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1183400004.html" data-log_code="reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8760&amp;bid=3038463.3&amp;page=home" data-stat-method="1_1" data-stat-index="3" data-stat-text="小米无线充电器（通用快充版）" target="_blank" data-stat-pid="stat_首页.搭配热门_3_1_1" data-stat-aid="小米无线充电器（通用快充版）" data-stat-id="小米无线充电器（通用快充版）+stat_首页.搭配热门_3_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米无线充电器通用快充版+stat_首页.搭配热门_3_1_1', '//item.mi.com/1183400004.html', 'pcpid', 'reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8760&amp;bid=3038463.3&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1535440524.10478102.jpg?width=150&amp;height=150" width="150" height="150" alt="小米无线充电器（通用快充版）" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1183400004.html" data-log_code="reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8760&amp;bid=3038463.3&amp;page=home" data-stat-method="1_1" data-stat-index="3" data-stat-text="小米无线充电器（通用快充版）" target="_blank" data-stat-pid="stat_首页.搭配热门_3_1_1" data-stat-aid="小米无线充电器（通用快充版）" data-stat-id="小米无线充电器（通用快充版）+stat_首页.搭配热门_3_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米无线充电器通用快充版+stat_首页.搭配热门_3_1_1', '//item.mi.com/1183400004.html', 'pcpid', 'reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8760&amp;bid=3038463.3&amp;page=home']);"> 小米无线充电器（通用快充版） </a></h3> <p class="price"> <span class="num">69</span>元 </p> <p class="rank">1396人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1183400004.html" data-log_code="reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8760&amp;bid=3038463.3&amp;page=home" data-stat-method="1_1" data-stat-index="3" data-stat-text="小米无线充电器（通用快充版）" target="_blank" data-stat-pid="stat_首页.搭配热门_3_1_1" data-stat-aid="小米无线充电器（通用快充版）" data-stat-id="小米无线充电器（通用快充版）+stat_首页.搭配热门_3_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米无线充电器通用快充版+stat_首页.搭配热门_3_1_1', '//item.mi.com/1183400004.html', 'pcpid', 'reccom_Collection_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8760&amp;bid=3038463.3&amp;page=home']);"> <span class="review">无线充电好神奇，感觉很高端。搭配上快充接口，充电速度...</span> <span class="author"> 来自于 灏天 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2164900009"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1164900021.html" data-log_code="reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.4&amp;page=home" data-stat-method="1_1" data-stat-index="4" data-stat-text="小米移动电源高配版（10000mAh）" target="_blank" data-stat-pid="stat_首页.搭配热门_4_1_1" data-stat-aid="小米移动电源高配版（10000mAh）" data-stat-id="小米移动电源高配版（10000mAh）+stat_首页.搭配热门_4_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源高配版10000mAh+stat_首页.搭配热门_4_1_1', '//item.mi.com/1164900021.html', 'pcpid', 'reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.4&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1481269289.59498154.jpg?width=150&amp;height=150" width="150" height="150" alt="小米移动电源高配版（10000mAh）" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1164900021.html" data-log_code="reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.4&amp;page=home" data-stat-method="1_1" data-stat-index="4" data-stat-text="小米移动电源高配版（10000mAh）" target="_blank" data-stat-pid="stat_首页.搭配热门_4_1_1" data-stat-aid="小米移动电源高配版（10000mAh）" data-stat-id="小米移动电源高配版（10000mAh）+stat_首页.搭配热门_4_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源高配版10000mAh+stat_首页.搭配热门_4_1_1', '//item.mi.com/1164900021.html', 'pcpid', 'reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.4&amp;page=home']);"> 小米移动电源高配版（10000mAh） </a></h3> <p class="price"> <span class="num">149</span>元 </p> <p class="rank">2.7万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1164900021.html" data-log_code="reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.4&amp;page=home" data-stat-method="1_1" data-stat-index="4" data-stat-text="小米移动电源高配版（10000mAh）" target="_blank" data-stat-pid="stat_首页.搭配热门_4_1_1" data-stat-aid="小米移动电源高配版（10000mAh）" data-stat-id="小米移动电源高配版（10000mAh）+stat_首页.搭配热门_4_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米移动电源高配版10000mAh+stat_首页.搭配热门_4_1_1', '//item.mi.com/1164900021.html', 'pcpid', 'reccom_Collection_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4998&amp;bid=3038463.4&amp;page=home']);"> <span class="review">很棒，能充两三次，也挺好看的。</span> <span class="author"> 来自于 小木จุ๊บ 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2172800014"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1172800022.html" data-log_code="reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6271&amp;bid=3038463.5&amp;page=home" data-stat-method="1_1" data-stat-index="5" data-stat-text="小米随身手电筒" target="_blank" data-stat-pid="stat_首页.搭配热门_5_1_1" data-stat-aid="小米随身手电筒" data-stat-id="小米随身手电筒+stat_首页.搭配热门_5_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米随身手电筒+stat_首页.搭配热门_5_1_1', '//item.mi.com/1172800022.html', 'pcpid', 'reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6271&amp;bid=3038463.5&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1506417289.23728408.jpg?width=150&amp;height=150" width="150" height="150" alt="小米随身手电筒" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1172800022.html" data-log_code="reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6271&amp;bid=3038463.5&amp;page=home" data-stat-method="1_1" data-stat-index="5" data-stat-text="小米随身手电筒" target="_blank" data-stat-pid="stat_首页.搭配热门_5_1_1" data-stat-aid="小米随身手电筒" data-stat-id="小米随身手电筒+stat_首页.搭配热门_5_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米随身手电筒+stat_首页.搭配热门_5_1_1', '//item.mi.com/1172800022.html', 'pcpid', 'reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6271&amp;bid=3038463.5&amp;page=home']);"> 小米随身手电筒 </a></h3> <p class="price"> <span class="num">76</span>元 
            <del>
             <span class="num">79</span>元
            </del> </p> <p class="rank">1.1万人评价</p> 
           <div class="flag flag-saleoff">
             享9.7折 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1172800022.html" data-log_code="reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6271&amp;bid=3038463.5&amp;page=home" data-stat-method="1_1" data-stat-index="5" data-stat-text="小米随身手电筒" target="_blank" data-stat-pid="stat_首页.搭配热门_5_1_1" data-stat-aid="小米随身手电筒" data-stat-id="小米随身手电筒+stat_首页.搭配热门_5_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米随身手电筒+stat_首页.搭配热门_5_1_1', '//item.mi.com/1172800022.html', 'pcpid', 'reccom_Collection_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6271&amp;bid=3038463.5&amp;page=home']);"> <span class="review">优秀</span> <span class="author"> 来自于 王大猫 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2174100028"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1174100029.html" data-log_code="reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7091&amp;bid=3038463.6&amp;page=home" data-stat-method="1_1" data-stat-index="6" data-stat-text="小米USB充电器（10W）" target="_blank" data-stat-pid="stat_首页.搭配热门_6_1_1" data-stat-aid="小米USB充电器（10W）" data-stat-id="小米USB充电器（10W）+stat_首页.搭配热门_6_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米USB充电器10W+stat_首页.搭配热门_6_1_1', '//item.mi.com/1174100029.html', 'pcpid', 'reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7091&amp;bid=3038463.6&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1507878667.12359513.jpg?width=150&amp;height=150" width="150" height="150" alt="小米USB充电器（10W）" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1174100029.html" data-log_code="reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7091&amp;bid=3038463.6&amp;page=home" data-stat-method="1_1" data-stat-index="6" data-stat-text="小米USB充电器（10W）" target="_blank" data-stat-pid="stat_首页.搭配热门_6_1_1" data-stat-aid="小米USB充电器（10W）" data-stat-id="小米USB充电器（10W）+stat_首页.搭配热门_6_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米USB充电器10W+stat_首页.搭配热门_6_1_1', '//item.mi.com/1174100029.html', 'pcpid', 'reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7091&amp;bid=3038463.6&amp;page=home']);"> 小米USB充电器（10W） </a></h3> <p class="price"> <span class="num">16.9</span>元 
            <del>
             <span class="num">19.9</span>元
            </del> </p> <p class="rank">3522人评价</p> 
           <div class="flag flag-saleoff">
             享9折 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1174100029.html" data-log_code="reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7091&amp;bid=3038463.6&amp;page=home" data-stat-method="1_1" data-stat-index="6" data-stat-text="小米USB充电器（10W）" target="_blank" data-stat-pid="stat_首页.搭配热门_6_1_1" data-stat-aid="小米USB充电器（10W）" data-stat-id="小米USB充电器（10W）+stat_首页.搭配热门_6_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米USB充电器10W+stat_首页.搭配热门_6_1_1', '//item.mi.com/1174100029.html', 'pcpid', 'reccom_Collection_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7091&amp;bid=3038463.6&amp;page=home']);"> <span class="review">外形美观，品质保证，小米为生活增添一点色彩！</span> <span class="author"> 来自于 晨♚曦 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="2171600001"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1171600001.html" data-log_code="reccom_Collection_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5677&amp;bid=3038463.7&amp;page=home" data-stat-method="1_1" data-stat-index="7" data-stat-text="小米降噪耳机Type-C版" target="_blank" data-stat-pid="stat_首页.搭配热门_7_1_1" data-stat-aid="小米降噪耳机Type-C版" data-stat-id="小米降噪耳机Type-C版+stat_首页.搭配热门_7_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米降噪耳机Type-C版+stat_首页.搭配热门_7_1_1', '//item.mi.com/1171600001.html', 'pcpid', 'reccom_Collection_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5677&amp;bid=3038463.7&amp;page=home']);"> <img src="//i1.mifile.cn/a1/pms_1492587660.55753313.jpg?width=80&amp;height=80" width="80" height="80" alt="小米降噪耳机Type-C版" /> </a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1171600001.html" data-log_code="reccom_Collection_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5677&amp;bid=3038463.7&amp;page=home" data-stat-method="1_1" data-stat-index="7" data-stat-text="小米降噪耳机Type-C版" target="_blank" data-stat-pid="stat_首页.搭配热门_7_1_1" data-stat-aid="小米降噪耳机Type-C版" data-stat-id="小米降噪耳机Type-C版+stat_首页.搭配热门_7_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米降噪耳机Type-C版+stat_首页.搭配热门_7_1_1', '//item.mi.com/1171600001.html', 'pcpid', 'reccom_Collection_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5677&amp;bid=3038463.7&amp;page=home']);">小米降噪耳机Type-C版</a></h3> <p class="price"><span class="num">259</span>元</p> </li> 
          <li class="brick-item brick-item-s"> 
           <div class="figure figure-more">
            <a href="//list.mi.com/dapei" target="_blank" data-stat-pid="stat_首页.搭配热门_undefined_undefined" data-stat-id="null+stat_首页.搭配热门_undefined_undefined" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-null+stat_首页.搭配热门_undefined_undefined', '//list.mi.com/dapei', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div> <a class="more" href="//list.mi.com/dapei" target="_blank" data-stat-pid="stat_首页.搭配热门_undefined_undefined" data-stat-id="null+stat_首页.搭配热门_undefined_undefined" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-null+stat_首页.搭配热门_undefined_undefined', '//list.mi.com/dapei', 'pcpid', '']);">浏览更多<small>热门</small></a> </li> 
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="2181100035"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/half-in-ear/?cfrom=search" data-stat-aid="AA19884" data-stat-pid="2_22_1_110" target="_blank" data-log_code="31pchomematch_right_1001033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.1&amp;pid=2181100035&amp;adm=4961" data-stat-id="AA19884+2_22_1_110" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19884+2_22_1_110', 'https://www.mi.com/half-in-ear/cfrom=search', 'pcpid', '31pchomematch_right_1001033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.1&amp;pid=2181100035&amp;adm=4961']);"><img src="//i1.mifile.cn/a1/pms_1521442671.5222520!220x220.jpg" width="150" height="150" alt="小米双单元半入耳式耳机 " /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/half-in-ear/?cfrom=search" data-stat-aid="AA19884" data-stat-pid="2_22_1_110" data-log_code="31pchomematch_right_1001033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.1&amp;pid=2181100035&amp;adm=4961" target="_blank" data-stat-id="AA19884+2_22_1_110" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19884+2_22_1_110', 'https://www.mi.com/half-in-ear/cfrom=search', 'pcpid', '31pchomematch_right_1001033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.1&amp;pid=2181100035&amp;adm=4961']);">小米双单元半入耳式耳机 </a></h3> <p class="price"> <span class="num">63</span>元 
            <del>
             <span class="num">69</span>元
            </del> </p> <p class="rank">4885人评价</p> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/half-in-ear/?cfrom=search" data-stat-aid="AA19884" data-stat-pid="2_22_1_110" data-log_code="31pchomematch_right_1001033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.1&amp;pid=2181100035&amp;adm=4961" target="_blank" data-stat-id="AA19884+2_22_1_110" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19884+2_22_1_110', 'https://www.mi.com/half-in-ear/cfrom=search', 'pcpid', '31pchomematch_right_1001033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.1&amp;pid=2181100035&amp;adm=4961']);"> <span class="review">收到就试了下，声音很好，就是不知道要怎么烧机。妹子有...</span> <span class="author"> 来自于 坤霞 的评价 <span class="date" data-date="1523764215"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2181200008"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1181200016.html" data-stat-aid="AA13763" data-stat-pid="2_22_2_111" target="_blank" data-log_code="31pchomematch_right_1002033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.2&amp;pid=2181200008&amp;adm=5413" data-stat-id="AA13763+2_22_2_111" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13763+2_22_2_111', '//item.mi.com/1181200016.html', 'pcpid', '31pchomematch_right_1002033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.2&amp;pid=2181200008&amp;adm=5413']);"><img src="//i1.mifile.cn/a1/pms_1522218089.59163508!220x220.jpg" width="150" height="150" alt="小米蓝牙项圈耳机 黑色" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1181200016.html" data-stat-aid="AA13763" data-stat-pid="2_22_2_111" data-log_code="31pchomematch_right_1002033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.2&amp;pid=2181200008&amp;adm=5413" target="_blank" data-stat-id="AA13763+2_22_2_111" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13763+2_22_2_111', '//item.mi.com/1181200016.html', 'pcpid', '31pchomematch_right_1002033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.2&amp;pid=2181200008&amp;adm=5413']);">小米蓝牙项圈耳机 黑色</a></h3> <p class="price"> <span class="num">279</span>元 
            <del>
             <span class="num">299</span>元
            </del> </p> <p class="rank">3768人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1181200016.html" data-stat-aid="AA13763" data-stat-pid="2_22_2_111" data-log_code="31pchomematch_right_1002033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.2&amp;pid=2181200008&amp;adm=5413" target="_blank" data-stat-id="AA13763+2_22_2_111" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13763+2_22_2_111', '//item.mi.com/1181200016.html', 'pcpid', '31pchomematch_right_1002033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.2&amp;pid=2181200008&amp;adm=5413']);"> <span class="review">和此卖家交流，不由得精神为之一振，自觉七经八脉为之一...</span> <span class="author"> 来自于 当当 的评价 <span class="date" data-date="1528295609"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1182100012"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://item.mi.com/product/8129.html" data-stat-aid="AA20904" data-stat-pid="2_22_3_112" target="_blank" data-log_code="31pchomematch_right_1003033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.3&amp;pid=1182100012&amp;adm=5542" data-stat-id="AA20904+2_22_3_112" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20904+2_22_3_112', 'https://item.mi.com/product/8129.html', 'pcpid', '31pchomematch_right_1003033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.3&amp;pid=1182100012&amp;adm=5542']);"><img src="//i1.mifile.cn/a1/pms_1527240178.74386819!220x220.jpg" width="150" height="150" alt="小米圈铁耳机2" /></a> 
           </div> <h3 class="title"> <a href="https://item.mi.com/product/8129.html" data-stat-aid="AA20904" data-stat-pid="2_22_3_112" data-log_code="31pchomematch_right_1003033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.3&amp;pid=1182100012&amp;adm=5542" target="_blank" data-stat-id="AA20904+2_22_3_112" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20904+2_22_3_112', 'https://item.mi.com/product/8129.html', 'pcpid', '31pchomematch_right_1003033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.3&amp;pid=1182100012&amp;adm=5542']);">小米圈铁耳机2</a></h3> <p class="price"> <span class="num">95</span>元 
            <del>
             <span class="num">99</span>元
            </del> </p> <p class="rank">1382人评价</p> 
           <div class="review-wrapper"> 
            <a href="https://item.mi.com/product/8129.html" data-stat-aid="AA20904" data-stat-pid="2_22_3_112" data-log_code="31pchomematch_right_1003033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.3&amp;pid=1182100012&amp;adm=5542" target="_blank" data-stat-id="AA20904+2_22_3_112" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20904+2_22_3_112', 'https://item.mi.com/product/8129.html', 'pcpid', '31pchomematch_right_1003033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.3&amp;pid=1182100012&amp;adm=5542']);"> <span class="review">这个快递我是吓到了，但是看在耳机的面子上我给你好评了哦</span> <span class="author"> 来自于 2167045652 的评价 <span class="date" data-date="1543373689"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2160800015"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/littleaudio/?cfrom=search" data-stat-aid="AA19886" data-stat-pid="2_22_4_113" target="_blank" data-log_code="31pchomematch_right_1004033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.4&amp;pid=2160800015&amp;adm=4963" data-stat-id="AA19886+2_22_4_113" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19886+2_22_4_113', 'https://www.mi.com/littleaudio/cfrom=search', 'pcpid', '31pchomematch_right_1004033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.4&amp;pid=2160800015&amp;adm=4963']);"><img src="//i1.mifile.cn/a1/T1IdZgB5hv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米随身蓝牙音箱 " /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/littleaudio/?cfrom=search" data-stat-aid="AA19886" data-stat-pid="2_22_4_113" data-log_code="31pchomematch_right_1004033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.4&amp;pid=2160800015&amp;adm=4963" target="_blank" data-stat-id="AA19886+2_22_4_113" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19886+2_22_4_113', 'https://www.mi.com/littleaudio/cfrom=search', 'pcpid', '31pchomematch_right_1004033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.4&amp;pid=2160800015&amp;adm=4963']);">小米随身蓝牙音箱 </a></h3> <p class="price"> <span class="num">65</span>元 
            <del>
             <span class="num">69</span>元
            </del> </p> <p class="rank">3.1万人评价</p> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/littleaudio/?cfrom=search" data-stat-aid="AA19886" data-stat-pid="2_22_4_113" data-log_code="31pchomematch_right_1004033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.4&amp;pid=2160800015&amp;adm=4963" target="_blank" data-stat-id="AA19886+2_22_4_113" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19886+2_22_4_113', 'https://www.mi.com/littleaudio/cfrom=search', 'pcpid', '31pchomematch_right_1004033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.4&amp;pid=2160800015&amp;adm=4963']);"> <span class="review">不错诶！不过没想到竟然这么小</span> <span class="author"> 来自于 蝉流行云 的评价 <span class="date" data-date="1525693028"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2163700009"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/bluetooth-earphone/?cfrom=search" data-stat-aid="AA19887" data-stat-pid="2_22_5_114" target="_blank" data-log_code="31pchomematch_right_1005033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.5&amp;pid=2163700009&amp;adm=4964" data-stat-id="AA19887+2_22_5_114" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19887+2_22_5_114', 'https://www.mi.com/bluetooth-earphone/cfrom=search', 'pcpid', '31pchomematch_right_1005033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.5&amp;pid=2163700009&amp;adm=4964']);"><img src="//i1.mifile.cn/a1/pms_1478248721.42297795!220x220.jpg" width="150" height="150" alt="小米蓝牙耳机青春版 " /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/bluetooth-earphone/?cfrom=search" data-stat-aid="AA19887" data-stat-pid="2_22_5_114" data-log_code="31pchomematch_right_1005033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.5&amp;pid=2163700009&amp;adm=4964" target="_blank" data-stat-id="AA19887+2_22_5_114" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19887+2_22_5_114', 'https://www.mi.com/bluetooth-earphone/cfrom=search', 'pcpid', '31pchomematch_right_1005033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.5&amp;pid=2163700009&amp;adm=4964']);">小米蓝牙耳机青春版 </a></h3> <p class="price"> <span class="num">52</span>元 
            <del>
             <span class="num">59</span>元
            </del> </p> <p class="rank">5.4万人评价</p> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/bluetooth-earphone/?cfrom=search" data-stat-aid="AA19887" data-stat-pid="2_22_5_114" data-log_code="31pchomematch_right_1005033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.5&amp;pid=2163700009&amp;adm=4964" target="_blank" data-stat-id="AA19887+2_22_5_114" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19887+2_22_5_114', 'https://www.mi.com/bluetooth-earphone/cfrom=search', 'pcpid', '31pchomematch_right_1005033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.5&amp;pid=2163700009&amp;adm=4964']);"> <span class="review">经济实惠，音质已经算不错的了</span> <span class="author"> 来自于 小米5尊享版 的评价 <span class="date" data-date="1514764776"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2173000007"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/sportearphone-mini/?cfrom=search" data-stat-aid="AA19888" data-stat-pid="2_22_6_115" target="_blank" data-log_code="31pchomematch_right_1006033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.6&amp;pid=2173000007&amp;adm=4965" data-stat-id="AA19888+2_22_6_115" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19888+2_22_6_115', 'https://www.mi.com/sportearphone-mini/cfrom=search', 'pcpid', '31pchomematch_right_1006033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.6&amp;pid=2173000007&amp;adm=4965']);"><img src="//i1.mifile.cn/a1/pms_1502093110.00979492!220x220.jpg" width="150" height="150" alt="小米运动蓝牙耳机mini " /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/sportearphone-mini/?cfrom=search" data-stat-aid="AA19888" data-stat-pid="2_22_6_115" data-log_code="31pchomematch_right_1006033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.6&amp;pid=2173000007&amp;adm=4965" target="_blank" data-stat-id="AA19888+2_22_6_115" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19888+2_22_6_115', 'https://www.mi.com/sportearphone-mini/cfrom=search', 'pcpid', '31pchomematch_right_1006033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.6&amp;pid=2173000007&amp;adm=4965']);">小米运动蓝牙耳机mini </a></h3> <p class="price"> <span class="num">150</span>元 
            <del>
             <span class="num">169</span>元
            </del> </p> <p class="rank">1.3万人评价</p> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/sportearphone-mini/?cfrom=search" data-stat-aid="AA19888" data-stat-pid="2_22_6_115" data-log_code="31pchomematch_right_1006033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.6&amp;pid=2173000007&amp;adm=4965" target="_blank" data-stat-id="AA19888+2_22_6_115" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19888+2_22_6_115', 'https://www.mi.com/sportearphone-mini/cfrom=search', 'pcpid', '31pchomematch_right_1006033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.6&amp;pid=2173000007&amp;adm=4965']);"> <span class="review">东西收到了，超爱， 买来健身和跑步...</span> <span class="author"> 来自于 824901741 的评价 <span class="date" data-date="1531398365"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2172600001"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/bluetooth-audio/?cfrom=search" data-stat-aid="AA19889" data-stat-pid="2_22_7_116" target="_blank" data-log_code="31pchomematch_right_1007033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.7&amp;pid=2172600001&amp;adm=4966" data-stat-id="AA19889+2_22_7_116" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19889+2_22_7_116', 'https://www.mi.com/bluetooth-audio/cfrom=search', 'pcpid', '31pchomematch_right_1007033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.7&amp;pid=2172600001&amp;adm=4966']);"><img src="//i1.mifile.cn/a1/pms_1499161620.42031583!220x220.jpg" width="150" height="150" alt="小米蓝牙音频接收器" /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/bluetooth-audio/?cfrom=search" data-stat-aid="AA19889" data-stat-pid="2_22_7_116" data-log_code="31pchomematch_right_1007033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.7&amp;pid=2172600001&amp;adm=4966" target="_blank" data-stat-id="AA19889+2_22_7_116" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19889+2_22_7_116', 'https://www.mi.com/bluetooth-audio/cfrom=search', 'pcpid', '31pchomematch_right_1007033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.7&amp;pid=2172600001&amp;adm=4966']);">小米蓝牙音频接收器</a></h3> <p class="price"> <span class="num">99</span>元 </p> <p class="rank">8933人评价</p> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/bluetooth-audio/?cfrom=search" data-stat-aid="AA19889" data-stat-pid="2_22_7_116" data-log_code="31pchomematch_right_1007033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.7&amp;pid=2172600001&amp;adm=4966" target="_blank" data-stat-id="AA19889+2_22_7_116" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19889+2_22_7_116', 'https://www.mi.com/bluetooth-audio/cfrom=search', 'pcpid', '31pchomematch_right_1007033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.7&amp;pid=2172600001&amp;adm=4966']);"> <span class="review">很不错，很实用。不过有一个那2头插头有什么用</span> <span class="author"> 来自于 汪泽玉 的评价 <span class="date" data-date="1519735665"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="2154300022"> 
           <div class="figure figure-img"> 
            <a href="https://www.mi.com/yinxiang/?cfrom=search" class="exposure" data-stat-aid="AA19890" data-stat-pid="2_22_8_117" data-log_code="31pchomematch_right_1008033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.8&amp;pid=2154300022&amp;adm=4967" target="_blank" data-stat-id="AA19890+2_22_8_117" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19890+2_22_8_117', 'https://www.mi.com/yinxiang/cfrom=search', 'pcpid', '31pchomematch_right_1008033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.8&amp;pid=2154300022&amp;adm=4967']);"> <img src="//i1.mifile.cn/a1/T1F5K_BjVv1RXrhCrK!220x220.jpg" width="80" height="80" alt="小米小钢炮蓝牙音箱2 " /> </a> 
           </div> <h3 class="title"><a href="https://www.mi.com/yinxiang/?cfrom=search" class="exposure" data-stat-aid="AA19890" data-stat-pid="2_22_8_117" data-log_code="31pchomematch_right_1008033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.8&amp;pid=2154300022&amp;adm=4967" target="_blank" data-stat-id="AA19890+2_22_8_117" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19890+2_22_8_117', 'https://www.mi.com/yinxiang/cfrom=search', 'pcpid', '31pchomematch_right_1008033#t=normal&amp;act=other&amp;page=home&amp;bid=3030342.8&amp;pid=2154300022&amp;adm=4967']);">小米小钢炮蓝牙音箱2 </a></h3> <p class="price"><span class="num">119</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="//list.mi.com/17" target="_blank" data-stat-id="011a5fa7bd5f92be" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-011a5fa7bd5f92be', '//list.mi.com/17', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="//list.mi.com/17" target="_blank" data-stat-id="c4bb81a3662df722" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-c4bb81a3662df722', '//list.mi.com/17', 'pcpid', '']);">浏览更多<small>耳机音箱</small></a></li>
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="2164900010"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/batterytwins/" data-stat-aid="AA17446" data-stat-pid="2_23_1_118" target="_blank" data-log_code="31pchomematch_right_2001034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845" data-stat-id="AA17446+2_23_1_118" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17446+2_23_1_118', 'http://www.mi.com/batterytwins/', 'pcpid', '31pchomematch_right_2001034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845']);"><img src="//i1.mifile.cn/a1/pms_1481273468.72564539!220x220.jpg" width="150" height="150" alt="小米移动电源10000mAh高配版" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/batterytwins/" data-stat-aid="AA17446" data-stat-pid="2_23_1_118" data-log_code="31pchomematch_right_2001034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845" target="_blank" data-stat-id="AA17446+2_23_1_118" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17446+2_23_1_118', 'http://www.mi.com/batterytwins/', 'pcpid', '31pchomematch_right_2001034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845']);">小米移动电源10000mAh高配版</a></h3> <p class="price"> <span class="num">149</span>元 </p> <p class="rank">2.7万人评价</p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/batterytwins/" data-stat-aid="AA17446" data-stat-pid="2_23_1_118" data-log_code="31pchomematch_right_2001034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845" target="_blank" data-stat-id="AA17446+2_23_1_118" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17446+2_23_1_118', 'http://www.mi.com/batterytwins/', 'pcpid', '31pchomematch_right_2001034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.1&amp;pid=2164900010&amp;adm=2845']);"> <span class="review">据说我今年能脱单</span> <span class="author"> 来自于 诺 的评价 <span class="date" data-date="1514689522"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2173600008"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1173600040.html" data-stat-aid="AA18189" data-stat-pid="2_23_2_119" target="_blank" data-log_code="31pchomematch_right_2002034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160" data-stat-id="AA18189+2_23_2_119" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18189+2_23_2_119', '//item.mi.com/1173600040.html', 'pcpid', '31pchomematch_right_2002034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160']);"><img src="//i1.mifile.cn/a1/pms_1505264799.43246303!220x220.jpg" width="150" height="150" alt="小米移动电源2C 20000mAh" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1173600040.html" data-stat-aid="AA18189" data-stat-pid="2_23_2_119" data-log_code="31pchomematch_right_2002034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160" target="_blank" data-stat-id="AA18189+2_23_2_119" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18189+2_23_2_119', '//item.mi.com/1173600040.html', 'pcpid', '31pchomematch_right_2002034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160']);">小米移动电源2C 20000mAh</a></h3> <p class="price"> <span class="num">119</span>元 
            <del>
             <span class="num">129</span>元
            </del> </p> <p class="rank">2.6万人评价</p> 
           <div class="flag flag-new">
            新品
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1173600040.html" data-stat-aid="AA18189" data-stat-pid="2_23_2_119" data-log_code="31pchomematch_right_2002034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160" target="_blank" data-stat-id="AA18189+2_23_2_119" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18189+2_23_2_119', '//item.mi.com/1173600040.html', 'pcpid', '31pchomematch_right_2002034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.2&amp;pid=2173600008&amp;adm=4160']);"> <span class="review">外形有点蠢，但是续航能力还是不错的！</span> <span class="author"> 来自于 夏末桑 的评价 <span class="date" data-date="1511931061"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2144800001"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/dianyuan5000/" data-stat-aid="AA10703" data-stat-pid="2_23_3_120" target="_blank" data-log_code="31pchomematch_right_2003034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32" data-stat-id="AA10703+2_23_3_120" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10703+2_23_3_120', 'http://www.mi.com/dianyuan5000/', 'pcpid', '31pchomematch_right_2003034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32']);"><img src="//i1.mifile.cn/a1/T1pZbvBTET1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米移动电源5000mAh" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/dianyuan5000/" data-stat-aid="AA10703" data-stat-pid="2_23_3_120" data-log_code="31pchomematch_right_2003034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32" target="_blank" data-stat-id="AA10703+2_23_3_120" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10703+2_23_3_120', 'http://www.mi.com/dianyuan5000/', 'pcpid', '31pchomematch_right_2003034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32']);">小米移动电源5000mAh</a></h3> <p class="price"> <span class="num">49</span>元 </p> <p class="rank">10.9万人评价</p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/dianyuan5000/" data-stat-aid="AA10703" data-stat-pid="2_23_3_120" data-log_code="31pchomematch_right_2003034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32" target="_blank" data-stat-id="AA10703+2_23_3_120" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10703+2_23_3_120', 'http://www.mi.com/dianyuan5000/', 'pcpid', '31pchomematch_right_2003034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.3&amp;pid=2144800001&amp;adm=32']);"> <span class="review">不错哦，外观很漂亮，发货也很快，第二天就收到了</span> <span class="author"> 来自于 奶黄包 的评价 <span class="date" data-date="1512463460"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1154900068"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1154900068.html" data-stat-aid="AA20005" data-stat-pid="2_23_4_121" target="_blank" data-log_code="31pchomematch_right_2004034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.4&amp;pid=1154900068&amp;adm=5039" data-stat-id="AA20005+2_23_4_121" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20005+2_23_4_121', '//item.mi.com/1154900068.html', 'pcpid', '31pchomematch_right_2004034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.4&amp;pid=1154900068&amp;adm=5039']);"><img src="//i1.mifile.cn/a1/T1eKdgB4xv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米电源线收纳盒" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1154900068.html" data-stat-aid="AA20005" data-stat-pid="2_23_4_121" data-log_code="31pchomematch_right_2004034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.4&amp;pid=1154900068&amp;adm=5039" target="_blank" data-stat-id="AA20005+2_23_4_121" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20005+2_23_4_121', '//item.mi.com/1154900068.html', 'pcpid', '31pchomematch_right_2004034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.4&amp;pid=1154900068&amp;adm=5039']);">小米电源线收纳盒</a></h3> <p class="price"> <span class="num">49</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1154900068.html" data-stat-aid="AA20005" data-stat-pid="2_23_4_121" data-log_code="31pchomematch_right_2004034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.4&amp;pid=1154900068&amp;adm=5039" target="_blank" data-stat-id="AA20005+2_23_4_121" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20005+2_23_4_121', '//item.mi.com/1154900068.html', 'pcpid', '31pchomematch_right_2004034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.4&amp;pid=1154900068&amp;adm=5039']);"> <span class="review">真的是家庭必备品，瞬间不在凌乱，完美，好喜欢，需要的...</span> <span class="author"> 来自于 驱逐舰 的评价 <span class="date" data-date="1456843731"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2163900008"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/battery2/" data-stat-aid="AA14453" data-stat-pid="2_23_5_122" target="_blank" data-log_code="31pchomematch_right_2005034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844" data-stat-id="AA14453+2_23_5_122" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14453+2_23_5_122', 'http://www.mi.com/battery2/', 'pcpid', '31pchomematch_right_2005034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844']);"><img src="//i1.mifile.cn/a1/pms_1476688190.21955893!220x220.jpg" width="150" height="150" alt="10000mAh小米移动电源2" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/battery2/" data-stat-aid="AA14453" data-stat-pid="2_23_5_122" data-log_code="31pchomematch_right_2005034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844" target="_blank" data-stat-id="AA14453+2_23_5_122" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14453+2_23_5_122', 'http://www.mi.com/battery2/', 'pcpid', '31pchomematch_right_2005034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844']);">10000mAh小米移动电源2</a></h3> <p class="price"> <span class="num">79</span>元 </p> <p class="rank">7万人评价</p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/battery2/" data-stat-aid="AA14453" data-stat-pid="2_23_5_122" data-log_code="31pchomematch_right_2005034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844" target="_blank" data-stat-id="AA14453+2_23_5_122" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14453+2_23_5_122', 'http://www.mi.com/battery2/', 'pcpid', '31pchomematch_right_2005034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.5&amp;pid=2163900008&amp;adm=2844']);"> <span class="review">一直都相信小米的品质，杠杠的，之前有一个小米移动电源...</span> <span class="author"> 来自于 Rex 的评价 <span class="date" data-date="1502083632"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2164400030"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1164400032.html" data-stat-aid="AA17510" data-stat-pid="2_23_6_123" target="_blank" data-log_code="31pchomematch_right_2006034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577" data-stat-id="AA17510+2_23_6_123" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17510+2_23_6_123', '//item.mi.com/1164400032.html', 'pcpid', '31pchomematch_right_2006034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577']);"><img src="//i1.mifile.cn/a1/pms_1478070969.5786053!220x220.jpg" width="150" height="150" alt="小米二合一数据线" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1164400032.html" data-stat-aid="AA17510" data-stat-pid="2_23_6_123" data-log_code="31pchomematch_right_2006034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577" target="_blank" data-stat-id="AA17510+2_23_6_123" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17510+2_23_6_123', '//item.mi.com/1164400032.html', 'pcpid', '31pchomematch_right_2006034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577']);">小米二合一数据线</a></h3> <p class="price"> <span class="num">18.9</span>元 
            <del>
             <span class="num">19.9</span>元
            </del> </p> <p class="rank">2万人评价</p> 
           <div class="flag flag-saleoff">
             减 1 元 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1164400032.html" data-stat-aid="AA17510" data-stat-pid="2_23_6_123" data-log_code="31pchomematch_right_2006034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577" target="_blank" data-stat-id="AA17510+2_23_6_123" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA17510+2_23_6_123', '//item.mi.com/1164400032.html', 'pcpid', '31pchomematch_right_2006034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.6&amp;pid=2164400030&amp;adm=2577']);"> <span class="review">大王给配了这个插头就可以带着小米5 带着充电宝去巡山...</span> <span class="author"> 来自于 王磊 的评价 <span class="date" data-date="1478745936"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1172100023"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1172100023.html" data-stat-aid="AA21102" data-stat-pid="2_23_7_124" target="_blank" data-log_code="31pchomematch_right_2007034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.7&amp;pid=1172100023&amp;adm=5687" data-stat-id="AA21102+2_23_7_124" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21102+2_23_7_124', '//item.mi.com/1172100023.html', 'pcpid', '31pchomematch_right_2007034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.7&amp;pid=1172100023&amp;adm=5687']);"><img src="//i1.mifile.cn/a1/pms_1497595116.43497902!220x220.jpg" width="150" height="150" alt="小米车载充电器快充版" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1172100023.html" data-stat-aid="AA21102" data-stat-pid="2_23_7_124" data-log_code="31pchomematch_right_2007034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.7&amp;pid=1172100023&amp;adm=5687" target="_blank" data-stat-id="AA21102+2_23_7_124" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21102+2_23_7_124', '//item.mi.com/1172100023.html', 'pcpid', '31pchomematch_right_2007034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.7&amp;pid=1172100023&amp;adm=5687']);">小米车载充电器快充版</a></h3> <p class="price"> <span class="num">69</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1172100023.html" data-stat-aid="AA21102" data-stat-pid="2_23_7_124" data-log_code="31pchomematch_right_2007034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.7&amp;pid=1172100023&amp;adm=5687" target="_blank" data-stat-id="AA21102+2_23_7_124" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21102+2_23_7_124', '//item.mi.com/1172100023.html', 'pcpid', '31pchomematch_right_2007034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.7&amp;pid=1172100023&amp;adm=5687']);"> <span class="review">兩顆擺一起特別有質感，感恩小米不斷推出良心商品</span> <span class="author"> 来自于 Skyfu 的评价 <span class="date" data-date="1504597225"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="2155200004"> 
           <div class="figure figure-img"> 
            <a href="http://www.mi.com/chaxianban2/" class="exposure" data-stat-aid="AA14646" data-stat-pid="2_23_8_125" data-log_code="31pchomematch_right_2008034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.8&amp;pid=2155200004&amp;adm=1662" target="_blank" data-stat-id="AA14646+2_23_8_125" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14646+2_23_8_125', 'http://www.mi.com/chaxianban2/', 'pcpid', '31pchomematch_right_2008034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.8&amp;pid=2155200004&amp;adm=1662']);"> <img src="//i1.mifile.cn/a4/T13mDQBjCT1RXrhCrK.jpg" width="80" height="80" alt="小米智能插线板" /> </a> 
           </div> <h3 class="title"><a href="http://www.mi.com/chaxianban2/" class="exposure" data-stat-aid="AA14646" data-stat-pid="2_23_8_125" data-log_code="31pchomematch_right_2008034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.8&amp;pid=2155200004&amp;adm=1662" target="_blank" data-stat-id="AA14646+2_23_8_125" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14646+2_23_8_125', 'http://www.mi.com/chaxianban2/', 'pcpid', '31pchomematch_right_2008034#t=normal&amp;act=other&amp;page=home&amp;bid=3030343.8&amp;pid=2155200004&amp;adm=1662']);">小米智能插线板</a></h3> <p class="price"><span class="num">69</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="//list.mi.com/11" target="_blank" data-stat-id="6bc9ce071ec9169e" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-6bc9ce071ec9169e', '//list.mi.com/11', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="//list.mi.com/11" target="_blank" data-stat-id="e8a0c2565255291b" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e8a0c2565255291b', '//list.mi.com/11', 'pcpid', '']);">浏览更多<small>电源</small></a></li>
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="1183400004"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1183400004.html" data-stat-aid="AA21105" data-stat-pid="2_24_1_126" target="_blank" data-log_code="31pchomematch_right_3001035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.1&amp;pid=1183400004&amp;adm=5691" data-stat-id="AA21105+2_24_1_126" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21105+2_24_1_126', '//item.mi.com/1183400004.html', 'pcpid', '31pchomematch_right_3001035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.1&amp;pid=1183400004&amp;adm=5691']);"><img src="//i1.mifile.cn/a1/pms_1535440524.10478102!220x220.jpg" width="150" height="150" alt="小米无线充电器（通用快充版）" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1183400004.html" data-stat-aid="AA21105" data-stat-pid="2_24_1_126" data-log_code="31pchomematch_right_3001035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.1&amp;pid=1183400004&amp;adm=5691" target="_blank" data-stat-id="AA21105+2_24_1_126" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21105+2_24_1_126', '//item.mi.com/1183400004.html', 'pcpid', '31pchomematch_right_3001035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.1&amp;pid=1183400004&amp;adm=5691']);">小米无线充电器（通用快充版）</a></h3> <p class="price"> <span class="num">69</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1183400004.html" data-stat-aid="AA21105" data-stat-pid="2_24_1_126" data-log_code="31pchomematch_right_3001035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.1&amp;pid=1183400004&amp;adm=5691" target="_blank" data-stat-id="AA21105+2_24_1_126" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21105+2_24_1_126', '//item.mi.com/1183400004.html', 'pcpid', '31pchomematch_right_3001035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.1&amp;pid=1183400004&amp;adm=5691']);"> <span class="review">做工精细！外观圆润！手机戴壳都可以充电！</span> <span class="author"> 来自于 1286150048 的评价 <span class="date" data-date="1539943277"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1170100002"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1170100002.html" data-stat-aid="AA15225" data-stat-pid="2_24_2_127" target="_blank" data-log_code="31pchomematch_right_3002035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165" data-stat-id="AA15225+2_24_2_127" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15225+2_24_2_127', '//item.mi.com/1170100002.html', 'pcpid', '31pchomematch_right_3002035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165']);"><img src="//i1.mifile.cn/a1/pms_1484034162.02747540!220x220.jpg" width="150" height="150" alt="小米USB充电器（2口）" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1170100002.html" data-stat-aid="AA15225" data-stat-pid="2_24_2_127" data-log_code="31pchomematch_right_3002035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165" target="_blank" data-stat-id="AA15225+2_24_2_127" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15225+2_24_2_127', '//item.mi.com/1170100002.html', 'pcpid', '31pchomematch_right_3002035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165']);">小米USB充电器（2口）</a></h3> <p class="price"> <span class="num">39</span>元 
            <del>
             <span class="num">49</span>元
            </del> </p> <p class="rank">2.2万人评价</p> 
           <div class="flag flag-saleoff">
             享8折 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1170100002.html" data-stat-aid="AA15225" data-stat-pid="2_24_2_127" data-log_code="31pchomematch_right_3002035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165" target="_blank" data-stat-id="AA15225+2_24_2_127" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15225+2_24_2_127', '//item.mi.com/1170100002.html', 'pcpid', '31pchomematch_right_3002035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.2&amp;pid=1170100002&amp;adm=3165']);"> <span class="review">小爱同学我刚刚查了一下，646分。这么多年来的默默付...</span> <span class="author"> 来自于 未设置 的评价 <span class="date" data-date="1530145664"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2154300020"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1154300033.html" data-stat-aid="AA11638" data-stat-pid="2_24_3_128" target="_blank" data-log_code="31pchomematch_right_3003035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141" data-stat-id="AA11638+2_24_3_128" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11638+2_24_3_128', '//item.mi.com/1154300033.html', 'pcpid', '31pchomematch_right_3003035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141']);"><img src="//i1.mifile.cn/a1/T1xxVTBghv1RXrhCrK!220x220.jpg" width="150" height="150" alt="彩虹5号电池（10粒装）" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1154300033.html" data-stat-aid="AA11638" data-stat-pid="2_24_3_128" data-log_code="31pchomematch_right_3003035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141" target="_blank" data-stat-id="AA11638+2_24_3_128" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11638+2_24_3_128', '//item.mi.com/1154300033.html', 'pcpid', '31pchomematch_right_3003035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141']);">彩虹5号电池（10粒装）</a></h3> <p class="price"> <span class="num">9.9</span>元 </p> <p class="rank">12.9万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1154300033.html" data-stat-aid="AA11638" data-stat-pid="2_24_3_128" data-log_code="31pchomematch_right_3003035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141" target="_blank" data-stat-id="AA11638+2_24_3_128" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11638+2_24_3_128', '//item.mi.com/1154300033.html', 'pcpid', '31pchomematch_right_3003035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.3&amp;pid=2154300020&amp;adm=1141']);"> <span class="review">可以说是电池界的女神，美美哒！</span> <span class="author"> 来自于 931009312 的评价 <span class="date" data-date="1504599196"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1180500019"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1180500019.html" data-stat-aid="AA21104" data-stat-pid="2_24_4_129" target="_blank" data-log_code="31pchomematch_right_3004035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.4&amp;pid=1180500019&amp;adm=5689" data-stat-id="AA21104+2_24_4_129" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21104+2_24_4_129', '//item.mi.com/1180500019.html', 'pcpid', '31pchomematch_right_3004035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.4&amp;pid=1180500019&amp;adm=5689']);"><img src="//i1.mifile.cn/a1/pms_1517552384.30355703!220x220.jpg" width="150" height="150" alt="小米USB充电器60W快充版（6口）" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1180500019.html" data-stat-aid="AA21104" data-stat-pid="2_24_4_129" data-log_code="31pchomematch_right_3004035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.4&amp;pid=1180500019&amp;adm=5689" target="_blank" data-stat-id="AA21104+2_24_4_129" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21104+2_24_4_129', '//item.mi.com/1180500019.html', 'pcpid', '31pchomematch_right_3004035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.4&amp;pid=1180500019&amp;adm=5689']);">小米USB充电器60W快充版（6口）</a></h3> <p class="price"> <span class="num">129</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1180500019.html" data-stat-aid="AA21104" data-stat-pid="2_24_4_129" data-log_code="31pchomematch_right_3004035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.4&amp;pid=1180500019&amp;adm=5689" target="_blank" data-stat-id="AA21104+2_24_4_129" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21104+2_24_4_129', '//item.mi.com/1180500019.html', 'pcpid', '31pchomematch_right_3004035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.4&amp;pid=1180500019&amp;adm=5689']);"> <span class="review">刚刚好和这个破掉的镜子形成这种不协调的美感！就是不一...</span> <span class="author"> 来自于 喜喜 的评价 <span class="date" data-date="1538818771"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1174100029"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1174100029.html" data-stat-aid="AA21103" data-stat-pid="2_24_5_130" target="_blank" data-log_code="31pchomematch_right_3005035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.5&amp;pid=1174100029&amp;adm=5688" data-stat-id="AA21103+2_24_5_130" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21103+2_24_5_130', '//item.mi.com/1174100029.html', 'pcpid', '31pchomematch_right_3005035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.5&amp;pid=1174100029&amp;adm=5688']);"><img src="//i1.mifile.cn/a1/pms_1507878667.12359513!220x220.jpg" width="150" height="150" alt="小米USB充电器（10W）" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1174100029.html" data-stat-aid="AA21103" data-stat-pid="2_24_5_130" data-log_code="31pchomematch_right_3005035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.5&amp;pid=1174100029&amp;adm=5688" target="_blank" data-stat-id="AA21103+2_24_5_130" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21103+2_24_5_130', '//item.mi.com/1174100029.html', 'pcpid', '31pchomematch_right_3005035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.5&amp;pid=1174100029&amp;adm=5688']);">小米USB充电器（10W）</a></h3> <p class="price"> <span class="num">19.9</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1174100029.html" data-stat-aid="AA21103" data-stat-pid="2_24_5_130" data-log_code="31pchomematch_right_3005035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.5&amp;pid=1174100029&amp;adm=5688" target="_blank" data-stat-id="AA21103+2_24_5_130" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21103+2_24_5_130', '//item.mi.com/1174100029.html', 'pcpid', '31pchomematch_right_3005035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.5&amp;pid=1174100029&amp;adm=5688']);"> <span class="review">用这还可以不算很贵，质量没的说，一直用小米，也很喜欢...</span> <span class="author"> 来自于 石头河 的评价 <span class="date" data-date="1516868482"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1180800004"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1180800004.html" data-stat-aid="AA21285" data-stat-pid="2_24_6_131" target="_blank" data-log_code="31pchomematch_right_3006035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.6&amp;pid=1180800004&amp;adm=5798" data-stat-id="AA21285+2_24_6_131" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21285+2_24_6_131', '//item.mi.com/1180800004.html', 'pcpid', '31pchomematch_right_3006035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.6&amp;pid=1180800004&amp;adm=5798']);"><img src="//i1.mifile.cn/a1/pms_1521784952.67735645!220x220.jpg" width="150" height="150" alt="小米USB充电器36W快充版（2口）" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1180800004.html" data-stat-aid="AA21285" data-stat-pid="2_24_6_131" data-log_code="31pchomematch_right_3006035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.6&amp;pid=1180800004&amp;adm=5798" target="_blank" data-stat-id="AA21285+2_24_6_131" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21285+2_24_6_131', '//item.mi.com/1180800004.html', 'pcpid', '31pchomematch_right_3006035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.6&amp;pid=1180800004&amp;adm=5798']);">小米USB充电器36W快充版（2口）</a></h3> <p class="price"> <span class="num">59</span>元 </p> <p class="rank">1861人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1180800004.html" data-stat-aid="AA21285" data-stat-pid="2_24_6_131" data-log_code="31pchomematch_right_3006035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.6&amp;pid=1180800004&amp;adm=5798" target="_blank" data-stat-id="AA21285+2_24_6_131" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21285+2_24_6_131', '//item.mi.com/1180800004.html', 'pcpid', '31pchomematch_right_3006035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.6&amp;pid=1180800004&amp;adm=5798']);"> <span class="review">快递速度非常的快，东西也非常的好！快充感觉就是好！</span> <span class="author"> 来自于 1448042542 的评价 <span class="date" data-date="1542114000"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1172100023"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1172100023.html" data-stat-aid="AA21152" data-stat-pid="2_24_7_132" target="_blank" data-log_code="31pchomematch_right_3007035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.7&amp;pid=1172100023&amp;adm=5716" data-stat-id="AA21152+2_24_7_132" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21152+2_24_7_132', '//item.mi.com/1172100023.html', 'pcpid', '31pchomematch_right_3007035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.7&amp;pid=1172100023&amp;adm=5716']);"><img src="//i1.mifile.cn/a1/pms_1497595116.43497902!220x220.jpg" width="150" height="150" alt="小米车载充电器快充版" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1172100023.html" data-stat-aid="AA21152" data-stat-pid="2_24_7_132" data-log_code="31pchomematch_right_3007035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.7&amp;pid=1172100023&amp;adm=5716" target="_blank" data-stat-id="AA21152+2_24_7_132" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21152+2_24_7_132', '//item.mi.com/1172100023.html', 'pcpid', '31pchomematch_right_3007035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.7&amp;pid=1172100023&amp;adm=5716']);">小米车载充电器快充版</a></h3> <p class="price"> <span class="num">69</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1172100023.html" data-stat-aid="AA21152" data-stat-pid="2_24_7_132" data-log_code="31pchomematch_right_3007035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.7&amp;pid=1172100023&amp;adm=5716" target="_blank" data-stat-id="AA21152+2_24_7_132" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21152+2_24_7_132', '//item.mi.com/1172100023.html', 'pcpid', '31pchomematch_right_3007035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.7&amp;pid=1172100023&amp;adm=5716']);"> <span class="review">兩顆擺一起特別有質感，感恩小米不斷推出良心商品</span> <span class="author"> 来自于 Skyfu 的评价 <span class="date" data-date="1504597225"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="1184300031"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1184300031.html" class="exposure" data-stat-aid="AA21153" data-stat-pid="2_24_8_133" data-log_code="31pchomematch_right_3008035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.8&amp;pid=1184300031&amp;adm=5717" target="_blank" data-stat-id="AA21153+2_24_8_133" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21153+2_24_8_133', '//item.mi.com/1184300031.html', 'pcpid', '31pchomematch_right_3008035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.8&amp;pid=1184300031&amp;adm=5717']);"> <img src="//i1.mifile.cn/a1/pms_1540442105.68663719!220x220.jpg" width="80" height="80" alt="小米车载充电器快充版（18W）" /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1184300031.html" class="exposure" data-stat-aid="AA21153" data-stat-pid="2_24_8_133" data-log_code="31pchomematch_right_3008035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.8&amp;pid=1184300031&amp;adm=5717" target="_blank" data-stat-id="AA21153+2_24_8_133" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21153+2_24_8_133', '//item.mi.com/1184300031.html', 'pcpid', '31pchomematch_right_3008035#t=normal&amp;act=other&amp;page=home&amp;bid=3030344.8&amp;pid=1184300031&amp;adm=5717']);">小米车载充电器快充版（18W）</a></h3> <p class="price"><span class="num">49</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="//list.mi.com/135" target="_blank" data-stat-id="67d551c670143b17" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-67d551c670143b17', '//list.mi.com/135', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="//list.mi.com/135" target="_blank" data-stat-id="75b1bb061cc1374d" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-75b1bb061cc1374d', '//list.mi.com/135', 'pcpid', '']);">浏览更多<small>电池存储卡</small></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div> 
    </div> 
    <div class="J_itemBox J_homeBanner home-banner-box home-banner-box-brick is-visible" data-index="5">
     <a href="//item.mi.com/product/4679.html" target="_blank" data-log_code="31pchomebanner_5001015#t=normal&amp;act=other&amp;page=home&amp;bid=3186794.1&amp;adm=4870" data-stat-id="55a576b16cdf6598" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-55a576b16cdf6598', '//item.mi.com/product/4679.html', 'pcpid', '31pchomebanner_5001015#t=normal&amp;act=other&amp;page=home&amp;bid=3186794.1&amp;adm=4870']);"> <img class="" alt="小米便携鼠标" width="1226" src="//i1.mifile.cn/a4/xmad_15204798088946_YvzWs.jpg" /></a>
    </div> 
    <div id="accessories" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded" data-from-stat="true" data-region-stat="1" data-log_codes="reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8136&amp;bid=3038462.0&amp;page=home;reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8138&amp;bid=3038462.1&amp;page=home;reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8866&amp;bid=3038462.2&amp;page=home;reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7730&amp;bid=3038462.3&amp;page=home;reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8863&amp;bid=3038462.4&amp;page=home;reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9007&amp;bid=3038462.5&amp;page=home;reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8170&amp;bid=3038462.6&amp;page=home;reccom_Accessory_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7788&amp;bid=3038462.7&amp;page=home;31pchomeaccessories_right_1001038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.1&amp;pid=1182300044&amp;adm=5720;31pchomeaccessories_right_1002038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.2&amp;pid=1173100068&amp;adm=5758;31pchomeaccessories_right_1003038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.3&amp;pid=1181100003&amp;adm=5693;31pchomeaccessories_right_1004038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.4&amp;pid=2181600008&amp;adm=5195;31pchomeaccessories_right_1005038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.5&amp;pid=1182300048&amp;adm=5759;31pchomeaccessories_right_1006038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.6&amp;pid=1162900031&amp;adm=5760;31pchomeaccessories_right_1007038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.7&amp;pid=1174900012&amp;adm=5145;31pchomeaccessories_right_1008038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.8&amp;pid=1174700047&amp;adm=5146;31pchomeaccessories_right_2001039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073;31pchomeaccessories_right_2002039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.2&amp;pid=2181600006&amp;adm=5267;31pchomeaccessories_right_2003039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.3&amp;pid=1184300028&amp;adm=5694;31pchomeaccessories_right_2004039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456;31pchomeaccessories_right_2005039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.5&amp;pid=1182300043&amp;adm=5721;31pchomeaccessories_right_2006039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458;31pchomeaccessories_right_2007039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.7&amp;pid=7790&amp;adm=5074;31pchomeaccessories_right_2008039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.8&amp;pid=1182300047&amp;adm=5722;31pchomeaccessories_right_3001040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380;31pchomeaccessories_right_3002040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547;31pchomeaccessories_right_3003040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459;31pchomeaccessories_right_3004040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460;31pchomeaccessories_right_3005040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849;31pchomeaccessories_right_3006040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.6&amp;pid=1173700017&amp;adm=5695;31pchomeaccessories_right_3007040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664;31pchomeaccessories_right_3008040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.8&amp;pid=1164700050&amp;adm=3230"> 
     <div class="box-hd"> 
      <h2 class="title">配件</h2> 
      <div class="more J_brickNav">
       <ul class="tab-list J_brickTabSwitch" data-tab-target="accessories-content">
        <li class="tab-active">热门</li>
        <li>保护套</li>
        <li>贴膜</li>
        <li>其他配件</li>
       </ul>
      </div> 
     </div> 
     <div class="box-bd J_brickBd">
      <div class="row">
       <div class="span4 span-first">
        <ul class="brick-promo-list clearfix"> 
         <li class="brick-item brick-item-m"> <a href="https://item.mi.com/product/9016.html" class="exposure" data-stat-aid="AA21196" data-stat-pid="2_25_1_134" data-log_code="31pchomeaccessories_left001036#t=normal&amp;act=other&amp;page=home&amp;bid=3030345.1&amp;adm=5737" target="_blank" data-stat-id="AA21196+2_25_1_134" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21196+2_25_1_134', 'https://item.mi.com/product/9016.html', 'pcpid', '31pchomeaccessories_left001036#t=normal&amp;act=other&amp;page=home&amp;bid=3030345.1&amp;adm=5737']);"><img src="//i1.mifile.cn/a4/xmad_15438026207445_MFOpC.jpg" alt="" /></a> </li> 
         <li class="brick-item brick-item-m"> <a href="https://item.mi.com/product/8881.html" class="exposure" data-stat-aid="AA21068" data-stat-pid="2_25_2_135" data-log_code="31pchomeaccessories_left002036#t=normal&amp;act=other&amp;page=home&amp;bid=3030345.2&amp;adm=5630" target="_blank" data-stat-id="AA21068+2_25_2_135" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21068+2_25_2_135', 'https://item.mi.com/product/8881.html', 'pcpid', '31pchomeaccessories_left002036#t=normal&amp;act=other&amp;page=home&amp;bid=3030345.2&amp;adm=5630']);"><img src="//i1.mifile.cn/a4/xmad_15399144078801_opBVT.jpg" alt="" /></a> </li>
        </ul>
       </div>
       <div class="span16">
        <div id="accessories-content" class="tab-container">
         <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive"> 
          <li class="brick-item brick-item-m" data-gid="2182100019"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1182100019.html" data-log_code="reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8136&amp;bid=3038462.0&amp;page=home" data-stat-method="1_1" data-stat-index="0" data-stat-text="小米8 标准钢化玻璃膜" target="_blank" data-stat-pid="stat_首页.配件热门_0_1_1" data-stat-aid="小米8标准钢化玻璃膜" data-stat-id="小米8标准钢化玻璃膜+stat_首页.配件热门_0_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8标准钢化玻璃膜+stat_首页.配件热门_0_1_1', '//item.mi.com/1182100019.html', 'pcpid', 'reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8136&amp;bid=3038462.0&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1527839741.58144552.jpg?width=150&amp;height=150" width="150" height="150" alt="小米8 标准钢化玻璃膜" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1182100019.html" data-log_code="reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8136&amp;bid=3038462.0&amp;page=home" data-stat-method="1_1" data-stat-index="0" data-stat-text="小米8 标准钢化玻璃膜" target="_blank" data-stat-pid="stat_首页.配件热门_0_1_1" data-stat-aid="小米8标准钢化玻璃膜" data-stat-id="小米8标准钢化玻璃膜+stat_首页.配件热门_0_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8标准钢化玻璃膜+stat_首页.配件热门_0_1_1', '//item.mi.com/1182100019.html', 'pcpid', 'reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8136&amp;bid=3038462.0&amp;page=home']);"> 小米8 标准钢化玻璃膜 </a></h3> <p class="price"> <span class="num">29</span>元 </p> <p class="rank">2324人评价</p> 
           <div class="flag flag-new">
            新品
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1182100019.html" data-log_code="reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8136&amp;bid=3038462.0&amp;page=home" data-stat-method="1_1" data-stat-index="0" data-stat-text="小米8 标准钢化玻璃膜" target="_blank" data-stat-pid="stat_首页.配件热门_0_1_1" data-stat-aid="小米8标准钢化玻璃膜" data-stat-id="小米8标准钢化玻璃膜+stat_首页.配件热门_0_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8标准钢化玻璃膜+stat_首页.配件热门_0_1_1', '//item.mi.com/1182100019.html', 'pcpid', 'reccom_Accessory_0_0#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8136&amp;bid=3038462.0&amp;page=home']);"> <span class="review">很好，优惠力度在大些就更好了。</span> <span class="author"> 来自于 黄海平 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2182100021"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1182100021.html" data-log_code="reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8138&amp;bid=3038462.1&amp;page=home" data-stat-method="1_1" data-stat-index="1" data-stat-text="小米8  硅胶保护套" target="_blank" data-stat-pid="stat_首页.配件热门_1_1_1" data-stat-aid="小米8硅胶保护套" data-stat-id="小米8硅胶保护套+stat_首页.配件热门_1_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8硅胶保护套+stat_首页.配件热门_1_1_1', '//item.mi.com/1182100021.html', 'pcpid', 'reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8138&amp;bid=3038462.1&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1527840795.6763911.jpg?width=150&amp;height=150" width="150" height="150" alt="小米8  硅胶保护套" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1182100021.html" data-log_code="reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8138&amp;bid=3038462.1&amp;page=home" data-stat-method="1_1" data-stat-index="1" data-stat-text="小米8  硅胶保护套" target="_blank" data-stat-pid="stat_首页.配件热门_1_1_1" data-stat-aid="小米8硅胶保护套" data-stat-id="小米8硅胶保护套+stat_首页.配件热门_1_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8硅胶保护套+stat_首页.配件热门_1_1_1', '//item.mi.com/1182100021.html', 'pcpid', 'reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8138&amp;bid=3038462.1&amp;page=home']);"> 小米8 硅胶保护套 </a></h3> <p class="price"> <span class="num">49</span>元 </p> <p class="rank">2716人评价</p> 
           <div class="flag flag-new">
            新品
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1182100021.html" data-log_code="reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8138&amp;bid=3038462.1&amp;page=home" data-stat-method="1_1" data-stat-index="1" data-stat-text="小米8  硅胶保护套" target="_blank" data-stat-pid="stat_首页.配件热门_1_1_1" data-stat-aid="小米8硅胶保护套" data-stat-id="小米8硅胶保护套+stat_首页.配件热门_1_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8硅胶保护套+stat_首页.配件热门_1_1_1', '//item.mi.com/1182100021.html', 'pcpid', 'reccom_Accessory_0_1#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8138&amp;bid=3038462.1&amp;page=home']);"> <span class="review">手机壳很好，手感不错，配上米家贴纸帅爆了</span> <span class="author"> 来自于 Andrew 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2183800076"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1183800050.html" data-log_code="reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8866&amp;bid=3038462.2&amp;page=home" data-stat-method="1_1" data-stat-index="2" data-stat-text="小米 8 屏幕指纹版&amp;小米 8 透明探索版  硅胶保护套" target="_blank" data-stat-pid="stat_首页.配件热门_2_1_1" data-stat-aid="小米8屏幕指纹版&amp;小米8透明探索版硅胶保护套" data-stat-id="小米8屏幕指纹版&amp;小米8透明探索版硅胶保护套+stat_首页.配件热门_2_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8屏幕指纹版&amp;小米8透明探索版硅胶保护套+stat_首页.配件热门_2_1_1', '//item.mi.com/1183800050.html', 'pcpid', 'reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8866&amp;bid=3038462.2&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1537342194.63927944.jpg?width=150&amp;height=150" width="150" height="150" alt="小米 8 屏幕指纹版&amp;小米 8 透明探索版  硅胶保护套" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1183800050.html" data-log_code="reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8866&amp;bid=3038462.2&amp;page=home" data-stat-method="1_1" data-stat-index="2" data-stat-text="小米 8 屏幕指纹版&amp;小米 8 透明探索版  硅胶保护套" target="_blank" data-stat-pid="stat_首页.配件热门_2_1_1" data-stat-aid="小米8屏幕指纹版&amp;小米8透明探索版硅胶保护套" data-stat-id="小米8屏幕指纹版&amp;小米8透明探索版硅胶保护套+stat_首页.配件热门_2_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8屏幕指纹版&amp;小米8透明探索版硅胶保护套+stat_首页.配件热门_2_1_1', '//item.mi.com/1183800050.html', 'pcpid', 'reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8866&amp;bid=3038462.2&amp;page=home']);"> 小米 8 屏幕指纹版&amp;小米 8 透明探索版 硅胶保护套 </a></h3> <p class="price"> <span class="num">49</span>元 </p> <p class="rank">413人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1183800050.html" data-log_code="reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8866&amp;bid=3038462.2&amp;page=home" data-stat-method="1_1" data-stat-index="2" data-stat-text="小米 8 屏幕指纹版&amp;小米 8 透明探索版  硅胶保护套" target="_blank" data-stat-pid="stat_首页.配件热门_2_1_1" data-stat-aid="小米8屏幕指纹版&amp;小米8透明探索版硅胶保护套" data-stat-id="小米8屏幕指纹版&amp;小米8透明探索版硅胶保护套+stat_首页.配件热门_2_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8屏幕指纹版&amp;小米8透明探索版硅胶保护套+stat_首页.配件热门_2_1_1', '//item.mi.com/1183800050.html', 'pcpid', 'reccom_Accessory_0_2#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8866&amp;bid=3038462.2&amp;page=home']);"> <span class="review">确实很好，就是贵。哈哈哈哈</span> <span class="author"> 来自于 代思凯 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2180600002"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1180600003.html" data-log_code="reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7730&amp;bid=3038462.3&amp;page=home" data-stat-method="1_1" data-stat-index="3" data-stat-text="红米Note 5极简防摔保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_3_1_1" data-stat-aid="红米Note5极简防摔保护壳" data-stat-id="红米Note5极简防摔保护壳+stat_首页.配件热门_3_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米Note5极简防摔保护壳+stat_首页.配件热门_3_1_1', '//item.mi.com/1180600003.html', 'pcpid', 'reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7730&amp;bid=3038462.3&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1519441993.33022674.jpg?width=150&amp;height=150" width="150" height="150" alt="红米Note 5极简防摔保护壳" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1180600003.html" data-log_code="reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7730&amp;bid=3038462.3&amp;page=home" data-stat-method="1_1" data-stat-index="3" data-stat-text="红米Note 5极简防摔保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_3_1_1" data-stat-aid="红米Note5极简防摔保护壳" data-stat-id="红米Note5极简防摔保护壳+stat_首页.配件热门_3_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米Note5极简防摔保护壳+stat_首页.配件热门_3_1_1', '//item.mi.com/1180600003.html', 'pcpid', 'reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7730&amp;bid=3038462.3&amp;page=home']);"> 红米Note 5极简防摔保护壳 </a></h3> <p class="price"> <span class="num">0.99</span>元 
            <del>
             <span class="num">39</span>元
            </del> </p> <p class="rank">2210人评价</p> 
           <div class="flag flag-saleoff">
             享1折 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1180600003.html" data-log_code="reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7730&amp;bid=3038462.3&amp;page=home" data-stat-method="1_1" data-stat-index="3" data-stat-text="红米Note 5极简防摔保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_3_1_1" data-stat-aid="红米Note5极简防摔保护壳" data-stat-id="红米Note5极简防摔保护壳+stat_首页.配件热门_3_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-红米Note5极简防摔保护壳+stat_首页.配件热门_3_1_1', '//item.mi.com/1180600003.html', 'pcpid', 'reccom_Accessory_0_3#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7730&amp;bid=3038462.3&amp;page=home']);"> <span class="review">太便宜了，质量又好！</span> <span class="author"> 来自于 1210459237 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2183800074"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1183800048.html" data-log_code="reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8863&amp;bid=3038462.4&amp;page=home" data-stat-method="1_1" data-stat-index="4" data-stat-text="小米8青春版极简高透保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_4_1_1" data-stat-aid="小米8青春版极简高透保护壳" data-stat-id="小米8青春版极简高透保护壳+stat_首页.配件热门_4_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8青春版极简高透保护壳+stat_首页.配件热门_4_1_1', '//item.mi.com/1183800048.html', 'pcpid', 'reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8863&amp;bid=3038462.4&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1537342959.92144787.jpg?width=150&amp;height=150" width="150" height="150" alt="小米8青春版极简高透保护壳" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1183800048.html" data-log_code="reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8863&amp;bid=3038462.4&amp;page=home" data-stat-method="1_1" data-stat-index="4" data-stat-text="小米8青春版极简高透保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_4_1_1" data-stat-aid="小米8青春版极简高透保护壳" data-stat-id="小米8青春版极简高透保护壳+stat_首页.配件热门_4_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8青春版极简高透保护壳+stat_首页.配件热门_4_1_1', '//item.mi.com/1183800048.html', 'pcpid', 'reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8863&amp;bid=3038462.4&amp;page=home']);"> 小米8青春版极简高透保护壳 </a></h3> <p class="price"> <span class="num">39</span>元 </p> <p class="rank">166人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1183800048.html" data-log_code="reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8863&amp;bid=3038462.4&amp;page=home" data-stat-method="1_1" data-stat-index="4" data-stat-text="小米8青春版极简高透保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_4_1_1" data-stat-aid="小米8青春版极简高透保护壳" data-stat-id="小米8青春版极简高透保护壳+stat_首页.配件热门_4_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8青春版极简高透保护壳+stat_首页.配件热门_4_1_1', '//item.mi.com/1183800048.html', 'pcpid', 'reccom_Accessory_0_4#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8863&amp;bid=3038462.4&amp;page=home']);"> <span class="review">很好，优惠力度在大些就更好了。</span> <span class="author"> 来自于 黄海平 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2184300014"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1184300025.html" data-log_code="reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9007&amp;bid=3038462.5&amp;page=home" data-stat-method="1_1" data-stat-index="5" data-stat-text="小米MIX 3 极简保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_5_1_1" data-stat-aid="小米MIX3极简保护壳" data-stat-id="小米MIX3极简保护壳+stat_首页.配件热门_5_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米MIX3极简保护壳+stat_首页.配件热门_5_1_1', '//item.mi.com/1184300025.html', 'pcpid', 'reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9007&amp;bid=3038462.5&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1540373752.41793038.jpg?width=150&amp;height=150" width="150" height="150" alt="小米MIX 3 极简保护壳" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1184300025.html" data-log_code="reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9007&amp;bid=3038462.5&amp;page=home" data-stat-method="1_1" data-stat-index="5" data-stat-text="小米MIX 3 极简保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_5_1_1" data-stat-aid="小米MIX3极简保护壳" data-stat-id="小米MIX3极简保护壳+stat_首页.配件热门_5_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米MIX3极简保护壳+stat_首页.配件热门_5_1_1', '//item.mi.com/1184300025.html', 'pcpid', 'reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9007&amp;bid=3038462.5&amp;page=home']);"> 小米MIX 3 极简保护壳 </a></h3> <p class="price"> <span class="num">49</span>元 </p> <p class="rank">141人评价</p> 
           <div class="flag flag-new">
            新品
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1184300025.html" data-log_code="reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9007&amp;bid=3038462.5&amp;page=home" data-stat-method="1_1" data-stat-index="5" data-stat-text="小米MIX 3 极简保护壳" target="_blank" data-stat-pid="stat_首页.配件热门_5_1_1" data-stat-aid="小米MIX3极简保护壳" data-stat-id="小米MIX3极简保护壳+stat_首页.配件热门_5_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米MIX3极简保护壳+stat_首页.配件热门_5_1_1', '//item.mi.com/1184300025.html', 'pcpid', 'reccom_Accessory_0_5#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9007&amp;bid=3038462.5&amp;page=home']);"> <span class="review">留着备用了</span> <span class="author"> 来自于 klook 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2182200006"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1182200006.html" data-log_code="reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8170&amp;bid=3038462.6&amp;page=home" data-stat-method="1_1" data-stat-index="6" data-stat-text="小米 8 SE  硅胶保护套" target="_blank" data-stat-pid="stat_首页.配件热门_6_1_1" data-stat-aid="小米8SE硅胶保护套" data-stat-id="小米8SE硅胶保护套+stat_首页.配件热门_6_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8SE硅胶保护套+stat_首页.配件热门_6_1_1', '//item.mi.com/1182200006.html', 'pcpid', 'reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8170&amp;bid=3038462.6&amp;page=home']);"><img src="//i1.mifile.cn/a1/pms_1527836916.25842035.jpg?width=150&amp;height=150" width="150" height="150" alt="小米 8 SE  硅胶保护套" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1182200006.html" data-log_code="reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8170&amp;bid=3038462.6&amp;page=home" data-stat-method="1_1" data-stat-index="6" data-stat-text="小米 8 SE  硅胶保护套" target="_blank" data-stat-pid="stat_首页.配件热门_6_1_1" data-stat-aid="小米8SE硅胶保护套" data-stat-id="小米8SE硅胶保护套+stat_首页.配件热门_6_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8SE硅胶保护套+stat_首页.配件热门_6_1_1', '//item.mi.com/1182200006.html', 'pcpid', 'reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8170&amp;bid=3038462.6&amp;page=home']);"> 小米 8 SE 硅胶保护套 </a></h3> <p class="price"> <span class="num">49</span>元 </p> <p class="rank">608人评价</p> 
           <div class="flag flag-new">
            新品
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1182200006.html" data-log_code="reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8170&amp;bid=3038462.6&amp;page=home" data-stat-method="1_1" data-stat-index="6" data-stat-text="小米 8 SE  硅胶保护套" target="_blank" data-stat-pid="stat_首页.配件热门_6_1_1" data-stat-aid="小米8SE硅胶保护套" data-stat-id="小米8SE硅胶保护套+stat_首页.配件热门_6_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-小米8SE硅胶保护套+stat_首页.配件热门_6_1_1', '//item.mi.com/1182200006.html', 'pcpid', 'reccom_Accessory_0_6#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8170&amp;bid=3038462.6&amp;page=home']);"> <span class="review">手感超好，而且不占灰尘！不输iPhone官方硅胶套！</span> <span class="author"> 来自于 假先知 的评价 <span class="date"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="2181100002"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1181100002.html" data-log_code="reccom_Accessory_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7788&amp;bid=3038462.7&amp;page=home" data-stat-method="1_1" data-stat-index="7" data-stat-text="Mi MIX 2S 真皮保护套" target="_blank" data-stat-pid="stat_首页.配件热门_7_1_1" data-stat-aid="MiMIX2S真皮保护套" data-stat-id="MiMIX2S真皮保护套+stat_首页.配件热门_7_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-MiMIX2S真皮保护套+stat_首页.配件热门_7_1_1', '//item.mi.com/1181100002.html', 'pcpid', 'reccom_Accessory_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7788&amp;bid=3038462.7&amp;page=home']);"> <img src="//i1.mifile.cn/a1/pms_1522142136.45425672.jpg?width=80&amp;height=80" width="80" height="80" alt="Mi MIX 2S 真皮保护套" /> </a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1181100002.html" data-log_code="reccom_Accessory_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7788&amp;bid=3038462.7&amp;page=home" data-stat-method="1_1" data-stat-index="7" data-stat-text="Mi MIX 2S 真皮保护套" target="_blank" data-stat-pid="stat_首页.配件热门_7_1_1" data-stat-aid="MiMIX2S真皮保护套" data-stat-id="MiMIX2S真皮保护套+stat_首页.配件热门_7_1_1" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-MiMIX2S真皮保护套+stat_首页.配件热门_7_1_1', '//item.mi.com/1181100002.html', 'pcpid', 'reccom_Accessory_0_7#eid=183:0:0:0:0:0:0:0:0:0&amp;traceId=HomeCandiRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7788&amp;bid=3038462.7&amp;page=home']);">Mi MIX 2S 真皮保护套</a></h3> <p class="price"><span class="num">99</span>元</p> </li> 
          <li class="brick-item brick-item-s"> 
           <div class="figure figure-more">
            <a href="//list.mi.com/pjrm" target="_blank" data-stat-pid="stat_首页.配件热门_undefined_undefined" data-stat-id="null+stat_首页.配件热门_undefined_undefined" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-null+stat_首页.配件热门_undefined_undefined', '//list.mi.com/pjrm', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div> <a class="more" href="//list.mi.com/pjrm" target="_blank" data-stat-pid="stat_首页.配件热门_undefined_undefined" data-stat-id="null+stat_首页.配件热门_undefined_undefined" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-null+stat_首页.配件热门_undefined_undefined', '//list.mi.com/pjrm', 'pcpid', '']);">浏览更多<small>热门</small></a> </li> 
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="1182300044"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1182300044.html" data-stat-aid="AA21157" data-stat-pid="2_27_1_144" target="_blank" data-log_code="31pchomeaccessories_right_1001038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.1&amp;pid=1182300044&amp;adm=5720" data-stat-id="AA21157+2_27_1_144" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21157+2_27_1_144', '//item.mi.com/1182300044.html', 'pcpid', '31pchomeaccessories_right_1001038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.1&amp;pid=1182300044&amp;adm=5720']);"><img src="//i1.mifile.cn/a1/pms_1529897883.50894652!220x220.jpg" width="150" height="150" alt="红米 6 Pro 极简保护壳 红色" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1182300044.html" data-stat-aid="AA21157" data-stat-pid="2_27_1_144" data-log_code="31pchomeaccessories_right_1001038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.1&amp;pid=1182300044&amp;adm=5720" target="_blank" data-stat-id="AA21157+2_27_1_144" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21157+2_27_1_144', '//item.mi.com/1182300044.html', 'pcpid', '31pchomeaccessories_right_1001038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.1&amp;pid=1182300044&amp;adm=5720']);">红米 6 Pro 极简保护壳 红色</a></h3> <p class="price"> <span class="num">29</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1182300044.html" data-stat-aid="AA21157" data-stat-pid="2_27_1_144" data-log_code="31pchomeaccessories_right_1001038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.1&amp;pid=1182300044&amp;adm=5720" target="_blank" data-stat-id="AA21157+2_27_1_144" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21157+2_27_1_144', '//item.mi.com/1182300044.html', 'pcpid', '31pchomeaccessories_right_1001038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.1&amp;pid=1182300044&amp;adm=5720']);"> <span class="review">手机壳很棒，手感特别细腻，带上非常结实，这是我用过最...</span> <span class="author"> 来自于 dj 的评价 <span class="date" data-date="1531796377"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1173100068"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1173100068.html" data-stat-aid="AA21218" data-stat-pid="2_27_2_145" target="_blank" data-log_code="31pchomeaccessories_right_1002038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.2&amp;pid=1173100068&amp;adm=5758" data-stat-id="AA21218+2_27_2_145" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21218+2_27_2_145', '//item.mi.com/1173100068.html', 'pcpid', '31pchomeaccessories_right_1002038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.2&amp;pid=1173100068&amp;adm=5758']);"><img src="//i1.mifile.cn/a1/pms_1503363087.01593676!220x220.jpg" width="150" height="150" alt="红米Note 5A高透软胶保护套 半透黑无指纹孔" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1173100068.html" data-stat-aid="AA21218" data-stat-pid="2_27_2_145" data-log_code="31pchomeaccessories_right_1002038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.2&amp;pid=1173100068&amp;adm=5758" target="_blank" data-stat-id="AA21218+2_27_2_145" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21218+2_27_2_145', '//item.mi.com/1173100068.html', 'pcpid', '31pchomeaccessories_right_1002038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.2&amp;pid=1173100068&amp;adm=5758']);">红米Note 5A高透软胶保护套 半透黑无指纹孔</a></h3> <p class="price"> <span class="num">0.99</span>元 
            <del>
             <span class="num">19</span>元
            </del> </p> <p class="rank">1037人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1173100068.html" data-stat-aid="AA21218" data-stat-pid="2_27_2_145" data-log_code="31pchomeaccessories_right_1002038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.2&amp;pid=1173100068&amp;adm=5758" target="_blank" data-stat-id="AA21218+2_27_2_145" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21218+2_27_2_145', '//item.mi.com/1173100068.html', 'pcpid', '31pchomeaccessories_right_1002038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.2&amp;pid=1173100068&amp;adm=5758']);"> <span class="review">质感都不一样挺好的，赠送的还有单独包装</span> <span class="author"> 来自于 舒逸 的评价 <span class="date" data-date="1510479959"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1181100003"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1181100003.html" data-stat-aid="AA21109" data-stat-pid="2_27_3_146" target="_blank" data-log_code="31pchomeaccessories_right_1003038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.3&amp;pid=1181100003&amp;adm=5693" data-stat-id="AA21109+2_27_3_146" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21109+2_27_3_146', '//item.mi.com/1181100003.html', 'pcpid', '31pchomeaccessories_right_1003038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.3&amp;pid=1181100003&amp;adm=5693']);"><img src="//i1.mifile.cn/a1/pms_1523354403.31383469!220x220.png" width="150" height="150" alt="Mi MIX 2S 硅胶保护套 红色" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1181100003.html" data-stat-aid="AA21109" data-stat-pid="2_27_3_146" data-log_code="31pchomeaccessories_right_1003038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.3&amp;pid=1181100003&amp;adm=5693" target="_blank" data-stat-id="AA21109+2_27_3_146" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21109+2_27_3_146', '//item.mi.com/1181100003.html', 'pcpid', '31pchomeaccessories_right_1003038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.3&amp;pid=1181100003&amp;adm=5693']);">Mi MIX 2S 硅胶保护套 红色</a></h3> <p class="price"> <span class="num">59</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1181100003.html" data-stat-aid="AA21109" data-stat-pid="2_27_3_146" data-log_code="31pchomeaccessories_right_1003038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.3&amp;pid=1181100003&amp;adm=5693" target="_blank" data-stat-id="AA21109+2_27_3_146" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21109+2_27_3_146', '//item.mi.com/1181100003.html', 'pcpid', '31pchomeaccessories_right_1003038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.3&amp;pid=1181100003&amp;adm=5693']);"> <span class="review">emmmmm，手感舒服，一天到，快，里面还有毛毛，左...</span> <span class="author"> 来自于 　 的评价 <span class="date" data-date="1536828037"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2181600008"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1181600009.html" data-stat-aid="AA20268" data-stat-pid="2_27_4_147" target="_blank" data-log_code="31pchomeaccessories_right_1004038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.4&amp;pid=2181600008&amp;adm=5195" data-stat-id="AA20268+2_27_4_147" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20268+2_27_4_147', '//item.mi.com/1181600009.html', 'pcpid', '31pchomeaccessories_right_1004038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.4&amp;pid=2181600008&amp;adm=5195']);"><img src="//i1.mifile.cn/a1/pms_1524467046.18799928!220x220.jpg" width="150" height="150" alt="小米6X 极简保护壳 黑色" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1181600009.html" data-stat-aid="AA20268" data-stat-pid="2_27_4_147" data-log_code="31pchomeaccessories_right_1004038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.4&amp;pid=2181600008&amp;adm=5195" target="_blank" data-stat-id="AA20268+2_27_4_147" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20268+2_27_4_147', '//item.mi.com/1181600009.html', 'pcpid', '31pchomeaccessories_right_1004038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.4&amp;pid=2181600008&amp;adm=5195']);">小米6X 极简保护壳 黑色</a></h3> <p class="price"> <span class="num">29</span>元 </p> <p class="rank">1363人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1181600009.html" data-stat-aid="AA20268" data-stat-pid="2_27_4_147" data-log_code="31pchomeaccessories_right_1004038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.4&amp;pid=2181600008&amp;adm=5195" target="_blank" data-stat-id="AA20268+2_27_4_147" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20268+2_27_4_147', '//item.mi.com/1181600009.html', 'pcpid', '31pchomeaccessories_right_1004038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.4&amp;pid=2181600008&amp;adm=5195']);"> <span class="review">我怎么这么好看</span> <span class="author"> 来自于 何君道 的评价 <span class="date" data-date="1535880050"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1182300048"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1182300048.html" data-stat-aid="AA21219" data-stat-pid="2_27_5_148" target="_blank" data-log_code="31pchomeaccessories_right_1005038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.5&amp;pid=1182300048&amp;adm=5759" data-stat-id="AA21219+2_27_5_148" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21219+2_27_5_148', '//item.mi.com/1182300048.html', 'pcpid', '31pchomeaccessories_right_1005038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.5&amp;pid=1182300048&amp;adm=5759']);"><img src="//i1.mifile.cn/a1/pms_1528872380.67388062!220x220.jpg" width="150" height="150" alt="红米6A 高透软胶保护套 透明" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1182300048.html" data-stat-aid="AA21219" data-stat-pid="2_27_5_148" data-log_code="31pchomeaccessories_right_1005038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.5&amp;pid=1182300048&amp;adm=5759" target="_blank" data-stat-id="AA21219+2_27_5_148" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21219+2_27_5_148', '//item.mi.com/1182300048.html', 'pcpid', '31pchomeaccessories_right_1005038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.5&amp;pid=1182300048&amp;adm=5759']);">红米6A 高透软胶保护套 透明</a></h3> <p class="price"> <span class="num">19</span>元 </p> <p class="rank">272人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1182300048.html" data-stat-aid="AA21219" data-stat-pid="2_27_5_148" data-log_code="31pchomeaccessories_right_1005038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.5&amp;pid=1182300048&amp;adm=5759" target="_blank" data-stat-id="AA21219+2_27_5_148" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21219+2_27_5_148', '//item.mi.com/1182300048.html', 'pcpid', '31pchomeaccessories_right_1005038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.5&amp;pid=1182300048&amp;adm=5759']);"> <span class="review">很好很满意很好很满意很好很满意很好很满意很好很满意很...</span> <span class="author"> 来自于 堂吉先生 的评价 <span class="date" data-date="1543830095"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1162900031"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1162900031.html" data-stat-aid="AA21220" data-stat-pid="2_27_6_149" target="_blank" data-log_code="31pchomeaccessories_right_1006038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.6&amp;pid=1162900031&amp;adm=5760" data-stat-id="AA21220+2_27_6_149" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21220+2_27_6_149', '//item.mi.com/1162900031.html', 'pcpid', '31pchomeaccessories_right_1006038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.6&amp;pid=1162900031&amp;adm=5760']);"><img src="//i1.mifile.cn/a1/pms_1478790277.42441477!220x220.jpg" width="150" height="150" alt="红米Note4 超薄肤感软胶保护套 半透黑" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1162900031.html" data-stat-aid="AA21220" data-stat-pid="2_27_6_149" data-log_code="31pchomeaccessories_right_1006038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.6&amp;pid=1162900031&amp;adm=5760" target="_blank" data-stat-id="AA21220+2_27_6_149" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21220+2_27_6_149', '//item.mi.com/1162900031.html', 'pcpid', '31pchomeaccessories_right_1006038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.6&amp;pid=1162900031&amp;adm=5760']);">红米Note4 超薄肤感软胶保护套 半透黑</a></h3> <p class="price"> <span class="num">0.99</span>元 
            <del>
             <span class="num">19</span>元
            </del> </p> <p class="rank">945人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1162900031.html" data-stat-aid="AA21220" data-stat-pid="2_27_6_149" data-log_code="31pchomeaccessories_right_1006038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.6&amp;pid=1162900031&amp;adm=5760" target="_blank" data-stat-id="AA21220+2_27_6_149" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21220+2_27_6_149', '//item.mi.com/1162900031.html', 'pcpid', '31pchomeaccessories_right_1006038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.6&amp;pid=1162900031&amp;adm=5760']);"> <span class="review">手感很好，很软，挺不错的。一直都用的小米，信赖</span> <span class="author"> 来自于 424826575 的评价 <span class="date" data-date="1485871797"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1174900012"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1174900012.html" data-stat-aid="AA15415" data-stat-pid="2_27_7_150" target="_blank" data-log_code="31pchomeaccessories_right_1007038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.7&amp;pid=1174900012&amp;adm=5145" data-stat-id="AA15415+2_27_7_150" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15415+2_27_7_150', '//item.mi.com/1174900012.html', 'pcpid', '31pchomeaccessories_right_1007038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.7&amp;pid=1174900012&amp;adm=5145']);"><img src="//i1.mifile.cn/a1/pms_1512957185.6636673!220x220.jpg" width="150" height="150" alt="红米 5 Plus 极简防摔保护套 黑色" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1174900012.html" data-stat-aid="AA15415" data-stat-pid="2_27_7_150" data-log_code="31pchomeaccessories_right_1007038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.7&amp;pid=1174900012&amp;adm=5145" target="_blank" data-stat-id="AA15415+2_27_7_150" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15415+2_27_7_150', '//item.mi.com/1174900012.html', 'pcpid', '31pchomeaccessories_right_1007038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.7&amp;pid=1174900012&amp;adm=5145']);">红米 5 Plus 极简防摔保护套 黑色</a></h3> <p class="price"> <span class="num">0.99</span>元 
            <del>
             <span class="num">39</span>元
            </del> </p> <p class="rank">1827人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1174900012.html" data-stat-aid="AA15415" data-stat-pid="2_27_7_150" data-log_code="31pchomeaccessories_right_1007038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.7&amp;pid=1174900012&amp;adm=5145" target="_blank" data-stat-id="AA15415+2_27_7_150" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15415+2_27_7_150', '//item.mi.com/1174900012.html', 'pcpid', '31pchomeaccessories_right_1007038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.7&amp;pid=1174900012&amp;adm=5145']);"> <span class="review">手感非常好。买得放心，用着开心。一直支持小米！</span> <span class="author"> 来自于 王楚炎 的评价 <span class="date" data-date="1523095848"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="1174700047"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1174700047.html" class="exposure" data-stat-aid="AA15414" data-stat-pid="2_27_8_151" data-log_code="31pchomeaccessories_right_1008038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.8&amp;pid=1174700047&amp;adm=5146" target="_blank" data-stat-id="AA15414+2_27_8_151" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15414+2_27_8_151', '//item.mi.com/1174700047.html', 'pcpid', '31pchomeaccessories_right_1008038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.8&amp;pid=1174700047&amp;adm=5146']);"> <img src="//i1.mifile.cn/a1/pms_1512894733.40646204!220x220.jpg" width="80" height="80" alt="红米 5 极简保护套 黑色" /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1174700047.html" class="exposure" data-stat-aid="AA15414" data-stat-pid="2_27_8_151" data-log_code="31pchomeaccessories_right_1008038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.8&amp;pid=1174700047&amp;adm=5146" target="_blank" data-stat-id="AA15414+2_27_8_151" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15414+2_27_8_151', '//item.mi.com/1174700047.html', 'pcpid', '31pchomeaccessories_right_1008038#t=normal&amp;act=other&amp;page=home&amp;bid=3030347.8&amp;pid=1174700047&amp;adm=5146']);">红米 5 极简保护套 黑色</a></h3> <p class="price"><span class="num">0.99</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="//list.mi.com/7" target="_blank" data-stat-id="372da8cc6adbd49e" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-372da8cc6adbd49e', '//list.mi.com/7', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="//list.mi.com/7" target="_blank" data-stat-id="eb740ef8f5ccdc77" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-eb740ef8f5ccdc77', '//list.mi.com/7', 'pcpid', '']);">浏览更多<small>保护套</small></a></li>
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="1164400025"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1164400025.html" data-stat-aid="AA15024" data-stat-pid="2_29_1_160" target="_blank" data-log_code="31pchomeaccessories_right_2001039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073" data-stat-id="AA15024+2_29_1_160" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15024+2_29_1_160', '//item.mi.com/1164400025.html', 'pcpid', '31pchomeaccessories_right_2001039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073']);"><img src="//i1.mifile.cn/a4/xmad_14987297093922_POaTU.jpg" width="150" height="150" alt="红米Note 4X 标准高透贴膜" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1164400025.html" data-stat-aid="AA15024" data-stat-pid="2_29_1_160" data-log_code="31pchomeaccessories_right_2001039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073" target="_blank" data-stat-id="AA15024+2_29_1_160" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15024+2_29_1_160', '//item.mi.com/1164400025.html', 'pcpid', '31pchomeaccessories_right_2001039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073']);">红米Note 4X 标准高透贴膜</a></h3> <p class="price"> <span class="num">0.99</span>元 
            <del>
             <span class="num">19</span>元
            </del> </p> <p class="rank">1.5万人评价</p> 
           <div class="flag flag-saleoff">
             享1折 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1164400025.html" data-stat-aid="AA15024" data-stat-pid="2_29_1_160" data-log_code="31pchomeaccessories_right_2001039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073" target="_blank" data-stat-id="AA15024+2_29_1_160" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15024+2_29_1_160', '//item.mi.com/1164400025.html', 'pcpid', '31pchomeaccessories_right_2001039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.1&amp;pid=1164400025&amp;adm=3073']);"> <span class="review">轻抚如柔荑，肤似兰凝脂，腰着流纨素，肩披绮罗衣。</span> <span class="author"> 来自于 110613567 的评价 <span class="date" data-date="1489896709"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2181600006"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1181600007.html" data-stat-aid="AA15417" data-stat-pid="2_29_2_161" target="_blank" data-log_code="31pchomeaccessories_right_2002039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.2&amp;pid=2181600006&amp;adm=5267" data-stat-id="AA15417+2_29_2_161" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15417+2_29_2_161', '//item.mi.com/1181600007.html', 'pcpid', '31pchomeaccessories_right_2002039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.2&amp;pid=2181600006&amp;adm=5267']);"><img src="//i1.mifile.cn/a1/pms_1524466931.58435208!220x220.jpg" width="150" height="150" alt="小米6X 标准高透贴膜" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1181600007.html" data-stat-aid="AA15417" data-stat-pid="2_29_2_161" data-log_code="31pchomeaccessories_right_2002039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.2&amp;pid=2181600006&amp;adm=5267" target="_blank" data-stat-id="AA15417+2_29_2_161" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15417+2_29_2_161', '//item.mi.com/1181600007.html', 'pcpid', '31pchomeaccessories_right_2002039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.2&amp;pid=2181600006&amp;adm=5267']);">小米6X 标准高透贴膜</a></h3> <p class="price"> <span class="num">19</span>元 </p> <p class="rank">1400人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1181600007.html" data-stat-aid="AA15417" data-stat-pid="2_29_2_161" data-log_code="31pchomeaccessories_right_2002039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.2&amp;pid=2181600006&amp;adm=5267" target="_blank" data-stat-id="AA15417+2_29_2_161" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15417+2_29_2_161', '//item.mi.com/1181600007.html', 'pcpid', '31pchomeaccessories_right_2002039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.2&amp;pid=2181600006&amp;adm=5267']);"> <span class="review">非专业的技能贴出了专业的效果！可能是因为膜好，可能是...</span> <span class="author"> 来自于 ChenX 的评价 <span class="date" data-date="1536034229"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1184300028"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1184300028.html" data-stat-aid="AA21108" data-stat-pid="2_29_3_162" target="_blank" data-log_code="31pchomeaccessories_right_2003039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.3&amp;pid=1184300028&amp;adm=5694" data-stat-id="AA21108+2_29_3_162" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21108+2_29_3_162', '//item.mi.com/1184300028.html', 'pcpid', '31pchomeaccessories_right_2003039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.3&amp;pid=1184300028&amp;adm=5694']);"><img src="//i1.mifile.cn/a1/pms_1540373846.84597943!220x220.jpg" width="150" height="150" alt="小米MIX 3 标准高透膜" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1184300028.html" data-stat-aid="AA21108" data-stat-pid="2_29_3_162" data-log_code="31pchomeaccessories_right_2003039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.3&amp;pid=1184300028&amp;adm=5694" target="_blank" data-stat-id="AA21108+2_29_3_162" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21108+2_29_3_162', '//item.mi.com/1184300028.html', 'pcpid', '31pchomeaccessories_right_2003039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.3&amp;pid=1184300028&amp;adm=5694']);">小米MIX 3 标准高透膜</a></h3> <p class="price"> <span class="num">19</span>元 </p> <p class="rank">487人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1184300028.html" data-stat-aid="AA21108" data-stat-pid="2_29_3_162" data-log_code="31pchomeaccessories_right_2003039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.3&amp;pid=1184300028&amp;adm=5694" target="_blank" data-stat-id="AA21108+2_29_3_162" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21108+2_29_3_162', '//item.mi.com/1184300028.html', 'pcpid', '31pchomeaccessories_right_2003039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.3&amp;pid=1184300028&amp;adm=5694']);"> <span class="review">这膜到的速度很快，还不错，就是不太会贴，一起下单的，...</span> <span class="author"> 来自于 Wang 的评价 <span class="date" data-date="1544192001"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2172000027"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1172000061.html" data-stat-aid="AA18888" data-stat-pid="2_29_4_163" target="_blank" data-log_code="31pchomeaccessories_right_2004039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456" data-stat-id="AA18888+2_29_4_163" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18888+2_29_4_163', '//item.mi.com/1172000061.html', 'pcpid', '31pchomeaccessories_right_2004039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456']);"><img src="//i1.mifile.cn/a1/pms_1496238415.93753872!220x220.jpg" width="150" height="150" alt="小米Max2 高透保护膜" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1172000061.html" data-stat-aid="AA18888" data-stat-pid="2_29_4_163" data-log_code="31pchomeaccessories_right_2004039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456" target="_blank" data-stat-id="AA18888+2_29_4_163" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18888+2_29_4_163', '//item.mi.com/1172000061.html', 'pcpid', '31pchomeaccessories_right_2004039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456']);">小米Max2 高透保护膜</a></h3> <p class="price"> <span class="num">0.99</span>元 
            <del>
             <span class="num">19</span>元
            </del> </p> <p class="rank">6782人评价</p> 
           <div class="flag flag-saleoff">
             享1折 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1172000061.html" data-stat-aid="AA18888" data-stat-pid="2_29_4_163" data-log_code="31pchomeaccessories_right_2004039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456" target="_blank" data-stat-id="AA18888+2_29_4_163" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18888+2_29_4_163', '//item.mi.com/1172000061.html', 'pcpid', '31pchomeaccessories_right_2004039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.4&amp;pid=2172000027&amp;adm=4456']);"> <span class="review">二个正式贴是怎么回事，如何操作</span> <span class="author"> 来自于 1270290715 的评价 <span class="date" data-date="1498034803"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1182300043"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1182300043.html" data-stat-aid="AA21158" data-stat-pid="2_29_5_164" target="_blank" data-log_code="31pchomeaccessories_right_2005039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.5&amp;pid=1182300043&amp;adm=5721" data-stat-id="AA21158+2_29_5_164" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21158+2_29_5_164', '//item.mi.com/1182300043.html', 'pcpid', '31pchomeaccessories_right_2005039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.5&amp;pid=1182300043&amp;adm=5721']);"><img src="//i1.mifile.cn/a1/pms_1529897766.69322759!220x220.jpg" width="150" height="150" alt="红米 6 Pro 标准高透保护膜" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1182300043.html" data-stat-aid="AA21158" data-stat-pid="2_29_5_164" data-log_code="31pchomeaccessories_right_2005039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.5&amp;pid=1182300043&amp;adm=5721" target="_blank" data-stat-id="AA21158+2_29_5_164" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21158+2_29_5_164', '//item.mi.com/1182300043.html', 'pcpid', '31pchomeaccessories_right_2005039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.5&amp;pid=1182300043&amp;adm=5721']);">红米 6 Pro 标准高透保护膜</a></h3> <p class="price"> <span class="num">19</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1182300043.html" data-stat-aid="AA21158" data-stat-pid="2_29_5_164" data-log_code="31pchomeaccessories_right_2005039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.5&amp;pid=1182300043&amp;adm=5721" target="_blank" data-stat-id="AA21158+2_29_5_164" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21158+2_29_5_164', '//item.mi.com/1182300043.html', 'pcpid', '31pchomeaccessories_right_2005039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.5&amp;pid=1182300043&amp;adm=5721']);"> <span class="review">外形与手机很配，高清膜，物流很快</span> <span class="author"> 来自于 欧阳鸿运 的评价 <span class="date" data-date="1530241144"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2163600009"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1163600030.html" data-stat-aid="AA18882" data-stat-pid="2_29_6_165" target="_blank" data-log_code="31pchomeaccessories_right_2006039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458" data-stat-id="AA18882+2_29_6_165" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18882+2_29_6_165', '//item.mi.com/1163600030.html', 'pcpid', '31pchomeaccessories_right_2006039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458']);"><img src="//i1.mifile.cn/a1/pms_1482136232.14896578!220x220.jpg" width="150" height="150" alt="红米4标准版 标准高透贴膜" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1163600030.html" data-stat-aid="AA18882" data-stat-pid="2_29_6_165" data-log_code="31pchomeaccessories_right_2006039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458" target="_blank" data-stat-id="AA18882+2_29_6_165" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18882+2_29_6_165', '//item.mi.com/1163600030.html', 'pcpid', '31pchomeaccessories_right_2006039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458']);">红米4标准版 标准高透贴膜</a></h3> <p class="price"> <span class="num">0.99</span>元 
            <del>
             <span class="num">19</span>元
            </del> </p> <p class="rank">1031人评价</p> 
           <div class="flag flag-saleoff">
             享1折 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1163600030.html" data-stat-aid="AA18882" data-stat-pid="2_29_6_165" data-log_code="31pchomeaccessories_right_2006039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458" target="_blank" data-stat-id="AA18882+2_29_6_165" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18882+2_29_6_165', '//item.mi.com/1163600030.html', 'pcpid', '31pchomeaccessories_right_2006039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.6&amp;pid=2163600009&amp;adm=4458']);"> <span class="review">只是，有的时候，我能感觉到她的疏离;但是，很快，我就...</span> <span class="author"> 来自于 呢年 的评价 <span class="date" data-date="1484034153"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="7790"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1181100006.html" data-stat-aid="AA20053" data-stat-pid="2_29_7_166" target="_blank" data-log_code="31pchomeaccessories_right_2007039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.7&amp;pid=7790&amp;adm=5074" data-stat-id="AA20053+2_29_7_166" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20053+2_29_7_166', '//item.mi.com/1181100006.html', 'pcpid', '31pchomeaccessories_right_2007039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.7&amp;pid=7790&amp;adm=5074']);"><img src="//i1.mifile.cn/a1/pms_1522140924.30981214!220x220.jpg" width="150" height="150" alt="Mi MIX 2S 标准高透膜" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1181100006.html" data-stat-aid="AA20053" data-stat-pid="2_29_7_166" data-log_code="31pchomeaccessories_right_2007039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.7&amp;pid=7790&amp;adm=5074" target="_blank" data-stat-id="AA20053+2_29_7_166" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20053+2_29_7_166', '//item.mi.com/1181100006.html', 'pcpid', '31pchomeaccessories_right_2007039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.7&amp;pid=7790&amp;adm=5074']);">Mi MIX 2S 标准高透膜</a></h3> <p class="price"> <span class="num">29</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1181100006.html" data-stat-aid="AA20053" data-stat-pid="2_29_7_166" data-log_code="31pchomeaccessories_right_2007039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.7&amp;pid=7790&amp;adm=5074" target="_blank" data-stat-id="AA20053+2_29_7_166" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20053+2_29_7_166', '//item.mi.com/1181100006.html', 'pcpid', '31pchomeaccessories_right_2007039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.7&amp;pid=7790&amp;adm=5074']);"> <span class="review">首先小米的包装很好看，快递贼快。然后了我没想到的是竟...</span> <span class="author"> 来自于 yuliangsen 的评价 <span class="date" data-date="1540436264"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="1182300047"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1182300047.html" class="exposure" data-stat-aid="AA21159" data-stat-pid="2_29_8_167" data-log_code="31pchomeaccessories_right_2008039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.8&amp;pid=1182300047&amp;adm=5722" target="_blank" data-stat-id="AA21159+2_29_8_167" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21159+2_29_8_167', '//item.mi.com/1182300047.html', 'pcpid', '31pchomeaccessories_right_2008039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.8&amp;pid=1182300047&amp;adm=5722']);"> <img src="//i1.mifile.cn/a1/pms_1528872452.6913152!220x220.jpg" width="80" height="80" alt="红米6A 标准高透贴膜" /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1182300047.html" class="exposure" data-stat-aid="AA21159" data-stat-pid="2_29_8_167" data-log_code="31pchomeaccessories_right_2008039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.8&amp;pid=1182300047&amp;adm=5722" target="_blank" data-stat-id="AA21159+2_29_8_167" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21159+2_29_8_167', '//item.mi.com/1182300047.html', 'pcpid', '31pchomeaccessories_right_2008039#t=normal&amp;act=other&amp;page=home&amp;bid=3030348.8&amp;pid=1182300047&amp;adm=5722']);">红米6A 标准高透贴膜</a></h3> <p class="price"><span class="num">19</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="//list.mi.com/9" target="_blank" data-stat-id="57eada23bf47c3bb" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-57eada23bf47c3bb', '//list.mi.com/9', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="//list.mi.com/9" target="_blank" data-stat-id="c860b279747f5327" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-c860b279747f5327', '//list.mi.com/9', 'pcpid', '']);">浏览更多<small>贴膜</small></a></li>
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="2171300013"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/keyboard/" data-stat-aid="AA15690" data-stat-pid="2_30_1_168" target="_blank" data-log_code="31pchomeaccessories_right_3001040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380" data-stat-id="AA15690+2_30_1_168" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15690+2_30_1_168', 'http://www.mi.com/keyboard/', 'pcpid', '31pchomeaccessories_right_3001040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380']);"><img src="//i1.mifile.cn/a1/pms_1490702347.3628109!220x220.png" width="150" height="150" alt="悦米机械键盘" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/keyboard/" data-stat-aid="AA15690" data-stat-pid="2_30_1_168" data-log_code="31pchomeaccessories_right_3001040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380" target="_blank" data-stat-id="AA15690+2_30_1_168" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15690+2_30_1_168', 'http://www.mi.com/keyboard/', 'pcpid', '31pchomeaccessories_right_3001040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380']);">悦米机械键盘</a></h3> <p class="price"> <span class="num">299</span>元 </p> <p class="rank">2382人评价</p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/keyboard/" data-stat-aid="AA15690" data-stat-pid="2_30_1_168" data-log_code="31pchomeaccessories_right_3001040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380" target="_blank" data-stat-id="AA15690+2_30_1_168" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15690+2_30_1_168', 'http://www.mi.com/keyboard/', 'pcpid', '31pchomeaccessories_right_3001040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.1&amp;pid=2171300013&amp;adm=3380']);"> <span class="review">手感特别不错，敲代码很有感觉，不小心暴露了自己的职业。</span> <span class="author"> 来自于 武圣威 的评价 <span class="date" data-date="1523193977"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2162000033"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1162000043.html" data-stat-aid="AA13890" data-stat-pid="2_30_2_169" target="_blank" data-log_code="31pchomeaccessories_right_3002040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547" data-stat-id="AA13890+2_30_2_169" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13890+2_30_2_169', '//item.mi.com/1162000043.html', 'pcpid', '31pchomeaccessories_right_3002040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547']);"><img src="//i1.mifile.cn/a1/pms_1482221011.26064844!220x220.jpg" width="150" height="150" alt="小米指环支架 金色" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1162000043.html" data-stat-aid="AA13890" data-stat-pid="2_30_2_169" data-log_code="31pchomeaccessories_right_3002040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547" target="_blank" data-stat-id="AA13890+2_30_2_169" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13890+2_30_2_169', '//item.mi.com/1162000043.html', 'pcpid', '31pchomeaccessories_right_3002040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547']);">小米指环支架 金色</a></h3> <p class="price"> <span class="num">16</span>元 
            <del>
             <span class="num">19</span>元
            </del> </p> <p class="rank">2.5万人评价</p> 
           <div class="flag flag-saleoff">
             减 3 元 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1162000043.html" data-stat-aid="AA13890" data-stat-pid="2_30_2_169" data-log_code="31pchomeaccessories_right_3002040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547" target="_blank" data-stat-id="AA13890+2_30_2_169" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13890+2_30_2_169', '//item.mi.com/1162000043.html', 'pcpid', '31pchomeaccessories_right_3002040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.2&amp;pid=2162000033&amp;adm=2547']);"> <span class="review">忘了问下，6的电源线里这根短的干嘛的，怎么用.</span> <span class="author"> 来自于 平淡 的评价 <span class="date" data-date="1504133484"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2174100028"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1174100029.html" data-stat-aid="AA18883" data-stat-pid="2_30_3_170" target="_blank" data-log_code="31pchomeaccessories_right_3003040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459" data-stat-id="AA18883+2_30_3_170" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18883+2_30_3_170', '//item.mi.com/1174100029.html', 'pcpid', '31pchomeaccessories_right_3003040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459']);"><img src="//i1.mifile.cn/a1/pms_1507878667.12359513!220x220.jpg" width="150" height="150" alt="小米USB充电器（10W）" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1174100029.html" data-stat-aid="AA18883" data-stat-pid="2_30_3_170" data-log_code="31pchomeaccessories_right_3003040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459" target="_blank" data-stat-id="AA18883+2_30_3_170" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18883+2_30_3_170', '//item.mi.com/1174100029.html', 'pcpid', '31pchomeaccessories_right_3003040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459']);">小米USB充电器（10W）</a></h3> <p class="price"> <span class="num">16.9</span>元 
            <del>
             <span class="num">19.9</span>元
            </del> </p> <p class="rank">3522人评价</p> 
           <div class="flag flag-saleoff">
             减 3 元 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1174100029.html" data-stat-aid="AA18883" data-stat-pid="2_30_3_170" data-log_code="31pchomeaccessories_right_3003040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459" target="_blank" data-stat-id="AA18883+2_30_3_170" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18883+2_30_3_170', '//item.mi.com/1174100029.html', 'pcpid', '31pchomeaccessories_right_3003040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.3&amp;pid=2174100028&amp;adm=4459']);"> <span class="review">用这还可以不算很贵，质量没的说，一直用小米，也很喜欢...</span> <span class="author"> 来自于 石头河 的评价 <span class="date" data-date="1516868482"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2174100029"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1174100030.html" data-stat-aid="AA18884" data-stat-pid="2_30_4_171" target="_blank" data-log_code="31pchomeaccessories_right_3004040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460" data-stat-id="AA18884+2_30_4_171" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18884+2_30_4_171', '//item.mi.com/1174100030.html', 'pcpid', '31pchomeaccessories_right_3004040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460']);"><img src="//i1.mifile.cn/a1/pms_1507877361.06147174!220x220.jpg" width="150" height="150" alt="小米USB充电器快充版（18W）" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1174100030.html" data-stat-aid="AA18884" data-stat-pid="2_30_4_171" data-log_code="31pchomeaccessories_right_3004040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460" target="_blank" data-stat-id="AA18884+2_30_4_171" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18884+2_30_4_171', '//item.mi.com/1174100030.html', 'pcpid', '31pchomeaccessories_right_3004040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460']);">小米USB充电器快充版（18W）</a></h3> <p class="price"> <span class="num">24.9</span>元 
            <del>
             <span class="num">29.9</span>元
            </del> </p> <p class="rank">9884人评价</p> 
           <div class="flag flag-saleoff">
             减 5 元 
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1174100030.html" data-stat-aid="AA18884" data-stat-pid="2_30_4_171" data-log_code="31pchomeaccessories_right_3004040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460" target="_blank" data-stat-id="AA18884+2_30_4_171" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18884+2_30_4_171', '//item.mi.com/1174100030.html', 'pcpid', '31pchomeaccessories_right_3004040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.4&amp;pid=2174100029&amp;adm=4460']);"> <span class="review">很不错，就是快递有点慢</span> <span class="author"> 来自于 夜微凉つ 的评价 <span class="date" data-date="1526877666"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2164100007"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/mouse/" data-stat-aid="AA14460" data-stat-pid="2_30_5_172" target="_blank" data-log_code="31pchomeaccessories_right_3005040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849" data-stat-id="AA14460+2_30_5_172" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14460+2_30_5_172', 'http://www.mi.com/mouse/', 'pcpid', '31pchomeaccessories_right_3005040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849']);"><img src="//i1.mifile.cn/a1/pms_1488533926.06453673!220x220.jpg" width="150" height="150" alt="小米便携鼠标" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/mouse/" data-stat-aid="AA14460" data-stat-pid="2_30_5_172" data-log_code="31pchomeaccessories_right_3005040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849" target="_blank" data-stat-id="AA14460+2_30_5_172" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14460+2_30_5_172', 'http://www.mi.com/mouse/', 'pcpid', '31pchomeaccessories_right_3005040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849']);">小米便携鼠标</a></h3> <p class="price"> <span class="num">99</span>元 </p> <p class="rank">1.6万人评价</p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/mouse/" data-stat-aid="AA14460" data-stat-pid="2_30_5_172" data-log_code="31pchomeaccessories_right_3005040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849" target="_blank" data-stat-id="AA14460+2_30_5_172" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14460+2_30_5_172', 'http://www.mi.com/mouse/', 'pcpid', '31pchomeaccessories_right_3005040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.5&amp;pid=2164100007&amp;adm=2849']);"> <span class="review">外形时尚，触感细腻。不错不错</span> <span class="author"> 来自于 陈钢 的评价 <span class="date" data-date="1504405713"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1173700017"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1173700017.html" data-stat-aid="AA21107" data-stat-pid="2_30_6_173" target="_blank" data-log_code="31pchomeaccessories_right_3006040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.6&amp;pid=1173700017&amp;adm=5695" data-stat-id="AA21107+2_30_6_173" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21107+2_30_6_173', '//item.mi.com/1173700017.html', 'pcpid', '31pchomeaccessories_right_3006040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.6&amp;pid=1173700017&amp;adm=5695']);"><img src="//i1.mifile.cn/a1/pms_1506393991.60537642!220x220.jpg" width="150" height="150" alt="小米USB Type C快速充电数据线 灰色" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1173700017.html" data-stat-aid="AA21107" data-stat-pid="2_30_6_173" data-log_code="31pchomeaccessories_right_3006040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.6&amp;pid=1173700017&amp;adm=5695" target="_blank" data-stat-id="AA21107+2_30_6_173" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21107+2_30_6_173', '//item.mi.com/1173700017.html', 'pcpid', '31pchomeaccessories_right_3006040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.6&amp;pid=1173700017&amp;adm=5695']);">小米USB Type C快速充电数据线 灰色</a></h3> <p class="price"> <span class="num">16.9</span>元 </p> <p class="rank"></p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1173700017.html" data-stat-aid="AA21107" data-stat-pid="2_30_6_173" data-log_code="31pchomeaccessories_right_3006040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.6&amp;pid=1173700017&amp;adm=5695" target="_blank" data-stat-id="AA21107+2_30_6_173" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21107+2_30_6_173', '//item.mi.com/1173700017.html', 'pcpid', '31pchomeaccessories_right_3006040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.6&amp;pid=1173700017&amp;adm=5695']);"> <span class="review">终于明白要寻找的那个人是谁时，回首灯火阑珊处，已空无...</span> <span class="author"> 来自于 宋刚 的评价 <span class="date" data-date="1510192152"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2162000029"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1162000038.html" data-stat-aid="AA14090" data-stat-pid="2_30_7_174" target="_blank" data-log_code="31pchomeaccessories_right_3007040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664" data-stat-id="AA14090+2_30_7_174" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14090+2_30_7_174', '//item.mi.com/1162000038.html', 'pcpid', '31pchomeaccessories_right_3007040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664']);"><img src="//i1.mifile.cn/a1/T1xLxQBgVT1RXrhCrK!220x220.jpg" width="150" height="150" alt="USB Type-C 转接头" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1162000038.html" data-stat-aid="AA14090" data-stat-pid="2_30_7_174" data-log_code="31pchomeaccessories_right_3007040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664" target="_blank" data-stat-id="AA14090+2_30_7_174" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14090+2_30_7_174', '//item.mi.com/1162000038.html', 'pcpid', '31pchomeaccessories_right_3007040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664']);">USB Type-C 转接头</a></h3> <p class="price"> <span class="num">5</span>元 </p> <p class="rank">9.4万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1162000038.html" data-stat-aid="AA14090" data-stat-pid="2_30_7_174" data-log_code="31pchomeaccessories_right_3007040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664" target="_blank" data-stat-id="AA14090+2_30_7_174" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA14090+2_30_7_174', '//item.mi.com/1162000038.html', 'pcpid', '31pchomeaccessories_right_3007040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.7&amp;pid=2162000029&amp;adm=2664']);"> <span class="review">非常实用的一个转接头，又便宜又好用，插得很紧，做工很好</span> <span class="author"> 来自于 哈哈 的评价 <span class="date" data-date="1502621393"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="1164700050"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1164700050.html" class="exposure" data-stat-aid="AA15387" data-stat-pid="2_30_8_175" data-log_code="31pchomeaccessories_right_3008040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.8&amp;pid=1164700050&amp;adm=3230" target="_blank" data-stat-id="AA15387+2_30_8_175" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15387+2_30_8_175', '//item.mi.com/1164700050.html', 'pcpid', '31pchomeaccessories_right_3008040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.8&amp;pid=1164700050&amp;adm=3230']);"> <img src="//i1.mifile.cn/a1/pms_1480066629.77799920!220x220.jpg" width="80" height="80" alt="小米二合一数据线100cm" /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1164700050.html" class="exposure" data-stat-aid="AA15387" data-stat-pid="2_30_8_175" data-log_code="31pchomeaccessories_right_3008040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.8&amp;pid=1164700050&amp;adm=3230" target="_blank" data-stat-id="AA15387+2_30_8_175" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA15387+2_30_8_175', '//item.mi.com/1164700050.html', 'pcpid', '31pchomeaccessories_right_3008040#t=normal&amp;act=other&amp;page=home&amp;bid=3030349.8&amp;pid=1164700050&amp;adm=3230']);">小米二合一数据线100cm</a></h3> <p class="price"><span class="num">21.9</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="//list.mi.com/others" target="_blank" data-stat-id="47d408c43a6dea90" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-47d408c43a6dea90', '//list.mi.com/others', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="//list.mi.com/others" target="_blank" data-stat-id="4acbba8fd94346d3" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4acbba8fd94346d3', '//list.mi.com/others', 'pcpid', '']);">浏览更多<small>其他配件</small></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div> 
    </div> 
    <div class="J_itemBox J_homeBanner home-banner-box home-banner-box-brick is-visible" data-index="6">
     <a href=" https://www.mi.com/a/h/7903.html?client_id=180100031058&amp;masid=17409.0495" target="_blank" data-log_code="31pchomebanner_6001016#t=normal&amp;act=other&amp;page=home&amp;bid=3186795.1&amp;adm=5703" data-stat-id="e2f7ff26d14dd452" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e2f7ff26d14dd452', 'https://www.mi.com/a/h/7903.htmlclient_id=180100031058&amp;masid=17409.0495', 'pcpid', '31pchomebanner_6001016#t=normal&amp;act=other&amp;page=home&amp;bid=3186795.1&amp;adm=5703']);"> <img class="" alt="企业团购" width="1226" src="//i1.mifile.cn/a4/xmad_15441040908677_rBuAF.jpg" /></a>
    </div> 
    <div id="around" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded" data-from-stat="false"> 
     <div class="box-hd"> 
      <h2 class="title">周边</h2> 
      <div class="more J_brickNav">
       <ul class="tab-list J_brickTabSwitch" data-tab-target="around-content">
        <li class="tab-active">热门</li>
        <li>出行</li>
        <li>居家</li>
        <li>生活周边</li>
        <li>箱包</li>
       </ul>
      </div> 
     </div> 
     <div class="box-bd J_brickBd">
      <div class="row">
       <div class="span4 span-first">
        <ul class="brick-promo-list clearfix"> 
         <li class="brick-item brick-item-m"> <a href="https://item.mi.com/1182300063.html" class="exposure" data-stat-aid="AA21277" data-stat-pid="2_31_1_176" data-log_code="31pchomearound_left001041#t=normal&amp;act=other&amp;page=home&amp;bid=3030350.1&amp;adm=5741" target="_blank" data-stat-id="AA21277+2_31_1_176" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21277+2_31_1_176', 'https://item.mi.com/1182300063.html', 'pcpid', '31pchomearound_left001041#t=normal&amp;act=other&amp;page=home&amp;bid=3030350.1&amp;adm=5741']);"><img src="//i1.mifile.cn/a4/xmad_15435434395699_vPGaD.jpg" alt="" /></a> </li> 
         <li class="brick-item brick-item-m"> <a href="https://item.mi.com/1183000017.html?cfrom=search" class="exposure" data-stat-aid="AA21279" data-stat-pid="2_31_2_177" data-log_code="31pchomearound_left002041#t=normal&amp;act=other&amp;page=home&amp;bid=3030350.2&amp;adm=5540" target="_blank" data-stat-id="AA21279+2_31_2_177" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21279+2_31_2_177', 'https://item.mi.com/1183000017.htmlcfrom=search', 'pcpid', '31pchomearound_left002041#t=normal&amp;act=other&amp;page=home&amp;bid=3030350.2&amp;adm=5540']);"><img src="//i1.mifile.cn/a4/xmad_15362056723006_PDzpN.jpg" alt="" /></a> </li>
        </ul>
       </div>
       <div class="span16">
        <div id="around-content" class="tab-container">
         <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive"> 
          <li class="brick-item brick-item-m" data-gid="1171500026"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1171500026.html" data-stat-aid="AA20543" data-stat-pid="2_32_1_178" target="_blank" data-log_code="31pchomearound_right_0001042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.1&amp;pid=1171500026&amp;adm=5334" data-stat-id="AA20543+2_32_1_178" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20543+2_32_1_178', '//item.mi.com/1171500026.html', 'pcpid', '31pchomearound_right_0001042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.1&amp;pid=1171500026&amp;adm=5334']);"><img src="//i1.mifile.cn/a1/pms_1492999959.43955760!220x220.jpg" width="150" height="150" alt="TS尼龙偏光太阳镜 米家定制灰色" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1171500026.html" data-stat-aid="AA20543" data-stat-pid="2_32_1_178" data-log_code="31pchomearound_right_0001042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.1&amp;pid=1171500026&amp;adm=5334" target="_blank" data-stat-id="AA20543+2_32_1_178" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20543+2_32_1_178', '//item.mi.com/1171500026.html', 'pcpid', '31pchomearound_right_0001042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.1&amp;pid=1171500026&amp;adm=5334']);">TS尼龙偏光太阳镜 米家定制灰色</a></h3> <p class="price"> <span class="num">129</span>元 
            <del>
             <span class="num">199</span>元
            </del> </p> <p class="rank">1.5万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1171500026.html" data-stat-aid="AA20543" data-stat-pid="2_32_1_178" data-log_code="31pchomearound_right_0001042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.1&amp;pid=1171500026&amp;adm=5334" target="_blank" data-stat-id="AA20543+2_32_1_178" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20543+2_32_1_178', '//item.mi.com/1171500026.html', 'pcpid', '31pchomearound_right_0001042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.1&amp;pid=1171500026&amp;adm=5334']);"> <span class="review">很好，主要是开车带，但是掩饰不住的高调。 狠不狠！我...</span> <span class="author"> 来自于 邵鑫 的评价 <span class="date" data-date="1495450138"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1181300014"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1181300014.html" data-stat-aid="AA20054" data-stat-pid="2_32_2_179" target="_blank" data-log_code="31pchomearound_right_0002042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.2&amp;pid=1181300014&amp;adm=5075" data-stat-id="AA20054+2_32_2_179" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20054+2_32_2_179', '//item.mi.com/1181300014.html', 'pcpid', '31pchomearound_right_0002042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.2&amp;pid=1181300014&amp;adm=5075']);"><img src="//i1.mifile.cn/a1/pms_1522309592.89679012!220x220.jpg" width="150" height="150" alt="米兔招财猫足金吊坠" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1181300014.html" data-stat-aid="AA20054" data-stat-pid="2_32_2_179" data-log_code="31pchomearound_right_0002042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.2&amp;pid=1181300014&amp;adm=5075" target="_blank" data-stat-id="AA20054+2_32_2_179" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20054+2_32_2_179', '//item.mi.com/1181300014.html', 'pcpid', '31pchomearound_right_0002042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.2&amp;pid=1181300014&amp;adm=5075']);">米兔招财猫足金吊坠</a></h3> <p class="price"> <span class="num">888</span>元 </p> <p class="rank">1029人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1181300014.html" data-stat-aid="AA20054" data-stat-pid="2_32_2_179" data-log_code="31pchomearound_right_0002042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.2&amp;pid=1181300014&amp;adm=5075" target="_blank" data-stat-id="AA20054+2_32_2_179" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20054+2_32_2_179', '//item.mi.com/1181300014.html', 'pcpid', '31pchomearound_right_0002042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.2&amp;pid=1181300014&amp;adm=5075']);"> <span class="review">趁着双11，有优惠券，买买买是少不了的，买来送老婆的...</span> <span class="author"> 来自于 凌速驾月追驰鹰 的评价 <span class="date" data-date="1543349466"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1183700001"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1183700001.html" data-stat-aid="AA21022" data-stat-pid="2_32_3_180" target="_blank" data-log_code="31pchomearound_right_0003042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.3&amp;pid=1183700001&amp;adm=5617" data-stat-id="AA21022+2_32_3_180" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21022+2_32_3_180', '//item.mi.com/1183700001.html', 'pcpid', '31pchomearound_right_0003042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.3&amp;pid=1183700001&amp;adm=5617']);"><img src="//i1.mifile.cn/a1/pms_1536571975.28359503!220x220.jpg" width="150" height="150" alt="90分轻薄无缝一体织鹅绒羽绒服 黑色" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1183700001.html" data-stat-aid="AA21022" data-stat-pid="2_32_3_180" data-log_code="31pchomearound_right_0003042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.3&amp;pid=1183700001&amp;adm=5617" target="_blank" data-stat-id="AA21022+2_32_3_180" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21022+2_32_3_180', '//item.mi.com/1183700001.html', 'pcpid', '31pchomearound_right_0003042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.3&amp;pid=1183700001&amp;adm=5617']);">90分轻薄无缝一体织鹅绒羽绒服 黑色</a></h3> <p class="price"> <span class="num">299</span>元 </p> <p class="rank">1555人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1183700001.html" data-stat-aid="AA21022" data-stat-pid="2_32_3_180" data-log_code="31pchomearound_right_0003042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.3&amp;pid=1183700001&amp;adm=5617" target="_blank" data-stat-id="AA21022+2_32_3_180" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21022+2_32_3_180', '//item.mi.com/1183700001.html', 'pcpid', '31pchomearound_right_0003042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.3&amp;pid=1183700001&amp;adm=5617']);"> <span class="review">衣服很轻薄，穿着很舒服，质量不错，就是不知道保不保暖...</span> <span class="author"> 来自于 qzuser 的评价 <span class="date" data-date="1540118265"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1180900006"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1180900006.html" data-stat-aid="AA19772" data-stat-pid="2_32_4_181" target="_blank" data-log_code="31pchomearound_right_0004042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.4&amp;pid=1180900006&amp;adm=4906" data-stat-id="AA19772+2_32_4_181" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19772+2_32_4_181', '//item.mi.com/1180900006.html', 'pcpid', '31pchomearound_right_0004042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.4&amp;pid=1180900006&amp;adm=4906']);"><img src="//i1.mifile.cn/a1/pms_1521026661.04345181!220x220.jpg" width="150" height="150" alt="8H记忆绵护椎腰靠" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1180900006.html" data-stat-aid="AA19772" data-stat-pid="2_32_4_181" data-log_code="31pchomearound_right_0004042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.4&amp;pid=1180900006&amp;adm=4906" target="_blank" data-stat-id="AA19772+2_32_4_181" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19772+2_32_4_181', '//item.mi.com/1180900006.html', 'pcpid', '31pchomearound_right_0004042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.4&amp;pid=1180900006&amp;adm=4906']);">8H记忆绵护椎腰靠</a></h3> <p class="price"> <span class="num">79</span>元 
            <del>
             <span class="num">89</span>元
            </del> </p> <p class="rank">1641人评价</p> 
           <div class="flag flag-new">
            新品
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1180900006.html" data-stat-aid="AA19772" data-stat-pid="2_32_4_181" data-log_code="31pchomearound_right_0004042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.4&amp;pid=1180900006&amp;adm=4906" target="_blank" data-stat-id="AA19772+2_32_4_181" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19772+2_32_4_181', '//item.mi.com/1180900006.html', 'pcpid', '31pchomearound_right_0004042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.4&amp;pid=1180900006&amp;adm=4906']);"> <span class="review">非常满意，</span> <span class="author"> 来自于 格兰5 的评价 <span class="date" data-date="1538363015"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1174800007"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1174800007.html" data-stat-aid="AA21021" data-stat-pid="2_32_5_182" target="_blank" data-log_code="31pchomearound_right_0005042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.5&amp;pid=1174800007&amp;adm=5616" data-stat-id="AA21021+2_32_5_182" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21021+2_32_5_182', '//item.mi.com/1174800007.html', 'pcpid', '31pchomearound_right_0005042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.5&amp;pid=1174800007&amp;adm=5616']);"><img src="//i1.mifile.cn/a1/pms_1512702607.05524534!220x220.jpg" width="150" height="150" alt="保温杯" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1174800007.html" data-stat-aid="AA21021" data-stat-pid="2_32_5_182" data-log_code="31pchomearound_right_0005042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.5&amp;pid=1174800007&amp;adm=5616" target="_blank" data-stat-id="AA21021+2_32_5_182" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21021+2_32_5_182', '//item.mi.com/1174800007.html', 'pcpid', '31pchomearound_right_0005042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.5&amp;pid=1174800007&amp;adm=5616']);">保温杯</a></h3> <p class="price"> <span class="num">99</span>元 </p> <p class="rank">1万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1174800007.html" data-stat-aid="AA21021" data-stat-pid="2_32_5_182" data-log_code="31pchomearound_right_0005042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.5&amp;pid=1174800007&amp;adm=5616" target="_blank" data-stat-id="AA21021+2_32_5_182" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA21021+2_32_5_182', '//item.mi.com/1174800007.html', 'pcpid', '31pchomearound_right_0005042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.5&amp;pid=1174800007&amp;adm=5616']);"> <span class="review">一点都不好用，早上出门接一杯开水，下午回家 都还不能...</span> <span class="author"> 来自于 唱戏而已 的评价 <span class="date" data-date="1524822215"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1181300017"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1181300017.html" data-stat-aid="AA20062" data-stat-pid="2_32_6_183" target="_blank" data-log_code="31pchomearound_right_0006042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.6&amp;pid=1181300017&amp;adm=5078" data-stat-id="AA20062+2_32_6_183" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20062+2_32_6_183', '//item.mi.com/1181300017.html', 'pcpid', '31pchomearound_right_0006042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.6&amp;pid=1181300017&amp;adm=5078']);"><img src="//i1.mifile.cn/a1/pms_1522311796.15496400!220x220.jpg" width="150" height="150" alt="小米棒球帽 藏蓝" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1181300017.html" data-stat-aid="AA20062" data-stat-pid="2_32_6_183" data-log_code="31pchomearound_right_0006042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.6&amp;pid=1181300017&amp;adm=5078" target="_blank" data-stat-id="AA20062+2_32_6_183" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20062+2_32_6_183', '//item.mi.com/1181300017.html', 'pcpid', '31pchomearound_right_0006042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.6&amp;pid=1181300017&amp;adm=5078']);">小米棒球帽 藏蓝</a></h3> <p class="price"> <span class="num">49</span>元 </p> <p class="rank">2025人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1181300017.html" data-stat-aid="AA20062" data-stat-pid="2_32_6_183" data-log_code="31pchomearound_right_0006042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.6&amp;pid=1181300017&amp;adm=5078" target="_blank" data-stat-id="AA20062+2_32_6_183" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20062+2_32_6_183', '//item.mi.com/1181300017.html', 'pcpid', '31pchomearound_right_0006042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.6&amp;pid=1181300017&amp;adm=5078']);"> <span class="review">质量很好 很赞 很酷 戴起来很舒服✧٩(ˊ...</span> <span class="author"> 来自于 东方轩炎 的评价 <span class="date" data-date="1542941385"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2173100006"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/toothbrush-set/?cfrom=search" data-stat-aid="AA18910" data-stat-pid="2_32_7_184" target="_blank" data-log_code="31pchomearound_right_0007042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.7&amp;pid=2173100006&amp;adm=4469" data-stat-id="AA18910+2_32_7_184" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18910+2_32_7_184', 'https://www.mi.com/toothbrush-set/cfrom=search', 'pcpid', '31pchomearound_right_0007042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.7&amp;pid=2173100006&amp;adm=4469']);"><img src="//i1.mifile.cn/a1/pms_1502258923.87257653!220x220.jpg" width="150" height="150" alt="贝医生巴氏牙刷(四色装)" /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/toothbrush-set/?cfrom=search" data-stat-aid="AA18910" data-stat-pid="2_32_7_184" data-log_code="31pchomearound_right_0007042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.7&amp;pid=2173100006&amp;adm=4469" target="_blank" data-stat-id="AA18910+2_32_7_184" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18910+2_32_7_184', 'https://www.mi.com/toothbrush-set/cfrom=search', 'pcpid', '31pchomearound_right_0007042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.7&amp;pid=2173100006&amp;adm=4469']);">贝医生巴氏牙刷(四色装)</a></h3> <p class="price"> <span class="num">34.9</span>元 
            <del>
             <span class="num">39.9</span>元
            </del> </p> <p class="rank">1.3万人评价</p> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/toothbrush-set/?cfrom=search" data-stat-aid="AA18910" data-stat-pid="2_32_7_184" data-log_code="31pchomearound_right_0007042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.7&amp;pid=2173100006&amp;adm=4469" target="_blank" data-stat-id="AA18910+2_32_7_184" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18910+2_32_7_184', 'https://www.mi.com/toothbrush-set/cfrom=search', 'pcpid', '31pchomearound_right_0007042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.7&amp;pid=2173100006&amp;adm=4469']);"> <span class="review">不错不错，比超市里的牙刷好！</span> <span class="author"> 来自于 cyrixel 的评价 <span class="date" data-date="1513484362"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="2173100039"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1173100102.html" class="exposure" data-stat-aid="AA18950" data-stat-pid="2_32_8_185" data-log_code="31pchomearound_right_0008042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.8&amp;pid=2173100039&amp;adm=4495" target="_blank" data-stat-id="AA18950+2_32_8_185" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18950+2_32_8_185', '//item.mi.com/1173100102.html', 'pcpid', '31pchomearound_right_0008042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.8&amp;pid=2173100039&amp;adm=4495']);"> <img src="//i1.mifile.cn/a1/pms_1502097740.52392774!220x220.jpg" width="80" height="80" alt="8H乳胶弹簧静音床垫" /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1173100102.html" class="exposure" data-stat-aid="AA18950" data-stat-pid="2_32_8_185" data-log_code="31pchomearound_right_0008042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.8&amp;pid=2173100039&amp;adm=4495" target="_blank" data-stat-id="AA18950+2_32_8_185" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18950+2_32_8_185', '//item.mi.com/1173100102.html', 'pcpid', '31pchomearound_right_0008042#t=normal&amp;act=other&amp;page=home&amp;bid=3030351.8&amp;pid=2173100039&amp;adm=4495']);">8H乳胶弹簧静音床垫</a></h3> <p class="price"><span class="num">1499</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="https://list.mi.com/24" target="_blank" data-stat-id="9eaf6b09c9f3089c" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-9eaf6b09c9f3089c', 'https://list.mi.com/24', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="https://list.mi.com/24" target="_blank" data-stat-id="61fa070f2b3cd063" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-61fa070f2b3cd063', 'https://list.mi.com/24', 'pcpid', '']);">浏览更多<small>热门</small></a></li>
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="1163200041"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/product/4230.html" data-stat-aid="AA20757" data-stat-pid="2_33_1_186" target="_blank" data-log_code="31pchomearound_right_1001043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.1&amp;pid=1163200041&amp;adm=5449" data-stat-id="AA20757+2_33_1_186" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20757+2_33_1_186', '//item.mi.com/product/4230.html', 'pcpid', '31pchomearound_right_1001043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.1&amp;pid=1163200041&amp;adm=5449']);"><img src="//i1.mifile.cn/a1/pms_1479182984.26159750!220x220.jpg" width="150" height="150" alt="AirPOP 防雾霾口罩 米家定制 黑色" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/product/4230.html" data-stat-aid="AA20757" data-stat-pid="2_33_1_186" data-log_code="31pchomearound_right_1001043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.1&amp;pid=1163200041&amp;adm=5449" target="_blank" data-stat-id="AA20757+2_33_1_186" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20757+2_33_1_186', '//item.mi.com/product/4230.html', 'pcpid', '31pchomearound_right_1001043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.1&amp;pid=1163200041&amp;adm=5449']);">AirPOP 防雾霾口罩 米家定制 黑色</a></h3> <p class="price"> <span class="num">69</span>元 </p> <p class="rank">7791人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/product/4230.html" data-stat-aid="AA20757" data-stat-pid="2_33_1_186" data-log_code="31pchomearound_right_1001043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.1&amp;pid=1163200041&amp;adm=5449" target="_blank" data-stat-id="AA20757+2_33_1_186" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20757+2_33_1_186', '//item.mi.com/product/4230.html', 'pcpid', '31pchomearound_right_1001043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.1&amp;pid=1163200041&amp;adm=5449']);"> <span class="review">向往支持小米发货如此之快，怎么没有把小米妹子一起寄过...</span> <span class="author"> 来自于 谁伴我闯荡 的评价 <span class="date" data-date="1496043313"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1182300063"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1182300063.html" data-stat-aid="AA18824" data-stat-pid="2_33_2_187" target="_blank" data-log_code="31pchomearound_right_1002043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.2&amp;pid=1182300063&amp;adm=5337" data-stat-id="AA18824+2_33_2_187" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18824+2_33_2_187', '//item.mi.com/1182300063.html', 'pcpid', '31pchomearound_right_1002043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.2&amp;pid=1182300063&amp;adm=5337']);"><img src="//i1.mifile.cn/a1/pms_1528368095.99082693!220x220.jpg" width="150" height="150" alt="米家运动鞋2 " /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1182300063.html" data-stat-aid="AA18824" data-stat-pid="2_33_2_187" data-log_code="31pchomearound_right_1002043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.2&amp;pid=1182300063&amp;adm=5337" target="_blank" data-stat-id="AA18824+2_33_2_187" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18824+2_33_2_187', '//item.mi.com/1182300063.html', 'pcpid', '31pchomearound_right_1002043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.2&amp;pid=1182300063&amp;adm=5337']);">米家运动鞋2 </a></h3> <p class="price"> <span class="num">179</span>元 
            <del>
             <span class="num">199</span>元
            </del> </p> <p class="rank">1.1万人评价</p> 
           <div class="flag flag-new">
            新品
           </div> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1182300063.html" data-stat-aid="AA18824" data-stat-pid="2_33_2_187" data-log_code="31pchomearound_right_1002043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.2&amp;pid=1182300063&amp;adm=5337" target="_blank" data-stat-id="AA18824+2_33_2_187" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18824+2_33_2_187', '//item.mi.com/1182300063.html', 'pcpid', '31pchomearound_right_1002043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.2&amp;pid=1182300063&amp;adm=5337']);"> <span class="review">棒棒哒，穿在脚上包裹性不错，很舒适，这个价位能买到超...</span> <span class="author"> 来自于 老鼠 的评价 <span class="date" data-date="1533456524"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1183000019"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1183000019.html" data-stat-aid="AA20992" data-stat-pid="2_33_3_188" target="_blank" data-log_code="31pchomearound_right_1003043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.3&amp;pid=1183000019&amp;adm=5602" data-stat-id="AA20992+2_33_3_188" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20992+2_33_3_188', '//item.mi.com/1183000019.html', 'pcpid', '31pchomearound_right_1003043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.3&amp;pid=1183000019&amp;adm=5602']);"><img src="//i1.mifile.cn/a1/pms_1533867470.49636779!220x220.jpg" width="150" height="150" alt="90分旅行箱 1A 20英寸 极光蓝" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1183000019.html" data-stat-aid="AA20992" data-stat-pid="2_33_3_188" data-log_code="31pchomearound_right_1003043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.3&amp;pid=1183000019&amp;adm=5602" target="_blank" data-stat-id="AA20992+2_33_3_188" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20992+2_33_3_188', '//item.mi.com/1183000019.html', 'pcpid', '31pchomearound_right_1003043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.3&amp;pid=1183000019&amp;adm=5602']);">90分旅行箱 1A 20英寸 极光蓝</a></h3> <p class="price"> <span class="num">289</span>元 
            <del>
             <span class="num">299</span>元
            </del> </p> <p class="rank">770人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1183000019.html" data-stat-aid="AA20992" data-stat-pid="2_33_3_188" data-log_code="31pchomearound_right_1003043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.3&amp;pid=1183000019&amp;adm=5602" target="_blank" data-stat-id="AA20992+2_33_3_188" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20992+2_33_3_188', '//item.mi.com/1183000019.html', 'pcpid', '31pchomearound_right_1003043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.3&amp;pid=1183000019&amp;adm=5602']);"> <span class="review">不错不错，就差一场说走就走的旅行了</span> <span class="author"> 来自于 请叫我 米仔 的评价 <span class="date" data-date="1541155651"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2173100054"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/plateshoes/" data-stat-aid="AA18826" data-stat-pid="2_33_4_189" target="_blank" data-log_code="31pchomearound_right_1004043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.4&amp;pid=2173100054&amp;adm=4413" data-stat-id="AA18826+2_33_4_189" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18826+2_33_4_189', 'https://www.mi.com/plateshoes/', 'pcpid', '31pchomearound_right_1004043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.4&amp;pid=2173100054&amp;adm=4413']);"><img src="//i1.mifile.cn/a1/pms_1504510139.65413172!220x220.jpg" width="150" height="150" alt="Free Tie真皮板鞋 米家定制" /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/plateshoes/" data-stat-aid="AA18826" data-stat-pid="2_33_4_189" data-log_code="31pchomearound_right_1004043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.4&amp;pid=2173100054&amp;adm=4413" target="_blank" data-stat-id="AA18826+2_33_4_189" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18826+2_33_4_189', 'https://www.mi.com/plateshoes/', 'pcpid', '31pchomearound_right_1004043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.4&amp;pid=2173100054&amp;adm=4413']);">Free Tie真皮板鞋 米家定制</a></h3> <p class="price"> <span class="num">129</span>元 
            <del>
             <span class="num">199</span>元
            </del> </p> <p class="rank">1.8万人评价</p> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/plateshoes/" data-stat-aid="AA18826" data-stat-pid="2_33_4_189" data-log_code="31pchomearound_right_1004043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.4&amp;pid=2173100054&amp;adm=4413" target="_blank" data-stat-id="AA18826+2_33_4_189" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18826+2_33_4_189', 'https://www.mi.com/plateshoes/', 'pcpid', '31pchomearound_right_1004043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.4&amp;pid=2173100054&amp;adm=4413']);"> <span class="review">雷军同款啊哈哈，超级好看！</span> <span class="author"> 来自于 脑袋 的评价 <span class="date" data-date="1513246993"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2161100001"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1161100002.html" data-stat-aid="AA19497" data-stat-pid="2_33_5_190" target="_blank" data-log_code="31pchomearound_right_1005043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.5&amp;pid=2161100001&amp;adm=4763" data-stat-id="AA19497+2_33_5_190" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19497+2_33_5_190', '//item.mi.com/1161100002.html', 'pcpid', '31pchomearound_right_1005043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.5&amp;pid=2161100001&amp;adm=4763']);"><img src="//i1.mifile.cn/a1/T1DuxvB4D_1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米经典商务双肩包 " /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1161100002.html" data-stat-aid="AA19497" data-stat-pid="2_33_5_190" data-log_code="31pchomearound_right_1005043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.5&amp;pid=2161100001&amp;adm=4763" target="_blank" data-stat-id="AA19497+2_33_5_190" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19497+2_33_5_190', '//item.mi.com/1161100002.html', 'pcpid', '31pchomearound_right_1005043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.5&amp;pid=2161100001&amp;adm=4763']);">小米经典商务双肩包 </a></h3> <p class="price"> <span class="num">99</span>元 </p> <p class="rank">1.9万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1161100002.html" data-stat-aid="AA19497" data-stat-pid="2_33_5_190" data-log_code="31pchomearound_right_1005043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.5&amp;pid=2161100001&amp;adm=4763" target="_blank" data-stat-id="AA19497+2_33_5_190" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19497+2_33_5_190', '//item.mi.com/1161100002.html', 'pcpid', '31pchomearound_right_1005043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.5&amp;pid=2161100001&amp;adm=4763']);"> <span class="review">迷了有好几年的小米，终于送了我一个背包！主要是旁边的...</span> <span class="author"> 来自于 L. 的评价 <span class="date" data-date="1514335710"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2172800033"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1172800047.html" data-stat-aid="AA18828" data-stat-pid="2_33_6_191" target="_blank" data-log_code="31pchomearound_right_1006043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.6&amp;pid=2172800033&amp;adm=4415" data-stat-id="AA18828+2_33_6_191" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18828+2_33_6_191', '//item.mi.com/1172800047.html', 'pcpid', '31pchomearound_right_1006043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.6&amp;pid=2172800033&amp;adm=4415']);"><img src="//i1.mifile.cn/a1/pms_1500282577.40987685!220x220.jpg" width="150" height="150" alt="TS偏光太阳镜   米家定制" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1172800047.html" data-stat-aid="AA18828" data-stat-pid="2_33_6_191" data-log_code="31pchomearound_right_1006043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.6&amp;pid=2172800033&amp;adm=4415" target="_blank" data-stat-id="AA18828+2_33_6_191" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18828+2_33_6_191', '//item.mi.com/1172800047.html', 'pcpid', '31pchomearound_right_1006043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.6&amp;pid=2172800033&amp;adm=4415']);">TS偏光太阳镜 米家定制</a></h3> <p class="price"> <span class="num">79</span>元 
            <del>
             <span class="num">99</span>元
            </del> </p> <p class="rank">9302人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1172800047.html" data-stat-aid="AA18828" data-stat-pid="2_33_6_191" data-log_code="31pchomearound_right_1006043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.6&amp;pid=2172800033&amp;adm=4415" target="_blank" data-stat-id="AA18828+2_33_6_191" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18828+2_33_6_191', '//item.mi.com/1172800047.html', 'pcpid', '31pchomearound_right_1006043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.6&amp;pid=2172800033&amp;adm=4415']);"> <span class="review">我已经偷偷的把两个车上的眼镜都换成米家定制版的了。</span> <span class="author"> 来自于 一品茶香肉 的评价 <span class="date" data-date="1513087061"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1181800011"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1181800011.html?cfrom=search" data-stat-aid="AA20851" data-stat-pid="2_33_7_192" target="_blank" data-log_code="31pchomearound_right_1007043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.7&amp;pid=1181800011&amp;adm=5504" data-stat-id="AA20851+2_33_7_192" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20851+2_33_7_192', '//item.mi.com/1181800011.htmlcfrom=search', 'pcpid', '31pchomearound_right_1007043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.7&amp;pid=1181800011&amp;adm=5504']);"><img src="//i1.mifile.cn/a1/pms_1525662535.67086012!220x220.jpg" width="150" height="150" alt="TS尼龙偏光太阳镜 米家定制茶色" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1181800011.html?cfrom=search" data-stat-aid="AA20851" data-stat-pid="2_33_7_192" data-log_code="31pchomearound_right_1007043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.7&amp;pid=1181800011&amp;adm=5504" target="_blank" data-stat-id="AA20851+2_33_7_192" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20851+2_33_7_192', '//item.mi.com/1181800011.htmlcfrom=search', 'pcpid', '31pchomearound_right_1007043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.7&amp;pid=1181800011&amp;adm=5504']);">TS尼龙偏光太阳镜 米家定制茶色</a></h3> <p class="price"> <span class="num">139</span>元 
            <del>
             <span class="num">249</span>元
            </del> </p> <p class="rank">1.5万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1181800011.html?cfrom=search" data-stat-aid="AA20851" data-stat-pid="2_33_7_192" data-log_code="31pchomearound_right_1007043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.7&amp;pid=1181800011&amp;adm=5504" target="_blank" data-stat-id="AA20851+2_33_7_192" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20851+2_33_7_192', '//item.mi.com/1181800011.htmlcfrom=search', 'pcpid', '31pchomearound_right_1007043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.7&amp;pid=1181800011&amp;adm=5504']);"> <span class="review">很好，主要是开车带，但是掩饰不住的高调。 狠不狠！我...</span> <span class="author"> 来自于 邵鑫 的评价 <span class="date" data-date="1495450138"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="2164700010"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1164700014.html" class="exposure" data-stat-aid="AA20993" data-stat-pid="2_33_8_193" data-log_code="31pchomearound_right_1008043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.8&amp;pid=2164700010&amp;adm=4802" target="_blank" data-stat-id="AA20993+2_33_8_193" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20993+2_33_8_193', '//item.mi.com/1164700014.html', 'pcpid', '31pchomearound_right_1008043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.8&amp;pid=2164700010&amp;adm=4802']);"> <img src="//i1.mifile.cn/a1/pms_1479972875.00224492!220x220.jpg" width="80" height="80" alt="最生活毛巾&middot;青春系列 " /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1164700014.html" class="exposure" data-stat-aid="AA20993" data-stat-pid="2_33_8_193" data-log_code="31pchomearound_right_1008043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.8&amp;pid=2164700010&amp;adm=4802" target="_blank" data-stat-id="AA20993+2_33_8_193" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20993+2_33_8_193', '//item.mi.com/1164700014.html', 'pcpid', '31pchomearound_right_1008043#t=normal&amp;act=other&amp;page=home&amp;bid=3030352.8&amp;pid=2164700010&amp;adm=4802']);">最生活毛巾&middot;青春系列 </a></h3> <p class="price"><span class="num">19.9</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="//list.mi.com/22" target="_blank" data-stat-id="e1bd8b0a91ce28ff" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-e1bd8b0a91ce28ff', '//list.mi.com/22', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="//list.mi.com/22" target="_blank" data-stat-id="22dea670c8440e93" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-22dea670c8440e93', '//list.mi.com/22', 'pcpid', '']);">浏览更多<small>出行</small></a></li>
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="2163500007"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/pillowZ2/" data-stat-aid="AA18831" data-stat-pid="2_34_1_194" target="_blank" data-log_code="31pchomearound_right_2001044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.1&amp;pid=2163500007&amp;adm=4418" data-stat-id="AA18831+2_34_1_194" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18831+2_34_1_194', 'http://www.mi.com/pillowZ2/', 'pcpid', '31pchomearound_right_2001044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.1&amp;pid=2163500007&amp;adm=4418']);"><img src="//i1.mifile.cn/a1/pms_1472711253.2453066!220x220.jpg" width="150" height="150" alt="8H护颈乳胶枕" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/pillowZ2/" data-stat-aid="AA18831" data-stat-pid="2_34_1_194" data-log_code="31pchomearound_right_2001044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.1&amp;pid=2163500007&amp;adm=4418" target="_blank" data-stat-id="AA18831+2_34_1_194" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18831+2_34_1_194', 'http://www.mi.com/pillowZ2/', 'pcpid', '31pchomearound_right_2001044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.1&amp;pid=2163500007&amp;adm=4418']);">8H护颈乳胶枕</a></h3> <p class="price"> <span class="num">199</span>元 
            <del>
             <span class="num">239</span>元
            </del> </p> <p class="rank">2.2万人评价</p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/pillowZ2/" data-stat-aid="AA18831" data-stat-pid="2_34_1_194" data-log_code="31pchomearound_right_2001044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.1&amp;pid=2163500007&amp;adm=4418" target="_blank" data-stat-id="AA18831+2_34_1_194" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18831+2_34_1_194', 'http://www.mi.com/pillowZ2/', 'pcpid', '31pchomearound_right_2001044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.1&amp;pid=2163500007&amp;adm=4418']);"> <span class="review">用着舒服 包装精美 手感不错 买了两个了 家里和单位...</span> <span class="author"> 来自于 陈光辉 的评价 <span class="date" data-date="1510844232"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2163500006"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/pillowZ1/" data-stat-aid="AA18832" data-stat-pid="2_34_2_195" target="_blank" data-log_code="31pchomearound_right_2002044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.2&amp;pid=2163500006&amp;adm=4419" data-stat-id="AA18832+2_34_2_195" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18832+2_34_2_195', 'http://www.mi.com/pillowZ1/', 'pcpid', '31pchomearound_right_2002044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.2&amp;pid=2163500006&amp;adm=4419']);"><img src="//i1.mifile.cn/a1/pms_1472710764.55986027!220x220.jpg" width="150" height="150" alt="8H标准乳胶枕" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/pillowZ1/" data-stat-aid="AA18832" data-stat-pid="2_34_2_195" data-log_code="31pchomearound_right_2002044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.2&amp;pid=2163500006&amp;adm=4419" target="_blank" data-stat-id="AA18832+2_34_2_195" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18832+2_34_2_195', 'http://www.mi.com/pillowZ1/', 'pcpid', '31pchomearound_right_2002044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.2&amp;pid=2163500006&amp;adm=4419']);">8H标准乳胶枕</a></h3> <p class="price"> <span class="num">154</span>元 
            <del>
             <span class="num">159</span>元
            </del> </p> <p class="rank">1.2万人评价</p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/pillowZ1/" data-stat-aid="AA18832" data-stat-pid="2_34_2_195" data-log_code="31pchomearound_right_2002044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.2&amp;pid=2163500006&amp;adm=4419" target="_blank" data-stat-id="AA18832+2_34_2_195" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18832+2_34_2_195', 'http://www.mi.com/pillowZ1/', 'pcpid', '31pchomearound_right_2002044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.2&amp;pid=2163500006&amp;adm=4419']);"> <span class="review">姑娘觉得枕头非常好，并给我看了传说中豆腐块一样的被子。</span> <span class="author"> 来自于 斯大林的小毛驴 的评价 <span class="date" data-date="1488276761"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2164700026"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1164700048.html" data-stat-aid="AA18833" data-stat-pid="2_34_3_196" target="_blank" data-log_code="31pchomearound_right_2003044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.3&amp;pid=2164700026&amp;adm=4420" data-stat-id="AA18833+2_34_3_196" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18833+2_34_3_196', '//item.mi.com/1164700048.html', 'pcpid', '31pchomearound_right_2003044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.3&amp;pid=2164700026&amp;adm=4420']);"><img src="//i1.mifile.cn/a1/pms_1481178479.88974286!220x220.jpg" width="150" height="150" alt="8H多功能护颈枕U1" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1164700048.html" data-stat-aid="AA18833" data-stat-pid="2_34_3_196" data-log_code="31pchomearound_right_2003044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.3&amp;pid=2164700026&amp;adm=4420" target="_blank" data-stat-id="AA18833+2_34_3_196" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18833+2_34_3_196', '//item.mi.com/1164700048.html', 'pcpid', '31pchomearound_right_2003044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.3&amp;pid=2164700026&amp;adm=4420']);">8H多功能护颈枕U1</a></h3> <p class="price"> <span class="num">69</span>元 
            <del>
             <span class="num">79</span>元
            </del> </p> <p class="rank">8496人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1164700048.html" data-stat-aid="AA18833" data-stat-pid="2_34_3_196" data-log_code="31pchomearound_right_2003044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.3&amp;pid=2164700026&amp;adm=4420" target="_blank" data-stat-id="AA18833+2_34_3_196" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18833+2_34_3_196', '//item.mi.com/1164700048.html', 'pcpid', '31pchomearound_right_2003044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.3&amp;pid=2164700026&amp;adm=4420']);"> <span class="review">给老婆准备的生日礼物，还没打开，相信小米的品质。每次...</span> <span class="author"> 来自于 卡拉大宝 的评价 <span class="date" data-date="1483409061"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2173100041"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1173100102.html" data-stat-aid="AA18834" data-stat-pid="2_34_4_197" target="_blank" data-log_code="31pchomearound_right_2004044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.4&amp;pid=2173100041&amp;adm=4421" data-stat-id="AA18834+2_34_4_197" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18834+2_34_4_197', '//item.mi.com/1173100102.html', 'pcpid', '31pchomearound_right_2004044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.4&amp;pid=2173100041&amp;adm=4421']);"><img src="//i1.mifile.cn/a1/pms_1502097740.52392774!220x220.jpg" width="150" height="150" alt="8H乳胶弹簧静音床垫" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1173100102.html" data-stat-aid="AA18834" data-stat-pid="2_34_4_197" data-log_code="31pchomearound_right_2004044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.4&amp;pid=2173100041&amp;adm=4421" target="_blank" data-stat-id="AA18834+2_34_4_197" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18834+2_34_4_197', '//item.mi.com/1173100102.html', 'pcpid', '31pchomearound_right_2004044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.4&amp;pid=2173100041&amp;adm=4421']);">8H乳胶弹簧静音床垫</a></h3> <p class="price"> <span class="num">1799</span>元 
            <del>
             <span class="num">1899</span>元
            </del> </p> <p class="rank">1080人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1173100102.html" data-stat-aid="AA18834" data-stat-pid="2_34_4_197" data-log_code="31pchomearound_right_2004044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.4&amp;pid=2173100041&amp;adm=4421" target="_blank" data-stat-id="AA18834+2_34_4_197" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18834+2_34_4_197', '//item.mi.com/1173100102.html', 'pcpid', '31pchomearound_right_2004044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.4&amp;pid=2173100041&amp;adm=4421']);"> <span class="review">变小米之家了嘻嘻(♡˙︶˙♡)</span> <span class="author"> 来自于 路寒 的评价 <span class="date" data-date="1518740543"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2171700007"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1171700009.html" data-stat-aid="AA18835" data-stat-pid="2_34_5_198" target="_blank" data-log_code="31pchomearound_right_2005044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.5&amp;pid=2171700007&amp;adm=4422" data-stat-id="AA18835+2_34_5_198" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18835+2_34_5_198', '//item.mi.com/1171700009.html', 'pcpid', '31pchomearound_right_2005044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.5&amp;pid=2171700007&amp;adm=4422']);"><img src="//i1.mifile.cn/a1/pms_1493030484.68163070!220x220.jpg" width="150" height="150" alt="8H乳胶床垫" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1171700009.html" data-stat-aid="AA18835" data-stat-pid="2_34_5_198" data-log_code="31pchomearound_right_2005044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.5&amp;pid=2171700007&amp;adm=4422" target="_blank" data-stat-id="AA18835+2_34_5_198" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18835+2_34_5_198', '//item.mi.com/1171700009.html', 'pcpid', '31pchomearound_right_2005044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.5&amp;pid=2171700007&amp;adm=4422']);">8H乳胶床垫</a></h3> <p class="price"> <span class="num">969</span>元 
            <del>
             <span class="num">999</span>元
            </del> </p> <p class="rank">3784人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1171700009.html" data-stat-aid="AA18835" data-stat-pid="2_34_5_198" data-log_code="31pchomearound_right_2005044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.5&amp;pid=2171700007&amp;adm=4422" target="_blank" data-stat-id="AA18835+2_34_5_198" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18835+2_34_5_198', '//item.mi.com/1171700009.html', 'pcpid', '31pchomearound_right_2005044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.5&amp;pid=2171700007&amp;adm=4422']);"> <span class="review">昨天到的，躺了下还可以，可能是没有恢复起来的原因吧，...</span> <span class="author"> 来自于 早起的鸟儿有虫吃 的评价 <span class="date" data-date="1511655978"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2173000004"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1173000015.html" data-stat-aid="AA18836" data-stat-pid="2_34_6_199" target="_blank" data-log_code="31pchomearound_right_2006044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.6&amp;pid=2173000004&amp;adm=4423" data-stat-id="AA18836+2_34_6_199" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18836+2_34_6_199', '//item.mi.com/1173000015.html', 'pcpid', '31pchomearound_right_2006044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.6&amp;pid=2173000004&amp;adm=4423']);"><img src="//i1.mifile.cn/a1/pms_1502195257.33325849!220x220.jpg" width="150" height="150" alt="8H懒人舒适沙发 " /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1173000015.html" data-stat-aid="AA18836" data-stat-pid="2_34_6_199" data-log_code="31pchomearound_right_2006044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.6&amp;pid=2173000004&amp;adm=4423" target="_blank" data-stat-id="AA18836+2_34_6_199" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18836+2_34_6_199', '//item.mi.com/1173000015.html', 'pcpid', '31pchomearound_right_2006044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.6&amp;pid=2173000004&amp;adm=4423']);">8H懒人舒适沙发 </a></h3> <p class="price"> <span class="num">599</span>元 
            <del>
             <span class="num">649</span>元
            </del> </p> <p class="rank">182人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1173000015.html" data-stat-aid="AA18836" data-stat-pid="2_34_6_199" data-log_code="31pchomearound_right_2006044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.6&amp;pid=2173000004&amp;adm=4423" target="_blank" data-stat-id="AA18836+2_34_6_199" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18836+2_34_6_199', '//item.mi.com/1173000015.html', 'pcpid', '31pchomearound_right_2006044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.6&amp;pid=2173000004&amp;adm=4423']);"> <span class="review">超好用</span> <span class="author"> 来自于 王海燕 的评价 <span class="date" data-date="1520782209"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2174400027"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1174400055.html" data-stat-aid="AA19834" data-stat-pid="2_34_7_200" target="_blank" data-log_code="31pchomearound_right_2007044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.7&amp;pid=2174400027&amp;adm=4936" data-stat-id="AA19834+2_34_7_200" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19834+2_34_7_200', '//item.mi.com/1174400055.html', 'pcpid', '31pchomearound_right_2007044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.7&amp;pid=2174400027&amp;adm=4936']);"><img src="//i1.mifile.cn/a1/pms_1510124061.78733980!220x220.jpg" width="150" height="150" alt="8H蝶形护颈记忆绵枕" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1174400055.html" data-stat-aid="AA19834" data-stat-pid="2_34_7_200" data-log_code="31pchomearound_right_2007044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.7&amp;pid=2174400027&amp;adm=4936" target="_blank" data-stat-id="AA19834+2_34_7_200" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19834+2_34_7_200', '//item.mi.com/1174400055.html', 'pcpid', '31pchomearound_right_2007044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.7&amp;pid=2174400027&amp;adm=4936']);">8H蝶形护颈记忆绵枕</a></h3> <p class="price"> <span class="num">109</span>元 
            <del>
             <span class="num">129</span>元
            </del> </p> <p class="rank">1590人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1174400055.html" data-stat-aid="AA19834" data-stat-pid="2_34_7_200" data-log_code="31pchomearound_right_2007044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.7&amp;pid=2174400027&amp;adm=4936" target="_blank" data-stat-id="AA19834+2_34_7_200" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19834+2_34_7_200', '//item.mi.com/1174400055.html', 'pcpid', '31pchomearound_right_2007044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.7&amp;pid=2174400027&amp;adm=4936']);"> <span class="review">效果不错，科技感很强，棒棒</span> <span class="author"> 来自于 1313826789 的评价 <span class="date" data-date="1523403272"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="2174200015"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1174200021.html" class="exposure" data-stat-aid="AA18838" data-stat-pid="2_34_8_201" data-log_code="31pchomearound_right_2008044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.8&amp;pid=2174200015&amp;adm=4425" target="_blank" data-stat-id="AA18838+2_34_8_201" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18838+2_34_8_201', '//item.mi.com/1174200021.html', 'pcpid', '31pchomearound_right_2008044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.8&amp;pid=2174200015&amp;adm=4425']);"> <img src="//i1.mifile.cn/a1/pms_1508820001.68866329!220x220.jpg" width="80" height="80" alt="8H鹅绒被 " /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1174200021.html" class="exposure" data-stat-aid="AA18838" data-stat-pid="2_34_8_201" data-log_code="31pchomearound_right_2008044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.8&amp;pid=2174200015&amp;adm=4425" target="_blank" data-stat-id="AA18838+2_34_8_201" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18838+2_34_8_201', '//item.mi.com/1174200021.html', 'pcpid', '31pchomearound_right_2008044#t=normal&amp;act=other&amp;page=home&amp;bid=3030353.8&amp;pid=2174200015&amp;adm=4425']);">8H鹅绒被 </a></h3> <p class="price"><span class="num">1599</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="https://search.mi.com/search_%E4%B9%B3%E8%83%B6" target="_blank" data-stat-id="da56da31e78041cd" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-da56da31e78041cd', 'https://search.mi.com/search_E4B9B3E883B6', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="https://search.mi.com/search_%E4%B9%B3%E8%83%B6" target="_blank" data-stat-id="fc29fc71e40da370" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fc29fc71e40da370', 'https://search.mi.com/search_E4B9B3E883B6', 'pcpid', '']);">浏览更多<small>居家</small></a></li>
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="2161600029"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/flowermonitor/" data-stat-aid="AA19899" data-stat-pid="2_35_1_202" target="_blank" data-log_code="31pchomearound_right_3001045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.1&amp;pid=2161600029&amp;adm=2137" data-stat-id="AA19899+2_35_1_202" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19899+2_35_1_202', 'http://www.mi.com/flowermonitor/', 'pcpid', '31pchomearound_right_3001045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.1&amp;pid=2161600029&amp;adm=2137']);"><img src="//i1.mifile.cn/a1/pms_1465724476.99494960!220x220.jpg" width="150" height="150" alt="花花草草监测仪" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/flowermonitor/" data-stat-aid="AA19899" data-stat-pid="2_35_1_202" data-log_code="31pchomearound_right_3001045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.1&amp;pid=2161600029&amp;adm=2137" target="_blank" data-stat-id="AA19899+2_35_1_202" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19899+2_35_1_202', 'http://www.mi.com/flowermonitor/', 'pcpid', '31pchomearound_right_3001045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.1&amp;pid=2161600029&amp;adm=2137']);">花花草草监测仪</a></h3> <p class="price"> <span class="num">49</span>元 </p> <p class="rank">8210人评价</p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/flowermonitor/" data-stat-aid="AA19899" data-stat-pid="2_35_1_202" data-log_code="31pchomearound_right_3001045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.1&amp;pid=2161600029&amp;adm=2137" target="_blank" data-stat-id="AA19899+2_35_1_202" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19899+2_35_1_202', 'http://www.mi.com/flowermonitor/', 'pcpid', '31pchomearound_right_3001045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.1&amp;pid=2161600029&amp;adm=2137']);"> <span class="review">非常喜欢，以后养花有数据支持，在配合经验花会养的更好。</span> <span class="author"> 来自于 文良 的评价 <span class="date" data-date="1472109742"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2174200045"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://www.mi.com/ts-spectacle-frame/" data-stat-aid="AA18842" data-stat-pid="2_35_2_203" target="_blank" data-log_code="31pchomearound_right_3002045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.2&amp;pid=2174200045&amp;adm=4427" data-stat-id="AA18842+2_35_2_203" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18842+2_35_2_203', 'https://www.mi.com/ts-spectacle-frame/', 'pcpid', '31pchomearound_right_3002045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.2&amp;pid=2174200045&amp;adm=4427']);"><img src="//i1.mifile.cn/a1/pms_1508483196.21912684!220x220.jpg" width="150" height="150" alt="TS眼镜架 米家定制" /></a> 
           </div> <h3 class="title"> <a href="https://www.mi.com/ts-spectacle-frame/" data-stat-aid="AA18842" data-stat-pid="2_35_2_203" data-log_code="31pchomearound_right_3002045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.2&amp;pid=2174200045&amp;adm=4427" target="_blank" data-stat-id="AA18842+2_35_2_203" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18842+2_35_2_203', 'https://www.mi.com/ts-spectacle-frame/', 'pcpid', '31pchomearound_right_3002045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.2&amp;pid=2174200045&amp;adm=4427']);">TS眼镜架 米家定制</a></h3> <p class="price"> <span class="num">99</span>元 
            <del>
             <span class="num">249</span>元
            </del> </p> <p class="rank">1791人评价</p> 
           <div class="review-wrapper"> 
            <a href="https://www.mi.com/ts-spectacle-frame/" data-stat-aid="AA18842" data-stat-pid="2_35_2_203" data-log_code="31pchomearound_right_3002045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.2&amp;pid=2174200045&amp;adm=4427" target="_blank" data-stat-id="AA18842+2_35_2_203" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18842+2_35_2_203', 'https://www.mi.com/ts-spectacle-frame/', 'pcpid', '31pchomearound_right_3002045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.2&amp;pid=2174200045&amp;adm=4427']);"> <span class="review">对于近视的人来说，眼镜才是这辈子的情人，我又多了两个...</span> <span class="author"> 来自于 1322786676 的评价 <span class="date" data-date="1510459117"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2174300003"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/anti-kids-glasses/" data-stat-aid="AA18843" data-stat-pid="2_35_3_204" target="_blank" data-log_code="31pchomearound_right_3003045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.3&amp;pid=2174300003&amp;adm=4428" data-stat-id="AA18843+2_35_3_204" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18843+2_35_3_204', 'http://www.mi.com/anti-kids-glasses/', 'pcpid', '31pchomearound_right_3003045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.3&amp;pid=2174300003&amp;adm=4428']);"><img src="//i1.mifile.cn/a1/pms_1508744600.02281018!220x220.jpg" width="150" height="150" alt="TS儿童防蓝光护目镜 " /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/anti-kids-glasses/" data-stat-aid="AA18843" data-stat-pid="2_35_3_204" data-log_code="31pchomearound_right_3003045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.3&amp;pid=2174300003&amp;adm=4428" target="_blank" data-stat-id="AA18843+2_35_3_204" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18843+2_35_3_204', 'http://www.mi.com/anti-kids-glasses/', 'pcpid', '31pchomearound_right_3003045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.3&amp;pid=2174300003&amp;adm=4428']);">TS儿童防蓝光护目镜 </a></h3> <p class="price"> <span class="num">159</span>元 
            <del>
             <span class="num">199</span>元
            </del> </p> <p class="rank">1324人评价</p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/anti-kids-glasses/" data-stat-aid="AA18843" data-stat-pid="2_35_3_204" data-log_code="31pchomearound_right_3003045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.3&amp;pid=2174300003&amp;adm=4428" target="_blank" data-stat-id="AA18843+2_35_3_204" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18843+2_35_3_204', 'http://www.mi.com/anti-kids-glasses/', 'pcpid', '31pchomearound_right_3003045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.3&amp;pid=2174300003&amp;adm=4428']);"> <span class="review">给孩子买的，比较轻，戴着很舒服，主要是孩子需要经常使...</span> <span class="author"> 来自于 帅北瓜 的评价 <span class="date" data-date="1525163965"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2164700010"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1164700014.html" data-stat-aid="AA18844" data-stat-pid="2_35_4_205" target="_blank" data-log_code="31pchomearound_right_3004045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.4&amp;pid=2164700010&amp;adm=4429" data-stat-id="AA18844+2_35_4_205" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18844+2_35_4_205', '//item.mi.com/1164700014.html', 'pcpid', '31pchomearound_right_3004045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.4&amp;pid=2164700010&amp;adm=4429']);"><img src="//i1.mifile.cn/a1/pms_1479972875.00224492!220x220.jpg" width="150" height="150" alt="最生活毛巾&middot;青春系列 " /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1164700014.html" data-stat-aid="AA18844" data-stat-pid="2_35_4_205" data-log_code="31pchomearound_right_3004045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.4&amp;pid=2164700010&amp;adm=4429" target="_blank" data-stat-id="AA18844+2_35_4_205" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18844+2_35_4_205', '//item.mi.com/1164700014.html', 'pcpid', '31pchomearound_right_3004045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.4&amp;pid=2164700010&amp;adm=4429']);">最生活毛巾&middot;青春系列 </a></h3> <p class="price"> <span class="num">19.9</span>元 </p> <p class="rank">7.4万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1164700014.html" data-stat-aid="AA18844" data-stat-pid="2_35_4_205" data-log_code="31pchomearound_right_3004045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.4&amp;pid=2164700010&amp;adm=4429" target="_blank" data-stat-id="AA18844+2_35_4_205" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18844+2_35_4_205', '//item.mi.com/1164700014.html', 'pcpid', '31pchomearound_right_3004045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.4&amp;pid=2164700010&amp;adm=4429']);"> <span class="review">好，很好，非常好，小信封还没有打开有点小激动。</span> <span class="author"> 来自于 zhaowei999 的评价 <span class="date" data-date="1491571891"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2164700016"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1164700020.html" data-stat-aid="AA18845" data-stat-pid="2_35_5_206" target="_blank" data-log_code="31pchomearound_right_3005045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.5&amp;pid=2164700016&amp;adm=4430" data-stat-id="AA18845+2_35_5_206" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18845+2_35_5_206', '//item.mi.com/1164700020.html', 'pcpid', '31pchomearound_right_3005045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.5&amp;pid=2164700016&amp;adm=4430']);"><img src="//i1.mifile.cn/a1/pms_1479972928.16946623!220x220.jpg" width="150" height="150" alt="最生活浴巾&middot;青春系列" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1164700020.html" data-stat-aid="AA18845" data-stat-pid="2_35_5_206" data-log_code="31pchomearound_right_3005045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.5&amp;pid=2164700016&amp;adm=4430" target="_blank" data-stat-id="AA18845+2_35_5_206" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18845+2_35_5_206', '//item.mi.com/1164700020.html', 'pcpid', '31pchomearound_right_3005045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.5&amp;pid=2164700016&amp;adm=4430']);">最生活浴巾&middot;青春系列</a></h3> <p class="price"> <span class="num">99</span>元 </p> <p class="rank">4865人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1164700020.html" data-stat-aid="AA18845" data-stat-pid="2_35_5_206" data-log_code="31pchomearound_right_3005045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.5&amp;pid=2164700016&amp;adm=4430" target="_blank" data-stat-id="AA18845+2_35_5_206" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18845+2_35_5_206', '//item.mi.com/1164700020.html', 'pcpid', '31pchomearound_right_3005045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.5&amp;pid=2164700016&amp;adm=4430']);"> <span class="review">看了看，感觉好大，物流还是非常快的，东西还没拆，后续...</span> <span class="author"> 来自于 1470220609 的评价 <span class="date" data-date="1541927905"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2172500012"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="http://www.mi.com/screwdriver/" data-stat-aid="AA18846" data-stat-pid="2_35_6_207" target="_blank" data-log_code="31pchomearound_right_3006045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.6&amp;pid=2172500012&amp;adm=4431" data-stat-id="AA18846+2_35_6_207" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18846+2_35_6_207', 'http://www.mi.com/screwdriver/', 'pcpid', '31pchomearound_right_3006045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.6&amp;pid=2172500012&amp;adm=4431']);"><img src="//i1.mifile.cn/a1/pms_1501724155.59847725!220x220.jpg" width="150" height="150" alt="米家wiha精修螺丝刀套装" /></a> 
           </div> <h3 class="title"> <a href="http://www.mi.com/screwdriver/" data-stat-aid="AA18846" data-stat-pid="2_35_6_207" data-log_code="31pchomearound_right_3006045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.6&amp;pid=2172500012&amp;adm=4431" target="_blank" data-stat-id="AA18846+2_35_6_207" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18846+2_35_6_207', 'http://www.mi.com/screwdriver/', 'pcpid', '31pchomearound_right_3006045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.6&amp;pid=2172500012&amp;adm=4431']);">米家wiha精修螺丝刀套装</a></h3> <p class="price"> <span class="num">89</span>元 
            <del>
             <span class="num">99</span>元
            </del> </p> <p class="rank">1.5万人评价</p> 
           <div class="review-wrapper"> 
            <a href="http://www.mi.com/screwdriver/" data-stat-aid="AA18846" data-stat-pid="2_35_6_207" data-log_code="31pchomearound_right_3006045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.6&amp;pid=2172500012&amp;adm=4431" target="_blank" data-stat-id="AA18846+2_35_6_207" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18846+2_35_6_207', 'http://www.mi.com/screwdriver/', 'pcpid', '31pchomearound_right_3006045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.6&amp;pid=2172500012&amp;adm=4431']);"> <span class="review">很精美的螺丝刀，有分量，有质感，我喜欢。</span> <span class="author"> 来自于 1165449773 的评价 <span class="date" data-date="1512618049"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2172500011"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1172500015.html" data-stat-aid="AA18850" data-stat-pid="2_35_7_208" target="_blank" data-log_code="31pchomearound_right_3007045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.7&amp;pid=2172500011&amp;adm=4434" data-stat-id="AA18850+2_35_7_208" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18850+2_35_7_208', '//item.mi.com/1172500015.html', 'pcpid', '31pchomearound_right_3007045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.7&amp;pid=2172500011&amp;adm=4434']);"><img src="//i1.mifile.cn/a1/pms_1500369741.38796229!220x220.jpg" width="150" height="150" alt="自动折叠伞" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1172500015.html" data-stat-aid="AA18850" data-stat-pid="2_35_7_208" data-log_code="31pchomearound_right_3007045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.7&amp;pid=2172500011&amp;adm=4434" target="_blank" data-stat-id="AA18850+2_35_7_208" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18850+2_35_7_208', '//item.mi.com/1172500015.html', 'pcpid', '31pchomearound_right_3007045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.7&amp;pid=2172500011&amp;adm=4434']);">自动折叠伞</a></h3> <p class="price"> <span class="num">99</span>元 </p> <p class="rank">1.1万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1172500015.html" data-stat-aid="AA18850" data-stat-pid="2_35_7_208" data-log_code="31pchomearound_right_3007045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.7&amp;pid=2172500011&amp;adm=4434" target="_blank" data-stat-id="AA18850+2_35_7_208" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18850+2_35_7_208', '//item.mi.com/1172500015.html', 'pcpid', '31pchomearound_right_3007045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.7&amp;pid=2172500011&amp;adm=4434']);"> <span class="review">真的可以一键开合，挺方便的，防水性还没有测试！等下雨...</span> <span class="author"> 来自于 内牛蛮面 的评价 <span class="date" data-date="1511237477"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="1171700008"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1171700008.html" class="exposure" data-stat-aid="AA20983" data-stat-pid="2_35_8_209" data-log_code="31pchomearound_right_3008045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.8&amp;pid=1171700008&amp;adm=5594" target="_blank" data-stat-id="AA20983+2_35_8_209" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20983+2_35_8_209', '//item.mi.com/1171700008.html', 'pcpid', '31pchomearound_right_3008045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.8&amp;pid=1171700008&amp;adm=5594']);"> <img src="//i1.mifile.cn/a1/pms_1493030483.17561318!220x220.jpg" width="80" height="80" alt="8H乳胶床垫 玫瑰金" /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1171700008.html" class="exposure" data-stat-aid="AA20983" data-stat-pid="2_35_8_209" data-log_code="31pchomearound_right_3008045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.8&amp;pid=1171700008&amp;adm=5594" target="_blank" data-stat-id="AA20983+2_35_8_209" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20983+2_35_8_209', '//item.mi.com/1171700008.html', 'pcpid', '31pchomearound_right_3008045#t=normal&amp;act=other&amp;page=home&amp;bid=3030354.8&amp;pid=1171700008&amp;adm=5594']);">8H乳胶床垫 玫瑰金</a></h3> <p class="price"><span class="num">569</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="//list.mi.com/20" target="_blank" data-stat-id="ea2f84cbb4d6d67d" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-ea2f84cbb4d6d67d', '//list.mi.com/20', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="//list.mi.com/20" target="_blank" data-stat-id="fc807e332b5b7a17" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fc807e332b5b7a17', '//list.mi.com/20', 'pcpid', '']);">浏览更多<small>生活周边</small></a></li>
         </ul>
         <ul class="brick-list tab-content clearfix tab-content-hide"> 
          <li class="brick-item brick-item-m" data-gid="2154400012"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1154400038.html" data-stat-aid="AA18851" data-stat-pid="2_36_1_210" target="_blank" data-log_code="31pchomearound_right_4001046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.1&amp;pid=2154400012&amp;adm=4436" data-stat-id="AA18851+2_36_1_210" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18851+2_36_1_210', '//item.mi.com/1154400038.html', 'pcpid', '31pchomearound_right_4001046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.1&amp;pid=2154400012&amp;adm=4436']);"><img src="//i1.mifile.cn/a1/T1a3DvB7hv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米极简都市双肩包 " /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1154400038.html" data-stat-aid="AA18851" data-stat-pid="2_36_1_210" data-log_code="31pchomearound_right_4001046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.1&amp;pid=2154400012&amp;adm=4436" target="_blank" data-stat-id="AA18851+2_36_1_210" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18851+2_36_1_210', '//item.mi.com/1154400038.html', 'pcpid', '31pchomearound_right_4001046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.1&amp;pid=2154400012&amp;adm=4436']);">小米极简都市双肩包 </a></h3> <p class="price"> <span class="num">139</span>元 
            <del>
             <span class="num">149</span>元
            </del> </p> <p class="rank">3.2万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1154400038.html" data-stat-aid="AA18851" data-stat-pid="2_36_1_210" data-log_code="31pchomearound_right_4001046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.1&amp;pid=2154400012&amp;adm=4436" target="_blank" data-stat-id="AA18851+2_36_1_210" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18851+2_36_1_210', '//item.mi.com/1154400038.html', 'pcpid', '31pchomearound_right_4001046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.1&amp;pid=2154400012&amp;adm=4436']);"> <span class="review">众里寻他千百度，就是你了</span> <span class="author"> 来自于 虾兵2009 的评价 <span class="date" data-date="1541670112"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2161100001"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1161100002.html" data-stat-aid="AA18852" data-stat-pid="2_36_2_211" target="_blank" data-log_code="31pchomearound_right_4002046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.2&amp;pid=2161100001&amp;adm=4437" data-stat-id="AA18852+2_36_2_211" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18852+2_36_2_211', '//item.mi.com/1161100002.html', 'pcpid', '31pchomearound_right_4002046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.2&amp;pid=2161100001&amp;adm=4437']);"><img src="//i1.mifile.cn/a1/T1DuxvB4D_1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米经典商务双肩包" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1161100002.html" data-stat-aid="AA18852" data-stat-pid="2_36_2_211" data-log_code="31pchomearound_right_4002046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.2&amp;pid=2161100001&amp;adm=4437" target="_blank" data-stat-id="AA18852+2_36_2_211" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18852+2_36_2_211', '//item.mi.com/1161100002.html', 'pcpid', '31pchomearound_right_4002046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.2&amp;pid=2161100001&amp;adm=4437']);">小米经典商务双肩包</a></h3> <p class="price"> <span class="num">99</span>元 </p> <p class="rank">1.9万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1161100002.html" data-stat-aid="AA18852" data-stat-pid="2_36_2_211" data-log_code="31pchomearound_right_4002046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.2&amp;pid=2161100001&amp;adm=4437" target="_blank" data-stat-id="AA18852+2_36_2_211" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18852+2_36_2_211', '//item.mi.com/1161100002.html', 'pcpid', '31pchomearound_right_4002046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.2&amp;pid=2161100001&amp;adm=4437']);"> <span class="review">迷了有好几年的小米，终于送了我一个背包！主要是旁边的...</span> <span class="author"> 来自于 L. 的评价 <span class="date" data-date="1514335710"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2171100001"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1171100001.html" data-stat-aid="AA18853" data-stat-pid="2_36_3_212" target="_blank" data-log_code="31pchomearound_right_4003046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.3&amp;pid=2171100001&amp;adm=4438" data-stat-id="AA18853+2_36_3_212" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18853+2_36_3_212', '//item.mi.com/1171100001.html', 'pcpid', '31pchomearound_right_4003046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.3&amp;pid=2171100001&amp;adm=4438']);"><img src="//i1.mifile.cn/a1/pms_1489390614.78781530!220x220.jpg" width="150" height="150" alt="小米商旅多功能双肩包" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1171100001.html" data-stat-aid="AA18853" data-stat-pid="2_36_3_212" data-log_code="31pchomearound_right_4003046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.3&amp;pid=2171100001&amp;adm=4438" target="_blank" data-stat-id="AA18853+2_36_3_212" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18853+2_36_3_212', '//item.mi.com/1171100001.html', 'pcpid', '31pchomearound_right_4003046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.3&amp;pid=2171100001&amp;adm=4438']);">小米商旅多功能双肩包</a></h3> <p class="price"> <span class="num">179</span>元 
            <del>
             <span class="num">199</span>元
            </del> </p> <p class="rank">4588人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1171100001.html" data-stat-aid="AA18853" data-stat-pid="2_36_3_212" data-log_code="31pchomearound_right_4003046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.3&amp;pid=2171100001&amp;adm=4438" target="_blank" data-stat-id="AA18853+2_36_3_212" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18853+2_36_3_212', '//item.mi.com/1171100001.html', 'pcpid', '31pchomearound_right_4003046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.3&amp;pid=2171100001&amp;adm=4438']);"> <span class="review">刚买第二天就降价活动，是不是故意气我？我不管我要萌妹...</span> <span class="author"> 来自于 未来CEO 的评价 <span class="date" data-date="1496976639"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2171900032"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1171900021.html" data-stat-aid="AA18854" data-stat-pid="2_36_4_213" target="_blank" data-log_code="31pchomearound_right_4004046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.4&amp;pid=2171900032&amp;adm=4439" data-stat-id="AA18854+2_36_4_213" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18854+2_36_4_213', '//item.mi.com/1171900021.html', 'pcpid', '31pchomearound_right_4004046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.4&amp;pid=2171900032&amp;adm=4439']);"><img src="//i1.mifile.cn/a1/pms_1497672764.01987286!220x220.jpg" width="150" height="150" alt="小米学院休闲双肩包" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1171900021.html" data-stat-aid="AA18854" data-stat-pid="2_36_4_213" data-log_code="31pchomearound_right_4004046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.4&amp;pid=2171900032&amp;adm=4439" target="_blank" data-stat-id="AA18854+2_36_4_213" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18854+2_36_4_213', '//item.mi.com/1171900021.html', 'pcpid', '31pchomearound_right_4004046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.4&amp;pid=2171900032&amp;adm=4439']);">小米学院休闲双肩包</a></h3> <p class="price"> <span class="num">69</span>元 
            <del>
             <span class="num">79</span>元
            </del> </p> <p class="rank">1.1万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1171900021.html" data-stat-aid="AA18854" data-stat-pid="2_36_4_213" data-log_code="31pchomearound_right_4004046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.4&amp;pid=2171900032&amp;adm=4439" target="_blank" data-stat-id="AA18854+2_36_4_213" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18854+2_36_4_213', '//item.mi.com/1171900021.html', 'pcpid', '31pchomearound_right_4004046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.4&amp;pid=2171900032&amp;adm=4439']);"> <span class="review">小米的东西是很值得信赖的，虽然不如一线大品牌。但是合...</span> <span class="author"> 来自于 阿桑 的评价 <span class="date" data-date="1515464759"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1183900003"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="https://item.mi.com/product/8878.html" data-stat-aid="AA20990" data-stat-pid="2_36_5_214" target="_blank" data-log_code="31pchomearound_right_4005046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.5&amp;pid=1183900003&amp;adm=5600" data-stat-id="AA20990+2_36_5_214" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20990+2_36_5_214', 'https://item.mi.com/product/8878.html', 'pcpid', '31pchomearound_right_4005046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.5&amp;pid=1183900003&amp;adm=5600']);"><img src="//i1.mifile.cn/a1/pms_1537928457.45667982!220x220.jpg" width="150" height="150" alt="米兔拉杆箱 樱花粉" /></a> 
           </div> <h3 class="title"> <a href="https://item.mi.com/product/8878.html" data-stat-aid="AA20990" data-stat-pid="2_36_5_214" data-log_code="31pchomearound_right_4005046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.5&amp;pid=1183900003&amp;adm=5600" target="_blank" data-stat-id="AA20990+2_36_5_214" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20990+2_36_5_214', 'https://item.mi.com/product/8878.html', 'pcpid', '31pchomearound_right_4005046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.5&amp;pid=1183900003&amp;adm=5600']);">米兔拉杆箱 樱花粉</a></h3> <p class="price"> <span class="num">309</span>元 
            <del>
             <span class="num">349</span>元
            </del> </p> <p class="rank">37人评价</p> 
           <div class="review-wrapper"> 
            <a href="https://item.mi.com/product/8878.html" data-stat-aid="AA20990" data-stat-pid="2_36_5_214" data-log_code="31pchomearound_right_4005046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.5&amp;pid=1183900003&amp;adm=5600" target="_blank" data-stat-id="AA20990+2_36_5_214" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20990+2_36_5_214', 'https://item.mi.com/product/8878.html', 'pcpid', '31pchomearound_right_4005046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.5&amp;pid=1183900003&amp;adm=5600']);"> <span class="review">外形精致小巧，小孩很喜欢，设计很适合小孩使用，很好。</span> <span class="author"> 来自于 阿强 的评价 <span class="date" data-date="1544232990"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="1183000021"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1183000021.html" data-stat-aid="AA20991" data-stat-pid="2_36_6_215" target="_blank" data-log_code="31pchomearound_right_4006046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.6&amp;pid=1183000021&amp;adm=5601" data-stat-id="AA20991+2_36_6_215" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20991+2_36_6_215', '//item.mi.com/1183000021.html', 'pcpid', '31pchomearound_right_4006046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.6&amp;pid=1183000021&amp;adm=5601']);"><img src="//i1.mifile.cn/a1/pms_1533866052.22316304!220x220.jpg" width="150" height="150" alt="90分旅行箱 1A 26英寸 星空灰" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1183000021.html" data-stat-aid="AA20991" data-stat-pid="2_36_6_215" data-log_code="31pchomearound_right_4006046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.6&amp;pid=1183000021&amp;adm=5601" target="_blank" data-stat-id="AA20991+2_36_6_215" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20991+2_36_6_215', '//item.mi.com/1183000021.html', 'pcpid', '31pchomearound_right_4006046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.6&amp;pid=1183000021&amp;adm=5601']);">90分旅行箱 1A 26英寸 星空灰</a></h3> <p class="price"> <span class="num">429</span>元 
            <del>
             <span class="num">449</span>元
            </del> </p> <p class="rank">437人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1183000021.html" data-stat-aid="AA20991" data-stat-pid="2_36_6_215" data-log_code="31pchomearound_right_4006046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.6&amp;pid=1183000021&amp;adm=5601" target="_blank" data-stat-id="AA20991+2_36_6_215" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20991+2_36_6_215', '//item.mi.com/1183000021.html', 'pcpid', '31pchomearound_right_4006046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.6&amp;pid=1183000021&amp;adm=5601']);"> <span class="review">宝贝不错，欢迎大家选购！</span> <span class="author"> 来自于 勇哥 的评价 <span class="date" data-date="1544717357"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-m" data-gid="2161200013"> 
           <div class="figure figure-img"> 
            <a class="exposure" href="//item.mi.com/1161200013.html" data-stat-aid="AA18857" data-stat-pid="2_36_7_216" target="_blank" data-log_code="31pchomearound_right_4007046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.7&amp;pid=2161200013&amp;adm=4442" data-stat-id="AA18857+2_36_7_216" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18857+2_36_7_216', '//item.mi.com/1161200013.html', 'pcpid', '31pchomearound_right_4007046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.7&amp;pid=2161200013&amp;adm=4442']);"><img src="//i1.mifile.cn/a1/T1FtKgBvZv1RXrhCrK!220x220.jpg" width="150" height="150" alt="小米多功能都市休闲胸包" /></a> 
           </div> <h3 class="title"> <a href="//item.mi.com/1161200013.html" data-stat-aid="AA18857" data-stat-pid="2_36_7_216" data-log_code="31pchomearound_right_4007046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.7&amp;pid=2161200013&amp;adm=4442" target="_blank" data-stat-id="AA18857+2_36_7_216" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18857+2_36_7_216', '//item.mi.com/1161200013.html', 'pcpid', '31pchomearound_right_4007046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.7&amp;pid=2161200013&amp;adm=4442']);">小米多功能都市休闲胸包</a></h3> <p class="price"> <span class="num">59</span>元 
            <del>
             <span class="num">69</span>元
            </del> </p> <p class="rank">4.7万人评价</p> 
           <div class="review-wrapper"> 
            <a href="//item.mi.com/1161200013.html" data-stat-aid="AA18857" data-stat-pid="2_36_7_216" data-log_code="31pchomearound_right_4007046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.7&amp;pid=2161200013&amp;adm=4442" target="_blank" data-stat-id="AA18857+2_36_7_216" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18857+2_36_7_216', '//item.mi.com/1161200013.html', 'pcpid', '31pchomearound_right_4007046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.7&amp;pid=2161200013&amp;adm=4442']);"> <span class="review">怎么样？小米6拍的，来个赞，哈哈</span> <span class="author"> 来自于 赵赵赵先生 的评价 <span class="date" data-date="1517408123"></span> </span> </a> 
           </div> </li> 
          <li class="brick-item brick-item-s" data-gid="2174200023"> 
           <div class="figure figure-img"> 
            <a href="//item.mi.com/1174200036.html" class="exposure" data-stat-aid="AA18858" data-stat-pid="2_36_8_217" data-log_code="31pchomearound_right_4008046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.8&amp;pid=2174200023&amp;adm=4443" target="_blank" data-stat-id="AA18858+2_36_8_217" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18858+2_36_8_217', '//item.mi.com/1174200036.html', 'pcpid', '31pchomearound_right_4008046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.8&amp;pid=2174200023&amp;adm=4443']);"> <img src="//i1.mifile.cn/a1/pms_1508493128.86019237!220x220.jpg" width="80" height="80" alt="90分户外休闲双肩包" /> </a> 
           </div> <h3 class="title"><a href="//item.mi.com/1174200036.html" class="exposure" data-stat-aid="AA18858" data-stat-pid="2_36_8_217" data-log_code="31pchomearound_right_4008046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.8&amp;pid=2174200023&amp;adm=4443" target="_blank" data-stat-id="AA18858+2_36_8_217" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18858+2_36_8_217', '//item.mi.com/1174200036.html', 'pcpid', '31pchomearound_right_4008046#t=normal&amp;act=other&amp;page=home&amp;bid=3030355.8&amp;pid=2174200023&amp;adm=4443']);">90分户外休闲双肩包</a></h3> <p class="price"><span class="num">199</span>元</p> </li> 
          <li class="brick-item brick-item-s">
           <div class="figure figure-more">
            <a href="//list.mi.com/23" target="_blank" data-stat-id="4f68e30f2e8e595f" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4f68e30f2e8e595f', '//list.mi.com/23', 'pcpid', '']);"><i class="iconfont"></i></a>
           </div><a class="more" href="//list.mi.com/23" target="_blank" data-stat-id="89a7802442c45388" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-89a7802442c45388', '//list.mi.com/23', 'pcpid', '']);">浏览更多<small>箱包</small></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div> 
    </div> 
    <div class="J_itemBox J_homeBanner home-banner-box home-banner-box-brick is-visible" data-index="7">
     <a href="https://item.mi.com/product/6103.html" target="_blank" data-log_code="31pchomebanner_7001017#t=normal&amp;act=other&amp;page=home&amp;bid=3186796.1&amp;pid=1172500006&amp;adm=5064" data-stat-id="86ab796fda5b2c40" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-86ab796fda5b2c40', 'https://item.mi.com/product/6103.html', 'pcpid', '31pchomebanner_7001017#t=normal&amp;act=other&amp;page=home&amp;bid=3186796.1&amp;pid=1172500006&amp;adm=5064']);"> <img class="" alt="米家声波电动牙刷" width="1226" src="//i1.mifile.cn/a4/xmad_15204795762271_ZwaxE.jpg" /></a>
    </div> 
    <div id="recommend" class="home-recm-box home-brick-box home-brick-row-1-box xm-plain-box J_itemBox J_recommendBox is-visible" data-region-stat="1"> 
     <div class="box-hd"> 
      <h2 class="title">为你推荐</h2> 
      <div class="more J_brickNav">
       <div class="xm-controls xm-controls-line-small xm-carousel-controls">
        <a class="control control-prev iconfont control-disabled" href="javascript: void(0);" data-stat-pid="stat_Home.首页_undefined_undefined"></a>
        <a class="control control-next iconfont" href="javascript: void(0);" data-stat-pid="stat_Home.首页_undefined_undefined"></a>
       </div>
      </div> 
     </div> 
     <div id="recommend-bd" class="box-bd J_brickBd J_recommend-like container xm-carousel-container" data-log_codes="reccom_Guesslike_0_0#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3459&amp;bid=3038464.0&amp;page=home;reccom_Guesslike_0_1#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6520&amp;bid=3038464.1&amp;page=home;reccom_Guesslike_0_2#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4983&amp;bid=3038464.2&amp;page=home;reccom_Guesslike_0_3#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9109&amp;bid=3038464.3&amp;page=home;reccom_Guesslike_0_4#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9062&amp;bid=3038464.4&amp;page=home;reccom_Guesslike_0_5#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4791&amp;bid=3038464.5&amp;page=home;reccom_Guesslike_0_6#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7567&amp;bid=3038464.6&amp;page=home;reccom_Guesslike_0_7#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5416&amp;bid=3038464.7&amp;page=home;reccom_Guesslike_0_8#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6512&amp;bid=3038464.8&amp;page=home;reccom_Guesslike_0_9#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6827&amp;bid=3038464.9&amp;page=home;reccom_Guesslike_0_10#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6135&amp;bid=3038464.10&amp;page=home;reccom_Guesslike_0_11#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3546&amp;bid=3038464.11&amp;page=home;reccom_Guesslike_0_12#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6124&amp;bid=3038464.12&amp;page=home;reccom_Guesslike_0_13#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3754&amp;bid=3038464.13&amp;page=home;reccom_Guesslike_0_14#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6642&amp;bid=3038464.14&amp;page=home;reccom_Guesslike_0_15#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6518&amp;bid=3038464.15&amp;page=home;reccom_Guesslike_0_16#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3781&amp;bid=3038464.16&amp;page=home;reccom_Guesslike_0_17#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7309&amp;bid=3038464.17&amp;page=home;reccom_Guesslike_0_18#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7132&amp;bid=3038464.18&amp;page=home;reccom_Guesslike_0_19#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8162&amp;bid=3038464.19&amp;page=home">
      <div class="xm-recommend"> 
       <div class="xm-carousel-wrapper" style="height: 320px; overflow: hidden;">
        <ul class="xm-carousel-col-5-list xm-carousel-list clearfix" style="width: 4960px; margin-left: 0px; transition: margin-left 0.5s ease 0s;"> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1161200012.html" data-log_code="reccom_Guesslike_0_0#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3459&amp;bid=3038464.0&amp;page=home" data-stat-method="1_13" data-stat-index="0" data-stat-text="小米USB充电器（4口）" target="_blank" data-stat-pid="stat_Home.首页_0_1_13" data-stat-aid="小米USB充电器（4口）"> <img src="//i1.mifile.cn/a1/pms_1510291188.31088548!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1510291188.31088548!280x280.jpg  2x" alt="小米USB充电器（4口）" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1161200012.html" data-log_code="reccom_Guesslike_0_0#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3459&amp;bid=3038464.0&amp;page=home" data-stat-method="1_13" data-stat-index="0" target="_blank" data-stat-pid="stat_Home.首页_0_1_13"> 小米USB充电器（4口） </a> 
           </dd> 
           <dd class="xm-recommend-price">
            59元
           </dd> 
           <dd class="xm-recommend-tips">
             1.7万人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1173100112.html" data-log_code="reccom_Guesslike_0_1#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6520&amp;bid=3038464.1&amp;page=home" data-stat-method="1_13" data-stat-index="1" data-stat-text="米家运动鞋 男款" target="_blank" data-stat-pid="stat_Home.首页_1_1_13" data-stat-aid="米家运动鞋男款"> <img src="//i1.mifile.cn/a1/pms_1504778935.57065093!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1504778935.57065093!280x280.jpg  2x" alt="米家运动鞋 男款" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1173100112.html" data-log_code="reccom_Guesslike_0_1#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6520&amp;bid=3038464.1&amp;page=home" data-stat-method="1_13" data-stat-index="1" target="_blank" data-stat-pid="stat_Home.首页_1_1_13"> 米家运动鞋 男款 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            99元
           </dd> 
           <dd class="xm-recommend-tips">
             2万人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1164900004.html" data-log_code="reccom_Guesslike_0_2#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4983&amp;bid=3038464.2&amp;page=home" data-stat-method="1_13" data-stat-index="2" data-stat-text="小米影视会员年卡 券" target="_blank" data-stat-pid="stat_Home.首页_2_1_13" data-stat-aid="小米影视会员年卡券"> <img src="//i1.mifile.cn/a1/pms_1481099756.86043368!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1481099756.86043368!280x280.jpg  2x" alt="小米影视会员年卡 券" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1164900004.html" data-log_code="reccom_Guesslike_0_2#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4983&amp;bid=3038464.2&amp;page=home" data-stat-method="1_13" data-stat-index="2" target="_blank" data-stat-pid="stat_Home.首页_2_1_13"> 小米影视会员年卡 券 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            498元
           </dd> 
           <dd class="xm-recommend-tips">
             1人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1184800003.html" data-log_code="reccom_Guesslike_0_3#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9109&amp;bid=3038464.3&amp;page=home" data-stat-method="1_13" data-stat-index="3" data-stat-text="米家小饭煲" target="_blank" data-stat-pid="stat_Home.首页_3_1_13" data-stat-aid="米家小饭煲"> <img src="//i1.mifile.cn/a1/pms_1543995052.95848961!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1543995052.95848961!280x280.jpg  2x" alt="米家小饭煲" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1184800003.html" data-log_code="reccom_Guesslike_0_3#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9109&amp;bid=3038464.3&amp;page=home" data-stat-method="1_13" data-stat-index="3" target="_blank" data-stat-pid="stat_Home.首页_3_1_13"> 米家小饭煲 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            199元
           </dd> 
           <dd class="xm-recommend-tips">
             174人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1184500014.html" data-log_code="reccom_Guesslike_0_4#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9062&amp;bid=3038464.4&amp;page=home" data-stat-method="1_13" data-stat-index="4" data-stat-text="小米USB-C数据线 编织线版  （30cm）" target="_blank" data-stat-pid="stat_Home.首页_4_1_13" data-stat-aid="小米USB-C数据线编织线版（30cm）"> <img src="//i1.mifile.cn/a1/pms_1541579531.40162942!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1541579531.40162942!280x280.jpg  2x" alt="小米USB-C数据线 编织线版  （30cm）" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1184500014.html" data-log_code="reccom_Guesslike_0_4#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9062&amp;bid=3038464.4&amp;page=home" data-stat-method="1_13" data-stat-index="4" target="_blank" data-stat-pid="stat_Home.首页_4_1_13"> 小米USB-C数据线 编织线版 （30cm） </a> 
           </dd> 
           <dd class="xm-recommend-price">
            18.9元
           </dd> 
           <dd class="xm-recommend-tips">
             48人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1164300014.html" data-log_code="reccom_Guesslike_0_5#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4791&amp;bid=3038464.5&amp;page=home" data-stat-method="1_13" data-stat-index="5" data-stat-text="吃到饱 1元流量任性用" target="_blank" data-stat-pid="stat_Home.首页_5_1_13" data-stat-aid="吃到饱1元流量任性用"> <img src="//i1.mifile.cn/a1/pms_1481710610.79528491!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1481710610.79528491!280x280.jpg  2x" alt="吃到饱 1元流量任性用" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1164300014.html" data-log_code="reccom_Guesslike_0_5#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=4791&amp;bid=3038464.5&amp;page=home" data-stat-method="1_13" data-stat-index="5" target="_blank" data-stat-pid="stat_Home.首页_5_1_13"> 吃到饱 1元流量任性用 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            1元
           </dd> 
           <dd class="xm-recommend-tips">
             2062人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1175200005.html" data-log_code="reccom_Guesslike_0_6#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7567&amp;bid=3038464.6&amp;page=home" data-stat-method="1_13" data-stat-index="6" data-stat-text="12.5" 小米笔记本air="" m3="" 4g="" 256g="" 银色"="" target="_blank" data-stat-pid="stat_Home.首页_6_1_13" data-stat-aid="12.5"> <img src="//i1.mifile.cn/a1/pms_1514390379.45372827!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1514390379.45372827!280x280.jpg  2x" alt="12.5" 小米笔记本air="" m3="" 4g="" 256g="" 银色"="" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1175200005.html" data-log_code="reccom_Guesslike_0_6#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7567&amp;bid=3038464.6&amp;page=home" data-stat-method="1_13" data-stat-index="6" target="_blank" data-stat-pid="stat_Home.首页_6_1_13"> 12.5&quot;小米笔记本Air M3 4G 256G 银色 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            3999元
           </dd> 
           <dd class="xm-recommend-tips">
             543人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1171000090.html" data-log_code="reccom_Guesslike_0_7#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5416&amp;bid=3038464.7&amp;page=home" data-stat-method="1_13" data-stat-index="7" data-stat-text="经典款米兔（25cm）" target="_blank" data-stat-pid="stat_Home.首页_7_1_13" data-stat-aid="经典款米兔（25cm）"> <img src="//i1.mifile.cn/a1/pms_1495795724.388634!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1495795724.388634!280x280.jpg  2x" alt="经典款米兔（25cm）" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1171000090.html" data-log_code="reccom_Guesslike_0_7#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=5416&amp;bid=3038464.7&amp;page=home" data-stat-method="1_13" data-stat-index="7" target="_blank" data-stat-pid="stat_Home.首页_7_1_13"> 经典款米兔（25cm） </a> 
           </dd> 
           <dd class="xm-recommend-price">
            49元
           </dd> 
           <dd class="xm-recommend-tips">
             1060人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1173100102.html" data-log_code="reccom_Guesslike_0_8#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6512&amp;bid=3038464.8&amp;page=home" data-stat-method="1_13" data-stat-index="8" data-stat-text="8H乳胶弹簧静音床垫" target="_blank" data-stat-pid="stat_Home.首页_8_1_13" data-stat-aid="8H乳胶弹簧静音床垫"> <img src="//i1.mifile.cn/a1/pms_1502097740.52392774!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1502097740.52392774!280x280.jpg  2x" alt="8H乳胶弹簧静音床垫" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1173100102.html" data-log_code="reccom_Guesslike_0_8#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6512&amp;bid=3038464.8&amp;page=home" data-stat-method="1_13" data-stat-index="8" target="_blank" data-stat-pid="stat_Home.首页_8_1_13"> 8H乳胶弹簧静音床垫 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            1499元
           </dd> 
           <dd class="xm-recommend-tips">
             1080人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1173700021.html" data-log_code="reccom_Guesslike_0_9#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6827&amp;bid=3038464.9&amp;page=home" data-stat-method="1_13" data-stat-index="9" data-stat-text="米家全景相机自拍杆" target="_blank" data-stat-pid="stat_Home.首页_9_1_13" data-stat-aid="米家全景相机自拍杆"> <img src="//i1.mifile.cn/a1/pms_1506324190.01216564!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1506324190.01216564!280x280.jpg  2x" alt="米家全景相机自拍杆" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1173700021.html" data-log_code="reccom_Guesslike_0_9#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6827&amp;bid=3038464.9&amp;page=home" data-stat-method="1_13" data-stat-index="9" target="_blank" data-stat-pid="stat_Home.首页_9_1_13"> 米家全景相机自拍杆 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            69元
           </dd> 
           <dd class="xm-recommend-tips">
             108人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1181600011.html" data-log_code="reccom_Guesslike_0_10#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6135&amp;bid=3038464.10&amp;page=home" data-stat-method="1_13" data-stat-index="10" data-stat-text="小米蓝牙音频接收器" target="_blank" data-stat-pid="stat_Home.首页_10_1_13" data-stat-aid="小米蓝牙音频接收器"> <img src="//i1.mifile.cn/a1/pms_1524042806.51873389!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1524042806.51873389!280x280.jpg  2x" alt="小米蓝牙音频接收器" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1181600011.html" data-log_code="reccom_Guesslike_0_10#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6135&amp;bid=3038464.10&amp;page=home" data-stat-method="1_13" data-stat-index="10" target="_blank" data-stat-pid="stat_Home.首页_10_1_13"> 小米蓝牙音频接收器 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            79元
           </dd> 
           <dd class="xm-recommend-tips">
             8933人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1174700014.html" data-log_code="reccom_Guesslike_0_11#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3546&amp;bid=3038464.11&amp;page=home" data-stat-method="1_13" data-stat-index="11" data-stat-text="小米自拍杆（线控版）" target="_blank" data-stat-pid="stat_Home.首页_11_1_13" data-stat-aid="小米自拍杆（线控版）"> <img src="//i1.mifile.cn/a1/pms_1511162365.26074460!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1511162365.26074460!280x280.jpg  2x" alt="小米自拍杆（线控版）" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1174700014.html" data-log_code="reccom_Guesslike_0_11#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3546&amp;bid=3038464.11&amp;page=home" data-stat-method="1_13" data-stat-index="11" target="_blank" data-stat-pid="stat_Home.首页_11_1_13"> 小米自拍杆（线控版） </a> 
           </dd> 
           <dd class="xm-recommend-price">
            44元
           </dd> 
           <dd class="xm-recommend-tips">
             1.8万人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1174200034.html" data-log_code="reccom_Guesslike_0_12#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6124&amp;bid=3038464.12&amp;page=home" data-stat-method="1_13" data-stat-index="12" data-stat-text="自动折叠伞" target="_blank" data-stat-pid="stat_Home.首页_12_1_13" data-stat-aid="自动折叠伞"> <img src="//i1.mifile.cn/a1/pms_1508311018.31143247!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1508311018.31143247!280x280.jpg  2x" alt="自动折叠伞" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1174200034.html" data-log_code="reccom_Guesslike_0_12#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6124&amp;bid=3038464.12&amp;page=home" data-stat-method="1_13" data-stat-index="12" target="_blank" data-stat-pid="stat_Home.首页_12_1_13"> 自动折叠伞 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            89元
           </dd> 
           <dd class="xm-recommend-tips">
             1.2万人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1162000044.html" data-log_code="reccom_Guesslike_0_13#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3754&amp;bid=3038464.13&amp;page=home" data-stat-method="1_13" data-stat-index="13" data-stat-text="小米指环支架" target="_blank" data-stat-pid="stat_Home.首页_13_1_13" data-stat-aid="小米指环支架"> <img src="//i1.mifile.cn/a1/pms_1476794113.3997867!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1476794113.3997867!280x280.jpg  2x" alt="小米指环支架" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1162000044.html" data-log_code="reccom_Guesslike_0_13#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3754&amp;bid=3038464.13&amp;page=home" data-stat-method="1_13" data-stat-index="13" target="_blank" data-stat-pid="stat_Home.首页_13_1_13"> 小米指环支架 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            16元
           </dd> 
           <dd class="xm-recommend-tips">
             2.6万人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1173400001.html" data-log_code="reccom_Guesslike_0_14#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6642&amp;bid=3038464.14&amp;page=home" data-stat-method="1_13" data-stat-index="14" data-stat-text="米家金属签字笔专用笔芯" target="_blank" data-stat-pid="stat_Home.首页_14_1_13" data-stat-aid="米家金属签字笔专用笔芯"> <img src="//i1.mifile.cn/a1/pms_1503285652.15135811!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1503285652.15135811!280x280.jpg  2x" alt="米家金属签字笔专用笔芯" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1173400001.html" data-log_code="reccom_Guesslike_0_14#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6642&amp;bid=3038464.14&amp;page=home" data-stat-method="1_13" data-stat-index="14" target="_blank" data-stat-pid="stat_Home.首页_14_1_13"> 米家金属签字笔专用笔芯 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            6.9元
           </dd> 
           <dd class="xm-recommend-tips">
             5883人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1173100110.html" data-log_code="reccom_Guesslike_0_15#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6518&amp;bid=3038464.15&amp;page=home" data-stat-method="1_13" data-stat-index="15" data-stat-text="Free Tie真皮板鞋 米家定制 男款" target="_blank" data-stat-pid="stat_Home.首页_15_1_13" data-stat-aid="FreeTie真皮板鞋米家定制男款"> <img src="//i1.mifile.cn/a1/pms_1504510139.65413172!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1504510139.65413172!280x280.jpg  2x" alt="Free Tie真皮板鞋 米家定制 男款" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1173100110.html" data-log_code="reccom_Guesslike_0_15#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6518&amp;bid=3038464.15&amp;page=home" data-stat-method="1_13" data-stat-index="15" target="_blank" data-stat-pid="stat_Home.首页_15_1_13"> Free Tie真皮板鞋 米家定制 男款 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            129元
           </dd> 
           <dd class="xm-recommend-tips">
             1.9万人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1162000069.html" data-log_code="reccom_Guesslike_0_16#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3781&amp;bid=3038464.16&amp;page=home" data-stat-method="1_13" data-stat-index="16" data-stat-text="悟空米兔" target="_blank" data-stat-pid="stat_Home.首页_16_1_13" data-stat-aid="悟空米兔"> <img src="//i1.mifile.cn/a1/pms_1463975728.16077005!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1463975728.16077005!280x280.jpg  2x" alt="悟空米兔" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1162000069.html" data-log_code="reccom_Guesslike_0_16#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=3781&amp;bid=3038464.16&amp;page=home" data-stat-method="1_13" data-stat-index="16" target="_blank" data-stat-pid="stat_Home.首页_16_1_13"> 悟空米兔 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            49元
           </dd> 
           <dd class="xm-recommend-tips">
             519人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1174700032.html" data-log_code="reccom_Guesslike_0_17#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7309&amp;bid=3038464.17&amp;page=home" data-stat-method="1_13" data-stat-index="17" data-stat-text="九号平衡车Plus 载物筐" target="_blank" data-stat-pid="stat_Home.首页_17_1_13" data-stat-aid="九号平衡车Plus载物筐"> <img src="//i1.mifile.cn/a1/pms_1511428598.51594501!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1511428598.51594501!280x280.jpg  2x" alt="九号平衡车Plus 载物筐" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1174700032.html" data-log_code="reccom_Guesslike_0_17#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7309&amp;bid=3038464.17&amp;page=home" data-stat-method="1_13" data-stat-index="17" target="_blank" data-stat-pid="stat_Home.首页_17_1_13"> 九号平衡车Plus 载物筐 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            99元
           </dd> 
           <dd class="xm-recommend-tips">
             114人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1174200035.html" data-log_code="reccom_Guesslike_0_18#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7132&amp;bid=3038464.18&amp;page=home" data-stat-method="1_13" data-stat-index="18" data-stat-text="90分户外休闲双肩包" target="_blank" data-stat-pid="stat_Home.首页_18_1_13" data-stat-aid="90分户外休闲双肩包"> <img src="//i1.mifile.cn/a1/pms_1508493123.37766671!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1508493123.37766671!280x280.jpg  2x" alt="90分户外休闲双肩包" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1174200035.html" data-log_code="reccom_Guesslike_0_18#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7132&amp;bid=3038464.18&amp;page=home" data-stat-method="1_13" data-stat-index="18" target="_blank" data-stat-pid="stat_Home.首页_18_1_13"> 90分户外休闲双肩包 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            199元
           </dd> 
           <dd class="xm-recommend-tips">
             847人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li> 
         <li class="J_xm-recommend-list"> 
          <dl> 
           <dt> 
            <a href="//item.mi.com/1182100070.html" data-log_code="reccom_Guesslike_0_19#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8162&amp;bid=3038464.19&amp;page=home" data-stat-method="1_13" data-stat-index="19" data-stat-text="小米净水器1A复合滤芯" target="_blank" data-stat-pid="stat_Home.首页_19_1_13" data-stat-aid="小米净水器1A复合滤芯"> <img src="//i1.mifile.cn/a1/pms_1527232016.96699168!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1527232016.96699168!280x280.jpg  2x" alt="小米净水器1A复合滤芯" /> </a> 
           </dt> 
           <dd class="xm-recommend-name"> 
            <a href="//item.mi.com/1182100070.html" data-log_code="reccom_Guesslike_0_19#eid=184:12:0:0:0:0:0:0:0:0&amp;traceId=BlankRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8162&amp;bid=3038464.19&amp;page=home" data-stat-method="1_13" data-stat-index="19" target="_blank" data-stat-pid="stat_Home.首页_19_1_13"> 小米净水器1A复合滤芯 </a> 
           </dd> 
           <dd class="xm-recommend-price">
            199元
           </dd> 
           <dd class="xm-recommend-tips">
             16人好评 
           </dd> 
           <dd class="xm-recommend-notice"></dd> 
          </dl> </li>
        </ul>
       </div>
      </div>
     </div> 
    </div> 
    <div id="comment" class="home-review-box xm-plain-box J_itemBox J_reviewBox is-visible"> 
     <div class="box-hd"> 
      <h2 class="title">热评产品</h2> 
     </div> 
     <div class="box-bd J_brickBd">
      <ul class="review-list clearfix"> 
       <li class="review-item review-item-first" data-gid="2162800013"> 
        <div class="figure figure-img"> 
         <a class="exposure" href="http://www.mi.com/locatephone/" data-stat-aid="AA13738" data-stat-pid="2_38_1_230" data-log_code="31pchomecomment005005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.5&amp;pid=2162800013&amp;adm=2458" target="_blank" data-stat-id="AA13738+2_38_1_230" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13738+2_38_1_230', 'http://www.mi.com/locatephone/', 'pcpid', '31pchomecomment005005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.5&amp;pid=2162800013&amp;adm=2458']);"> <img src="//i1.mifile.cn/a4/97d80b35-152e-4934-af34-402251458e16" width="296" height="220" alt="米兔定位电话" /> </a> 
        </div> <p class="review"><a href="//order.mi.com/comment/commentDetail/comment_id/137663264" data-stat-aid="AA13738" data-stat-pid="2_38_1_230" data-log_code="31pchomecomment005005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.5&amp;pid=2162800013&amp;adm=2458" target="_blank" data-stat-id="AA13738+2_38_1_230" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13738+2_38_1_230', '//order.mi.com/comment/commentDetail/comment_id/137663264', 'pcpid', '31pchomecomment005005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.5&amp;pid=2162800013&amp;adm=2458']);">非常好用，孩子使用防止沉迷于电话影响学习。做工很好，定位基本准确，通话清晰。如果加入时间显示就更完美...</a></p> <p class="author"> 来自于 178576259 的评价 <span class="date" data-date="1474469760"></span> </p> 
        <div class="info"> 
         <h3 class="title"><a href="http://www.mi.com/locatephone/" data-stat-aid="AA13738" data-stat-pid="2_38_1_230" data-log_code="31pchomecomment005005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.5&amp;pid=2162800013&amp;adm=2458" target="_blank" data-stat-id="AA13738+2_38_1_230" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13738+2_38_1_230', 'http://www.mi.com/locatephone/', 'pcpid', '31pchomecomment005005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.5&amp;pid=2162800013&amp;adm=2458']);">米兔定位电话</a></h3> 
         <span class="sep">|</span> 
         <p class="price"><span class="num">159</span>元</p> 
        </div> </li> 
       <li class="review-item" data-gid="2173700036"> 
        <div class="figure figure-img"> 
         <a class="exposure" href="http://www.mi.com/carair/" data-stat-aid="AA18731" data-stat-pid="2_38_2_223" data-log_code="31pchomecomment001005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.1&amp;pid=2173700036&amp;adm=4361" target="_blank" data-stat-id="AA18731+2_38_2_223" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18731+2_38_2_223', 'http://www.mi.com/carair/', 'pcpid', '31pchomecomment001005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.1&amp;pid=2173700036&amp;adm=4361']);"> <img src="//i1.mifile.cn/a4/xmad_15094337975564_BSRIq.jpg" width="296" height="220" alt="米家车载空气净化器（USB车充版） 灰色" /> </a> 
        </div> <p class="review"><a href="//order.mi.com/comment/commentDetail/comment_id/141831535" data-stat-aid="AA18731" data-stat-pid="2_38_2_223" data-log_code="31pchomecomment001005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.1&amp;pid=2173700036&amp;adm=4361" target="_blank" data-stat-id="AA18731+2_38_2_223" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18731+2_38_2_223', '//order.mi.com/comment/commentDetail/comment_id/141831535', 'pcpid', '31pchomecomment001005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.1&amp;pid=2173700036&amp;adm=4361']);">外形简洁大方，大爱小米！全家人都在用小米的产品，真心不错，最主要的是性价比高。附图，给客服妹子一个大...</a></p> <p class="author"> 来自于 酸小妞～！ 的评价 <span class="date" data-date="1488080684"></span> </p> 
        <div class="info"> 
         <h3 class="title"><a href="http://www.mi.com/carair/" data-stat-aid="AA18731" data-stat-pid="2_38_2_223" data-log_code="31pchomecomment001005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.1&amp;pid=2173700036&amp;adm=4361" target="_blank" data-stat-id="AA18731+2_38_2_223" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA18731+2_38_2_223', 'http://www.mi.com/carair/', 'pcpid', '31pchomecomment001005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.1&amp;pid=2173700036&amp;adm=4361']);">米家车载空气净化器（USB车充版） 灰色</a></h3> 
         <span class="sep">|</span> 
         <p class="price"><span class="num">389</span>元</p> 
        </div> </li> 
       <li class="review-item" data-gid="2161200066"> 
        <div class="figure figure-img"> 
         <a class="exposure" href="http://www.mi.com/dianfanbao/" data-stat-aid="AA13431" data-stat-pid="2_38_3_225" data-log_code="31pchomecomment002005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.2&amp;pid=2161200066&amp;adm=2233" target="_blank" data-stat-id="AA13431+2_38_3_225" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13431+2_38_3_225', 'http://www.mi.com/dianfanbao/', 'pcpid', '31pchomecomment002005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.2&amp;pid=2161200066&amp;adm=2233']);"> <img src="//i1.mifile.cn/a4/54e35fdd-bc68-4a89-bad7-c9c3bb2fc6fe" width="296" height="220" alt="米家压力IH电饭煲" /> </a> 
        </div> <p class="review"><a href="//order.mi.com/comment/commentDetail/comment_id/133452803" data-stat-aid="AA13431" data-stat-pid="2_38_3_225" data-log_code="31pchomecomment002005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.2&amp;pid=2161200066&amp;adm=2233" target="_blank" data-stat-id="AA13431+2_38_3_225" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13431+2_38_3_225', '//order.mi.com/comment/commentDetail/comment_id/133452803', 'pcpid', '31pchomecomment002005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.2&amp;pid=2161200066&amp;adm=2233']);">包装很让人感动，式样也很可爱，做出的饭全家人都爱吃，超爱五星！手机控制还是不太熟练，最主要是没有连接...</a></p> <p class="author"> 来自于 HZG 的评价 <span class="date" data-date="1460293860"></span> </p> 
        <div class="info"> 
         <h3 class="title"><a href="http://www.mi.com/dianfanbao/" data-stat-aid="AA13431" data-stat-pid="2_38_3_225" data-log_code="31pchomecomment002005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.2&amp;pid=2161200066&amp;adm=2233" target="_blank" data-stat-id="AA13431+2_38_3_225" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13431+2_38_3_225', 'http://www.mi.com/dianfanbao/', 'pcpid', '31pchomecomment002005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.2&amp;pid=2161200066&amp;adm=2233']);">米家压力IH电饭煲</a></h3> 
         <span class="sep">|</span> 
         <p class="price"><span class="num">999</span>元</p> 
        </div> </li> 
       <li class="review-item" data-gid="2162100003"> 
        <div class="figure figure-img"> 
         <a class="exposure" href="http://www.mi.com/mitu/" data-stat-aid="AA13440" data-stat-pid="2_38_4_232" data-log_code="31pchomecomment006005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.6&amp;pid=2162100003&amp;adm=2242" target="_blank" data-stat-id="AA13440+2_38_4_232" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13440+2_38_4_232', 'http://www.mi.com/mitu/', 'pcpid', '31pchomecomment006005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.6&amp;pid=2162100003&amp;adm=2242']);"> <img src="//i1.mifile.cn/a4/032d0ff1-f77f-4830-a469-f3564d55e0c5" width="296" height="220" alt="米兔智能故事机" /> </a> 
        </div> <p class="review"><a href="//order.mi.com/comment/commentDetail/comment_id/135107062" data-stat-aid="AA13440" data-stat-pid="2_38_4_232" data-log_code="31pchomecomment006005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.6&amp;pid=2162100003&amp;adm=2242" target="_blank" data-stat-id="AA13440+2_38_4_232" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13440+2_38_4_232', '//order.mi.com/comment/commentDetail/comment_id/135107062', 'pcpid', '31pchomecomment006005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.6&amp;pid=2162100003&amp;adm=2242']);">非常可爱，一拿到小宝宝还没享受，一帮大宝宝先high了一把，同事也想买，希望早点大卖</a></p> <p class="author"> 来自于 秘密 的评价 <span class="date" data-date="1468293840"></span> </p> 
        <div class="info"> 
         <h3 class="title"><a href="http://www.mi.com/mitu/" data-stat-aid="AA13440" data-stat-pid="2_38_4_232" data-log_code="31pchomecomment006005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.6&amp;pid=2162100003&amp;adm=2242" target="_blank" data-stat-id="AA13440+2_38_4_232" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13440+2_38_4_232', 'http://www.mi.com/mitu/', 'pcpid', '31pchomecomment006005#t=normal&amp;act=other&amp;page=home&amp;bid=3030357.6&amp;pid=2162100003&amp;adm=2242']);">米兔智能故事机</a></h3> 
         <span class="sep">|</span> 
         <p class="price"><span class="num">189</span>元</p> 
        </div> </li> 
      </ul>
     </div> 
    </div> 
    <div id="content" class="home-content-box xm-plain-box J_itemBox J_contentBox is-visible"> 
     <div class="box-hd"> 
      <h2 class="title">内容</h2> 
     </div> 
     <div class="box-bd J_brickBd">
      <ul class="content-list clearfix">
       <li class="content-item content-item-book content-item-first xm-carousel-container"><h2 class="title">图书</h2>
        <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
         <ul class="item-list clearfix" style="width: 888px; margin-left: 0px; transition: margin-left 0.5s ease 0s;">
          <li> <h4 class="name"> <a href="http://www.duokan.com/book/120800" class="exposure" data-stat-aid="AA13919" data-stat-pid="2_39_1_233" data-log_code="31pchomecontent_book001006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.1&amp;adm=2573" tabindex="-1" target="_blank" data-stat-id="AA13919+2_39_1_233" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13919+2_39_1_233', 'http://www.duokan.com/book/120800', 'pcpid', '31pchomecontent_book001006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.1&amp;adm=2573']);">哈利&middot;波特与被诅咒的孩子</a></h4> <p class="desc"><a href="http://www.duokan.com/book/120800" data-stat-aid="AA13919" data-stat-pid="2_39_1_233" data-log_code="31pchomecontent_book001006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.1&amp;adm=2573" tabindex="-1" target="_blank" data-stat-id="AA13919+2_39_1_233" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13919+2_39_1_233', 'http://www.duokan.com/book/120800', 'pcpid', '31pchomecontent_book001006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.1&amp;adm=2573']);">“哈利&middot;波特”第八个故事中文版震撼来袭！特别彩排版剧本！ </a></p> <p class="price"><a href="http://www.duokan.com/book/120800" data-stat-aid="AA13919" data-stat-pid="2_39_1_233" data-log_code="31pchomecontent_book001006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.1&amp;adm=2573" tabindex="-1" target="_blank" data-stat-id="AA13919+2_39_1_233" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13919+2_39_1_233', 'http://www.duokan.com/book/120800', 'pcpid', '31pchomecontent_book001006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.1&amp;adm=2573']);">29.37元</a></p> 
           <div class="figure figure-img"> 
            <a href="http://www.duokan.com/book/120800" data-stat-aid="AA13919" data-stat-pid="2_39_1_233" data-log_code="31pchomecontent_book001006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.1&amp;adm=2573" tabindex="-1" target="_blank" data-stat-id="AA13919+2_39_1_233" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13919+2_39_1_233', 'http://www.duokan.com/book/120800', 'pcpid', '31pchomecontent_book001006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.1&amp;adm=2573']);"> <img src="//i1.mifile.cn/a4/5e5da924-84e3-4959-9e25-5891cdf30757" width="160" height="140" alt="哈利&middot;波特与被诅咒的孩子" /> </a> 
           </div></li>
          <li> <h4 class="name"> <a href="http://www.duokan.com/book/120867" class="exposure" data-stat-aid="AA13920" data-stat-pid="2_39_2_234" data-log_code="31pchomecontent_book002006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.2&amp;adm=2572" tabindex="-1" target="_blank" data-stat-id="AA13920+2_39_2_234" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13920+2_39_2_234', 'http://www.duokan.com/book/120867', 'pcpid', '31pchomecontent_book002006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.2&amp;adm=2572']);">好吗好的</a></h4> <p class="desc"><a href="http://www.duokan.com/book/120867" data-stat-aid="AA13920" data-stat-pid="2_39_2_234" data-log_code="31pchomecontent_book002006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.2&amp;adm=2572" tabindex="-1" target="_blank" data-stat-id="AA13920+2_39_2_234" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13920+2_39_2_234', 'http://www.duokan.com/book/120867', 'pcpid', '31pchomecontent_book002006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.2&amp;adm=2572']);">畅销作家大冰2016年新书！讲给你听，好吗好的！</a></p> <p class="price"><a href="http://www.duokan.com/book/120867" data-stat-aid="AA13920" data-stat-pid="2_39_2_234" data-log_code="31pchomecontent_book002006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.2&amp;adm=2572" tabindex="-1" target="_blank" data-stat-id="AA13920+2_39_2_234" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13920+2_39_2_234', 'http://www.duokan.com/book/120867', 'pcpid', '31pchomecontent_book002006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.2&amp;adm=2572']);">17.99元</a></p> 
           <div class="figure figure-img"> 
            <a href="http://www.duokan.com/book/120867" data-stat-aid="AA13920" data-stat-pid="2_39_2_234" data-log_code="31pchomecontent_book002006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.2&amp;adm=2572" tabindex="-1" target="_blank" data-stat-id="AA13920+2_39_2_234" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA13920+2_39_2_234', 'http://www.duokan.com/book/120867', 'pcpid', '31pchomecontent_book002006#t=normal&amp;act=other&amp;page=home&amp;bid=3030358.2&amp;adm=2572']);"> <img src="//i1.mifile.cn/a4/61e1385e-54de-48f3-8717-5e4f4b1cdd14" width="160" height="140" alt="好吗好的" /> </a> 
           </div></li>
          <li class="more"> <p class="desc">海量好书，享受精品阅读时光<br />漂亮的中文排版，千万读者选择！</p> <a class="btn btn-small btn-line-orange" href="http://www.duokan.com/list/1-1?from=xiaomi" tabindex="-1" target="_blank" data-stat-id="d933e383b9291e42" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-d933e383b9291e42', 'http://www.duokan.com/list/1-1from=xiaomi', 'pcpid', '']);">前往多看阅读</a> <img class="thumb" src="//s01.mifile.cn/i/index/more-duokan.jpg" width="160" height="140" alt="多看阅读" /></li>
         </ul>
        </div>
        <div class="xm-pagers-wrapper">
         <ul class="xm-pagers">
          <li class="pager pager-active"><span class="dot">1</span></li>
          <li class="pager"><span class="dot">2</span></li>
          <li class="pager"><span class="dot">3</span></li>
         </ul>
        </div>
        <div class="xm-controls xm-controls-block-small xm-carousel-controls">
         <a class="control control-prev iconfont control-disabled" href="javascript: void(0);" data-stat-id="4954b68079277376" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4954b68079277376', 'javascript:void0', 'pcpid', '']);"></a>
         <a class="control control-next iconfont" href="javascript: void(0);" data-stat-id="712d1444644c3c28" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-712d1444644c3c28', 'javascript:void0', 'pcpid', '']);"></a>
        </div></li>
       <li class="content-item content-item-theme xm-carousel-container"><h2 class="title">MIUI 主题</h2>
        <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
         <ul class="item-list clearfix" style="width: 1184px; margin-left: 0px; transition: margin-left 0.5s ease 0s;">
          <li> <h4 class="name"> <a href="http://zhuti.xiaomi.com/detail/31c6176f-5772-45fa-9df9-d86d2bae1e4a" class="exposure" data-stat-aid="AA20886" data-stat-pid="2_40_1_236" data-log_code="31pchomecontent_theme001007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.1&amp;adm=5531" tabindex="-1" target="_blank" data-stat-id="AA20886+2_40_1_236" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20886+2_40_1_236', 'http://zhuti.xiaomi.com/detail/31c6176f-5772-45fa-9df9-d86d2bae1e4a', 'pcpid', '31pchomecontent_theme001007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.1&amp;adm=5531']);">熊本熊 酷MA萌</a></h4> <p class="desc"><a href="http://zhuti.xiaomi.com/detail/31c6176f-5772-45fa-9df9-d86d2bae1e4a" data-stat-aid="AA20886" data-stat-pid="2_40_1_236" data-log_code="31pchomecontent_theme001007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.1&amp;adm=5531" tabindex="-1" target="_blank" data-stat-id="AA20886+2_40_1_236" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20886+2_40_1_236', 'http://zhuti.xiaomi.com/detail/31c6176f-5772-45fa-9df9-d86d2bae1e4a', 'pcpid', '31pchomecontent_theme001007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.1&amp;adm=5531']);">戳一戳、摸一摸，酷MA萌会在锁屏跟你亲密互动哦。</a></p> <p class="price"><a href="http://zhuti.xiaomi.com/detail/31c6176f-5772-45fa-9df9-d86d2bae1e4a" data-stat-aid="AA20886" data-stat-pid="2_40_1_236" data-log_code="31pchomecontent_theme001007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.1&amp;adm=5531" tabindex="-1" target="_blank" data-stat-id="AA20886+2_40_1_236" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20886+2_40_1_236', 'http://zhuti.xiaomi.com/detail/31c6176f-5772-45fa-9df9-d86d2bae1e4a', 'pcpid', '31pchomecontent_theme001007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.1&amp;adm=5531']);"></a></p> 
           <div class="figure figure-img"> 
            <a href="http://zhuti.xiaomi.com/detail/31c6176f-5772-45fa-9df9-d86d2bae1e4a" data-stat-aid="AA20886" data-stat-pid="2_40_1_236" data-log_code="31pchomecontent_theme001007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.1&amp;adm=5531" tabindex="-1" target="_blank" data-stat-id="AA20886+2_40_1_236" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20886+2_40_1_236', 'http://zhuti.xiaomi.com/detail/31c6176f-5772-45fa-9df9-d86d2bae1e4a', 'pcpid', '31pchomecontent_theme001007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.1&amp;adm=5531']);"> <img src="//i1.mifile.cn/a4/xmad_15360565735203_Uuvyd.jpg" width="160" height="140" alt="熊本熊 酷MA萌" /> </a> 
           </div></li>
          <li> <h4 class="name"> <a href="http://zhuti.xiaomi.com/detail/8e7b9877-efe1-4b42-87c0-658d89a166c9" class="exposure" data-stat-aid="AA20848" data-stat-pid="2_40_2_237" data-log_code="31pchomecontent_theme002007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.2&amp;adm=5523" tabindex="-1" target="_blank" data-stat-id="AA20848+2_40_2_237" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20848+2_40_2_237', 'http://zhuti.xiaomi.com/detail/8e7b9877-efe1-4b42-87c0-658d89a166c9', 'pcpid', '31pchomecontent_theme002007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.2&amp;adm=5523']);">蚁人2</a></h4> <p class="desc"><a href="http://zhuti.xiaomi.com/detail/8e7b9877-efe1-4b42-87c0-658d89a166c9" data-stat-aid="AA20848" data-stat-pid="2_40_2_237" data-log_code="31pchomecontent_theme002007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.2&amp;adm=5523" tabindex="-1" target="_blank" data-stat-id="AA20848+2_40_2_237" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20848+2_40_2_237', 'http://zhuti.xiaomi.com/detail/8e7b9877-efe1-4b42-87c0-658d89a166c9', 'pcpid', '31pchomecontent_theme002007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.2&amp;adm=5523']);">小米主题和迪士尼首度合作，打造精品漫威系列主题</a></p> <p class="price"><a href="http://zhuti.xiaomi.com/detail/8e7b9877-efe1-4b42-87c0-658d89a166c9" data-stat-aid="AA20848" data-stat-pid="2_40_2_237" data-log_code="31pchomecontent_theme002007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.2&amp;adm=5523" tabindex="-1" target="_blank" data-stat-id="AA20848+2_40_2_237" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20848+2_40_2_237', 'http://zhuti.xiaomi.com/detail/8e7b9877-efe1-4b42-87c0-658d89a166c9', 'pcpid', '31pchomecontent_theme002007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.2&amp;adm=5523']);"></a></p> 
           <div class="figure figure-img"> 
            <a href="http://zhuti.xiaomi.com/detail/8e7b9877-efe1-4b42-87c0-658d89a166c9" data-stat-aid="AA20848" data-stat-pid="2_40_2_237" data-log_code="31pchomecontent_theme002007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.2&amp;adm=5523" tabindex="-1" target="_blank" data-stat-id="AA20848+2_40_2_237" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20848+2_40_2_237', 'http://zhuti.xiaomi.com/detail/8e7b9877-efe1-4b42-87c0-658d89a166c9', 'pcpid', '31pchomecontent_theme002007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.2&amp;adm=5523']);"> <img src="//i1.mifile.cn/a4/xmad_15357000957252_GpoLc.png" width="160" height="140" alt="蚁人2" /> </a> 
           </div></li>
          <li> <h4 class="name"> <a href="http://zhuti.xiaomi.com/detail/a909fbe0-28bb-4361-892b-d49550468b44" class="exposure" data-stat-aid="AA20674" data-stat-pid="2_40_3_238" data-log_code="31pchomecontent_theme003007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.3&amp;adm=5364" tabindex="-1" target="_blank" data-stat-id="AA20674+2_40_3_238" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20674+2_40_3_238', 'http://zhuti.xiaomi.com/detail/a909fbe0-28bb-4361-892b-d49550468b44', 'pcpid', '31pchomecontent_theme003007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.3&amp;adm=5364']);">复仇者联盟3-我的英雄</a></h4> <p class="desc"><a href="http://zhuti.xiaomi.com/detail/a909fbe0-28bb-4361-892b-d49550468b44" data-stat-aid="AA20674" data-stat-pid="2_40_3_238" data-log_code="31pchomecontent_theme003007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.3&amp;adm=5364" tabindex="-1" target="_blank" data-stat-id="AA20674+2_40_3_238" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20674+2_40_3_238', 'http://zhuti.xiaomi.com/detail/a909fbe0-28bb-4361-892b-d49550468b44', 'pcpid', '31pchomecontent_theme003007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.3&amp;adm=5364']);">28张超级英雄个人专属锁屏及桌面壁纸随你挑！ </a></p> <p class="price"><a href="http://zhuti.xiaomi.com/detail/a909fbe0-28bb-4361-892b-d49550468b44" data-stat-aid="AA20674" data-stat-pid="2_40_3_238" data-log_code="31pchomecontent_theme003007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.3&amp;adm=5364" tabindex="-1" target="_blank" data-stat-id="AA20674+2_40_3_238" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20674+2_40_3_238', 'http://zhuti.xiaomi.com/detail/a909fbe0-28bb-4361-892b-d49550468b44', 'pcpid', '31pchomecontent_theme003007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.3&amp;adm=5364']);">8.8米币</a></p> 
           <div class="figure figure-img"> 
            <a href="http://zhuti.xiaomi.com/detail/a909fbe0-28bb-4361-892b-d49550468b44" data-stat-aid="AA20674" data-stat-pid="2_40_3_238" data-log_code="31pchomecontent_theme003007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.3&amp;adm=5364" tabindex="-1" target="_blank" data-stat-id="AA20674+2_40_3_238" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20674+2_40_3_238', 'http://zhuti.xiaomi.com/detail/a909fbe0-28bb-4361-892b-d49550468b44', 'pcpid', '31pchomecontent_theme003007#t=normal&amp;act=other&amp;page=home&amp;bid=3030359.3&amp;adm=5364']);"> <img src="//i1.mifile.cn/a4/xmad_15290561352349_zNjLT.png" width="160" height="140" alt="复仇者联盟3-我的英雄" /> </a> 
           </div></li>
          <li class="more"> <p class="desc">众多个性主题、百变锁屏与自由桌面<br />让你的手机与众不同！</p> <a class="btn btn-small btn-line-green" href="http://zhuti.xiaomi.com/?from=mi" tabindex="-1" target="_blank" data-stat-id="5845a73f6a11052c" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-5845a73f6a11052c', 'http://zhuti.xiaomi.com/from=mi', 'pcpid', '']);">前往MIUI主题市场</a> <img class="thumb" src="//s01.mifile.cn/i/index/more-miui.jpg" width="160" height="140" alt="MIUI主题市场" /></li>
         </ul>
        </div>
        <div class="xm-pagers-wrapper">
         <ul class="xm-pagers">
          <li class="pager pager-active"><span class="dot">1</span></li>
          <li class="pager"><span class="dot">2</span></li>
          <li class="pager"><span class="dot">3</span></li>
          <li class="pager"><span class="dot">4</span></li>
         </ul>
        </div>
        <div class="xm-controls xm-controls-block-small xm-carousel-controls">
         <a class="control control-prev iconfont control-disabled" href="javascript: void(0);" data-stat-id="4954b68079277376" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4954b68079277376', 'javascript:void0', 'pcpid', '']);"></a>
         <a class="control control-next iconfont" href="javascript: void(0);" data-stat-id="712d1444644c3c28" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-712d1444644c3c28', 'javascript:void0', 'pcpid', '']);"></a>
        </div></li>
       <li class="content-item content-item-game xm-carousel-container"><h2 class="title">游戏</h2>
        <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
         <ul class="item-list clearfix" style="width: 1184px; margin-left: 0px; transition: margin-left 0.5s ease 0s;">
          <li> <h4 class="name"> <a href="http://game.wali.com/game/62233500" class="exposure" data-stat-aid="AA20642" data-stat-pid="2_41_1_239" data-log_code="31pchomecontent_game001008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.1&amp;adm=5389" tabindex="-1" target="_blank" data-stat-id="AA20642+2_41_1_239" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20642+2_41_1_239', 'http://game.wali.com/game/62233500', 'pcpid', '31pchomecontent_game001008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.1&amp;adm=5389']);">非人学园</a></h4> <p class="desc"><a href="http://game.wali.com/game/62233500" data-stat-aid="AA20642" data-stat-pid="2_41_1_239" data-log_code="31pchomecontent_game001008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.1&amp;adm=5389" tabindex="-1" target="_blank" data-stat-id="AA20642+2_41_1_239" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20642+2_41_1_239', 'http://game.wali.com/game/62233500', 'pcpid', '31pchomecontent_game001008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.1&amp;adm=5389']);">脑洞大开的二次元竞技手游</a></p> <p class="price"><a href="http://game.wali.com/game/62233500" data-stat-aid="AA20642" data-stat-pid="2_41_1_239" data-log_code="31pchomecontent_game001008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.1&amp;adm=5389" tabindex="-1" target="_blank" data-stat-id="AA20642+2_41_1_239" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20642+2_41_1_239', 'http://game.wali.com/game/62233500', 'pcpid', '31pchomecontent_game001008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.1&amp;adm=5389']);"></a></p> 
           <div class="figure figure-img"> 
            <a href="http://game.wali.com/game/62233500" data-stat-aid="AA20642" data-stat-pid="2_41_1_239" data-log_code="31pchomecontent_game001008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.1&amp;adm=5389" tabindex="-1" target="_blank" data-stat-id="AA20642+2_41_1_239" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20642+2_41_1_239', 'http://game.wali.com/game/62233500', 'pcpid', '31pchomecontent_game001008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.1&amp;adm=5389']);"> <img src="//i1.mifile.cn/a4/xmad_15299832299419_eIPOw.png" width="160" height="140" alt="非人学园" /> </a> 
           </div></li>
          <li> <h4 class="name"> <a href="http://xmcs.mi.com/?channel=bdad" class="exposure" data-stat-aid="AA19072" data-stat-pid="2_41_2_240" data-log_code="31pchomecontent_game002008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.2&amp;adm=4558" tabindex="-1" target="_blank" data-stat-id="AA19072+2_41_2_240" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19072+2_41_2_240', 'http://xmcs.mi.com/channel=bdad', 'pcpid', '31pchomecontent_game002008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.2&amp;adm=4558']);">小米超神</a></h4> <p class="desc"><a href="http://xmcs.mi.com/?channel=bdad" data-stat-aid="AA19072" data-stat-pid="2_41_2_240" data-log_code="31pchomecontent_game002008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.2&amp;adm=4558" tabindex="-1" target="_blank" data-stat-id="AA19072+2_41_2_240" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19072+2_41_2_240', 'http://xmcs.mi.com/channel=bdad', 'pcpid', '31pchomecontent_game002008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.2&amp;adm=4558']);">实力派，一起团！！</a></p> <p class="price"><a href="http://xmcs.mi.com/?channel=bdad" data-stat-aid="AA19072" data-stat-pid="2_41_2_240" data-log_code="31pchomecontent_game002008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.2&amp;adm=4558" tabindex="-1" target="_blank" data-stat-id="AA19072+2_41_2_240" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19072+2_41_2_240', 'http://xmcs.mi.com/channel=bdad', 'pcpid', '31pchomecontent_game002008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.2&amp;adm=4558']);"></a></p> 
           <div class="figure figure-img"> 
            <a href="http://xmcs.mi.com/?channel=bdad" data-stat-aid="AA19072" data-stat-pid="2_41_2_240" data-log_code="31pchomecontent_game002008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.2&amp;adm=4558" tabindex="-1" target="_blank" data-stat-id="AA19072+2_41_2_240" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA19072+2_41_2_240', 'http://xmcs.mi.com/channel=bdad', 'pcpid', '31pchomecontent_game002008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.2&amp;adm=4558']);"> <img src="//i1.mifile.cn/a4/xmad_15120234492499_MNEVo.png" width="160" height="140" alt="小米超神" /> </a> 
           </div></li>
          <li> <h4 class="name"> <a href="http://game.xiaomi.com/miyou/index.html" class="exposure" data-stat-aid="AA11625" data-stat-pid="2_41_3_241" data-log_code="31pchomecontent_game003008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.3&amp;adm=1128" tabindex="-1" target="_blank" data-stat-id="AA11625+2_41_3_241" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11625+2_41_3_241', 'http://game.xiaomi.com/miyou/index.html', 'pcpid', '31pchomecontent_game003008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.3&amp;adm=1128']);">米柚手游模拟器</a></h4> <p class="desc"><a href="http://game.xiaomi.com/miyou/index.html" data-stat-aid="AA11625" data-stat-pid="2_41_3_241" data-log_code="31pchomecontent_game003008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.3&amp;adm=1128" tabindex="-1" target="_blank" data-stat-id="AA11625+2_41_3_241" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11625+2_41_3_241', 'http://game.xiaomi.com/miyou/index.html', 'pcpid', '31pchomecontent_game003008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.3&amp;adm=1128']);">在电脑上玩遍小米所有手游</a></p> <p class="price"><a href="http://game.xiaomi.com/miyou/index.html" data-stat-aid="AA11625" data-stat-pid="2_41_3_241" data-log_code="31pchomecontent_game003008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.3&amp;adm=1128" tabindex="-1" target="_blank" data-stat-id="AA11625+2_41_3_241" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11625+2_41_3_241', 'http://game.xiaomi.com/miyou/index.html', 'pcpid', '31pchomecontent_game003008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.3&amp;adm=1128']);">免费</a></p> 
           <div class="figure figure-img"> 
            <a href="http://game.xiaomi.com/miyou/index.html" data-stat-aid="AA11625" data-stat-pid="2_41_3_241" data-log_code="31pchomecontent_game003008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.3&amp;adm=1128" tabindex="-1" target="_blank" data-stat-id="AA11625+2_41_3_241" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA11625+2_41_3_241', 'http://game.xiaomi.com/miyou/index.html', 'pcpid', '31pchomecontent_game003008#t=normal&amp;act=other&amp;page=home&amp;bid=3030360.3&amp;adm=1128']);"> <img src="//i1.mifile.cn/a4/T1czW_BXCv1R4cSCrK.png" width="160" height="140" alt="米柚手游模拟器" /> </a> 
           </div></li>
          <li class="more"> <p class="desc">免费下载海量的手机游戏<br />天天都有现金福利赠送</p> <a class="btn btn-small btn-line-red" href="http://game.xiaomi.com/index.php?c=index&amp;a=run" tabindex="-1" target="_blank" data-stat-id="31d96842105f72a4" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-31d96842105f72a4', 'http://game.xiaomi.com/index.phpc=index&amp;a=run', 'pcpid', '']);">前往小米游戏商店</a> <img class="thumb" src="//s01.mifile.cn/i/index/more-game.jpg" width="160" height="140" alt="小米游戏商店" /></li>
         </ul>
        </div>
        <div class="xm-pagers-wrapper">
         <ul class="xm-pagers">
          <li class="pager pager-active"><span class="dot">1</span></li>
          <li class="pager"><span class="dot">2</span></li>
          <li class="pager"><span class="dot">3</span></li>
          <li class="pager"><span class="dot">4</span></li>
         </ul>
        </div>
        <div class="xm-controls xm-controls-block-small xm-carousel-controls">
         <a class="control control-prev iconfont control-disabled" href="javascript: void(0);" data-stat-id="4954b68079277376" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4954b68079277376', 'javascript:void0', 'pcpid', '']);"></a>
         <a class="control control-next iconfont" href="javascript: void(0);" data-stat-id="712d1444644c3c28" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-712d1444644c3c28', 'javascript:void0', 'pcpid', '']);"></a>
        </div></li>
       <li class="content-item content-item-app xm-carousel-container"><h2 class="title">应用</h2>
        <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;">
         <ul class="item-list clearfix" style="width: 1184px; margin-left: 0px; transition: margin-left 0.5s ease 0s;">
          <li> <h4 class="name"> <a href="http://app.mi.com/subject/169216" class="exposure" data-stat-aid="AA12082" data-stat-pid="2_42_1_242" data-log_code="31pchomecontent_app001009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.1&amp;adm=2997" tabindex="-1" target="_blank" data-stat-id="AA12082+2_42_1_242" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12082+2_42_1_242', 'http://app.mi.com/subject/169216', 'pcpid', '31pchomecontent_app001009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.1&amp;adm=2997']);">2017金米奖</a></h4> <p class="desc"><a href="http://app.mi.com/subject/169216" data-stat-aid="AA12082" data-stat-pid="2_42_1_242" data-log_code="31pchomecontent_app001009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.1&amp;adm=2997" tabindex="-1" target="_blank" data-stat-id="AA12082+2_42_1_242" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12082+2_42_1_242', 'http://app.mi.com/subject/169216', 'pcpid', '31pchomecontent_app001009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.1&amp;adm=2997']);">最优秀的应用和游戏</a></p> <p class="price"><a href="http://app.mi.com/subject/169216" data-stat-aid="AA12082" data-stat-pid="2_42_1_242" data-log_code="31pchomecontent_app001009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.1&amp;adm=2997" tabindex="-1" target="_blank" data-stat-id="AA12082+2_42_1_242" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12082+2_42_1_242', 'http://app.mi.com/subject/169216', 'pcpid', '31pchomecontent_app001009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.1&amp;adm=2997']);"></a></p> 
           <div class="figure figure-img"> 
            <a href="http://app.mi.com/subject/169216" data-stat-aid="AA12082" data-stat-pid="2_42_1_242" data-log_code="31pchomecontent_app001009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.1&amp;adm=2997" tabindex="-1" target="_blank" data-stat-id="AA12082+2_42_1_242" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12082+2_42_1_242', 'http://app.mi.com/subject/169216', 'pcpid', '31pchomecontent_app001009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.1&amp;adm=2997']);"> <img src="//i1.mifile.cn/a4/3332da7d-4056-4694-9548-c83b7b3af7d3" width="160" height="140" alt="2017金米奖" /> </a> 
           </div></li>
          <li> <h4 class="name"> <a href="http://app.mi.com/detail/71417" class="exposure" data-stat-aid="AA10892" data-stat-pid="2_42_2_243" data-log_code="31pchomecontent_app002009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.2&amp;adm=633" tabindex="-1" target="_blank" data-stat-id="AA10892+2_42_2_243" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10892+2_42_2_243', 'http://app.mi.com/detail/71417', 'pcpid', '31pchomecontent_app002009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.2&amp;adm=633']);">Forest</a></h4> <p class="desc"><a href="http://app.mi.com/detail/71417" data-stat-aid="AA10892" data-stat-pid="2_42_2_243" data-log_code="31pchomecontent_app002009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.2&amp;adm=633" tabindex="-1" target="_blank" data-stat-id="AA10892+2_42_2_243" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10892+2_42_2_243', 'http://app.mi.com/detail/71417', 'pcpid', '31pchomecontent_app002009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.2&amp;adm=633']);">帮助您专心于生活中每个重要时刻</a></p> <p class="price"><a href="http://app.mi.com/detail/71417" data-stat-aid="AA10892" data-stat-pid="2_42_2_243" data-log_code="31pchomecontent_app002009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.2&amp;adm=633" tabindex="-1" target="_blank" data-stat-id="AA10892+2_42_2_243" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10892+2_42_2_243', 'http://app.mi.com/detail/71417', 'pcpid', '31pchomecontent_app002009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.2&amp;adm=633']);">免费</a></p> 
           <div class="figure figure-img"> 
            <a href="http://app.mi.com/detail/71417" data-stat-aid="AA10892" data-stat-pid="2_42_2_243" data-log_code="31pchomecontent_app002009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.2&amp;adm=633" tabindex="-1" target="_blank" data-stat-id="AA10892+2_42_2_243" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA10892+2_42_2_243', 'http://app.mi.com/detail/71417', 'pcpid', '31pchomecontent_app002009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.2&amp;adm=633']);"> <img src="//i1.mifile.cn/a4/T1TkKvBCKv1R4cSCrK.png" width="160" height="140" alt="Forest" /> </a> 
           </div></li>
          <li> <h4 class="name"> <a href="http://app.mi.com/subject/167924" class="exposure" data-stat-aid="AA12083" data-stat-pid="2_42_3_244" data-log_code="31pchomecontent_app003009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.3&amp;adm=642" tabindex="-1" target="_blank" data-stat-id="AA12083+2_42_3_244" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12083+2_42_3_244', 'http://app.mi.com/subject/167924', 'pcpid', '31pchomecontent_app003009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.3&amp;adm=642']);">小米应用</a></h4> <p class="desc"><a href="http://app.mi.com/subject/167924" data-stat-aid="AA12083" data-stat-pid="2_42_3_244" data-log_code="31pchomecontent_app003009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.3&amp;adm=642" tabindex="-1" target="_blank" data-stat-id="AA12083+2_42_3_244" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12083+2_42_3_244', 'http://app.mi.com/subject/167924', 'pcpid', '31pchomecontent_app003009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.3&amp;adm=642']);">小米出品 必属精品</a></p> <p class="price"><a href="http://app.mi.com/subject/167924" data-stat-aid="AA12083" data-stat-pid="2_42_3_244" data-log_code="31pchomecontent_app003009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.3&amp;adm=642" tabindex="-1" target="_blank" data-stat-id="AA12083+2_42_3_244" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12083+2_42_3_244', 'http://app.mi.com/subject/167924', 'pcpid', '31pchomecontent_app003009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.3&amp;adm=642']);">免费</a></p> 
           <div class="figure figure-img"> 
            <a href="http://app.mi.com/subject/167924" data-stat-aid="AA12083" data-stat-pid="2_42_3_244" data-log_code="31pchomecontent_app003009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.3&amp;adm=642" tabindex="-1" target="_blank" data-stat-id="AA12083+2_42_3_244" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA12083+2_42_3_244', 'http://app.mi.com/subject/167924', 'pcpid', '31pchomecontent_app003009#t=normal&amp;act=other&amp;page=home&amp;bid=3030361.3&amp;adm=642']);"> <img src="//i1.mifile.cn/a4/T15VZvB5Kv1R4cSCrK.png" width="160" height="140" alt="小米应用" /> </a> 
           </div></li>
          <li class="more"> <p class="desc">帮助小米手机和其他安卓手机用户<br />发现好用的安卓应用</p> <a class="btn btn-small btn-line-ocean" href="http://app.mi.com/?from=mi" tabindex="-1" target="_blank" data-stat-id="39f6cef1320c40ca" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-39f6cef1320c40ca', 'http://app.mi.com/from=mi', 'pcpid', '']);">前往小米应用商店</a> <img class="thumb" src="//s01.mifile.cn/i/index/more-app.jpg" width="160" height="140" alt="小米应用商店" /></li>
         </ul>
        </div>
        <div class="xm-pagers-wrapper">
         <ul class="xm-pagers">
          <li class="pager pager-active"><span class="dot">1</span></li>
          <li class="pager"><span class="dot">2</span></li>
          <li class="pager"><span class="dot">3</span></li>
          <li class="pager"><span class="dot">4</span></li>
         </ul>
        </div>
        <div class="xm-controls xm-controls-block-small xm-carousel-controls">
         <a class="control control-prev iconfont control-disabled" href="javascript: void(0);" data-stat-id="4954b68079277376" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-4954b68079277376', 'javascript:void0', 'pcpid', '']);"></a>
         <a class="control control-next iconfont" href="javascript: void(0);" data-stat-id="712d1444644c3c28" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-712d1444644c3c28', 'javascript:void0', 'pcpid', '']);"></a>
        </div></li>
      </ul>
     </div> 
    </div> 
    <div id="video" class="home-video-box xm-plain-box J_itemBox J_videoBox is-visible"> 
     <div class="box-hd"> 
      <h2 class="title">视频</h2> 
      <div class="more J_brickNav">
       <a class="more-link" href="//www.mi.com/video/" target="_blank" data-stat-id="29fd77fc2e609c84" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-29fd77fc2e609c84', '//www.mi.com/video/', 'pcpid', '']);">查看全部<i class="iconfont"></i></a>
      </div> 
     </div> 
     <div class="box-bd J_brickBd">
      <ul class="video-list clearfix">


         @foreach($showvideo as $video)
       <li class="video-item video-item-first"> 
        <div class="figure figure-img"> 
         <a class="J_videoTrigger exposure" href="javascript: void(0);" > 
          
         <video width="296px" height="180px" controls=""  name="media"><source src="{{$video->video}}" type="video/mp4"></video>
         <span class="play"><i class="iconfont"></i></span> </a> 
        </div> <h3 class="title"> <a class="J_videoTrigger" href="javascript: void(0);" data-stat-aid="AA20704" data-stat-pid="2_43_1_245" data-log_code="31pchomevideo001010#t=normal&amp;act=other&amp;page=home&amp;bid=3030362.1&amp;adm=5419" data-video="https://v.mifile.cn/b2c-mimall-media/c2cb94c9485243e1767d43268fb90820.mp4" data-video-poster="https://i8.mifile.cn/b2c-mimall-media/e0a27677f28572b6fa8dfcf5677d6499.jpeg" data-video-title="一团火" title="点击播放视频" data-stat-id="AA20704+2_43_1_245" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-AA20704+2_43_1_245', 'javascript:void0', 'pcpid', '31pchomevideo001010#t=normal&amp;act=other&amp;page=home&amp;bid=3030362.1&amp;adm=5419']);">{{$video->videoname}}</a> </h3> <p class="desc">{{$video->comment}}</p></li>
         @endforeach


       
      </ul>
     </div> 
    </div> 
   </div> 
  </div>




<!-- 右侧栏入口按钮 & 返回顶部 -->
<!-- 响应式小 -->
<div class="home-right-bar J_homeRightBar home-right-bar-show-s">
    <div class="bar-l">
        <div id="J_rightbar_l" style="display: none;"><ul class="bar-top">     <li class="bar-sort bar-sort-qr"> <a href="javascript:;" class="bar-link" data-log_code="3343648" data-stat-id="a2da08d794d3c499" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-a2da08d794d3c499', 'javascript:', 'pcpid', '3343648']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/98a23aae70f25798192693f21c4d4039.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/74c4fcb4475af8308e9a670db9c01fdf.png"> </div> <p class="bar-text">手机APP</p> <div class="bar-pop"> <div class="bar-pop-content"> <img src="https://i8.mifile.cn/b2c-mimall-media/93650133310ec1c385487417a472a26c.png" class="bar-pop-qr"> <p class="bar-pop-text">手机扫一扫一分赢好礼</p> </div> <div class="bar-arrow"></div> </div> </a> </li>        <li class="bar-sort"> <a href="https://order.mi.com/portal" class="bar-link" data-log_code="3213221" data-stat-id="fe1ad802afe4ac56" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fe1ad802afe4ac56', 'https://order.mi.com/portal', 'pcpid', '3213221']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/55cad219421bee03a801775e7309b920.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/41f858550f42eb1770b97faf219ae215.png"> </div> <p class="bar-text">个人中心</p> </a> </li>        <li class="bar-sort"> <a href="https://support.kefu.mi.com/" class="bar-link" data-log_code="3213222" data-stat-id="fa7be39a3950e951" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fa7be39a3950e951', 'https://support.kefu.mi.com/', 'pcpid', '3213222']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/4f036ae4d45002b2a6fb6756cedebf02.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/5e9f2b1b0da09ac3b3961378284ef2d4.png"> </div> <p class="bar-text">联系客服</p> </a> </li>        <li class="bar-sort bar-l-car"> <a href="https://static.mi.com/cart/" class="bar-link" data-log_code="3213223" data-stat-id="3e0522504d1e0216" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-3e0522504d1e0216', 'https://static.mi.com/cart/', 'pcpid', '3213223']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/d7db56d1d850113f016c95e289e36efa.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/692a6c3b0a93a24f74a29c0f9d68ec71.png">  <span class="bar-car hidden J_barLMum J_homeRightbarCarNum">0</span>  </div> <p class="bar-text">购物车</p> <div class="pop"></div> </a> </li>    </ul></div>
        <a class="bar-totop bar-sort J_barToTop J_barToTopL hidden" href="javascript:;" data-log_code="3212729" data-stat-id="9253b34efc9d9c16" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-9253b34efc9d9c16', 'javascript:', 'pcpid', '3212729']);" style="display: none;">
            <div class="bar-img">
                <img class="original-img" src="//i1.mifile.cn/f/i/2018/home/totop.png">
                <img class="hover-img" src="//i1.mifile.cn/f/i/2018/home/totop_hover.png">
            </div>
            <p class="bar-text">回顶部</p>
        </a>
    </div>
    <div class="bar-s">
        <div id="J_rightbar_s" style="display: block;"> <ul class="bar-top">     <li class="bar-sort bar-sort-qr bar-s-qr"> <a href="#" class="bar-link" data-log_code="3343648" data-stat-id="a7d9b93c4f2027be" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-a7d9b93c4f2027be', '#', 'pcpid', '3343648']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/98a23aae70f25798192693f21c4d4039.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/74c4fcb4475af8308e9a670db9c01fdf.png"> </div> <div class="bar-pop"> <div class="bar-pop-content"> <img src="https://i8.mifile.cn/b2c-mimall-media/93650133310ec1c385487417a472a26c.png" class="bar-pop-qr"> <p class="bar-pop-text">手机扫一扫一分赢好礼</p> </div> <div class="bar-arrow"></div> </div> </a> </li>        <li class="bar-sort"> <a href="https://order.mi.com/portal" class="bar-link" data-log_code="3213221" data-stat-id="fe1ad802afe4ac56" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fe1ad802afe4ac56', 'https://order.mi.com/portal', 'pcpid', '3213221']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/55cad219421bee03a801775e7309b920.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/41f858550f42eb1770b97faf219ae215.png"> </div> <div class="bar-pop"> <div class="bar-arrow"></div> <p class="bar-pop-text">个人中心</p> </div> </a> </li>        <li class="bar-sort"> <a href="https://support.kefu.mi.com/" class="bar-link" data-log_code="3213222" data-stat-id="fa7be39a3950e951" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fa7be39a3950e951', 'https://support.kefu.mi.com/', 'pcpid', '3213222']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/4f036ae4d45002b2a6fb6756cedebf02.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/5e9f2b1b0da09ac3b3961378284ef2d4.png"> </div> <div class="bar-pop"> <div class="bar-arrow"></div> <p class="bar-pop-text">联系客服</p> </div> </a> </li>                                <li class="bar-sort bar-s-car"> <a href="https://static.mi.com/cart/" class="bar-link" data-log_code="3213223" data-stat-id="8ce1e1bece6d529c" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-8ce1e1bece6d529c', 'https://static.mi.com/cart/', 'pcpid', '3213223']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/d7db56d1d850113f016c95e289e36efa.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/692a6c3b0a93a24f74a29c0f9d68ec71.png">  <span class="bar-car hidden J_barSMumicon J_homeRightbarCarNum"></span>  </div> <div class="bar-pop"> <div class="bar-arrow"></div> <p class="bar-pop-text">购物车（<span class="J_barSMum J_homeRightbarCarNum">0</span>）</p> </div> </a> </li>     </ul>  </div>
        <a href="javascript:;" class="bar-totop bar-s-totop bar-link bar-sort J_barToTop J_barToTopS hidden" data-log_code="3212729" data-stat-id="36a986c20e799e67" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-36a986c20e799e67', 'javascript:', 'pcpid', '3212729']);" style="display: block;">
            <div class="bar-img">
                <img class="original-img" src="//i1.mifile.cn/f/i/2018/home/totop.png">
                <img class="hover-img" src="//i1.mifile.cn/f/i/2018/home/totop_hover.png">
            </div>
            <div class="bar-pop">
                <div class="bar-arrow"></div>
                <p class="bar-pop-text">回顶部</p>
            </div>
        </a>
    </div>
</div>
<!-- 响应式大 -->
<!-- <div class="home-right-bar J_homeRightBar">
    <div class="bar-l">
        <div id="J_rightbar_l"><ul class="bar-top">     <li class="bar-sort bar-sort-qr"> <a href="javascript:;" class="bar-link" data-log_code="3343648" data-stat-id="a2da08d794d3c499" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-a2da08d794d3c499', 'javascript:', 'pcpid', '3343648']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/98a23aae70f25798192693f21c4d4039.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/74c4fcb4475af8308e9a670db9c01fdf.png"> </div> <p class="bar-text">手机APP</p> <div class="bar-pop"> <div class="bar-pop-content"> <img src="https://i8.mifile.cn/b2c-mimall-media/93650133310ec1c385487417a472a26c.png" class="bar-pop-qr"> <p class="bar-pop-text">手机扫一扫一分赢好礼</p> </div> <div class="bar-arrow"></div> </div> </a> </li>        <li class="bar-sort"> <a href="https://order.mi.com/portal" class="bar-link" data-log_code="3213221" data-stat-id="fe1ad802afe4ac56" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fe1ad802afe4ac56', 'https://order.mi.com/portal', 'pcpid', '3213221']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/55cad219421bee03a801775e7309b920.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/41f858550f42eb1770b97faf219ae215.png"> </div> <p class="bar-text">个人中心</p> </a> </li>        <li class="bar-sort"> <a href="https://support.kefu.mi.com/" class="bar-link" data-log_code="3213222" data-stat-id="fa7be39a3950e951" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fa7be39a3950e951', 'https://support.kefu.mi.com/', 'pcpid', '3213222']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/4f036ae4d45002b2a6fb6756cedebf02.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/5e9f2b1b0da09ac3b3961378284ef2d4.png"> </div> <p class="bar-text">联系客服</p> </a> </li>        <li class="bar-sort bar-l-car"> <a href="https://static.mi.com/cart/" class="bar-link" data-log_code="3213223" data-stat-id="3e0522504d1e0216" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-3e0522504d1e0216', 'https://static.mi.com/cart/', 'pcpid', '3213223']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/d7db56d1d850113f016c95e289e36efa.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/692a6c3b0a93a24f74a29c0f9d68ec71.png">  <span class="bar-car hidden J_barLMum J_homeRightbarCarNum">0</span>  </div> <p class="bar-text">购物车</p> <div class="pop"></div> </a> </li>    </ul></div>
        <a class="bar-totop bar-sort J_barToTop J_barToTopL hidden" href="javascript:;" data-log_code="3212729" data-stat-id="9253b34efc9d9c16" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-9253b34efc9d9c16', 'javascript:', 'pcpid', '3212729']);">
            <div class="bar-img">
                <img class="original-img" src="//i1.mifile.cn/f/i/2018/home/totop.png">
                <img class="hover-img" src="//i1.mifile.cn/f/i/2018/home/totop_hover.png">
            </div>
            <p class="bar-text">回顶部</p>
        </a>
    </div>
    <div class="bar-s">
        <div id="J_rightbar_s" style="display: none;"> <ul class="bar-top">     <li class="bar-sort bar-sort-qr bar-s-qr"> <a href="#" class="bar-link" data-log_code="3343648" data-stat-id="a7d9b93c4f2027be" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-a7d9b93c4f2027be', '#', 'pcpid', '3343648']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/98a23aae70f25798192693f21c4d4039.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/74c4fcb4475af8308e9a670db9c01fdf.png"> </div> <div class="bar-pop"> <div class="bar-pop-content"> <img src="https://i8.mifile.cn/b2c-mimall-media/93650133310ec1c385487417a472a26c.png" class="bar-pop-qr"> <p class="bar-pop-text">手机扫一扫一分赢好礼</p> </div> <div class="bar-arrow"></div> </div> </a> </li>        <li class="bar-sort"> <a href="https://order.mi.com/portal" class="bar-link" data-log_code="3213221" data-stat-id="fe1ad802afe4ac56" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fe1ad802afe4ac56', 'https://order.mi.com/portal', 'pcpid', '3213221']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/55cad219421bee03a801775e7309b920.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/41f858550f42eb1770b97faf219ae215.png"> </div> <div class="bar-pop"> <div class="bar-arrow"></div> <p class="bar-pop-text">个人中心</p> </div> </a> </li>        <li class="bar-sort"> <a href="https://support.kefu.mi.com/" class="bar-link" data-log_code="3213222" data-stat-id="fa7be39a3950e951" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-fa7be39a3950e951', 'https://support.kefu.mi.com/', 'pcpid', '3213222']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/4f036ae4d45002b2a6fb6756cedebf02.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/5e9f2b1b0da09ac3b3961378284ef2d4.png"> </div> <div class="bar-pop"> <div class="bar-arrow"></div> <p class="bar-pop-text">联系客服</p> </div> </a> </li>                                <li class="bar-sort bar-s-car"> <a href="https://static.mi.com/cart/" class="bar-link" data-log_code="3213223" data-stat-id="8ce1e1bece6d529c" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-8ce1e1bece6d529c', 'https://static.mi.com/cart/', 'pcpid', '3213223']);"> <div class="bar-img"> <img class="original-img" src="https://i8.mifile.cn/b2c-mimall-media/d7db56d1d850113f016c95e289e36efa.png"> <img class="hover-img" src="https://i8.mifile.cn/b2c-mimall-media/692a6c3b0a93a24f74a29c0f9d68ec71.png">  <span class="bar-car hidden J_barSMumicon J_homeRightbarCarNum"></span>  </div> <div class="bar-pop"> <div class="bar-arrow"></div> <p class="bar-pop-text">购物车（<span class="J_barSMum J_homeRightbarCarNum">0</span>）</p> </div> </a> </li>     </ul>  </div>
        <a href="javascript:;" class="bar-totop bar-s-totop bar-link bar-sort J_barToTop J_barToTopS hidden" data-log_code="3212729" data-stat-id="36a986c20e799e67" onclick="_msq.push(['trackEvent', '81190ccc4d52f577-36a986c20e799e67', 'javascript:', 'pcpid', '3212729']);" style="display: none;">
            <div class="bar-img">
                <img class="original-img" src="//i1.mifile.cn/f/i/2018/home/totop.png">
                <img class="hover-img" src="//i1.mifile.cn/f/i/2018/home/totop_hover.png">
            </div>
            <div class="bar-pop">
                <div class="bar-arrow"></div>
                <p class="bar-pop-text">回顶部</p>
            </div>
        </a>
    </div>
</div> -->
<script type="text/javascript" src="/static/jquery-1.8.3.min.js"></script>
<script>
    // ajax结合选项卡实现数据获取
    $(".J_brickTabSwitch").children().mouseover(function(){
        id=$(this).attr('cid');
        $.get('/index',{id:id},function(data){
            $('#homeelec-content').find('ul').children().remove();
            for (var i = 0; i < data.length; i++) {

                let html = '<li class="brick-item brick-item-m"> <div class="figure figure-img"> <a class="exposure" href="/goodsdetail/'+data[i].goods_id+'" data-stat-aid="AA21293" data-stat-pid="2_53_1_299" target="_blank"><img width="150" height="150" src="'+data[i].goods_thums+'" alt=""></a></div> <h3 class="title"> <a href="" data-stat-aid="AA21293" data-stat-pid="2_53_1_299" data-log_code="" target="_blank" >'+data[i].title+'</a></h3>  <p class="desc">'+data[i].goods_descr+'</p>  <p class="price"> <span class="num">'+Math.round(data[i].shop_price)+'</span>元  <del><span class="num">'+Math.round(data[i].market_price)+'</span>元</del></p> <p class="rank"></p>  <div class="flag flag-new">新品</div></li>'

                 $('#homeelec-content').find('ul').append(html);

                // // alert(data[i].goods_thums);
                // li = $('<li class="brick-item brick-item-m"> <div class="figure figure-img"> <a class="exposure" href="" data-stat-aid="AA21293" data-stat-pid="2_53_1_299" target="_blank"></a></div> <h3 class="title"> <a href="" data-stat-aid="AA21293" data-stat-pid="2_53_1_299" data-log_code="" target="_blank" ></a></h3>  <p class="desc"></p>  <p class="price"> <span class="num"></span>元  <del><span class="num"></span>元</del></p> <p class="rank"></p>  <div class="flag flag-new">新品</div></li>');
                // img=$('<img width="150" height="150" src="" alt="">');
                // img.attr('src',data[i].goods_thums);
                // li.find('a:first').attr('href','/goodsdetail/'+data[i].goods_id);
                // li.find('a:first').html(img);

                // li.children('.price').children('.num').html(Math.round(data[i].market_price));
                // li.children('.price').children('del').children('.num').html(Math.round(data[i].shop_price));
                // li.children('.title').children('a').html(data[i].title);
                // $('li>p>del>span').html(data[i].market_price);
                // $('li>p>span').html(data[i].shop_price);
                // $('li>h3>a').html(data[i].title);

                // li.find('p:first').html(data[i].goods_descr);

                // $('#homeelec-content').find('ul').append(li);
            }

        },'json');
    });
</script>

<!-- 轮播图js -->
<script>

var slideList = document.getElementsByName('slideList');
var slidePager = document.getElementsByName('slidePager');
var m=0;
var slideTimer;
function over(obj,k){
  // alert(obj);
  clearInterval(slideTimer);
  for (var i = 0; i < slidePager.length; i++) {
    if (k==i) {
      slidePager[i].style.backgroundColor="red";
    } else{
      slidePager[i].style.backgroundColor="white";
    }
  }
}

function out(obj,k){
  m=--k;
  running();
  slideTimer=setInterval(running,3000);
}


function show(m){
  for (var i = 0; i < slideList.length; i++) {
    if (i==m) {
      slideList[i].style.display="block";
      slideList[i].style.zIndex=50;
      slidePager[i].style.backgroundColor="red";
    }else{
      slideList[i].style.display="none";
      slideList[i].style.zIndex=0;
      slidePager[i].style.backgroundColor="white";
    }
  }
}

// show(1);
function running(){
  m++;
  if (m>=slideList.length) {
    m=0;
  }
  show(m);
}

// 左右按钮轮播
function func(t){
  clearInterval(slideTimer);
  switch(t){
    case '-':
      m=m-2;
      if (m<-1) {
        m=(slideList.length-2);
      }
      break;
    case '+':
      break;
  }

  running();
  slideTimer = setInterval(running,3000);
}

slideTimer = setInterval(running,3000);

</script>
<!-- 广告栏位置 -->
<script>
  var J_homeBanner = $('.J_homeBanner');
   var adslist=<?php echo json_encode($adslist); ?>;//将php数组转换为json格式
   var data = eval(adslist);//将json格式转换为js用的数组
   // console.log(data);
  $.each(J_homeBanner,function(kk,vv){
      J_homeBanner[kk].childNodes[1].childNodes[1].setAttribute('src',data[kk]);//循环赋值
  });
</script>

@endsection

@section('title','前台首页')