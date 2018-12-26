账号安全页面
<!DOCTYPE html>
<!-- saved from url=(0104)https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&userId=1337447143 -->
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <title>小米帐号 -帐号安全</title> 
  <script>
  var userPhoneList=[];
  
  userPhoneList.push({address:"188******25",key:"BA2641602DB2D3D0"});
  
</script> 
  <link type="text/css" rel="stylesheet" href="/static/homes/security/reset.css" /> 
  <link type="text/css" rel="stylesheet" href="/static/homes/security/layout.css" /> 
  <link type="text/css" rel="stylesheet" href="/static/homes/security/modacctip.css" /> 
  <style>
      html{ overflow-y:scroll;}
    </style> 
  <style type="text/css">
.score_1{color:rgb(255,0,0)}
.score_2{color:rgb(255,102,0)}
.score_3{color:rgb(255,204,0)}
.score_4{color:rgb(51,204,0)}
.score_bg_1{background-color:rgb(255,0,0)}
.score_bg_2{background-color:rgb(255,102,0)}
.score_bg_3{background-color:rgb(255,204,0)}
.score_bg_4{background-color:rgb(51,204,0)}
.score_outer_1 em{color:rgb(255,0,0)}
.score_outer_2 em{color:rgb(255,102,0)}
.score_outer_3 em{color:rgb(255,204,0)}
.score_outer_4 em{color:rgb(51,204,0)}
/*禁用修改头像功能*/
.na-img-area:hover .na-edit{
	display:none;
}
.na-img-area{cursor:default}
/*叹号垂直居中*/
.error-tip{
	line-height: 1.0;
}
/*米号可复制*/
.na-num{
	position: relative;
	z-index: 10;
}
/*统一颜色*/
.color-active{
	color:rgb(255,102,0)!important;
}
/*tip additionals*/
/*
.tip, .mod_acc_tip{
	position:fixed;
	top:50%;
	left:50%;
	margin-left:-212px;
	margin-top: -266px;
	z-index:20;
}
*/
.tip_h295{
	margin-top: -152px;
}
.tip_h424{
	margin-top: -218px;
}
.tip_h436{
	margin-top: -224px;
}
/*动态select的布局*/
#popSetMibao .i_currentselected{
	width: auto !important;
}
#popSetMibao .i_selectoption{
	width: 100% !important;
}
/*#popSetMibao .set_qst li{
	width: 190px;
}
#popSetMibao .set_qst label{
    height: 22px;
    width: 185px;
}
#popAnswerMibao .set_qst label{
	height: 22px;
	width:175px;
	display: block;
}
#popAnswerMibao .set_qst li{
	height: 60px;
}*/
/*显示和隐藏备用手机*/
#popManageTokenStatus dd .no_fb_mobile{	
	display: block;
}
#popManageTokenStatus dd .fb_mobile{
	display: none;
}
#popManageTokenStatus .has_fb_mobile .no_fb_mobile{
	display: none;
}
#popManageTokenStatus .has_fb_mobile .fb_mobile{
	display: block;
}
/*popup的遮层*/
.popup_mask .mod_wrap{
    height: 100%;
    overflow-y: auto;
    position: absolute;
    width: 100%;
    z-index: 1;
}
.popup_mask .mod_acc_tip{
	display:none;
	position:absolute;
	left:50%;
	margin-left:-206px;
	top:50%;
	margin-top:-187px;
	_top: 500px;
}
/*某些要在前面的对话框*/
.callable{
	z-index: 200;
}
/*vertically center*/
#popSetMibao, #popAnswerMibao, #popManageTokenStatus, #popManageTokenKeys{
	top:0;
	margin-top: 0;
}
/*下拉框限高*/
.i_selectoption {
    height: 150px;
}
/*已完成安装*/
#popManageTokenDownload .tip_btns .installed{
	display:inline-block;
}
#popManageTokenDownload .tip_btns .goback{
	display:none;
}
#popManageTokenDownload .token_enabled .installed{
	display:none;
}
#popManageTokenDownload .token_enabled .goback{
	display:inline-block;
}
/*IE6*/
#popUpdatePassword .capt_box{
	display: none;
}
/*sms not sent*/
#sms-unsent{
	width:100%;
	height:100%;
	position:fixed;
	_position:absolute;
	left:0;
	top:0;
	z-index:10000;
	display:none;
}
#sms-unsent .bg{
	width:100%;
	height:100%;
	position:absolute;
	left:0;
	top:0;
	z-index:-1;
	filter:alpha(opacity=70);
	-moz-opacity:.7;
	opacity:.7;
	background-color:#aaa;
}
#sms-unsent .msg-box{
	width:560px;
	height:200px;
	position:absolute;
	left:50%;
	top:50%;
	margin-left:-280px;
	margin-top:-100px;
	background-color:#fff;
}
#sms-unsent .msg-box .text{
	position:absolute;
	text-align:center;
	top:56px;
	font-size:18px;
	color:#585858;
	width:500px;
}
#sms-unsent .msg-box .button{
	position:absolute;
	text-align:center;
	top:100px;
	width:120px;
	height:40px;
	color:#333;
	border:1px solid #dadada;
	left:50%;
	margin-left:-61px;
	cursor:pointer;
	line-height:40px;
	font-size:16px;
	-webkit-border-radius:1px;
	-moz-border-radius:1px;
	border-radius:1px;
}
/*干掉该死的IE6的遮罩问题*/
#loadingMask .bkc{
	_height:2000px;
}
/*wap*/
.bugfix_ie6,
.n-account-area-box{ display:block;}	
/*hide default options*/
.def-opt{
	display: none;
}
#popEnterNewPhone{
	margin-top:-250px;
}
.del-account-deny h4{
  font-size:14px;
  font-weight:normal;
}
.del-account-deny-content{
  list-style:disc;
  font-fize:14px;
}
.del-account-deny-content  li{
  list-style:disc;
  font-fize:14px;
}
</style> 
  <style type="text/css" media="print">
	.n-logo-area .logout,
	.n-account-area,
	.n-frame,
	.n-main-nav,
	.n-footer{display : none; }
</style> 
 </head> 
 <body class="zh_CN"> 
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
  <div class="popup_mask" style="display: none;" id="loadingMask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap loadingmask"> 
   </div> 
  </div> 
  <div class="wrapper blockimportant"> 
   <div class="wrap"> 
    <div class="layout bugfix_ie6 dis_none"> 
     <div class="n-logo-area clearfix"> 
      <a href="https://account.xiaomi.com/" class="fl-l"> <img src="/static/homes/security/n-logo.png"  /> </a> 
      <a id="logoutLink" class="fl-r logout" href="/login"> 退出 </a> 
      <script>
	  setTimeout(function(){
		  if(location.hostname === 'account.xiaomi.com'){return;}
		  var link = document.getElementById('logoutLink');
		  if(link){
			  var href = link.getAttribute('href');
			  var a = document.createElement('a');
			  a.setAttribute('href','/');
			  var homeURL = a.href;
			  href = href.replace(/\&callback\=.*$/, '&callback=' + homeURL);
			  link.setAttribute('href', href);
			  a = null;
		  }
	  },100);
	  </script> 
     </div> 
     <!--头像 名字--> 
     <div class="n-account-area-box"> 
      <div class="n-account-area clearfix"> 
       <div class="na-info"> 
        <p class="na-name">{{$user->name}}</p> 
        <p class="na-num">{{$user->miid}}</p> 
       </div> 
       <div class="na-img-area fl-l"> 
        <!--na-img-bg-area不能插入任何子元素--> 
        <div class="na-img-bg-area">
         <img src="{{$user->headpic}}" />
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <div id="sms-unsent"> 
     <div class="bg"></div> 
     <div class="msg-box"> 
      <div class="text">
       短信发送失败，请稍后再试！
      </div> 
      <div class="button">
       确定
      </div> 
     </div> 
    </div> 
    <div class="layout"> 
     <div class="n-main-nav clearfix"> 
      <ul class="c_b"> 
       <li class="current"> <a href="/usersecret" title="帐号安全" data-action="security">帐号安全</a> <em class="n-nav-corner"></em> </li> 
       <li> <a href="/userinfo" title="个人信息" >个人信息</a> <em class="n-nav-corner"></em> </li> 
       <li> <a href="https://account.xiaomi.com/pass/auth/sns/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="绑定授权" data-action="sns">绑定授权</a> <em class="n-nav-corner"></em> </li> 
       <li> <a href="https://account.xiaomi.com/pass/auth/services/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="小米服务" data-action="services">小米服务</a> <em class="n-nav-corner"></em> </li> 
      </ul> 
     </div> 
     <div class="n-frame"> 
      <div class="title-item title_security_wap security_level"> 
       <h4 class="title-big dis-inb">安全等级</h4> 
       <em class="space6"></em> 
       <p class="font-normal dis-inb wap_colb2"><em class="light-num" style="padding:0"> <span class="score_4">100</span> </em>分</p> 
       <div class="slider-area dis-inb vert-m" style="width:360px;"> 
        <div class="slider-bar-bg"></div> 
        <div class="slider-bar-line score_bg_4" style="width:100%;"></div> 
        <em class="drag-ico" style="left:100%"></em> 
       </div> 
       <p class="font-normal dis-inb security_level_txt"> <span class="score_4">太棒了，风险已降至最低</span> </p> 
      </div> 
      <div class="title-item title_security_wap dis_none_pc"> 
       <h4 class="title-big dis-inb">基本资料</h4> 
      </div> 
      <ul class="device-detail-area"> 
       <li id="changePassword" class="click-row"> 
        <div class="font-img-item clearfix"> 
         <em class="fi-ico fi-ico-lock"></em> 
         <p class="title-normal dis-inb">帐号密码</p> 
         <p class="font-default"> 用于保护帐号信息和登录安全 </p> 
         <span class="title-normal wap-desc dis_none_pc"> 修改 </span> 
         <i class="arrow_r"></i> 
        </div> 
        <div class="ada-btn-area" > 
         <a href="/passwordedit" class="n-btn"> 修改 </a> 
        </div> </li> 
       
       <li id="changeMobile" class="click-row"> 
        <div class="font-img-item clearfix"> 
         <em class="fi-ico fi-ico-phone"></em> 
         <div class="item_column"> 
          <p class="title-normal dis-inb">安全手机</p> 
          <span class="title-normal wap-desc user_address"> <span class="phone-bind-adress" data-key="BA2641602DB2D3D0">{{$user->phone}}</span><span class="ph_list_sum phone-list-sum" data-title="等&lt;span class='ff6'&gt;{phsum}&lt;/span&gt;个"></span> </span> 
         </div> 
         <span class="title-normal wap-desc"> <span class="dis_none_pc">修改</span> </span> 
         <p class="font-default">安全手机可以用于登录小米帐号，重置密码或其他安全验证</p> 
         <i class="arrow_r"></i> 
        </div> 
        <div class="ada-btn-area" id="btnUpdatePhone"> 
         <!--<a class="n-btn btnBindMobile" __href="/pass/bindAddress?userId=1337447143&type=PH&replace=false" class="n-btn" data-mode="add">
                绑定
              </a>--> 
         <a class="n-btn btnChangeMobile" __href="/pass/bindUserAddress?userId=1337447143&amp;type=PH" data-mode="update"> 修改 </a> 
        </div> </li> 
       <li id="setMibao" class="click-row"> 
        <div class="font-img-item clearfix"> 
         <em class="fi-ico fi-ico-secret"></em> 
         <p class="title-normal dis-inb">密保问题</p> 
         <p class="font-default">密保问题可用于重置密码和其他安全验证</p> 
         <span class="title-normal wap-desc dis_none_pc">修改</span> 
         <i class="arrow_r"></i> 
        </div> 
        <div class="ada-btn-area" > 
         <a  href="/usermibao" class="n-btn">修改</a> 
        </div> </li> 

        <!-- 密保修改弹出 -->

        <!-- 结束 -->


      </ul> 
      <!--
        <div class="title-item">
          <h4 class="title-big dis-inb">
			  	
					 
		  </h4>
        </div>
		--> 
     </div> 
     <div class="n-frame device_recommend" style="display:none"> 
      <div class="title-item title_security_wap"> 
       <h4 class="title-big dis-inb">推荐使用</h4> 
      </div> 
      <ul class="device-detail-area"> 
       <li class="click-row"> 
        <div class="font-img-item clearfix"> 
         <em class="fi-ico fi-ico-token"></em> 
         <p class="title-normal dis-inb">小米安全令牌</p> 
         <p class="font-default">在非信任设备上登录需要二次验证，防止他人恶意登录</p> 
         <span class="title-normal wap-desc color-active dis_none_pc">开启</span> 
         <i class="arrow_r"></i> 
        </div> 
        <div class="ada-btn-area" id="btnManageToken"> 
         <a __href="/pass/2StepLogin/explain?userId=1337447143" class="n-btn">开启</a> 
        </div> </li> 
      </ul> 
     </div> 
     <div class="n-frame dis_none_pc"> 
      <div class="title-item title_security_wap"> 
       <h4 class="title-big dis-inb">其他</h4> 
      </div> 
      <ul class="device-detail-area"> 
       <li> 
        <div class="font-img-item clearfix"> 
         <em class="fi-ico fi-ico-info"></em> 
         <p class="title-normal dis-inb">修改个人资料</p> 
         <span class="title-normal wap-desc"></span> 
         <i class="arrow_r"></i> 
         <a class="pos_opc nav-item" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" data-action="profile">修改个人资料</a> 
        </div> </li> 
       <li> 
        <div class="font-img-item clearfix"> 
         <em class="fi-ico fi-ico-auth"></em> 
         <p class="title-normal dis-inb">绑定授权</p> 
         <span class="title-normal wap-desc"></span> 
         <i class="arrow_r"></i> 
         <a class="pos_opc nav-item" href="https://account.xiaomi.com/pass/auth/sns/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" data-action="sns">绑定授权</a> 
        </div> </li> 
      </ul> 
     </div> 
     <div class="logout_wap"> 
      <a class="btnadpt bg_white" href="https://account.xiaomi.com/pass/logout?userId=1337447143&amp;callback=https://account.xiaomi.com">退出</a> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="n-footer"> 
   <div class="nf-link-area clearfix"> 
    <ul class="lang-select-list"> 
     <li><a class="lang-select-li current" href="javascript:void(0)" data-lang="zh_CN">简体</a>|</li> 
     <li><a class="lang-select-li" href="javascript:void(0)" data-lang="zh_TW">繁体</a>|</li> 
     <li><a class="lang-select-li" href="javascript:void(0)" data-lang="en">English</a></li> |
     <li><a class="a_critical" href="https:///static.account.xiaomi.com/html/faq/faqList.html" target="_blank"><em></em>常见问题</a></li> 
    </ul> 
   </div> 
   <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a class="beianlink beian-record-link" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134"><span><img src="/static/homes/security/ghs.png" /></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p> 
  </div> 
  <style type="text/css">
  

    
</style> 
  <script src="/static/homes/security/jquery-1.8.3.min.js.下载"></script> 
  <script src="/static/homes/security/placeholder.js.下载"></script> 
  <script>
$(function(){
  /*==========初始化外部链接部分==========*/

    var URL_DATA={
      agreement:"https:///static.account.xiaomi.com/html/agreement/account/cn.html",
      privacy:"https://www.mi.com/about/privacy/",
      login:"/pass/serviceLogin?"
    }
    function checkInspectLink(){
      $(".inspect_link").each(function(){
        var item=$(this);
        if( !item.data("inited-inspect") ){
          item.attr("title",item.text());
          item.attr("target","_blank");
          item.data("inited-inspect","true");
          initOuterLink(this);
        }
      });
      setTimeout(function(){
        checkInspectLink();
      },1000)
    }
    function initOuterLink(obj){
      var clss=(obj.className+"").split(/\s+/);
      var tmp,i=0,len=clss.length;
      for(;i<len;i++){
        tmp=(clss[i]+"").replace(/_link$/,"");
        if(tmp in URL_DATA){
          $(obj).attr("href",URL_DATA[tmp]);
          break;
        }
      }
    }
    checkInspectLink();

  //页脚初始化部分

    /*if($(window).innerWidth() <= 640 && (!/AppName\/[0-9\.]+$/.test(navigator.userAgent) || navigator.standalone)){
      $('.n-footer').show();
    }*/

    
    //变量
    var MSG={
      close:"关闭"
    };
  //语言部分
  var locale="zh_CN";
  if(locale!=='zh_CN' && locale!=='zh_TW' && locale!=='en'){
    locale=locale.indexOf("zh")!==-1?"zh_TW":"en";
  }
  var list=$(".lang-select-li");
  list.each(function(index,item){
    if($(this).data("lang")===locale){
      $(this).addClass("current");
    }
  });
  list.bind("click",function(){
    var selectLocale=$(this).data("lang");
    var params=location.search.substring(1).split("&");
    if(locale!==selectLocale){
      for(var i=0;i<params.length;i++){
        if(params[i].indexOf("_locale=")===0){
          params.splice(i,1);i--;
        }
      }
      params.push("_locale="+selectLocale);
      location.href=("//"+location.host+location.pathname+"?"+params.join("&")+location.hash);
    }
  });
  /*不知道是什么功能部分
  if($(window).innerWidth() <= 640 && (!/AppName\/[0-9\.]+$/.test(navigator.userAgent) || navigator.standalone)){
    $('.n-footer').show();
  }*/
  /*备案链接上的图片*/
  var recordLink=$('.beian-record-link');
  var beianRecordLink="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134";
  var beianRecordImg="https://account.xiaomi.com//static/res/9204d06/account-/static/respassport/acc-2014/img/ghs.png";
  var default1px_gif="data:image/gif;base64,R0lGODlhAQABAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAABAAEAAAICVAEAOw==";
  if(recordLink.length && beianRecordLink){
    recordLink[0].href=beianRecordLink;
  }
  var _img=new Image();
  var _span=$('.beian-record-link span');
  if(_span){
    _img.onload=_img.oncomplete=function(){
      _img._loaded=true;
      _span.append(_img);
    }
    setTimeout(function(){
      if(!_img._loaded && default1px_gif){
        _img.src=default1px_gif;
      }
    },1000);
    _img.src=beianRecordImg;
  }

  /*url 转义*/
  function  encodeURLparam(links,param){
    $(links).each(function(index,item){
      if((item.search+"").indexOf(param)!==-1){
        //分解参数，encode value
        var params=item.search.substring(1).split("&");
        for(var i=0;i<params.length;i++){

          if( (params[i]+"").indexOf(param+"=")===0 ){

            params.splice(i,1, param+"="+encodeURIComponent( (params[i]+"").substring(param.length+1) ) );

            item.search=params.join("&")
          }

        }
      }
    })
  }
  encodeURLparam(document.links,'externalId')
});
var JSP_VAR={
  deviceType:"PC",
  dataCenter:"c3",
  locale:"zh_CN",
  region:"CN",
  callback:"",
  sid:"",
  hidden:"",
  "_sign":"",
  privacyLink:'https://www.mi.com/about/privacy/',
  userId:"1337447143",
  cancel:"取消",
  cUserId:"zOOtzY_fXKNaH5pfpNnSIT_4PbI"
};
</script> 
  <style>
  .btn-action-go{ display:none;}
</style> 
  <script>
/*MIUI  客户端和  authSDK 客户端*/
  
  var webviewDisableTip="";
  var closeStatus="";
  var webviewDisableTip2="";
  var webviewDisableBtn="";
  var webviewCopyLink="";
  function isWebview(){
    var result=false;
    var ua=navigator.userAgent;
    var authSDK=/passport\/oauthsdk\/([\d.]+)/i.test(ua)? parseFloat(RegExp.$1) : false ;
    var miuiClient=/passport\/oauthmiui/i.test(ua);
    var weixinClient=/micromessenger/i.test(ua);
    var miAccountClient=/passportsdk\/notificationwebview/i.test(ua);
    var miuiYellowPageClient=/miuiyellowpage/i.test(ua);
    var miotClient=/MIOT/i.test(ua);
    var mishopClient=/Shop/i.test(ua);
    if(authSDK || miuiClient || weixinClient || miAccountClient || miuiYellowPageClient||miotClient||mishopClient){
      result={
        authSDK:authSDK,
        miuiClient:miuiClient,
        weixinClient:weixinClient,
        miAccountClient:miAccountClient,
        miuiYellowPageClient:miuiYellowPageClient,
        miotClient:miotClient,
        mishopClient:mishopClient,
      }
    }
    return result;
  }
  
  var webviewDisabled= "";
  var popContainer= '<div style="display:block;" class="popup_mask pchide sysBrowserTip">'+
                      '<div class="bkc"></div>'+
                      '<div class="mod_wrap">'+
                        '<div style="display:block;" class="mod_acc_tip">'+
                          '<div class="wap_frame">'+
                            '<div class="icon_around"></div>'+
                            '<div class="around_txt">'+
                              '<h4>'+webviewDisableTip+'</h4>'+
                            '</div>'+
                            '<div class="retrieve_address_panel retrieve-address">'+
                              '<p>'+webviewDisableTip2+'</p><p class="word_break" id="tocopy"></p>'+
                            '</div>'+
                            '<div class="wap_btn_abs">'+
                              '<div class="retrieve-action">'+
                              '</div>'+
                              '<a class="btn_tip btn_back btn-action-go" href="javascript:void(0)">'+webviewDisableBtn+'</a>'+
                            '</div>'+
                          '</div>'+
                        '</div>'+
                      '</div>'+
                      
                    '</div>';
  if(isWebview()){
    $(".n-footer").hide();
    //$(".n-logo-area").hide();
    if (!isWebview().weixinClient) {
     $(".logout_wap").hide(); 
    }
  }
  function getCookie(key) {
    var cookie = document.cookie;
    var cookieArray = cookie.split(';');
    var val = "";
    for (var i = 0; i < cookieArray.length; i++) {
        if (trim(cookieArray[i]).substr(0, key.length) == key) {
      val = trim(cookieArray[i]).substr(key.length + 1);
      break;
        }
    }
    return unescape(val);
  };
  function trim(str){
    return (str+"").replace(/^\s+/,"").replace(/\s+$/,"");
  }
  if (isWebview().miAccountClient && !!getCookie('NativeUserAgent')) {
    $('body').addClass('sys_wv');
  }

  if(webviewDisabled==='true'){
    $('body').append(popContainer);
  }
  if(!isWebview() && closeStatus==='true'){
    $('.btn-action-go').css({'display':'block'});
  }
  var arrQuickBrowserSupport=['MiFiJsinternal','MiFiJsBridge'];
  var retrieveAction=$('.retrieve-action');
  if(!!window.MiFiJsBridge && !!window.MiFiJsinternal){
    retrieveAction.append('<a class="btn_tip btn_back go-browser" href="javascript:void(0)">打开浏览器继续</a>');
    $('.btn-action-go').hide();
    $('.retrieve-address').hide();
  }else{
    retrieveAction.append('<a class="btn_tip btn_back" href="javascript:void(0)" id="copyLinkBtn">'+webviewCopyLink+'</a>');
  }
  $('.btn-action-go').bind('click',function(){
    $(this).closest('.popup_mask').hide();
    $(".wrapper").removeClass("hidewap");
    $(document.body).css({
	    'overflow-y': 'auto',"height":"auto"
	  });
    return false;
  });
  if($('.sysBrowserTip:visible').length){
	$(".wrapper").addClass("hidewap");
	  $(document.body).css({
	    "height":"100%",'overflow-y': 'hidden'
	  });
	}
</script> 
  <!--TIPS s--> 
  <!-- 修改|设置密码 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div id="popUpdatePassword" class="mod_acc_tip" style="display:none;"> 
     <div class="mod_tip_hd"> 
      <h4>修改密码</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="modify_pwd"> 
       <dl> 
        <dt>
         原密码
        </dt> 
        <dd class="grpOldPass"> 
         <div class="inputbg"> 
          <label class="labelbox pwd_panel c_b"> <input class="oldPass hidePwd" type="password" name="password" placeholder="输入原密码" autocomplete="off" disableautocomplete="" /> <input type="text" name="password" placeholder="输入原密码" _placeheld="" autocomplete="off" class="visiablePwd dis_none_pc" style="display:none" /> 
           <div class="eye_panel pwd-visiable dis_none_pc"> 
            <i class="eye pwd-eye"> 
             <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"> 
              <path class="eye_outer" d="M0 8 C6 0,14 0,20 8, 14 16,6 16, 0 8 z"></path> 
              <circle class="eye_inner" cx="10" cy="8" r="3"></circle> 
             </svg> </i> 
           </div> </label> 
         </div> 
         <div class="err_tip error-con" _text="">
          <em class="icon_error"></em>
          <span></span>
         </div> 
        </dd> 
        <dt>
         新密码
        </dt> 
        <dd class="grpNewPass"> 
         <div class="inputbg"> 
          <label class="labelbox pwd_panel c_b"> <input class="newPass hidePwd set-password" type="password" name="repassword" data-error=".error-password" placeholder="输入新密码" autocomplete="off" disableautocomplete="" /> <input type="text" name="repassword" data-error=".error-password" placeholder="输入新密码" _placeheld="" autocomplete="off" class="visiablePwd dis_none_pc" style="display:none" /> 
           <div class="eye_panel pwd-visiable dis_none_pc"> 
            <i class="eye pwd-eye"> 
             <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"> 
              <path class="eye_outer" d="M0 8 C6 0,14 0,20 8, 14 16,6 16, 0 8 z"></path> 
              <circle class="eye_inner" cx="10" cy="8" r="3"></circle> 
             </svg> </i> 
           </div> </label> 
          <label class="labelbox pwd_panel c_b"> <input class="newPass2 hidePwd" type="password" name="repassword2" data-repeat=".set-password" data-error=".error-password" placeholder="重复新密码" autocomplete="off" disableautocomplete="" /> <input type="text" name="repassword2" data-repeat=".set-password" data-error=".error-password" placeholder="重复新密码" _placeheld="" autocomplete="off" class="visiablePwd dis_none_pc" style="display:none" /> 
           <div class="eye_panel pwd-visiable dis_none_pc"> 
            <i class="eye pwd-eye"> 
             <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"> 
              <path class="eye_outer" d="M0 8 C6 0,14 0,20 8, 14 16,6 16, 0 8 z"></path> 
              <circle class="eye_inner" cx="10" cy="8" r="3"></circle> 
             </svg> </i> 
           </div> </label> 
         </div> 
         <div class="err_tip error-con error-password txt_tip" _text="密码长度8~16位，数字、字母、字符至少包含两种">
          <em class="icon_error"></em>
          <span data-origin="密码长度8~16位，数字、字母、字符至少包含两种">密码长度8~16位，数字、字母、字符至少包含两种</span>
         </div> 
        </dd> 
        <!--3次后弹出--> 
        <dl class="capt_box" style="display:none;"> 
         <span></span> 
         <dt>
          验证码
         </dt> 
         <dd> 
          <div class="inputcode"> 
           <label class="labelbox chkcode input_bg"><input type="text" name="icode" placeholder="图片验证码" autocomplete="off" disableautocomplete="" /></label> 
           <img class="chkcode_img" alt="" /> 
           <a href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="换一张" class="next_capt hidden">换一张</a> 
          </div> 
          <div class="err_tip error-con" _text="">
           <em class="icon_error"></em>
           <span></span>
          </div> 
         </dd> 
        </dl> 
       </dl> 
      </div> 
      <div class="tip_btns"> 
       <a class="btn_tip btn_commom btnOK" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="确定">确定</a> 
       <a class="btn_tip btn_back btnCancel" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="取消">取消</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 修改密码 e --> 
  <!-- 修改密码成功 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popUpdatePasswordSuccess" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>修改密码</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" onclick="javascript:void location.reload(true);" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="wapbox"> 
       <div class="t_c mar30"> 
        <div class="txt_ff6">
         <em class="acctip_icon acctip_icon_2"></em> 成功修改密码 
        </div> 
       </div> 
       <div class="t_c mar30"> 
        <p><span class="logoutCountdown"></span> 秒后自动登出，请重新登录</p> 
       </div> 
      </div> 
      <div class="tip_btns wap_btn_abs"> 
       <a class="btn_tip btn_commom btnReturn" href="https://account.xiaomi.com/" title="立即重新登录">立即重新登录</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 修改密码成功 e --> 
  <!-- 绑定手机发送验证码 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popVerifyMobile" style="display:none;"> 
     <div class="mod_tip_hd"> 
      <h4>安全验证</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="disten30x103"> 
       <h6>我们向您的手机 <em>188******25</em> 发送了一条验证短信</h6> 
       <div class="mod inputsend"> 
        <label class="input_bg"><input class="remain_input" type="text" placeholder="请输入验证码" /></label> 
        <span class="remain"> <a title="重新发送" class="resend">重新发送</a> 
         <!--<tt style="display:none;">30秒</tt>--> </span> 
       </div> 
      </div> 
      <div class="tip_btns"> 
       <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="确定">确定</a> 
       <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="取消">取消</a> 
      </div> 
      <div class="txt_qst">
       <em class="icon_qst"></em>
       <a href="http:///static.account.xiaomi.com/html/faq/faqSMSerror.html" target="_blank" title="我为何收不到验证码？">我为何收不到验证码？</a>
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 绑定手机发送验证码 e --> 
  <!-- phonePanel s--> 
  <div class="popup_mask callable"> 
   <div class="bkc"></div> 
   <div class="mod_acc_tip" id="phonePanel" style="display:none"> 
    <div class="mod_tip_hd"> 
     <h4> 修改安全手机 </h4> 
     <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
    </div> 
    <div class="mod_tip_bd"> 
     <div class="phone-panel-main"> 
      <div class="ph_panel_tit phone-panel-main-title">
        请选择您要修改的手机号码 
      </div> 
      <div class="ph_list_panel phone-panel-list"> 
       <ul class="phone_panel_list_con md_way"> 
       </ul> 
      </div> 
      <div class="tip_btns phone-panel-main-button"> 
       <a class="btn_tip btn_commom" data-action="update">修改号码</a> 
       <a class="btn_tip btn_back" data-action="delete">删除号码</a> 
      </div> 
     </div> 
     <div class="ph_del_panel phone-panel-del" style="display:none"> 
      <div data-title-tpl="确认要删除绑定手机&lt;span class='ff6'&gt;{phone}&lt;/span&gt;吗" class="ph_del_tit phone-panel-del-title"></div> 
      <p><i class="icon_tanhao"></i>删除后将无法使用此手机登录小米帐号</p> 
      <div class="ph_del_box"> 
       <p>请输入完整的手机号：</p> 
       <div class="inputbg fill_center_box"> 
        <span class="phone-blank-prefix"></span> 
        <label class="labelbox del_ph_lbx"><input type="text" name="delphone" /></label> 
        <span class="phone-blank-suffix"></span> 
       </div> 
       <div class="err_tip error-con" _text="">
        <em class="icon_error"></em>
        <span class="del-error"></span>
       </div> 
      </div> 
      <div class="tip_btns phone-panel-del-button"> 
       <a class="btn_tip btn_commom" data-action="delete">确定</a> 
       <a class="btn_tip btn_back" data-action="cancel">取消</a> 
      </div> 
     </div> 
     <div class="ph_del_success phone-panel-del-success" style="display:none"> 
      <div class="ph_del_tit t_c">
       成功删除绑定手机
       <span class="ff6 del-ph-num"></span>
      </div> 
      <div class="tip_btns wap_btn_abs"> 
       <a class="btn_tip btn_commom" data-action="success">完成</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- phonePanel e--> 
  <!-- 绑定安全手机 s --> 
  <div class="popup_mask callable"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popEnterNewPhone" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4> 修改安全手机 </h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="tabbar_panel"> 
       <div class="tabbar"> 
        <div class="tab_opt c_b"> 
         <!--
						<span>安全确认</span>
					--> 
         <!-- 选中添加class为now --> 
         <span class="phonetab1 now">输入新手机</span> 
         <span class="phonetab2">验证新手机</span> 
         <span class="phonetab3 end">完成</span> 
        </div> 
        <div class="tabline c_b"> 
         <i class="now"></i> 
         <i></i> 
         <i></i> 
         <span class="justify_fix"></span> 
        </div> 
       </div> 
      </div> 
      <div class="wapbox"> 
       <dl class="binding phonestep1"> 
      
        <dd> 
         <div> 
          <label class="input_bg"><input type="tel" class="new_phone" name="phone" placeholder="请输入手机号码" autocomplete="off" disableautocomplete="" /></label> 
          <input type="hidden" class="full_new_phone" value="" autocomplete="off" disableautocomplete="" /> 
         </div> 
         <div class="err_tip error-con" _text="">
          <em class="icon_error"></em>
          <span></span>
         </div> 
        </dd> 
        <dd> 
         <div class="inputcode"> 
          <label class="input_bg chkcode"><input type="text" name="icode" placeholder="图片验证码" class="capt_box" autocomplete="off" disableautocomplete="" /></label> 
          <img class="chkcode_img" src="/static/homes/security/getCode" _src="/pass/getCode?icodeType=antispam" alt="" /> 
          <a class="color333 hidden" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="换一张">换一张</a> 
         </div> 
         <div class="err_tip error-con" _text="">
          <em class="icon_error"></em>
          <span></span>
         </div> 
        </dd> 
        <div class="tip_btns"> 
         <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="下一步">下一步</a> 
        </div> 
       </dl> 
       <dl class="bind_info_panel bind-info-panel" style="display:none"> 
        <p class="bind_tip bind-tip">该手机号于<span class="ff6 bind-time"></span>时间绑定了帐号<span class="ff6 bind-id"></span>，继续操作将与<span class="ff6 bind-id"></span>解绑，请确认要继续吗？</p> 
        <div class="tip_btns"> 
         <a class="btn_tip btn_commom" data-action="ok" data-type="PH" title="确定">确定</a> 
         <a class="btn_tip btn_back" data-action="back" data-type="PH" title="返回">返回</a> 
        </div> 
       </dl> 
       <dl class="verify" style="display:none"> 
        <div class="disten30x103 phonestep2"> 
         <h6 class="pb10">我们向您的手机 <em> </em>发送了一条验证短信 <br />请输入短信中的验证码</h6> 
         <div class="mod inputsend"> 
          <label class="input_bg"><input class="phone_capt remain_input" type="text" name="ticket" placeholder="请输入验证码" autocomplete="off" disableautocomplete="" /></label> 
          <span class="remain"> <a class="resend noSend" href="javascript:void(0);" title="重新发送" autocomplete="off" disableautocomplete="true" disabled="disabled">重新发送</a> </span> 
         </div> 
         <div class="err_tip error-con" _text="">
          <em class="icon_error"></em>
          <span></span>
         </div> 
         <div class="err_tip quota_tip" id="quotaTextLabel" _text="您今天还能发送条短信">
          您今天还能发送
          <b style="display:inline;font-weight:normal;" id="quotaLabel"></b>条短信
         </div> 
        </div> 
        <div class="tip_btns"> 
         <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="确定">确定</a> 
         <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="取消">取消</a> 
        </div> 
        <div class="txt_qst">
         <em class="icon_qst"></em>
         <a target="_blank" href="http:///static.account.xiaomi.com/html/faq/faqSMSerror.html" title="我为何收不到验证码？">我为何收不到验证码？</a>
        </div> 
       </dl> 
       <dl style="display:none" class="success"> 
        <div class="t_c"> 
         <h4> 您已成功修改安全手机！ </h4> 
        </div> 
        <div class="tip_btns wap_btn_abs"> 
         <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="返回我的帐号">返回我的帐号</a> 
        </div> 
       </dl> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 绑定安全手机 e --> 
  <!-- 绑定安全邮箱 s --> 
  <div class="popup_mask callable"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popEnterNewEmail" style="display:none;"> 
     <div class="mod_tip_hd"> 
      <h4> 修改安全邮箱 </h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="tabbar_panel"> 
       <div class="tabbar"> 
        <div class="tab_opt c_b"> 
         <!-- 选中添加class为now --> 
         <span class="mailtab1 now">输入新邮箱</span> 
         <span class="mailtab2">验证新邮箱</span> 
         <span class="mailtab3 end">完成</span> 
        </div> 
        <div class="tabline c_b"> 
         <i class="now"></i> 
         <i></i> 
         <i></i> 
         <span class="justify_fix"></span> 
        </div> 
       </div> 
      </div> 
      <div class="wapbox"> 
       <dl class="binding mailstep1"> 
        <dt>
         请输入新的安全邮箱地址
        </dt> 
        <dd> 
         <label class="input_bg"><input type="text" placeholder="请输入邮箱" class="new_email" autocomplete="off" disableautocomplete="" /></label> 
        </dd> 
        <div class="err_tip wng_fmt err_tip_independ" style="display:none" _text="邮箱格式错误">
         邮箱格式错误
        </div> 
        <div class="err_tip empty_email err_tip_independ" style="display:none" _text="请输入邮箱地址">
         请输入邮箱地址
        </div> 
        <div class="err_tip email_bound err_tip_independ" style="display:none" _text="此邮箱地址和当前绑定邮箱地址相同">
         此邮箱地址和当前绑定邮箱地址相同
        </div> 
        <div class="err_tip email_bound_elsewhere err_tip_independ" style="display:none" _text="该邮箱地址已被其他帐号绑定">
         该邮箱地址已被其他帐号绑定
        </div> 
        <div class="err_tip bad_param err_tip_independ" style="display:none" _text="参数错误">
         参数错误
        </div> 
        <dd class="inputcode"> 
         <label class="input_bg chkcode"><input type="text" placeholder="图片验证码" class="capt_box" autocomplete="off" disableautocomplete="" /></label> 
         <img class="chkcode_img" src="/static/homes/security/getCode" _src="/pass/getCode?icodeType=antispam" alt="" /> 
         <a class="color333 hidden" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="换一张">换一张</a> 
        </dd> 
        <div style="display:none;" class="err_tip empty_capt err_tip_independ" _text="请输入验证码">
         请输入验证码
        </div> 
        <div style="display:none;" class="err_tip wng_capt err_tip_independ" _text="验证码不正确，请重新输入">
         验证码不正确，请重新输入
        </div> 
        <div class="err_tip sys_err err_tip_independ" style="display:none" _text="系统错误，请稍候再试">
         系统错误，请稍候再试
        </div> 
        <div style="display:none;" class="err_tip reach_max err_tip_independ" _text="您发送了过多的验证信息，请您次日再试">
         您发送了过多的验证信息，请您次日再试
        </div> 
        <div class="tip_btns"> 
         <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="下一步">下一步</a> 
        </div> 
       </dl> 
       <dl class="verify" style="display:none;"> 
        <div class="disten30x103 mailstep2"> 
         <h6 class="doub_ln">我们向 <em></em> 发送了验证邮件<br />请输入邮件中的验证码</h6> 
         <div class="mod inputsend"> 
          <label class="input_bg"><input type="text" placeholder="请输入验证码" class="capt_box remain_input" autocomplete="off" disableautocomplete="" /></label> 
          <span class="remain"> <a title="重新发送" class="resend">重新发送</a> </span> 
         </div> 
         <!-- 错误信息提示 --> 
         <div style="display:none;" class="err_tip empty_capt err_tip_independ" _text="请输入验证码">
          请输入验证码
         </div> 
         <div style="display:none;" class="err_tip wng_capt err_tip_independ" _text="验证码错误或已过期">
          验证码错误或已过期
         </div> 
         <div style="display:none;" class="err_tip sys_err err_tip_independ" _text="系统错误，请稍候再试">
          系统错误，请稍候再试
         </div> 
         <div class="err_tip quota_tip" id="emailQuotaTextLabel" _text="您今天还能发送{left}次邮件">
          您今天还能发送{left}次邮件
         </div> 
        </div> 
        <div class="tip_btns"> 
         <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="确定">确定</a> 
         <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="取消">取消</a> 
        </div> 
        <div class="txt_qst">
         <em class="icon_qst"></em>
         <a target="_blank" href="http:///static.account.xiaomi.com/html/faq/faqRegisterReceiveCheckNum.html" title="一直收不到验证邮件">一直收不到验证邮件</a>
        </div> 
       </dl> 
       <dl style="display:none;" class="success"> 
        <div class="t_c"> 
         <h4> 您已成功修改安全邮箱！ </h4> 
        </div> 
        <div class="tip_btns wap_btn_abs"> 
         <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="返回我的帐号">返回我的帐号</a> 
        </div> 
       </dl> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 绑定安全邮箱 e --> 
  <!-- 设置密保问题 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popSetMibao" style="display:none"> 
     <form id="frmSetQuestions" target="fraSetMibao" action="https://account.xiaomi.com/pass/auth/security/setSafeQuestions" method="POST"> 
      <div class="mod_tip_hd"> 
       <h4>设置密保问题</h4> 
       <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
      </div> 
      <div class="mod_tip_bd"> 
       <div class="wapbox rember_mibaoqst"> 
        <h4>请牢记您的密保问题</h4> 
        <div class="select-area"> 
         <ul class="set_mibao c_b"> 
          <li> 
           <dl class="login-dl clearfix"> 
            <dd class="dd_r clearfix"> 
             <select class="iselect" autocomplete="off" disableautocomplete=""> <optgroup label="家属信息" _type="0"> <option value="" _role="default" class="def-opt" selected="">请选择密保问题</option> <option value="1" _answertip="">您外婆的姓名</option> <option value="2" _answertip="">您外公的姓名</option> <option value="3" _answertip="">您爷爷的姓名</option> <option value="4" _answertip="">您奶奶的姓名</option> <option value="5" _answertip="">您父亲的生日</option> <option value="6" _answertip="">您母亲的生日</option> <option value="7" _answertip="">您父母的生日相差几年几个月</option> </optgroup> <optgroup label="学校信息" _type="1"> <option value="8" _answertip="">您高中三年级班主任的名字</option> <option value="9" _answertip="">您小学六年级班主任的名字</option> <option value="10" _answertip="">您大学时的学号</option> <option value="11" _answertip="">您大学本科时的上/下铺叫什么名字</option> <option value="12" _answertip="">您大学的导师叫什么名字</option> </optgroup> <optgroup label="个人信息" _type="2"> <option value="13" _answertip="">您父母称呼您的昵称</option> <option value="14" _answertip="">您身份证号后六位</option> <option value="15" _answertip="">您出生的医院名称</option> <option value="16" _answertip="">您最好的朋友叫什么名字</option> </optgroup> <optgroup label="各种第一次" _type="3"> <option value="17" _answertip="">您第一个宠物的名字</option> <option value="18" _answertip="">您的第一任男朋友/女朋友姓名</option> <option value="19" _answertip="">您第一家任职的公司名字</option> </optgroup> <optgroup label="婚姻相关" _type="4"> <option value="20" _answertip="">您领结婚证的日子</option> <option value="21" _answertip="">您配偶的名字</option> <option value="22" _answertip="">您配偶的生日</option> </optgroup> </select> 
            </dd> 
            <dd class="dd_l clearfix"> 
             <label class="input_bg"><input class="input_kuang errortip" type="text" placeholder="" _placeheld="" autocomplete="off" disableautocomplete="" isrequired="true" /></label> 
             <span class="error-mes err_tip err_tip_independ" style="display:block;" _text=""></span> 
            </dd> 
           </dl> </li> 
          <li> 
           <dl class="login-dl clearfix"> 
            <dd class="dd_r clearfix"> 
             <select class="iselect" autocomplete="off" disableautocomplete=""> <optgroup label="家属信息" _type="0"> <option value="" _role="default" class="def-opt" selected="">请选择密保问题</option> <option value="1" _answertip="">您外婆的姓名</option> <option value="2" _answertip="">您外公的姓名</option> <option value="3" _answertip="">您爷爷的姓名</option> <option value="4" _answertip="">您奶奶的姓名</option> <option value="5" _answertip="">您父亲的生日</option> <option value="6" _answertip="">您母亲的生日</option> <option value="7" _answertip="">您父母的生日相差几年几个月</option> </optgroup> <optgroup label="学校信息" _type="1"> <option value="8" _answertip="">您高中三年级班主任的名字</option> <option value="9" _answertip="">您小学六年级班主任的名字</option> <option value="10" _answertip="">您大学时的学号</option> <option value="11" _answertip="">您大学本科时的上/下铺叫什么名字</option> <option value="12" _answertip="">您大学的导师叫什么名字</option> </optgroup> <optgroup label="个人信息" _type="2"> <option value="13" _answertip="">您父母称呼您的昵称</option> <option value="14" _answertip="">您身份证号后六位</option> <option value="15" _answertip="">您出生的医院名称</option> <option value="16" _answertip="">您最好的朋友叫什么名字</option> </optgroup> <optgroup label="各种第一次" _type="3"> <option value="17" _answertip="">您第一个宠物的名字</option> <option value="18" _answertip="">您的第一任男朋友/女朋友姓名</option> <option value="19" _answertip="">您第一家任职的公司名字</option> </optgroup> <optgroup label="婚姻相关" _type="4"> <option value="20" _answertip="">您领结婚证的日子</option> <option value="21" _answertip="">您配偶的名字</option> <option value="22" _answertip="">您配偶的生日</option> </optgroup> </select> 
            </dd> 
            <dd class="dd_l clearfix"> 
             <label class="input_bg"><input class="input_kuang errortip" type="text" placeholder="" _placeheld="" autocomplete="off" disableautocomplete="" isrequired="true" /></label> 
             <span class="error-mes err_tip err_tip_independ" style="display:block;" _text=""></span> 
            </dd> 
           </dl> </li> 
          <li> 
           <dl class="login-dl clearfix"> 
            <dd class="dd_r clearfix"> 
             <select class="iselect" autocomplete="off" disableautocomplete=""> <optgroup label="家属信息" _type="0"> <option value="" _role="default" class="def-opt" selected="">请选择密保问题</option> <option value="1" _answertip="">您外婆的姓名</option> <option value="2" _answertip="">您外公的姓名</option> <option value="3" _answertip="">您爷爷的姓名</option> <option value="4" _answertip="">您奶奶的姓名</option> <option value="5" _answertip="">您父亲的生日</option> <option value="6" _answertip="">您母亲的生日</option> <option value="7" _answertip="">您父母的生日相差几年几个月</option> </optgroup> <optgroup label="学校信息" _type="1"> <option value="8" _answertip="">您高中三年级班主任的名字</option> <option value="9" _answertip="">您小学六年级班主任的名字</option> <option value="10" _answertip="">您大学时的学号</option> <option value="11" _answertip="">您大学本科时的上/下铺叫什么名字</option> <option value="12" _answertip="">您大学的导师叫什么名字</option> </optgroup> <optgroup label="个人信息" _type="2"> <option value="13" _answertip="">您父母称呼您的昵称</option> <option value="14" _answertip="">您身份证号后六位</option> <option value="15" _answertip="">您出生的医院名称</option> <option value="16" _answertip="">您最好的朋友叫什么名字</option> </optgroup> <optgroup label="各种第一次" _type="3"> <option value="17" _answertip="">您第一个宠物的名字</option> <option value="18" _answertip="">您的第一任男朋友/女朋友姓名</option> <option value="19" _answertip="">您第一家任职的公司名字</option> </optgroup> <optgroup label="婚姻相关" _type="4"> <option value="20" _answertip="">您领结婚证的日子</option> <option value="21" _answertip="">您配偶的名字</option> <option value="22" _answertip="">您配偶的生日</option> </optgroup> </select> 
            </dd> 
            <dd class="dd_l clearfix"> 
             <label class="input_bg"><input class="input_kuang errortip" type="text" placeholder="" _placeheld="" autocomplete="off" disableautocomplete="" isrequired="true" /></label> 
             <span class="error-mes err_tip err_tip_independ" style="display:block;" _text=""></span> 
            </dd> 
           </dl> </li> 
          <li> 
           <dl class="login-dl clearfix"> 
            <dd class="dd_r clearfix"> 
             <select class="iselect" autocomplete="off" disableautocomplete=""> <optgroup label="家属信息" _type="0"> <option value="" _role="default" class="def-opt" selected="">请选择密保问题</option> <option value="1" _answertip="">您外婆的姓名</option> <option value="2" _answertip="">您外公的姓名</option> <option value="3" _answertip="">您爷爷的姓名</option> <option value="4" _answertip="">您奶奶的姓名</option> <option value="5" _answertip="">您父亲的生日</option> <option value="6" _answertip="">您母亲的生日</option> <option value="7" _answertip="">您父母的生日相差几年几个月</option> </optgroup> <optgroup label="学校信息" _type="1"> <option value="8" _answertip="">您高中三年级班主任的名字</option> <option value="9" _answertip="">您小学六年级班主任的名字</option> <option value="10" _answertip="">您大学时的学号</option> <option value="11" _answertip="">您大学本科时的上/下铺叫什么名字</option> <option value="12" _answertip="">您大学的导师叫什么名字</option> </optgroup> <optgroup label="个人信息" _type="2"> <option value="13" _answertip="">您父母称呼您的昵称</option> <option value="14" _answertip="">您身份证号后六位</option> <option value="15" _answertip="">您出生的医院名称</option> <option value="16" _answertip="">您最好的朋友叫什么名字</option> </optgroup> <optgroup label="各种第一次" _type="3"> <option value="17" _answertip="">您第一个宠物的名字</option> <option value="18" _answertip="">您的第一任男朋友/女朋友姓名</option> <option value="19" _answertip="">您第一家任职的公司名字</option> </optgroup> <optgroup label="婚姻相关" _type="4"> <option value="20" _answertip="">您领结婚证的日子</option> <option value="21" _answertip="">您配偶的名字</option> <option value="22" _answertip="">您配偶的生日</option> </optgroup> </select> 
            </dd> 
            <dd class="dd_l clearfix"> 
             <label class="input_bg"><input class="input_kuang errortip" type="text" placeholder="" _placeheld="" autocomplete="off" disableautocomplete="" isrequired="true" /></label> 
             <span class="error-mes err_tip err_tip_independ" style="display:block;" _text=""></span> 
            </dd> 
           </dl> </li> 
         </ul> 
        </div> 
        <input type="hidden" name="questions" class="form-data" /> 
        <input type="hidden" name="userId" value="1337447143" /> 
        <input type="hidden" name="mibao_ph" value="" /> 
        <input type="hidden" name="serviceToken" value="" /> 
        <div class="tl_c"> 
         <span class="error-mes form-error-mes err_tip err_tip_independ" style="display:none;" _text=""></span> 
        </div> 
        <div class="tip_btns wap_pb20"> 
         <input class="btn_tip btn_commom" title="确定" value="确定" type="submit" /> 
        </div> 
       </div> 
      </div> 
     </form> 
    </div> 
   </div>
   <!----> 
  </div> 
  <!-- 设置密保问题 e --> 
  <!-- 回答设置密保问题 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popAnswerMibao" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>设置密保问题</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="wapbox rember_mibaoqst"> 
       <h4>请回答您刚才设置的密保问题</h4> 
       <div class="set_mibao"> 
        <ul class="c_b"> 
         <li> <p></p> <label class="input_bg"><input type="text" _placeheld="" autocomplete="off" disableautocomplete="" /></label> <span class="error-mes err_tip err_tip_independ" style="display:block;" _text=""></span> </li> 
         <li> <p></p> <label class="input_bg"><input type="text" _placeheld="" autocomplete="off" disableautocomplete="" /></label> <span class="error-mes err_tip err_tip_independ" style="display:block;" _text=""></span> </li> 
         <li> <p></p> <label class="input_bg"><input type="text" _placeheld="" autocomplete="off" disableautocomplete="" /></label> <span class="error-mes err_tip err_tip_independ" style="display:block;" _text=""></span> </li> 
         <li> <p></p> <label class="input_bg"><input type="text" _placeheld="" autocomplete="off" disableautocomplete="" /></label> <span class="error-mes err_tip err_tip_independ" style="display:block;" _text=""></span> </li> 
        </ul> 
        <div class="tl_c"> 
         <span class="error-mes form-error-mes err_tip err_tip_independ" style="display:block;" _text=""></span> 
        </div> 
       </div> 
      </div> 
      <div class="tip_btns"> 
       <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="确定">确定</a> 
       <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="重设">重设</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 回答设置密保问题 e --> 
  <!-- 设置密保成功 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popFinishMibao" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>设置密保问题</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="t_c wapbox mar30"> 
       <div class="txt_ff6">
        <em class="acctip_icon acctip_icon_2"></em>您已成功设置密保问题！
       </div> 
      </div> 
      <div class="tip_btns wap_btn_abs"> 
       <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="返回我的帐号">返回我的帐号</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 设置密保成功 e --> 
  <!-- 开启登录保护 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popManageTokenHome" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>开启登录保护</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="t_c security"> 
       <div class="icon_mibao icon_mibao1"></div> 
       <div class="wapbox intro"> 
        <p class="style_h4">开启登录保护，仅允许信任设备直接登录</p> 
        <p class="style_h4">非信任设备，登录时需要二次验证</p> 
       </div> 
       <div class="tip_btns"> 
        <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="确认开启" _href="#popManageTokenDownAct">确认开启</a> 
       </div> 
       <p class="notice">注意：开启后，当前处于登录状态的设备需重新登录</p> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 开启登录保护 e --> 
  <!-- 获取动态口令 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popManageTokenDownAct" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>开启登录保护</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="t_c wapbox security"> 
       <div class="icon_mibao icon_mibao2"></div> 
       <div class="intro"> 
        <p class="style_h4">动态生成安全口令</p> 
        <p class="style_h4">告别等待，更方便、更安全</p> 
       </div> 
      </div> 
      <div class="tip_btns"> 
       <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="获取安装" _href="#popManageTokenDownload">获取安装</a> 
       <a class="btn_tip btn_commom wap_mt10" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="激活令牌" _href="#popManageTokenActivate">激活令牌</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 获取动态口令 e --> 
  <!-- 获取安全令牌 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popManageTokenDownload" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>开启登录保护</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="wapbox disten30x25"> 
       <h4>获取安装小米安全令牌</h4> 
       <div class="newtab"> 
        <!-- 选中添加class为now --> 
        <a class="now" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="Android版"><em class="acctip_icon acctip_icon_4"></em>Android版<i></i></a> 
        <a href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="iPhone版"><em class="acctip_icon acctip_icon_5"></em>iPhone版<i></i></a> 
       </div> 
       <div style="display:block;" class="tabcon"> 
        <p>1. 在手机上访问小米应用商店 （app.mi.com）</p> 
        <p>2. 搜索<span>小米安全令牌</span></p> 
        <p>3. 下载并安装该应用<a href="http://app.xiaomi.com/download/62091?ref=search" target="_self" title="">直接下载安装包</a></p> 
       </div> 
       <div class="tabcon"> 
        <p>1. 打开iPhone上的App Store图标</p> 
        <p>2. 搜索<span>小米安全令牌</span></p> 
        <p>3. 下载并安装该应用<a href="https://itunes.apple.com/cn/app/xiao-mi-an-quan-ling-pai/id734383238?mt=8" title="" target="_blank">App Store下载地址</a></p> 
       </div> 
       <div class="wap_tokenstore"> 
        <a class="btn_tip btn_back" href="http://app.xiaomi.com/download/62091?ref=search" title=""><i class="icon_store icon_android"></i>Android应用下载</a> 
        <a class="btn_tip btn_back" href="https://itunes.apple.com/cn/app/xiao-mi-an-quan-ling-pai/id734383238?mt=8" title=""><i class="icon_store icon_iphone"></i>iPhone应用下载</a> 
       </div> 
      </div> 
      <div class="tip_btns"> 
       <a class="btn_tip btn_commom installed" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="已完成安装" _href="#popManageTokenActivate">已完成安装</a> 
       <a class="btn_tip btn_back goback" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="返回" _href="#popManageTokenStatus">返回</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 获取安全令牌 e --> 
  <!-- 激活安全令牌 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popManageTokenActivate" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>开启登录保护</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="t_c mar30">
       <h4 class="wap_pt0">激活小米安全令牌</h4>
      </div> 
      <div class="wapbox getactived disten30x76"> 
       <p>1. 打开安装好的小米安全令牌</p> 
       <div> 
        <p>2. 扫描下方二维码</p> 
        <img width="124" height="124" alt="" /> 
       </div> 
       <p>3. 输入生成的6位动态口令<label class="input_bg"><input type="text" placeholder="6位动态口令" /></label></p> 
       <div class="err_tip wng_capt err_tip_independ" _text="动态口令不正确">
        动态口令不正确
       </div> 
       <div class="err_tip empty_capt err_tip_independ" _text="请输入动态口令">
        请输入动态口令
       </div> 
       <div class="err_tip sys_err err_tip_independ" _text="系统错误，请稍候再试">
        系统错误，请稍候再试
       </div> 
      </div> 
      <div class="tip_btns"> 
       <!-- 默认态未填写动态口令btn为禁用，动态口令填写后btn才亮起来，去掉class为disabled --> 
       <a class="btn_tip btn_commom" href="javascript:void(0);" title="激活">激活</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 激活安全令牌 e --> 
  <!-- 添加信任设备 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popManageTokenTrustDevice" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>开启登录保护</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="t_c mar30">
       <h3>添加信任设备</h3>
      </div> 
      <div class="wapbox mardoub30"> 
       <p class="npb_circle_normal"><span class="npb-circle npb-circle-current"></span><span>在信任设备上登录，不需要输入安全令牌</span></p> 
       <p class="npb_circle_normal"><span class="npb-circle npb-circle-current"></span><span>即使您丢失了手机，无法获得验证码，也可以通过信任设备访问自己的小米帐号。</span></p> 
       <div class="mod_trust"> 
        <div class="token_chk_area"> 
         <i class="icon_token_chk icon_true"></i>
         <span class="style_h4">信任此计算机</span> 
        </div> 
        <div>
         您可以随时登录小米帐号在我的设备中管理信任设备
        </div> 
       </div> 
       <div class="err_tip wng_capt err_tip_independ" _text="动态口令不正确">
        动态口令不正确
       </div> 
       <div class="err_tip sys_err err_tip_independ" _text="系统错误，请稍候再试">
        系统错误，请稍候再试
       </div> 
      </div> 
      <div class="tip_btns"> 
       <input class="btn_tip btn_commom" type="submit" value="下一步" /> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 添加信任设备 e --> 
  <!-- 成功开启登录保护 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popManageTokenFinish" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>开启登录保护</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="t_c wapbox mar30"> 
       <div class="txt_ff6">
        <em class="acctip_icon acctip_icon_2"></em>您已成功开启登录保护
       </div> 
       <p><span class="logoutCountdown"></span> 秒后自动登出，请重新登录</p> 
      </div> 
      <div class="tip_btns wap_btn_abs"> 
       <a class="btn_tip btn_commom" href="https://account.xiaomi.com/" title="立即重新登录">立即重新登录</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 成功开启登录保护 e --> 
  <!-- 设置安全令牌 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip wth482" id="popManageTokenStatus" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>登录保护设置</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="wapbox set_security_token disten30x14"> 
       <h3>已经开启小米安全令牌</h3> 
       <p>无需等待短信验证码，动态生成口令，更方便、更快捷</p> 
       <div class="tip_btns"> 
        <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="获取安装" _href="#popManageTokenDownload">获取安装</a> 
        <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="更换令牌" _href="#popManageTokenActivate">更换令牌</a> 
       </div> 
       <h3>补充设置</h3> 
       <p>为了防止手机丢失，导致无法登录使用查找手机，强烈建议您填写</p> 
       <p>备用手机或记录备用口令</p> 
       <ul class="plan c_b"> 
        <li> 
         <dl> 
          <dt>
           <em class="acctip_icon acctip_icon_6"></em>
           <span class="txt_tit">备用手机</span>
          </dt> 
          <dd class=""> 
           <p class="mar17">如果您因为任何原因无法使用手机（丢失、没电、损坏），您可以选择将动态口令发送至备用手机</p> 
           <div class="alink no_fb_mobile"> 
            <p> <a href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="添加备用手机" _href="#popManageTokenSetMobile">添加备用手机</a> </p> 
           </div> 
           <!-- 添加了备用手机后显示 --> 
           <div class="alink fb_mobile"> 
            <p>已设置：<span></span></p> 
            <p> <a href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="修改号码" _href="#popManageTokenSetMobile">修改号码</a> <a href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="删除号码" class="delBackupPhone">删除号码</a> </p> 
           </div> 
          </dd> 
         </dl> </li> 
        <li> 
         <dl> 
          <dt>
           <em class="acctip_icon acctip_icon_7"></em>
           <span class="txt_tit">备用密匙</span>
          </dt> 
          <dd> 
           <p class="mar17">您也可以将备用密匙打印或发送到邮箱，在没有手机令牌的情况下，可以输入一次性备用密匙进行登录</p> 
           <div class="alink"> 
            <p class="bak_keystxt"> <a href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="查看备用密匙" _href="#popManageTokenKeys">查看备用密匙</a> </p> 
           </div> 
          </dd> 
         </dl> </li> 
       </ul> 
       <div class="err_tip sys_err err_tip_independ" _text="系统错误，请稍候再试">
        系统错误，请稍候再试
       </div> 
       <div class="err_tip backup_phone_not_exists err_tip_independ" _text="备用手机不存在">
        备用手机不存在
       </div> 
      </div> 
      <div class="tip_btns"> 
       <a class="btn_tip btn_commom btn_close_popup" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="返回我的帐号">返回我的帐号</a> 
       <a class="btn_tip btn_back btn_disable_token" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="关闭登录保护">关闭登录保护</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 设置安全令牌 e --> 
  <!-- 开启登录保护未绑定邮箱 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popManageTokenBindEmail" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>开启登录保护</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="t_c security"> 
       <div class="icon_mibao icon_mibao3"></div> 
       <div class="wapbox intro"> 
        <p class="style_h4">开启登录保护，请先绑定安全邮箱</p> 
       </div> 
       <div class="tip_btns"> 
        <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="返回我的帐号" _href="#popEnterNewEmail">返回我的帐号</a> 
        <!-- <input class="btn_tip btn_commom" type="submit" value="绑定安全邮箱"> --> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 开启登录保护未绑定邮箱 e --> 
  <!-- 开启登录保护未绑定手机 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popManageTokenBindPhone" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>开启登录保护</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="t_c security"> 
       <div class="icon_mibao icon_mibao4"></div> 
       <div class="wapbox intro"> 
        <p class="style_h4">开启登录保护，请先绑定安全手机</p> 
       </div> 
       <div class="tip_btns"> 
        <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="返回我的帐号" _href="#popEnterNewPhone">返回我的帐号</a> 
        <!-- <input class="btn_tip btn_commom" type="submit" value="绑定安全手机"> --> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 开启登录保护未绑定手机 e --> 
  <!-- 设置备用手机号 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popManageTokenSetMobile" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>登录保护设置</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="wapbox"> 
       <div class="binding setbackphone"> 
        <h3 class="t_c">请设置备用手机</h3> 
        <div class="fixpos"> 
         <div class="tits set_qst_tit"> 
          <p class="c_b"><span>中国</span><em>+86</em></p> 
          <i class="icon_cirarr"></i> 
         </div> 
         <div class="country-container-panel" style="display: none;"> 
          <div class="country-container">
           <div class="country-code">
            <div class="container countrycode-container-usual">
             <div class="header">
              常用
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+86" data-brief="CN">中国</span><span class="record-code">+86</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+886" data-brief="TW">中国台湾</span><span class="record-code">+886</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+852" data-brief="HK">中国香港</span><span class="record-code">+852</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+55" data-brief="BR">Brazil</span><span class="record-code">+55</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+91" data-brief="IN">India</span><span class="record-code">+91</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+62" data-brief="ID">Indonesia</span><span class="record-code">+62</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+60" data-brief="MY">Malaysia</span><span class="record-code">+60</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-A">
             <div class="header">
              A
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+376" data-brief="AD">Andorra</span><span class="record-code">+376</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+93" data-brief="AF">Afghanistan</span><span class="record-code">+93</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="AG">Antigua and Barbuda</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="AI">Anguilla</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+355" data-brief="AL">Albania</span><span class="record-code">+355</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+374" data-brief="AM">Armenia</span><span class="record-code">+374</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+244" data-brief="AO">Angola</span><span class="record-code">+244</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+54" data-brief="AR">Argentina</span><span class="record-code">+54</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="AS">American Samoa</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+43" data-brief="AT">Austria</span><span class="record-code">+43</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+61" data-brief="AU">Australia</span><span class="record-code">+61</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+297" data-brief="AW">Aruba</span><span class="record-code">+297</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+994" data-brief="AZ">Azerbaijan</span><span class="record-code">+994</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+213" data-brief="DZ">Algeria</span><span class="record-code">+213</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-B">
             <div class="header">
              B
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+387" data-brief="BA">Bosnia and Herzegovina</span><span class="record-code">+387</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="BB">Barbados</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+880" data-brief="BD">Bangladesh</span><span class="record-code">+880</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+32" data-brief="BE">Belgium</span><span class="record-code">+32</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+226" data-brief="BF">Burkina Faso</span><span class="record-code">+226</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+359" data-brief="BG">Bulgaria</span><span class="record-code">+359</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+973" data-brief="BH">Bahrain</span><span class="record-code">+973</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+257" data-brief="BI">Burundi</span><span class="record-code">+257</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+229" data-brief="BJ">Benin</span><span class="record-code">+229</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="BM">Bermuda</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+673" data-brief="BN">Brunei</span><span class="record-code">+673</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+591" data-brief="BO">Bolivia</span><span class="record-code">+591</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+599" data-brief="BQ">Bonaire, Sint Eustatius and Saba</span><span class="record-code">+599</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+55" data-brief="BR">Brazil</span><span class="record-code">+55</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="BS">Bahamas</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+975" data-brief="BT">Bhutan</span><span class="record-code">+975</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+267" data-brief="BW">Botswana</span><span class="record-code">+267</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+375" data-brief="BY">Belarus</span><span class="record-code">+375</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+501" data-brief="BZ">Belize</span><span class="record-code">+501</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+246" data-brief="IO">British Indian Ocean Territory</span><span class="record-code">+246</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="VG">British Virgin Islands</span><span class="record-code">+1</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-C">
             <div class="header">
              C
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="CA">Canada</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+61" data-brief="CC">Cocos Islands</span><span class="record-code">+61</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+236" data-brief="CF">Central African Republic</span><span class="record-code">+236</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+242" data-brief="CG">Congo</span><span class="record-code">+242</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+225" data-brief="CI">C&ocirc;te d'Ivoire</span><span class="record-code">+225</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+682" data-brief="CK">Cook Islands</span><span class="record-code">+682</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+56" data-brief="CL">Chile</span><span class="record-code">+56</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+237" data-brief="CM">Cameroon</span><span class="record-code">+237</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+86" data-brief="CN">China</span><span class="record-code">+86</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+57" data-brief="CO">Colombia</span><span class="record-code">+57</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+506" data-brief="CR">Costa Rica</span><span class="record-code">+506</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+53" data-brief="CU">Cuba</span><span class="record-code">+53</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+238" data-brief="CV">Cape Verde</span><span class="record-code">+238</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+599" data-brief="CW">Cura&ccedil;ao</span><span class="record-code">+599</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+61" data-brief="CX">Christmas Island</span><span class="record-code">+61</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+357" data-brief="CY">Cyprus</span><span class="record-code">+357</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+420" data-brief="CZ">Czech Republic</span><span class="record-code">+420</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+385" data-brief="HR">Croatia</span><span class="record-code">+385</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+855" data-brief="KH">Cambodia</span><span class="record-code">+855</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+269" data-brief="KM">Comoros</span><span class="record-code">+269</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="KY">Cayman Islands</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+235" data-brief="TD">Chad</span><span class="record-code">+235</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-D">
             <div class="header">
              D
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+253" data-brief="DJ">Djibouti</span><span class="record-code">+253</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+45" data-brief="DK">Denmark</span><span class="record-code">+45</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="DM">Dominica</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="DO">Dominican Republic</span><span class="record-code">+1</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-E">
             <div class="header">
              E
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+593" data-brief="EC">Ecuador</span><span class="record-code">+593</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+372" data-brief="EE">Estonia</span><span class="record-code">+372</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+20" data-brief="EG">Egypt</span><span class="record-code">+20</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+291" data-brief="ER">Eritrea</span><span class="record-code">+291</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+251" data-brief="ET">Ethiopia</span><span class="record-code">+251</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+240" data-brief="GQ">Equatorial Guinea</span><span class="record-code">+240</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+503" data-brief="SV">El Salvador</span><span class="record-code">+503</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-F">
             <div class="header">
              F
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+358" data-brief="FI">Finland</span><span class="record-code">+358</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+679" data-brief="FJ">Fiji</span><span class="record-code">+679</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+5+" data-brief="FK">Falkland Islands</span><span class="record-code">+5+</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+298" data-brief="FO">Faroe Islands</span><span class="record-code">+298</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+33" data-brief="FR">France</span><span class="record-code">+33</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+594" data-brief="GF">French Guiana</span><span class="record-code">+594</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+689" data-brief="PF">French Polynesia</span><span class="record-code">+689</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-G">
             <div class="header">
              G
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+49" data-brief="DE">Germany</span><span class="record-code">+49</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+241" data-brief="GA">Gabon</span><span class="record-code">+241</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="GD">Grenada</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+995" data-brief="GE">Georgia</span><span class="record-code">+995</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+44" data-brief="GG">Guernsey</span><span class="record-code">+44</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+233" data-brief="GH">Ghana</span><span class="record-code">+233</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+350" data-brief="GI">Gibraltar</span><span class="record-code">+350</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+299" data-brief="GL">Greenland</span><span class="record-code">+299</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+220" data-brief="GM">Gambia</span><span class="record-code">+220</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+224" data-brief="GN">Guinea</span><span class="record-code">+224</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+590" data-brief="GP">Guadeloupe</span><span class="record-code">+590</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+30" data-brief="GR">Greece</span><span class="record-code">+30</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+502" data-brief="GT">Guatemala</span><span class="record-code">+502</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="GU">Guam</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+245" data-brief="GW">Guinea-Bissau</span><span class="record-code">+245</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+592" data-brief="GY">Guyana</span><span class="record-code">+592</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-H">
             <div class="header">
              H
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+852" data-brief="HK">Hong Kong</span><span class="record-code">+852</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+504" data-brief="HN">Honduras</span><span class="record-code">+504</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+509" data-brief="HT">Haiti</span><span class="record-code">+509</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+36" data-brief="HU">Hungary</span><span class="record-code">+36</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-I">
             <div class="header">
              I
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+62" data-brief="ID">Indonesia</span><span class="record-code">+62</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+353" data-brief="IE">Ireland</span><span class="record-code">+353</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+972" data-brief="IL">Israel</span><span class="record-code">+972</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+44" data-brief="IM">Isle Of Man</span><span class="record-code">+44</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+91" data-brief="IN">India</span><span class="record-code">+91</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+964" data-brief="IQ">Iraq</span><span class="record-code">+964</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+98" data-brief="IR">Iran</span><span class="record-code">+98</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+354" data-brief="IS">Iceland</span><span class="record-code">+354</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+39" data-brief="IT">Italy</span><span class="record-code">+39</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-J">
             <div class="header">
              J
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+44" data-brief="JE">Jersey</span><span class="record-code">+44</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="JM">Jamaica</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+962" data-brief="JO">Jordan</span><span class="record-code">+962</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+81" data-brief="JP">Japan</span><span class="record-code">+81</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-K">
             <div class="header">
              K
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+254" data-brief="KE">Kenya</span><span class="record-code">+254</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+996" data-brief="KG">Kyrgyzstan</span><span class="record-code">+996</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+686" data-brief="KI">Kiribati</span><span class="record-code">+686</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+965" data-brief="KW">Kuwait</span><span class="record-code">+965</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+7" data-brief="KZ">Kazakhstan</span><span class="record-code">+7</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-L">
             <div class="header">
              L
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+856" data-brief="LA">Laos</span><span class="record-code">+856</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+961" data-brief="LB">Lebanon</span><span class="record-code">+961</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+423" data-brief="LI">Liechtenstein</span><span class="record-code">+423</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+231" data-brief="LR">Liberia</span><span class="record-code">+231</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+266" data-brief="LS">Lesotho</span><span class="record-code">+266</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+370" data-brief="LT">Lithuania</span><span class="record-code">+370</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+352" data-brief="LU">Luxembourg</span><span class="record-code">+352</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+371" data-brief="LV">Latvia</span><span class="record-code">+371</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+218" data-brief="LY">Libya</span><span class="record-code">+218</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-M">
             <div class="header">
              M
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+691" data-brief="FM">Micronesia</span><span class="record-code">+691</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+212" data-brief="MA">Morocco</span><span class="record-code">+212</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+377" data-brief="MC">Monaco</span><span class="record-code">+377</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+373" data-brief="MD">Moldova</span><span class="record-code">+373</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+382" data-brief="ME">Montenegro</span><span class="record-code">+382</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+261" data-brief="MG">Madagascar</span><span class="record-code">+261</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+692" data-brief="MH">Marshall Islands</span><span class="record-code">+692</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+389" data-brief="MK">Macedonia</span><span class="record-code">+389</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+223" data-brief="ML">Mali</span><span class="record-code">+223</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+95" data-brief="MM">Myanmar</span><span class="record-code">+95</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+976" data-brief="MN">Mongolia</span><span class="record-code">+976</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+853" data-brief="MO">Macao</span><span class="record-code">+853</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+596" data-brief="MQ">Martinique</span><span class="record-code">+596</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+222" data-brief="MR">Mauritania</span><span class="record-code">+222</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="MS">Montserrat</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+356" data-brief="MT">Malta</span><span class="record-code">+356</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+230" data-brief="MU">Mauritius</span><span class="record-code">+230</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+960" data-brief="MV">Maldives</span><span class="record-code">+960</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+265" data-brief="MW">Malawi</span><span class="record-code">+265</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+52" data-brief="MX">Mexico</span><span class="record-code">+52</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+60" data-brief="MY">Malaysia</span><span class="record-code">+60</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+258" data-brief="MZ">Mozambique</span><span class="record-code">+258</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+262" data-brief="YT">Mayotte</span><span class="record-code">+262</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-N">
             <div class="header">
              N
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+850" data-brief="KP">North Korea</span><span class="record-code">+850</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="MP">Northern Mariana Islands</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+264" data-brief="NA">Namibia</span><span class="record-code">+264</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+687" data-brief="NC">New Caledonia</span><span class="record-code">+687</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+227" data-brief="NE">Niger</span><span class="record-code">+227</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+672" data-brief="NF">Norfolk Island</span><span class="record-code">+672</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+234" data-brief="NG">Nigeria</span><span class="record-code">+234</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+505" data-brief="NI">Nicaragua</span><span class="record-code">+505</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+31" data-brief="NL">Netherlands</span><span class="record-code">+31</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+47" data-brief="NO">Norway</span><span class="record-code">+47</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+977" data-brief="NP">Nepal</span><span class="record-code">+977</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+674" data-brief="NR">Nauru</span><span class="record-code">+674</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+683" data-brief="NU">Niue</span><span class="record-code">+683</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+64" data-brief="NZ">New Zealand</span><span class="record-code">+64</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-O">
             <div class="header">
              O
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+968" data-brief="OM">Oman</span><span class="record-code">+968</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-P">
             <div class="header">
              P
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+507" data-brief="PA">Panama</span><span class="record-code">+507</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+51" data-brief="PE">Peru</span><span class="record-code">+51</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+675" data-brief="PG">Papua New Guinea</span><span class="record-code">+675</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+63" data-brief="PH">Philippines</span><span class="record-code">+63</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+92" data-brief="PK">Pakistan</span><span class="record-code">+92</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+48" data-brief="PL">Poland</span><span class="record-code">+48</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="PR">Puerto Rico</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+970" data-brief="PS">Palestine</span><span class="record-code">+970</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+351" data-brief="PT">Portugal</span><span class="record-code">+351</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+680" data-brief="PW">Palau</span><span class="record-code">+680</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+595" data-brief="PY">Paraguay</span><span class="record-code">+595</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-Q">
             <div class="header">
              Q
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+974" data-brief="QA">Qatar</span><span class="record-code">+974</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-R">
             <div class="header">
              R
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+262" data-brief="RE">Reunion</span><span class="record-code">+262</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+40" data-brief="RO">Romania</span><span class="record-code">+40</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+7" data-brief="RU">Russia</span><span class="record-code">+7</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+250" data-brief="RW">Rwanda</span><span class="record-code">+250</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-S">
             <div class="header">
              S
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+590" data-brief="BL">Saint Barth&eacute;lemy</span><span class="record-code">+590</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+41" data-brief="CH">Switzerland</span><span class="record-code">+41</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+34" data-brief="ES">Spain</span><span class="record-code">+34</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="KN">Saint Kitts And Nevis</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+82" data-brief="KR">South Korea</span><span class="record-code">+82</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="LC">Saint Lucia</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+94" data-brief="LK">Sri Lanka</span><span class="record-code">+94</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+590" data-brief="MF">Saint Martin</span><span class="record-code">+590</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+508" data-brief="PM">Saint Pierre And Miquelon</span><span class="record-code">+508</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+381" data-brief="RS">Serbia</span><span class="record-code">+381</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+966" data-brief="SA">Saudi Arabia</span><span class="record-code">+966</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+677" data-brief="SB">Solomon Islands</span><span class="record-code">+677</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+248" data-brief="SC">Seychelles</span><span class="record-code">+248</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+249" data-brief="SD">Sudan</span><span class="record-code">+249</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+46" data-brief="SE">Sweden</span><span class="record-code">+46</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+65" data-brief="SG">Singapore</span><span class="record-code">+65</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+290" data-brief="SH">Saint Helena</span><span class="record-code">+290</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+386" data-brief="SI">Slovenia</span><span class="record-code">+386</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+47" data-brief="SJ">Svalbard And Jan Mayen</span><span class="record-code">+47</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+421" data-brief="SK">Slovakia</span><span class="record-code">+421</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+232" data-brief="SL">Sierra Leone</span><span class="record-code">+232</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+378" data-brief="SM">San Marino</span><span class="record-code">+378</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+221" data-brief="SN">Senegal</span><span class="record-code">+221</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+252" data-brief="SO">Somalia</span><span class="record-code">+252</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+597" data-brief="SR">Suriname</span><span class="record-code">+597</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+239" data-brief="ST">Sao Tome And Principe</span><span class="record-code">+239</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="SX">Sint Maarten (Dutch part)</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+963" data-brief="SY">Syria</span><span class="record-code">+963</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+268" data-brief="SZ">Swaziland</span><span class="record-code">+268</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="VC">Saint Vincent And The Grenadines</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+685" data-brief="WS">Samoa</span><span class="record-code">+685</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+27" data-brief="ZA">South Africa</span><span class="record-code">+27</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-T">
             <div class="header">
              T
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+243" data-brief="CD">The Democratic Republic Of Congo</span><span class="record-code">+243</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="TC">Turks And Caicos Islands</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+228" data-brief="TG">Togo</span><span class="record-code">+228</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+66" data-brief="TH">Thailand</span><span class="record-code">+66</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+992" data-brief="TJ">Tajikistan</span><span class="record-code">+992</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+690" data-brief="TK">Tokelau</span><span class="record-code">+690</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+670" data-brief="TL">Timor-Leste</span><span class="record-code">+670</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+993" data-brief="TM">Turkmenistan</span><span class="record-code">+993</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+216" data-brief="TN">Tunisia</span><span class="record-code">+216</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+676" data-brief="TO">Tonga</span><span class="record-code">+676</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+90" data-brief="TR">Turkey</span><span class="record-code">+90</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="TT">Trinidad and Tobago</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+688" data-brief="TV">Tuvalu</span><span class="record-code">+688</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+886" data-brief="TW">Taiwan</span><span class="record-code">+886</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+255" data-brief="TZ">Tanzania</span><span class="record-code">+255</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-U">
             <div class="header">
              U
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+971" data-brief="AE">United Arab Emirates</span><span class="record-code">+971</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+44" data-brief="GB">United Kingdom</span><span class="record-code">+44</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+380" data-brief="UA">Ukraine</span><span class="record-code">+380</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+256" data-brief="UG">Uganda</span><span class="record-code">+256</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="US">United States</span><span class="record-code">+1</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+598" data-brief="UY">Uruguay</span><span class="record-code">+598</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+998" data-brief="UZ">Uzbekistan</span><span class="record-code">+998</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+1" data-brief="VI">U.S. Virgin Islands</span><span class="record-code">+1</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-V">
             <div class="header">
              V
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+379" data-brief="VA">Vatican</span><span class="record-code">+379</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+58" data-brief="VE">Venezuela</span><span class="record-code">+58</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+84" data-brief="VN">Vietnam</span><span class="record-code">+84</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+678" data-brief="VU">Vanuatu</span><span class="record-code">+678</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-W">
             <div class="header">
              W
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+212" data-brief="EH">Western Sahara</span><span class="record-code">+212</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+681" data-brief="WF">Wallis And Futuna</span><span class="record-code">+681</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-Y">
             <div class="header">
              Y
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+967" data-brief="YE">Yemen</span><span class="record-code">+967</span></li>
             </ul>
            </div>
            <div class="container countrycode-container-Z">
             <div class="header">
              Z
             </div>
             <ul class="list">
              <li class="record clearfix"><span class="record-country" data-code="+260" data-brief="ZM">Zambia</span><span class="record-code">+260</span></li>
              <li class="record clearfix"><span class="record-country" data-code="+263" data-brief="ZW">Zimbabwe</span><span class="record-code">+263</span></li>
             </ul>
            </div>
           </div>
           <div class="cancel_panel">
            <div class="cancel_box">
             <a class="btnadpt bg_white btn-cancel" href="javascript:void(0);">取消</a>
            </div>
           </div>
           <div class="navbar_panel">
            <div class="navbar">
             <a to="usual">#</a>
             <a to="A">A</a>
             <a to="B">B</a>
             <a to="C">C</a>
             <a to="D">D</a>
             <a to="E">E</a>
             <a to="F">F</a>
             <a to="G">G</a>
             <a to="H">H</a>
             <a to="I">I</a>
             <a to="J">J</a>
             <a to="K">K</a>
             <a to="L">L</a>
             <a to="M">M</a>
             <a to="N">N</a>
             <a to="O">O</a>
             <a to="P">P</a>
             <a to="Q">Q</a>
             <a to="R">R</a>
             <a to="S">S</a>
             <a to="T">T</a>
             <a to="U">U</a>
             <a to="V">V</a>
             <a to="W">W</a>
             <a to="X">X</a>
             <a to="Y">Y</a>
             <a to="Z">Z</a>
            </div>
           </div>
          </div>
         </div> 
        </div> 
        <div class="fixpos">
         <label class="input_bg"><input type="tel" class="backupPhoneInput" placeholder="请输入备用手机号码" autocomplete="off" disableautocomplete="" /></label>
        </div> 
       </div> 
       <div class="setbakphone_error"> 
        <div class="err_tip empty_phone err_tip_independ" _text="请输入备用手机">
         请输入备用手机
        </div> 
        <div class="err_tip wng_fmt err_tip_independ" _text="手机号码格式错误">
         手机号码格式错误
        </div> 
        <div class="err_tip sys_err err_tip_independ" _text="系统错误，请稍后再试">
         系统错误，请稍后再试
        </div> 
        <div class="err_tip dupl_phone err_tip_independ" _text="备用手机不能与安全手机相同">
         备用手机不能与安全手机相同
        </div> 
        <div class="err_tip set_fail err_tip_independ" _text="设置备用手机失败">
         设置备用手机失败
        </div> 
        <div class="err_tip bad_param err_tip_independ" style="display:none" _text="参数错误">
         参数错误
        </div> 
       </div> 
      </div> 
      <div class="tip_btns"> 
       <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="确定">确定</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 设置备用手机号 e --> 
  <!-- 关闭登录保护 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popManageTokenDisableFinish" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>登录保护设置</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="t_c wapbox mar30"> 
       <div class="txt_ff6">
        <em class="acctip_icon acctip_icon_2"></em>您已经关闭登录保护
       </div> 
      </div> 
      <div class="tip_btns wap_btn_abs"> 
       <a class="btn_tip btn_commom" href="https://account.xiaomi.com/" title="返回我的帐号">返回我的帐号</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 关闭登录保护 e --> 
  <!-- 查看备用密钥 s --> 
  <!--不做成模态--> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> hom
    <div class="mod_acc_tip" id="popManageTokenKeys" style="displhomay:none"> 
     <div class="mod_tip_hd"> 
      <h4>登录保护设置</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="disten30x25 wapbox security_keys"> 
       <h4>此密匙可以替代动态口令<span class="ff6 marl15">每个密匙只能使用一次</span></h4> 
       <div class="mi_code c_b"> 
        <!-- 已经使用添加class为out --> 
       </div> 
       <div class="lh20"> 
        <p>请将备用密匙随身携带，打印后请放置于保密位置（如钱包中）</p> 
        <p>如密匙已经使用完，可以点击<a class="ff6" href="javascript:void(0)" id="refresh_code">刷新</a> （刷新后，原有密匙将全部失效）</p> 
       </div> 
      </div> 
      <div class="tip_btns"> 
       <a class="btn_tip btn_back btn_print" id="printKeys" title="打印">打印</a> 
       <a class="btn_tip btn_back sendEmail" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="发送到邮箱">发送到邮箱</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 查看备用密钥 e --> 
  <!--无法通过验证，申请人工审核 s--> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popVeriNotExists" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>小米帐号安全验证</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="wapbox mod_tip_bd"> 
      <div class="t_c success"> 
       <h4 class="ff6">无法通过验证</h4> 
      </div> 
      <div class="fail_identify ft14 pb30">
       请提交重置密保申请，或换常用设备进行操作。
      </div> 
      <div class="tip_btns"> 
       <a class="btn_tip btn_back btn_adapt" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="申请重置密保">申请重置密保</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--无法通过验证，申请人工审核 e--> 
  <!--无法通过验证遇到问题 s--> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popVeriFailed" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>小米帐号安全验证</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="wapbox mod_tip_bd"> 
      <div class="t_c success"> 
       <h4 class="ff6">非常抱歉</h4> 
      </div> 
      <div class="fail_identify ft14"> 
       <div class="identity-error ohter-error"> 
        <p>遇到一些问题，无法完成您的操作。</p> 
        <p>请换个时间或联系客服解决。</p> 
       </div> 
       <div class="t_c identity-error forbidden-error"> 
        <p>您的操作频率过快，请稍后再试。</p> 
       </div> 
      </div> 
      <div style="display:none;" class="t_c pdtop20 ft14">
       错误代码：
       <span class="err_code"></span>
      </div> 
      <div class="tip_btns"> 
       <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="返回">返回</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--无法通过验证遇到问题 e--> 
  <!--删除帐号警告 s--> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popSuicideWarning" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>删除帐号</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="wapbox mod_tip_bd"> 
      <div class="del-account-allow"> 
       <div class="logout_area"> 
        <h4>您申请删除小米帐号 <span>1337447143</span> ，删除帐号需要验证您的身份，确认后会清空该帐号的所有数据。</h4> 
        <div class="logout_txt"> 
         <p class="ft14">包括且不限于如下数据：</p> 
         <ul class="num_list"> 
          <li>1.此帐号中未消费的米币将无法找回</li> 
          <li>2.此帐号云端同步的联系人、照片等数据将无法找回</li> 
          <li>3.此帐号中已购买的主题将无法找回</li> 
          <li>4.此帐号在应用内消费的内容将无法找回</li> 
          <li>5.此帐号中各种消费记录将无法找回</li> 
         </ul> 
        </div> 
        <div class="ft14 ff6 warn-text" style="display:none;">
          检测到手机号 
         <span>188******25</span> 近期绑定过太多帐号，删除后半年内将无法使用此号码注册小米帐号。 
        </div> 
        <div style="display:none;" class="sys_err err_tip err_tip_independ" _text="系统错误。错误码：">
         系统错误。错误码：
         <span class="err_code"></span>
        </div> 
        <!-- 选中添加now --> 
        <div class="t_c twostep_trustinfo now"> 
         <label><i class="icon_select"></i>我了解并接受删除可能带来的损失</label> 
        </div> 
       </div> 
       <div class="tip_btns"> 
        <!-- 禁用时添加disabled --> 
        <a class="btn_tip btn_commom disabled" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="开始删除">开始删除</a> 
        <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="取消">取消</a> 
       </div> 
      </div> 
      <div class="del-account-deny" style="display:none"> 
       <div class="logout_area"> 
        <h4>检测到您的帐号在如下服务中遗留有重要数据，所以暂时无法删除您的帐号。</h4> 
        <div class="logout_txt"> 
         <ul class="num_list del-account-deny-content"> 
          <li class="del-account-deny-passport hide">小米帐号</li> 
          <li class="del-account-deny-micloudweb hide del-account-deny-imicom">小米云</li> 
          <li class="del-account-deny-mifiapi del-account-deny-jrmicom hide">小米金融</li> 
          <li class="del-account-deny-boss-online hide">小米通网厅（小米移动卡销卡后才可以删除小米帐号）</li> 
          <li class="del-account-deny-billcenter hide">米币余额</li> 
          <li class="del-account-deny-micloudfind hide">小米云查找设备（存在未关闭查找设备服务的设备）</li> 
          <li class="del-account-deny-identity hide">小米实名（请到小米支付进行实名解绑或者联系人工客服）</li> 
          <li class="del-account-deny-mipay-india hide">小米支付（请拨打印度客服电话：18001036386 关闭支付服务）</li> 
          <li class="del-account-deny-sbillcenter_tmp hide">米币（您有未使用的米币余额）</li> 
          <li class="del-account-deny-sbillcenter hide">米币（您有未使用的米币余额）</li> 
          <li class="del-account-deny-nbillcenter hide">米币（您有未使用的米币余额）</li> 
          <li class="del-account-deny-hk_nbillcenter hide">米币（您有未使用的米币余额）</li> 
          <li class="del-account-deny-micloud hide">小米云服务（请到i.mi.com网站撤销云服务授权）</li> 
          <li class="del-account-deny-xiaomiio hide">您的帐号在“米家App”绑定过设备，请确认设备已经全部解除绑定。</li> 
         </ul> 
        </div> 
       </div> 
       <div class="tip_btns"> 
        <a class="btn_tip btn_back" href="javascript:void(0)" title="确定">确定</a> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--删除帐号警告 e--> 
  <!--删除帐号提示 s--> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popSuicidePrompt" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>删除帐号</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="icon_warning"></div> 
      <div class="wapbox logout_area"> 
       <div class="confirm_txt"> 
        <p class="ft14">请确保所有使用小米帐号的设备（手机，电视，路由器等）均已经退出登录，否则删除帐号后，可能会影响这些设备继续使用。</p> 
        <div class="del_account_devices_con del-devices-panel"> 
         <div class="hd">
          以下是您使用此小米帐号登录过的设备汇总：
         </div> 
         <ul class="online_devices c_b online-devices"> 
         </ul> 
        </div> 
       </div> 
       <div style="display:none;" class="sys_err err_tip err_tip_independ" _text="系统错误。错误码：">
        系统错误。错误码：
        <span class="err_code"></span>
       </div> 
       <div style="display:none;" class="del_fail err_tip err_tip_independ" _text="删除失败">
        删除失败
       </div> 
      </div> 
      <div class="tip_btns"> 
       <!-- 禁用时添加disabled --> 
       <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="继续删除">继续删除</a> 
       <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="取消">取消</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--删除帐号提示 e--> 
  <!--删除帐号成功 s--> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popSuicideSuccess" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>删除帐号</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="wapbox t_c mar30"> 
       <div class="txt_ff6">
        <em class="acctip_icon acctip_icon_2"></em>您已成功删除帐号
       </div> 
       <p><span>10</span> 秒后将自动退出，感谢您的支持</p> 
      </div> 
      <div class="tip_btns"> 
       <a class="btn_tip btn_commom" href="https://account.xiaomi.com/" title="立即退出">立即退出</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--删除帐号成功 e--> 
  <!--删除帐号失败 s--> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popSuicideFailure" style="display:none"> 
     <div class="mod_tip_hd"> 
      <h4>删除帐号</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="wapbox logout_area"> 
       <div class="ft14 logout_unable"> 
        <p>您的小米帐号 <span>1337447143</span> 绑定了MIUI帐号，无法删除。</p> 
        <p class="pt10">删除帐号请致电小米客服400-100-5678。感谢您对小米的支持，谢谢。</p> 
       </div> 
      </div> 
      <div class="tip_btns"> 
       <a class="btn_tip btn_commom" href="https://account.xiaomi.com/" title="返回首页">返回首页</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!--删除帐号失败 e--> 
  <!--TIPS e--> 
  <!--发短信之国际化--> 
  <div id="l11n-node" style="display:none;" _l11n-jsp_wap_ba_errortips3="手机号码格式错误" _l11n-jsp_cu_mnl_tip34="您输入的联络手机是您帐号的密保手机， 您可以直接通过&lt;a href='/pass/forgetPassword' style='color:#ff7e00' target='_blank'&gt;“忘记密码”&lt;/a&gt; 功能重置密码。" _l11n-jsp_cu_mnl_tip35="您输入的联络手机已经绑定在其他小米帐号下，您需要输入其他手机号码作为联络手机。" _l11n-jsp_wap_ba_errortips1="邮箱地址格式错误" _l11n-jsp_regst_img_code_incorrect="输入错误，请重新输入" _l11n-jsp_sms_unsent="短信发送失败，请稍后再试！" _l11n-jsp_sys_error="系统错误，请稍候再试" _l11n-jsp_2014_bad_param="参数错误" _l11n-answer_empty="答案不能为空" _l11n-answer_too_short="答案长度不能少于2个字符" _l11n-answer_too_long="答案长度不能超过128个字符" _l11n-question_empty="问题不能为空" _l11n-answer_same="不能设置答案重复的问题" _l11n-wrong_answer="回答有误，请重试" _l11n-retry_after="您回答错误次数过多，请&lt;span class='color_yellow'&gt;1小时&lt;/span&gt;后重试" _l11n-lang_mismatch="检测到之前的密保问题是用其他语言设置的。如果您继续更新密保问题，之前的会被覆盖，请切换语言环境。" _l11n-existing_question="您上次设置的问题" _l11n-jsp_2014_tip23="系统错误。错误码：" _l11n-jsp_2014_token_used="（已使用）" _l11n-jsp_2014_my_backup_keys="我的备用密匙" _l11n-jsp_add="添加" _l11n-jsp_ph_delete_error="号码错误" _l11n-jsp_error="发生错误，请稍候再试" _l11n-jsp_sac_reset="取消"></div> 
  <!--密保数据--> 
  <div id="questionData" style="display:none"></div>
  
  <script>
    var MSG={
      cancel:"取消",
      toMore:"您今天已经发送太多短信，请换个时间或者改用其他号码",
      phone_empty:"请输入手机号码",
      delphone_empty:"请输入手机号码",
      icode_empty:"请输入验证码",
      ticket_empty:"请输入验证码",
      phone_rule:"手机号码格式错误",
      icode_rule:"图片验证码错误",
      ticket_rule:"验证码错误或已过期",
      ticket_resError:"验证码错误或已过期",
      phoneUnqualCurrent:"此号码和当前绑定号码相同",
      phBindToOther:"该号码已绑定到其它帐号上",
      reachMax:"您发送了过多的验证信息，请您次日再试",
      error_system:"系统错误，请稍候再试",
      bad_param:"参数错误",
      bindLeftTimes:"该手机号绑定的小米帐号个数已达上限(3)，不能再绑定新的小米帐号",
      phoneBindTomuch:"此手机在一段时间内绑定了过多的小米帐号，请换个手机号码试试",
      password_empty:"原密码不能为空",
      repassword_empty:"新密码不能为空",
      repassword2_empty:"请重复新密码",
      repassword_rule:"密码长度8~16位，数字、字母、字符至少包含两种",
      repassword2_rule:"密码输入不一致",
      not_same_pwd:"不能与原密码相同",
      password_resError:"原密码不正确",
      password_resError:"原密码不正确",
      repassword_format_error:"新密码格式错误",
      pwd_risk_error:"新密码不能包含小米帐号，绑定手机，绑定邮箱",
      pwd_in_black:"您的密码可能存在安全风险，请您重新设置一个全新的密码",
      too_frequently:"您的操作频率过快，请稍后再试。"
    };
  </script> 
  <script src="/static/homes/security/jquery-1.8.3.min.js.下载"></script> 
  <script src="/static/homes/security/jquery.bgiframe.js.下载"></script> 
  <script src="/static/homes/security/jquery.form.js.下载"></script> 
  <script src="/static/homes/security/select.js.下载"></script> 
  <script src="/static/homes/security/oo-min.js.下载"></script> 
  <script src="/static/homes/security/cookie.js.下载"></script> 
  <script src="/static/homes/security/time.js.下载"></script> 
  <script src="/static/homes/security/identity-cn.js.下载"></script>
  <a target="_blank"></a> 
  <!--发短信 s--> 
  <script src="/static/homes/security/l11n.js.下载"></script> 
  <script src="/static/homes/security/sms.js.下载"></script> 
  <!--发短信 e--> 
  <!--密保 s--> 
  <script src="/static/homes/security/mibao-min.js.下载"></script> 
  <!--密保 e--> 
  <!--URL解析 s--> 
  <script src="/static/homes/security/url.js.下载"></script> 
  <!--URL解析 e--> 
  <script>
	JSP_VAR.isPasswordSet=true;
	</script> 
  <script src="/static/homes/security/common.js.下载"></script> 
  <script src="/static/homes/security/2014.js.下载"></script> 
  <script src="/static/homes/security/placeholder.js(1).下载">
</script> 
  <script src="/static/homes/security/countryCode.js.下载">
</script> 
  <script>
	var mibaoData = $.parseJSON($('#questionData').text().replace(/\'/g,'"'));
	OO(['com.mi.passport.portal.2014'],function(portal2014,O){
		var Security = portal2014.Security;
		var sec = new Security();
		sec.render();
	});
	</script> 
  <script>
	$('#loadingMask').hidePopup();
	/*修改语言切换后按浏览器返回键语言问题*/
  var expire=new Date((new Date().getTime() +15*24*60*60000)).toGMTString();
  document.cookie="uLocale=" + document.body.className +";expires="+expire+";domain=.xiaomi.com;path=/";
	</script> 
  <style type="text/css">
	/*干掉该死的IE6的遮罩问题*/
	#loadingMask .bkc{
		_height:200%;
	}
	</style> 
 </body>
</html>