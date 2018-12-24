<!-- 通用尾部 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="dns-prefetch" href="//s01.mifile.cn" />
	<link rel="dns-prefetch" href="//c1.mifile.cn" />
	<link rel="dns-prefetch" href="//i3.mifile.cn" />
	<link rel="dns-prefetch" href="//i2.mifile.cn" />
	<link rel="dns-prefetch" href="//i1.mifile.cn" />
	<link rel="dns-prefetch" href="//i8.mifile.cn" />
	<link rel="dns-prefetch" href="//v.mifile.cn" />
	<link rel="dns-prefetch" href="//a.huodong.mi.cn" />

	<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
	<link rel="search" title="mi.com" href="//s1.mi.com/search.xml?v1.0" type="application/opensearchdescription+xml" />
	<meta http-equiv="Cache-Control" content="no-transform " />
	<meta http-equiv="Cache-Control" content="no-siteapp" />
	<link rel="stylesheet" href="static/homes/css/index.min.css" />
	<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
</head>
<body>
  <div class="site-footer"> 
   <div class="container"> 
    <div class="footer-service"> 
     <ul class="list-service clearfix"> 
      <li><a rel="nofollow" href="//www.mi.com/static/homes/fast/" target="_blank"><i class="iconfont"></i>预约维修服务</a></li> 
      <li><a rel="nofollow" href="//www.mi.com/service/exchange#back" target="_blank"><i class="iconfont"></i>7天无理由退货</a></li> 
      <li><a rel="nofollow" href="//www.mi.com/service/exchange#back" target="_blank"><i class="iconfont"></i>15天免费换货</a></li> 
      <li><a rel="nofollow" href="//www.mi.com/service/buy/postage/" target="_blank"><i class="iconfont"></i>满150元包邮</a></li> 
      <li><a rel="nofollow" href="//www.mi.com/static/homes/maintainlocation/" target="_blank"><i class="iconfont"></i>520余家售后网点</a></li> 
     </ul> 
    </div> 
    <div class="footer-links clearfix"> 


  @foreach($showHelp as $helpTitle)
     <dl class="col-links col-links-first"> 
      <dt>
       {{$helpTitle['name']}}
      </dt> 
      @foreach($helpTitle['children'] as $subItem)
      <dd>
       <a rel="nofollow" href="//www.mi.com/service/account/register/" target="_blank">{{$subItem['name']}}</a>
      </dd> 
      @endforeach
     </dl> 
  @endforeach




    
     <div class="col-contact"> 
      <p class="phone">400-100-5678</p> 
      <p> 周一至周日 8:00-18:00<br />（仅收市话费） </p> 
      <a rel="nofollow" class="btn btn-line-primary btn-small" href="//support.kefu.mi.com/" target="_blank"><i class="iconfont"></i> 联系客服</a> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="site-info"> 
   <div class="container"> 
    <div class="logo ir">
     小米官网
    </div> 
    <div class="info-text"> 
     
      <p class="sites">
      @foreach($showLinks as $friendLinks)
        <a rel="nofollow" href="{{$friendLinks->url}}" target="_blank">{{$friendLinks->name}}</a><span class="sep">|</span>
      @endforeach
        <a rel="nofollow" href="/applylink" data-toggle="modal">申请链接</a> 
      </p> 


     <p>&copy; <a href=" " target="_blank" title="mi.com">mi.com</a> 京ICP证110507号 <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">京ICP备10046444号</a> <a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank">京公网安备11010802020134号 </a> <a href="//www.mi.com/culture-license/" target="_blank">京网文[2017]1530-131号</a> <br /> <a href="//www.mi.com/medical/record/" target="_blank">（京）网械平台备字（2018）第00005号 </a> <a href="//www.mi.com/medical/qualification/" target="_blank">互联网药品信息服务资格证 (京) -非经营性-2014-0090 </a> <a href="//www.mi.com/business-license/" target="_blank">营业执照</a> <a href="//www.mi.com/medical/list/" target="_blank">医疗器械公告</a> <br />违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p> 
    </div> 
    <div class="info-links"> 
     <a rel="nofollow" href="//privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn" target="_blank"><img rel="nofollow" src="//i1.mifile.cn/f/i/17/site/truste.png" alt="TRUSTe Privacy Certification" /></a> 
     <a rel="nofollow" href="//search.szfw.org/cert/l/CX20120926001783002010" target="_blank"><img rel="nofollow" src="//s01.mifile.cn/i/v-logo-2.png" alt="诚信网站" /></a> 
     <a rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082" target="_blank"><img rel="nofollow" src="//s01.mifile.cn/i/v-logo-1.png" alt="可信网站" /></a> 
     <a rel="nofollow" href="http://www.315online.com.cn/member/315140007.html" target="_blank"><img rel="nofollow" src="//s01.mifile.cn/i/v-logo-3.png" alt="网上交易保障中心" /></a> 
     <a rel="nofollow" href="https://www.mi.com/service/buy/commitment/" target="_blank"><img rel="nofollow" src="//i8.mifile.cn/b2c-mimall-media/ba10428a4f9495ac310fd0b5e0cf8370.png" alt="诚信经营 放心消费" /></a> 
    </div> 
   </div> 
   <div class="slogan ir">
    探索黑科技，小米为发烧而生
   </div> 
  </div> 
  <div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520"> 
   <div class="modal-hd"> 
    <a class="close" data-dismiss="modal"><i class="iconfont"></i></a> 
    <span class="title">小米手机官方微信二维码</span> 
   </div> 
   <div class="modal-bd"> 
    <img alt="" src="//i1.mifile.cn/f/i/17/site/weixin.jpg" width="680" height="340" /> 
   </div> 
  </div> 
  <!-- .modal-weixin END --> 
  <div class="modal modal-hide modal-bigtap-queue" id="J_bigtapQueue"> 
   <div class="modal-body"> 
    <span class="close" data-dismiss="modal" aria-hidden="true">退出排队</span> 
    <div class="con"> 
     <div class="title">
      正在排队，请稍候喔！
     </div> 
     <div class="queue-tip-box"> 
      <p class="queue-tip">当前人数较多，请您耐心等待，排队期间请不要关闭页面。</p> 
      <p class="queue-tip">时常来官网看看，最新产品和活动信息都会在这里发布。</p> 
      <p class="queue-tip">下载小米商城 App 玩玩吧！产品开售信息抢先知道。</p> 
      <p class="queue-tip">发现了让你眼前一亮的小米产品，别忘了分享给朋友！</p> 
      <p class="queue-tip">产品开售前会有预售信息，关注官网首页就不会错过。</p> 
     </div> 
    </div> 
    <div class="queue-posters"> 
     <div class="poster poster-3"></div> 
     <div class="poster poster-2"></div> 
     <div class="poster poster-1"></div> 
     <div class="poster poster-4"></div> 
     <div class="poster poster-5"></div> 
    </div> 
   </div> 
  </div> 
  <!-- .xm-dm-queue END --> 
  <div id="J_bigtapError" class="modal modal-hide modal-bigtap-error"> 
   <span class="close" data-dismiss="modal" aria-hidden="true"><i class="iconfont"></i></span> 
   <div class="modal-body"> 
    <h3>抱歉，网络拥堵无法连接服务器</h3> 
    <p class="error-tip">由于访问人数太多导致服务器压力山大，请您稍后再重试。</p> 
    <p> <a class="btn btn-primary" id="J_bigtapRetry">重试</a> </p> 
   </div> 
  </div> 
  <div id="J_bigtapModeBox" class="modal fade modal-hide modal-bigtap-mode"> 
   <span class="close" data-dismiss="modal"><i class="iconfont"></i></span> 
   <div class="modal-body"> 
    <h3 class="title">为防黄牛，请您输入下面的验证码</h3> 
    <p class="desc">在防黄牛的路上，我们一直在努力，也知道做的还不够。<br /> 所以，这次劳烦您多输一次验证码，我们一起防黄牛。 </p> 
    <div class="mode-loading" id="J_bigtapModeLoading"> 
     <img src="//i1.mifile.cn/f/i/2014/cn/loading.gif" alt="" width="32" height="32" /> 
     <a id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);">网络错误，点击重新获取验证码！</a> 
    </div> 
    <div class="mode-action hide" id="J_bigtapModeAction"> 
     <div class="mode-con" id="J_bigtapModeContent"></div> 
     <input type="text" name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码" /> 
     <p class="tip" id="J_bigtapModeTip"></p> 
     <a class="btn  btn-gray" id="J_bigtapModeSubmit">确认</a> 
    </div> 
   </div> 
  </div> 
  <!-- .xm-dm-error END --> 
  <div id="J_modal-globalSites" class="modal fade modal-hide modal-globalSites" data-width="640"> 
   <div class="modal-hd"> 
    <a class="close" data-dismiss="modal"><i class="iconfont"></i></a> 
    <span class="title">Select Region</span> 
   </div> 
   <div class="modal-bd"> 
    <h3>Welcome to Mi.com</h3> 
    <p class="modal-globalSites-tips">Please select your country or region</p> 
    <p class="modal-globalSites-links clearfix"> <a href="//www.mi.com/index.html">Mainland China</a> <a href="//www.mi.com/hk/">Hong Kong</a> <a href="//www.mi.com/tw/">Taiwan</a> <a href="//www.mi.com/sg/">Singapore</a> <a href="//www.mi.com/my/">Malaysia</a> <a href="//www.mi.com/ph/">Philippines</a> <a href="//www.mi.com/in/">India</a> <a href="//www.mi.com/id/">Indonesia</a> <a href="//www.mi.com/global/">Global Home</a> <a href="//www.mi.com/mena/">MENA</a> <a href="//www.mi.com/pl/">Poland</a> <a href="//www.mi.com/ua/">Ukraine</a> <a href="//www.mi.com/ru/">Russia</a> <a href="//www.mi.com/vn/">Vietnam</a> <a href="//www.mi.com/mx/">Mexico</a> <a href="//www.mi.com/kr/">Korea</a> <a href="//www.mi.com/eg/">Egypt</a> <a href="//www.mi.com/th/">Thailand</a> <a href="//www.mi.com/es/">Spain</a> <a href="//www.mi.com/us/">United States</a> <a href="//www.mi.com/it/">Italy</a> <a href="//www.mi.com/fr/index.html">France</a> <a href="//www.mi.com/bd/">Bangladesh</a> <a href="//www.mi.com/uk/">United Kingdom</a> <a href="//www.mi.com/cl/">Chile</a> <a href="//www.mi.com/np/">Nepal</a> </p> 
   </div> 
  </div>
</body>
<script src="static/homes/js/base.min.js"></script>
<script>
(function() {
    MI.namespace('GLOBAL_CONFIG');
    MI.GLOBAL_CONFIG = {
        orderSite: '//order.mi.com',
        orderSSLSite: 'https://order.mi.com',
        wwwSite: '//www.mi.com',
        cartSite: '//cart.mi.com',
        itemSite: '//item.mi.com',
        assetsSite: '//s01.mifile.cn',
        listSite: '//list.mi.com',
        searchSite: '//search.mi.com',
        mySite: '//my.mi.com',
        damiaoSite: '//tp.hd.mi.com/',
        damiaoGoodsId:["2160400006","2160400007","2162100004","2162800010","2155300001","2155300002","2163500025","2163500026","2163500027","2164200021","2142400036","2170800008","2171000055","2171500039","2171600005","1171800032","1171800031","1171800030","1171800035","1171800034","1171800033","2171500038","2171800016","2171500037","2171900024"],
        logoutUrl: '//order.mi.com/site/logout',
        staticSite: '//static.mi.com',
        quickLoginUrl: 'https://account.xiaomi.com/pass/static/homes/login.html'
    };
    MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + '/user/order';
    MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;
    MI.setLoginInfo.init(MI.GLOBAL_CONFIG);
    MI.miniCart.init();
    MI.updateMiniCart();
})();
</script>
<!-- <script src="static/homes/js/xmsg_ti.js"></script> -->
<script>
// var _msq = _msq || [];
// _msq.push(['setDomainId', 100]);
// _msq.push(['trackPageView']);
// (function() {
//     var ms = document.createElement('script');
//     ms.type = 'text/javascript';
//     ms.async = true;
//     ms.src = '//s1.mi.com/stat/18/xmst.js';
//     var s = document.getElementsByTagName('script')[0];
//     s.parentNode.insertBefore(ms, s);
// })();
</script>
</html>