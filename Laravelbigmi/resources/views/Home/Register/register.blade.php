注册页面
<!DOCTYPE html>
<!-- saved from url=(0043)https://cn.account.xiaomi.com/pass/register -->
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" /> 
  <title>小米帐号 -注册</title> 
  <link type="text/css" rel="stylesheet" href="/static/homes/register/reset.css" /> 
  <link type="text/css" rel="stylesheet" href="/static/homes/register/layout.css" /> 
  <link type="text/css" rel="stylesheet" href="/static/homes/register/registerpwd.css" /> 
  <style>
.facebook_area{
  display:none!important;
}
.err_invalid{ padding-top:10px;}
</style> 
  <script type="template/register" id="phone-step1">
  <div class="regbox">
    <div class="phone_step1">
      <h4 class="tit_normal">
        国家/地区
      </h4>
      <div class="listwrap select-regions" _region="CN">   
        <div class="listtit reg-select-regions">
          <div class="tits display_box c_b">
            <p class="result-select-regions">中国</p>
            <i class="icon_cirarr"></i>
          </div>
        </div>
      </div>
      <div class="region_tip_text">成功注册帐号后，国家/地区将不能被修改</div>
      <h4 class="tit_normal">
        手机号码
      </h4>
      <div class="listwrap_inside_panel c_b">
        <div class="listwrap" id="select-cycode" _region="CN" _def_method="PH">
          <div class="listtit" id="reg-phone-select-cty">
            <div class="tits display_box c_b">
              <p id="select-cycode-result">+86</p>
              <i class="icon_arrow" ></i>
            </div>
          </div>
        </div>
        <div class="inputbg">
          <input type='hidden' class="select-regions-input" name="region" value="CN"/>
          <label class="labelbox" for="">
            <input type="tel" name="phone" data-type="PH" placeholder="请输入手机号码">
          </label>
        </div>
        <div class="err_tip">
          <div class="dis_box"><em class="icon_error"></em><span></span></div>
        </div>
      </div>
      <div class="override">
        <h4 class="tit_normal">
          图形验证码
        </h4>
        <div class="inputbg inputcode">
          <label class="labelbox" for="">
            <input class="code" type="text" name="icode" autocomplete="off" placeholder="图片验证码">
          </label>
          <img alt="图片验证码"  title="看不清换一张" class="icode_image code-image">
        </div>
        <div class="err_tip">
          <div class="dis_box"><em class="icon_error"></em><span></span></div>
        </div>
      </div>
      <div class="err_tip send-left-times">
      </div>
      <div class="err_tip err_invalid error-invalid">
        <div class="dis_box"><em class="icon_error"></em><span></span></div>
      </div>
      <div class="fixed_bot mar_phone_dis1">
        <input class="btn332 btn_reg_1 submit-step" data-to="phone-step2" type="submit" value="立即注册">
        <div style="display:none" class="other_register_area">
          <input class="btn332 btn_reg_2 change-view" data-to="EMAIL" type="button" value="用邮箱注册">
          <div class="facebook_area"><a class="btn332 btn_reg_2 box_center sns-login-facebook" href="javascript:void(0)"><i class="iconfacebook"></i>使用Facebook登录</a></div>
        </div>
        <img style="display:none;" src="/pass/ajax/tick?biz=register&type=web&step=0" />
      </div>
    </div>
  </div>
  <div class="privacy_box">
    <div class="msg">
      <label class="n_checked now select-privacy">
        <i class="icon_select"></i>注册帐号即表示您同意并愿意遵守小米 <a href="javascript:void(0)" class="inspect_link agreement_link">用户协议</a>和<a href="javascript:void(0)" class="inspect_link privacy_link"> 隐私政策 </a>
      </label>
    </div>
  </div>
</script>
  <script type="template/register" id="other-register">
  <div class="other_register_area">
    <div class="regbox">
      <input class="btn332 btn_reg_2 change-view" data-to="EMAIL" type="button" value="用邮箱注册">
      <div class="facebook_area"><a class="btn332 btn_reg_2 box_center sns-login-facebook" href="javascript:void(0)"><i class="iconfacebook"></i>使用Facebook登录</a></div>
    </div>
  </div>
</script>
  <script type="template/register" id="phone-step2">
  <div class="step2 phone_step2">
    <div class="step2_txt">
      <p>我们已经发送一条验证短信至<span class="address-place ff6"></span></p>
      <p>请输入短信中的验证码</p>
    </div>      
    <div class="inputbg inputcode">
      <label class="labelbox wap_resend_label">
        <input class="resendcode" type="text" placeholder="请输入验证码" name="ticket">
      </label>   
      <span class="remain"><a class="color333 send-status" href="javascript:void(0)"></a></span>
    </div>
    <div class="err_tip">
      <div class="dis_box"><em class="icon_error"></em><span></span></div>
    </div>
    <div class="err_tip send-left-times">
    </div>
    <div class="txt_link"> 
      <span style="display:none;" class="verify-unavailable"><em class="acctip_icon icon_qst"></em>一直收不到验证短信？<a target="_blank"  href="https://static.account.xiaomi.com/html/faq/faqSMSerror.html">查看可能原因</a></span> 
    </div>
    <div class="fixed_bot mar_phone_dis2">
      <input class="btn332 btn_reg_1  submit-step" type="submit" value="下一步">
      <input class="btn332 btn_reg_2  change-view" data-to="phone-step1" type="button" value="返回">
    </div>
    <!--<a class="qst_txt dis_none unavailable-link" href="http://static.account.xiaomi.com/html/faq/faqSMSerror.html" target="blank" title="我为何收不到验证码？">我为何收不到验证码？</a>-->
  </div>
</script>
  <script type="template/register" id="phone-step3">
  <div class="step3 phone_step3">
    <dl>
      <dt>
        <h4>您注册的手机号为<span class="ff6 register-ph-num"></span></h4>
        <h4>请设置您的密码：</h4>
      </dt>
      <dd>
        <div class="inputbg">
          <label class="labelbox" for="">
            <input class="set-password" type="password" data-error=".error-password" name="password" placeholder="请输入密码">
          </label>
        </div>
      </dd>
      <dd>
        <div class="inputbg">
          <label class="labelbox" for=""><input name="repassword" type="password" data-repeat=".set-password" data-error=".error-password" placeholder="请输入确认密码"></label>
        </div>
      </dd>
    </dl>
    <div class="err_tip pwd_tip error-password" style="display:block;">
      <div class="dis_box"><em class="icon_error"></em><span data-origin="密码长度8~16位，数字、字母、字符至少包含两种">密码长度8~16位，数字、字母、字符至少包含两种</span></div>
    </div>
    <div class="fixed_bot mar_phone_dis3"><input class="btn332 btn_reg_1 submit-step" type="submit" value="提交"></div>    
  </div>
</script>
  <script type="template/register" id="phone-step4">
  <div class="phone_step4">
    <div class="t_c register_succ">
      <!--<img class="dis_none" width="68" height="68" src="//static/res/fdc1e65/passport/acc-2014/img/succ.jpg" alt="">
      <img class="app_succ_img" width="81" height="81" src="//static/res/fdc1e65/passport/acc-2014/img/succ@2x.png" alt="">
      <h4>注册成功!</h4>-->
      <p class="register_id">您的小米ID是：<span class="ff6 user-id"></span></p>
      <div class="sync_panel">
        <div class="sync_box sync-box">
          <div class="loading"></div>
          <div class="sync_text">正在同步您的账号数据</div>
        </div>
        <div class="sync_fail sync-result-fail c_b">
          <div class="sync_fail_con">
            <i class="icon_warning"></i><div class="fail_text">您的账户数据有延迟，将只能使用小米ID登录，如使用邮箱、手机登录，请稍等几分钟。</div>
          </div>
        </div>
      </div>
      <div class="fixed_bot mar_phone_dis4">
        <a class="btn332 btn_reg_1 gray_disabled login-redirect" href="javascript:void(0)">
          登录
        </a>
      </div>
    </div>  
  </div>
</script>
  <script type="template/register" id="email-step1">
  
  <div class="privacy_box">
    <div class="msg">
      <label class="n_checked now select-privacy">
        <i class="icon_select"></i>注册帐号即表示您同意并愿意遵守小米 <a href="javascript:void(0)" class="inspect_link agreement_link">用户协议</a>和<a href="javascript:void(0)" class="inspect_link privacy_link"> 隐私政策 </a>
      </label>
    </div>
  </div>
</script>
  <script type="template/register" id="email-step2">
  <div class="step3 email_step2">
    <dl>
      <dt><h4>即将使用&nbsp;<span class="address-place"></span>&nbsp;进行注册</h4></dt>
      <dd>
        <div class="inputbg">
          <label class="labelbox" for=""><input type="password" class="set-password" name="password" data-error=".error-password" placeholder="请输入密码"></label>
        </div>
      </dd>
      <dd>
        <div class="inputbg">
          <label class="labelbox" for=""><input type="password" name="repassword" data-error=".error-password" data-repeat=".set-password" placeholder="请输入确认密码"></label>
        </div>
        <div class="err_tip pwd_tip error-password" style="display:block;">
          <div class="dis_box"><em class="icon_error"></em><span data-origin="密码长度8~16位，数字、字母、字符至少包含两种">密码长度8~16位，数字、字母、字符至少包含两种</span></div>
        </div>
      </dd>
      <dd>
        <div class="inputbg inputcode">
          <label class="labelbox" for=""><input class="code" name="inputcode" type="text" autocomplete="off" placeholder="图片验证码"></label>
          <img alt="图片验证码" class="icode_image code-image" title="看不清换一张">
        </div>
        <div class="err_tip">
          <div class="dis_box"><em class="icon_error"></em><span></span></div>
        </div>
      </dd>
    </dl>
    <div class="fixed_bot mar_mail_dis2">
    <input class="btn332 btn_reg_1  submit-step" type="submit" value="提交">
    <input class="btn332 btn_reg_2  change-view" data-to="email-step1" type="button" value="上一步">
    </div>
  </div>
</script>
  <script type="template/register" id="email-step3">
  <div class="regbox">
    <div class="hintro">
      <p>还差一步，请激活您的帐号</p>
      <p>系统已经发送了一封激活邮件到您的邮箱 <span class="address-place ff6"></span></p>
      <p>点击邮件中的链接便可激活您的帐号</p>
    </div>
    <div class="fixed_bot mar_mail_dis3">
      <a class="btn332 btn_reg_1 email-host" target="_blank" href="javascript:void(0)">前往邮箱</a>
      <a class="btn332 btn_reg_2 go-back" href="/pass/serviceLogin?callback=https://account.xiaomi.com&amp;sid=passport">返回首页</a>
    </div>
    <div class="n_loss">
      <a href="javascript:void(0)" class="resend-email" title="点此重新发送激活邮件">点此重新发送激活邮件</a>
    </div>
  </div>
</script>
  <script type="template/register" id="phone-resend">
  <div class="step2 phone-resend">
    <div>
      <h4 class="pdbot10">请输入图片验证码</h4>
      <div class="inputbg inputcode">
        <label class="labelbox" for="">
        <input type="hidden" name="phone" class="resend-phone-val">
        <input class="code" name="icode" type="text" autocomplete="off" placeholder="图片验证码">
        </label>
        <img alt="图片验证码" class="icode_image code-image" title="看不清换一张">
      </div>
      <div class="err_tip">
        <div class="dis_box"><em class="icon_error"></em><span></span></div>
      </div>
      <div class="err_tip send-left-times">
      </div>
      <input class="btn332 btn_reg_1 submit-step" type="submit" value="确定">
      <a class="btn332 btn_reg_2 change-view" data-to="phone-step2" href="javascript:void(0)">返回</a>
    </div>
    <!--<a class="qst_txt dis_none unavailable-link" href="http://static.account.xiaomi.com/html/faq/faqSMSerror.html" target="blank" title="我为何收不到验证码？">我为何收不到验证码？</a>-->
  </div>
</script>
  <script charset="UTF-8" async="" src="/static/homes/register/gettype.php"></script>
  <script charset="UTF-8" async="" src="/static/homes/register/fullpage.8.6.4.js.下载"></script>
  <script charset="UTF-8" src="/static/homes/register/get.php"></script>
  <link href="/static/homes/register/style_https.1.5.3.css" rel="stylesheet" />
  <script type="template/register" id="phone-confirm">
<div class="regagabox phone-confirm">
  <div class="confirm_box">        
    <div class="single_imgarea">
      <div class="na-img-area marauto cursor_d">
        <div class="na-img-bg-area us-portraitUrl"></div>
      </div>          
      <p class="us_name us-userName"></p>
      <p class="us_id us-userId"></p>
    </div>
    <div class="pt10 pb40 t_c">这个小米帐号是你的吗？</div>      
  </div>
  <div class="fixed_bot">
    <a class="btn332 btn_reg_2 submit-token-login" href="#">是我的，直接登录</a>    
    <input class="btn332 btn_reg_2  change-view" data-to="phone-step3"  data-source="tokenRegister" type="button" value="不是我的，注册新帐号">
  </div>
</div>
</script>
 </head> 
 <body class="zh_CN"> 
  <script src="/static/homes/register/gt.js.下载">
</script> 
  <div class="wrapper"> 
   <div class="wrap"> 
    <div class="layout"> 
     <div class="n-frame device-frame reg_frame" id="main_container"> 
      <div class="external_logo_area">
       <a class="milogo" href="javascript:void(0)"></a>
      </div> 
      <div class="title-item t_c"> 
       <h4 class="title_big30">注册小米帐号</h4> 
      </div> 
      <div> 
       








<!-- 表单页面开始 -->


        @if(session('error'))
          {{session('error')}}
        @endif
      <form action="/register" method="post">
        <div class="regbox">
          <div class="email_step1 emailregbox">
            <h4 class="tit_normal">
              国家/地区
            </h4>
            <div class="listwrap select-regions" _region="CN">   
              <div class="listtit reg-select-regions">
                <div class="tits display_box c_b">
                  <p class="result-select-regions">中国</p>
                  <i class="icon_cirarr"></i>
                </div>
              </div>
            </div>
            <h4 class="tit_normal">
              邮箱
            </h4>
        
            <div class="inputbg">
              <input type='hidden' class="select-regions-input" name="region" value="CN"/>
              <label class="labelbox" for="">
                <input type="email" placeholder="请输入邮箱" name="email">
              </label>
            </div>
            <h4 class="tit_normal">
              密码
            </h4>
            <div class="inputbg">
              <label class="labelbox" for=""><input type="password" class="set-password" name="password" data-error=".error-password" placeholder="请输入密码"></label>
            </div>
            <div class="inputbg">
              <label class="labelbox" for=""><input type="password" name="repassword" data-error=".error-password" data-repeat=".set-password" placeholder="请输入确认密码"></label>
            </div>
            <div class="err_tip pwd_tip error-password" style="display:block;">
              <div class="dis_box"><em class="icon_error"></em><span data-origin="密码长度8~16位，数字、字母、字符至少包含两种">密码长度8~16位，数字、字母、字符至少包含两种</span></div>
            </div>
            
            <h4 class="tit_normal">
              图形验证码
            </h4>
            <div class="inputbg inputcode">
              <label class="labelbox" for="" style="vertical-align: middle;">
                <input class="code" type="text" name="fcode" autocomplete="off" placeholder="图片验证码" value="" >
              </label>
             
              <img alt="图片验证码" src="/code" onclick="this.src=this.src+'?a=1'" title="看不清换一张" height="40px" class="icode_image code-image" style="vertical-align: middle;">
          
            </div>
            <div class="err_tip">
              <div class="dis_box"><em class="icon_error"></em><span></span></div>
            </div>
            

            <div class="err_tip">
              <div class="dis_box"><em class="icon_error"></em><span></span></div>
            </div>
            <div class="err_tip err_invalid error-invalid">
              <div class="dis_box"><em class="icon_error"></em><span></span></div>
            </div>
            <div class="fixed_bot">
            {{csrf_field()}}
              <input class="btn332 btn_reg_1 submit-step" type="submit" value="立即注册">
              <div class="other_register_area">
                <input class="btn332 btn_reg_2 change-view" data-to="PHONE" type="button" value="用手机号码注册">
              </div>
            </div>
          </div>
        </div> 
       </form>




<!-- 表单页面结束 -->
       <div class="privacy_box"> 
        <div class="msg"> 
         <label class="n_checked now select-privacy"> <i class="icon_select"></i>注册帐号即表示您同意并愿意遵守小米 <a href="https://static.account.xiaomi.com/html/agreement/account/cn.html" class="inspect_link agreement_link" title="用户协议" target="_blank">用户协议</a>和<a href="https://www.mi.com/about/privacy/" class="inspect_link privacy_link" title=" 隐私政策 " target="_blank"> 隐私政策 </a> </label> 
        </div> 
       </div> 
      </div>
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
     <li><a class="a_critical" href="https://static.account.xiaomi.com/html/faq/faqList.html" target="_blank"><em></em>常见问题</a></li> 
    </ul> 
   </div> 
   <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a class="beianlink beian-record-link" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134"><span><img src="/static/homes/register/ghs.png" /></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p> 
  </div> 
  <style type="text/css">
  

    
</style> 
  <script src="/static/homes/register/jquery-1.8.3.min.js.下载"></script> 
  <script src="/static/homes/register/placeholder.js.下载"></script> 
  <script>
$(function(){
  /*==========初始化外部链接部分==========*/

    var URL_DATA={
      agreement:"https://static.account.xiaomi.com/html/agreement/account/cn.html",
      privacy:"https://www.mi.com/about/privacy/",
      login:"/pass/serviceLogin?callback=https://account.xiaomi.com&amp;sid=passport"
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
  callback:"https://account.xiaomi.com",
  sid:"passport",
  hidden:"",
  "_sign":"",
  privacyLink:'https://www.mi.com/about/privacy/',
  userId:"",
  cancel:"取消",
  cUserId:""
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
  <script src="/static/homes/register/countryCode.js.下载">
</script> 
  <script>
  function MiStore(key){
     this.key=key||"account.xiaomi.com";
  }
  MiStore.prototype={
    key:'account.xiaomi.com',
    _read:(!!window.localStorage? function() {
          var st = window.localStorage.getItem( this.key );
              st = new Function(  "" , "return " + st )();
          return typeof st=="object"  && !!st ? st : {};

      } : function(){
        return {};
      }),
    _save:(!!window.localStorage ? function( data ){
          window.localStorage.setItem( this.key  ,  JSON.stringify( data ) );
      } : function(){
        return false;
      }),
    _readAndGc:function( key ){
      var data=this._read();
      for(var p in data){
        var pdata=data[p];
        if(pdata.expires && (new Date()).getTime() - pdata.time >= pdata.expires ){
          delete data[p];
        }
      }
      this._save(data);
      return !!key ? data[key] : data ;
    },
    remove:function(key){
      var data=this._readAndGc();
      delete data[key];
      this._save( data );
    },
    get:function( key ){
      var data=this._readAndGc( key ) || {};
      return !!data.value ? data.value : null;
    },
    clear:(!!window.localStorage ? function(){
          window.localStorage.removeItem( this.key );
    } : function(){
        return false;
    }),
    set:function( key , item , expires ){
      if(!key){
        return false;
      }
      var data   = this._readAndGc();
      var timestr= (new Date()).getTime();
      data[key] = { value : item , expires: expires , time: timestr } ;
      this._save( data );
    }
  }
  window.LStore=new MiStore("account.xiaomi.com");
  var log=(function(){
    var logs=[];
    function addLog(title,message,more){
      logs.push({title:title,message:message,more:more,time:getFormatTime(new Date)})
      if((location.search+"").indexOf("debug")!==-1){
         ('console' in window && (typeof window.console.log==='function')) && console.log(arguments);
      }
    }
    return {
      add:addLog
    }
  })();
  function getFormatTime(date){
    return date.getFullYear()+"-"+
           (date.getMonth()+1)+"-"+
           date.getDate()+" "+ 
           date.getHours() +":"+
           date.getMinutes() +":"+
           date.getSeconds() +":"+
           date.getMilliseconds();
  }
</script> 
  <script>

(function(){
  /*配置部分*/
  var lockSubmit=0;
  var HOLDTIMES=60;
  var SEND_STATUS_TC=null;
  var checkUserSyncTC=null;
  var user_synced_time=0;
  // var jsonConfig={"Config":{"client.update.interval":86400,"local.idc.area":"China","register.check.timeout":10,"default.domain":"account.xiaomi.com"},"Singapore":{"register.domain":"global.account.xiaomi.com","name":"Singapore","region.codes":["LV","LU","LT","GB","HR","RO","HU","FR","BG","BE","DE","FI","DK","IE","CZ","AT","CY","SE","SI","SK","IT","MT","PL","PT","GR","ES","NL","EE"]},"Russia":{"register.domain":"ru.account.xiaomi.com","name":"Russia","region.codes":["RU"]},"China":{"register.domain":"cn.account.xiaomi.com","name":"China","region.codes":["CN"]},"India":{"register.domain":"in.account.xiaomi.com","name":"India","region.codes":["IN"]}};
  var registerDomain=jsonConfig['Config']['default.domain'];
  var syncInterval=jsonConfig['Config']['register.check.timeout'];
  var defaultRegion='CN';
  var registerMethods=["PH"];
  log.add('jsonConfig',jsonConfig);
  log.add('registerDomain',registerDomain);
  log.add('syncInterval',syncInterval);
  log.add('defaultRegion',defaultRegion);
  log.add('registerMethods',registerMethods);
  /*以参数为先*/
  var captchaType=(function(){
    var type=getParam("_captchaType")||'gee';
    var res=["gee","img"];
    if($.inArray(type, res)>-1){
      return type;
    }
    return "img";
  })();
  /*-----------------------------------Geetest Start----------------------------*/
  var glastType=-1,gTryTimes=0;
  (function() {
    var head = document.getElementsByTagName('head')[0];
    var append = head.appendChild;
    head.appendChild = function(script) {
      var src = script.src;
      if (src && src.indexOf('ajax.php') > -1) {
        var paraArr = (src.substring(src.indexOf('?') + 1, src.length)).split('&');
        for(var i=0;i<paraArr.length;i++){
          var tmp=paraArr[i];
          if(tmp.indexOf('callback') > -1){
            var fnName = tmp.substring(tmp.indexOf('=') + 1, tmp.length);
            var jsonpFn = window[fnName];
            window[fnName] = function(res) {
              var type=-1,
              pass=(res.message==='success'||(!!res.data&&res.data.result==='success'));
              if (res.data&&res.data.result&&gTryTimes===0) {
                type=$.inArray(res.data.result,['success','slide','click']);
                glastType=type;
              }else{
                type=glastType;
              }
              var info={add:CurrentConf.data.phone,st:'-1',g:{t:type,p:pass,m:new Date().valueOf(),n:gTryTimes,o:res}};
              gTryTimes++;
              if(!matchAndroidVersion()){
                Pensieve.run(info);
              }
              jsonpFn.call(window, res);
            }
            break;
          }
        }
      }
      var len=document.getElementsByTagName("script")[0].parentNode.getElementsByTagName("script").length;
      var s = document.getElementsByTagName("script")[len-1];
      s.parentNode.insertBefore(script, s);
    }
  })();

  var Geetest={
    isOn:captchaType==='gee',// _gee=true时使用geetest
    isPassed:true,
    icodeType:'register',
    captchaObj:{},
    conf:{},
    data:{},
    init:function () {
      var self=this;
      if (!self.isOn) {
          return;
      }
      $.ajax({
        url: "/pass/v2/getCode?t=" + (new Date()).getTime(),
        type: "GET",
        dataType: "text",
        data:{
          icodeType:self.icodeType
        },
        success: function(data) {
            try {
                data = $.parseJSON(data.replace('&&&START&&&', ''));
            } catch (e) {}
            var locale={
              'zh_CN':'zh-cn',
              'zh_TW':'zh-tw'
            }
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                new_captcha: true,
                offline: !data.success,
                lang:locale['zh_CN']||'en',
                timeout: '5000',
                product: "bind"
            },function (captchaObj) {
              self.captchaObj=captchaObj;
              captchaObj.onSuccess(function () {
                self.verifySuccess(self.conf.data.phone,function () {
                  self.isPassed=true;
                  sendPhoneTicket(self.conf,self.data);
                })
              })
            });
          }
      })
    },
    startVerify:function (conf,data) {
      var self=this;
      self.conf=conf;
      self.data=data;
      self.captchaObj.verify();
    },
    verifySuccess:function (user,callback) {
      var self=this;
      var result = self.captchaObj.getValidate();
      if (result) {
        $.ajax({
            url: "/pass/v2/verifyCode?t=" + (new Date()).getTime(),
            type: "POST",
            data: {
                hash:Pensieve.h,
                icodeType:self.icodeType,
                user:user,
                geetest_challenge: result.geetest_challenge,
                geetest_validate: result.geetest_validate,
                geetest_seccode: result.geetest_seccode
            },
            dataType: "text",
            success: function(data) {
                try {
                    data = $.parseJSON(data.replace('&&&START&&&', ''));
                } catch (e) {}
                if (data.status === 'success') {
                  callback();
                }else{
                  self.captchaObj.reset();
                }
            }
        });
      }
    }
  }
  Geetest.init();
   /*-----------------------------------Geetest End----------------------------*/

  var EMAIL=[{
    key:"email-step1",
    type:"EM"
  },{
    key:"email-step2",
    icode:true,
    action:"/pass/register"
  },{
    key:"email-step3",
    action:"/pass/ajax/sendActivateMessage",
    resendEmail:".resend-email"
  }];
 /*PHONE step配置*/
  var PHONE=[{
    key:"phone-step1",
    selectCty:true,
    icode:true,
    type:"PH",
    checkUser:'/pass/user@externalIdBinded',
    action:'/pass/sendPhoneRegTicket'
  },{
    key:"phone-step2",
    sendStatus:".send-status",
    sendAction:'/pass/sendPhoneRegTicket',
    action:'/pass/verifyRegPhone',
    resend:true
  },{
    key:"phone-step3",
    action:"/pass/tokenRegister",
    tokenAction:"/pass/tokenRegister"
  },{
    key:"phone-step4"
  },{
    key:"phone-resend",
    icode:true
  },{
    key:"phone-confirm"
  }];
  /*是否设置 beforeunload */
  var PAGE_UNLOAD=false;
  var UNLOAD_INIT=false;
 /*send data*/
  var sendData={
  }
  /*图片验证码及图形验证码输错次数*/
  var err_time={captcha:0,ticket:0};
  var MSG={
    phone_empty:"请输入手机号码",
    phone_ruleError:"手机号码格式错误",
    PH_registed:"手机号码已被注册，请更换，或<a class='col_54a' href='/pass/serviceLogin?callback=https://account.xiaomi.com&amp;sid=passport' title='立即登录'>立即登录</a>",
    EM_registed:"邮箱已被注册，请更换邮箱，或<a class='col_54a' href='/pass/serviceLogin?callback=https://account.xiaomi.com&amp;sid=passport' title='立即登录'>立即登录</a>",
    icode_empty:"请输入图片验证码",
    icode_ruleError:"图片验证码错误",
    icode_resError:"图片验证码错误",
    inputcode_empty:"请输入图片验证码",
    inputcode_ruleError:"图片验证码错误",
    inputcode_resError:"图片验证码错误",
    send_hold:"重新发送{time}",
    send_again:"重新发送",
    nochance:"您今天已经发送太多短信，请换个时间或者改用其他号码",
    leftTimesText:"您今天还能发送{left}条短信",
    ticket_empty:"请输入短信验证码",
    ticket_ruleError:"验证码错误或已过期",
    ticket_resError:"验证码错误或已过期",
    password_empty:"请输入密码",
    password_ruleError:"密码长度8~16位，数字、字母、字符至少包含两种",
    repassword_empty:"请输入确认密码",
    repassword_ruleError:"密码输入不一致",
    bindQuota_error:"此手机在一段时间内绑定了过多的小米帐号，请换个手机号码试试",
    email_empty:"请输入邮箱",
    email_ruleError:"邮箱格式错误",
    icode_sendError:"发送验证码失败",
    other_Error:"系统错误，请稍后再试",
    ph_ruleError:"手机号码格式错误",
    param_error:"参数错误",
    tokenExpire_error:"验证已过期，请重新开始注册",
    fail_error:"注册失败请稍后重试",
    cancel:"取消",
    reg_fail:"注册时候发生错误",
    reg_error:"注册失败，检查网络或稍后再试！",
    privacy_error:"请您同意用户条款",
    system_error:"系统错误，请稍候再试",
    email_validate_error:"邮箱前缀点号不能超过两个"
  };
  var QS='callback=https://account.xiaomi.com&sid=passport';
  var Default=PHONE[0];
  var CurrentConf=null;
  var specialEmailhost={
    "gmail.com":"gmail.com"
  }
  var prefixUserLogin='/pass/userLogin?';
  
 /*使用其他帳號登錄*/
  //从qs中得出callback、sid 覆盖默认
  JSP_VAR.third="";
  function matchAndroidVersion(){
    var ua=navigator.userAgent;
    var uaArr=['Android 4.3','Android 4.2','Android 4.1','Android 4.0'];
    for(var i=0;i<uaArr.length;i++){
      if(ua.indexOf(uaArr[i])>0){
        return true;
      }
    }
    return false;
  }
  function getParam(key){
    var search=location.search.substring(1);
    var params=search.split("&");
    var i=0,p,index,result="";
    for(;p=params[i++];){
      index=p.indexOf("=");
      if(p.substring(0,index)===key){
        result=p.substring(index+1);break;
      }
    }
    return result;
  }
  function setParam(paramName,paramValue){
    var searchUrl=location.search;
    var param=searchUrl.substring(1).split('&');
    for(var i=0;i<param.length;i++){
      if(param[i].indexOf(paramName)===0){
        param.splice(i,1);
        i--;
      }
    }
    return param='?'+param.join('&')+'&'+paramName+'='+paramValue;
  }
  function getOtherLoginUrl(key){
    var prefix="https://account.xiaomi.com/pass/sns/login/auth?";
    var urlFollowup=decodeURIComponent(getParam("third"));
    var appId={
      urlQq:"100284651",
      urlSina:"2996826273",
      urlAlipay:"2088011127562160",
      urlFacebook:"222161937813280"
    }
    /*
    if(JSP_VAR.sid !== "passport"){
      prefix="https://hd.account.xiaomi.com/pass/sns/login/auth?";
    }
    */
    if (!urlFollowup) {
      urlFollowup = encodeURIComponent(JSP_VAR.callback)+ "&sid=" + JSP_VAR.sid;
    }
    var result={};
    for(var app in appId){
      result[app]=[prefix,"appid="+appId[app],"&callback="+urlFollowup].join("");
    }
    return (key in result)?result[key]:result;
  }
  function codeIndata(cty,data){
    data=data||[];
    for(var i=0,n;n=data[i++];){
      if(cty===n.B){
        return true;
      }
    }
    return false;
  }
  
/*视图切换*/
  var VIEWS={};
  var $container=$("#main_container");
  function changeStepView(conf){
    var key=conf.key;
    if( key.indexOf("step1") === -1 ){
      PAGE_UNLOAD=true;
    }
    var view=VIEWS[key];
    var init=false;
    if(!view){
      init=true;
      view=VIEWS[key]=initView(conf);
    }
    for(var p in VIEWS){
      VIEWS[p] && (VIEWS[p]!==view) && (VIEWS[p].hide());
    }
    CurrentConf=conf;
    view.show();
    if(!init){
      conf.inputs.filter("[type!=hidden]").val("").blur();
      conf.inputs.filter("[type!=hidden]").each(function(){
        showError($(this));
      });
      conf.icode&&conf.icodeImage.trigger("click");
    }
    /*顯示地址信息*/
    if(conf.addressPlace.length && conf.data){
      var address="  "+conf.data.email;
      if(conf.data.phone){
        if(CurrentCyCode=="+86"){
          address="+86 "+conf.data.phone;
        }else{
          address=conf.data.phone.replace(CurrentCyCode,CurrentCyCode+" ");
        }
      }
      conf.addressPlace.text(address);
    }
    /*重发验证短信的input hidden 更新*/
    if(conf.key==='phone-resend'){
      $(".resend-phone-val",view).val(conf.data.phone||"");
    }
    /*初始化view时添加 sns login链接 或者登陆链接*/
    if(init){
       $(".sns-login-facebook",view).attr("href",getOtherLoginUrl("urlFacebook"));
       //$(".login-redirect",view).attr("href","/pass/serviceLogin?"+QS);
       $(".go-back",view).attr('href',location.protocol+'//'+registerDomain+"/pass/serviceLogin?"+QS);
    }    
  }
  function initView(conf){
    var key=conf.key;
    var html=$("#"+key).html();
    var view=$("<div>");
    if(conf.key==='phone-step1'){
      view.append(html);
      /*facabook註冊登錄影響了原有的居中結構寬度*/
      //view.append( $("<div>").addClass("regbox").html(html+"") );
      //view.append( $( $("#other-register").html() ) );
    }else if(conf.key==='email-step1'){
      view.append(html);
    }else{
      view.addClass("regbox").html(html+"");
    }
    $container.append(view);
    if (conf.key==='phone-step1'&&Geetest.isOn) {
      $('.override').remove();
    }
    conf.inputs=view.find("input[name]");
    conf.sendStatus=conf.sendStatus && $(conf.sendStatus,view);
    conf.addressPlace=$(".address-place",view);
    conf.changeView=$(".change-view",view);
    conf.leftTimesCon=$(".send-left-times",view);
    conf.mailHost=$(".email-host",view);
    conf.unavailableMsg=$(".verify-unavailable",view);
    conf.selectRegions=$(".select-regions",view);
    conf.selectRegionsBtn=$(".reg-select-regions",view);
    conf.selectRegionsResult=$(".result-select-regions",view);
    conf.selectRegionsInput=$(".select-regions-input",view);
    conf.registerUserId=$(".user-id",view);
    conf.loginRedirectUrl=$(".login-redirect",view);
    conf.selectPrivacy=$('.select-privacy',view);
    if(conf.resendEmail){
      conf.sendStatus=conf.resendEmail=$(conf.resendEmail,view);
    }
    bindEvents(conf,view);
    return view;
  }
  function bindEvents(conf,view){
    if(conf.icode){
      conf.icodeImage=$(".code-image",view).addClass("chkcode_img");
      setIcodeUrl(conf.icodeImage);
      conf.icodeImage.click(function(){
        clearTimeout(conf.icodeImageRefresh);
        conf.icodeImageRefresh=setTimeout(function(){
            setIcodeUrl(conf.icodeImage);
        },200)
      });
    }
    if(conf.selectCty){
      conf.selectBtn=$("#reg-phone-select-cty");
      conf.selectCyPanel=$("<div>").addClass("country-container-panel");
      var html="<div class='search-code'><i class='icon_search'></i><input type='text' class='search-code-input'></div>";
      html+=RegionsCode.getAll({'usual':"常用"},true);
      conf.selectCyCon=$("<div>").addClass("country-container").html(html);
      conf.selectCycode=$("#select-cycode");
      conf.selectCyPanel.append(conf.selectCyCon);
      conf.selectCycode.append(conf.selectCyPanel);
      conf.searchCodeInput=$(".search-code-input",conf.selectCyCon);
      conf.selectBtn.click(function(){
        conf.selectCyPanel.toggle();
        return false;
      });
      conf.selectCyCon.delegate(".record","click",function(){
        //选择国家代码
        var that=$(this);
        var el=that.find(".record-country")
        var country=$.trim( el.text() );
        var code=el.attr("data-code");
        setSelectResult(country,code);
        conf.selectCyPanel.hide();
        return false;
      });
      $(document).bind("click",function(){
        if(!conf.selectCyPanel.is(":hidden")){conf.selectCyPanel.toggle()}
      });
      $(conf.selectCyPanel).bind('click',function(){
        return false;
      });
      var countainerCancel=$(".btn-cancel",conf.selectCyCon);
      if(countainerCancel){
        countainerCancel.bind('click',function(){
          conf.selectCyPanel.hide();
          return false;
        });
      }
    }
    if(conf.selectRegions.length){
      var tRegion=getParam('_uRegion');
      tRegion && conf.selectRegions.attr('_region',tRegion);
      (tRegion && conf.selectCycode) && conf.selectCycode.attr('_region',tRegion);
      conf.selectRegionsPanel=$("<div>").addClass("country-container-panel");
      var html="<div class='search-code'><i class='icon_search'></i><input type='text' class='search-code-input'></div>";
      html+=RegionsCode.getAll({'usual':"常用"});
      conf.selectRegionsCon=$("<div>").addClass("country-container").html(html);
      conf.selectRegionsPanel.append(conf.selectRegionsCon);
      conf.selectRegions.append(conf.selectRegionsPanel);
      conf.searchRegionsCodeInput=$(".search-code-input",conf.selectRegionsCon);
      conf.selectRegionsBtn.click(function(){
        conf.selectRegionsPanel.toggle();
        return false;
      });
      conf.selectRegionsCon.delegate(".record","click",function(){
        //选择国家代码
        var that=$(this);
        var el=that.find(".record-country")
        var country=$.trim( el.text() );
        var brief=el.data("brief");
        $('.result-select-regions').text( country )
        conf.selectRegionsInput.val(brief);
        var briefCode = RegionsCode.search(brief);
        setSelectResult(country,briefCode.N);
        conf.selectRegionsPanel.hide();
        setJumpToRegionUrl(brief);
        return false;
      });
      var _brief = RegionsCode.search(conf.selectRegions.attr('_region'));
      if(_brief){
        $('.result-select-regions').text( _brief.C );
        conf.selectRegionsInput.val(_brief.B);
      }
      $(document).bind("click",function(){
        if(!conf.selectRegionsPanel.is(":hidden")){conf.selectRegionsPanel.toggle()}
      });
      $(conf.selectRegionsPanel).bind('click',function(){
        return false;
      });
      var countainerCancel=$(".btn-cancel",conf.selectRegionsCon);
      if(countainerCancel){
        countainerCancel.bind('click',function(){
          conf.selectRegionsPanel.hide();
          return false;
        });
      }
    }
    if(JSP_VAR.deviceType==='mobile'){
      var navBar=$('.navbar',view);
      navBar.delegate('a','click',function(e){
        var el=$(this);
        var codeContainerCon=el.closest('.country-container').find('.country-code');
        var scroll=codeContainerCon.scrollTop();
        var letter=el.attr('to');
        var letterBox=codeContainerCon.find('.countrycode-container-'+letter);
        while(letterBox.length===0){
          el=el.prev();
          letterBox=codeContainerCon.find('.countrycode-container-'+el.attr('to'));
        }
        var top=letterBox.offset().top;
        codeContainerCon.scrollTop(scroll+top);
        return false;
      });
    }else{
      var searchCodeInput=$(".search-code-input",view);
      searchCodeInput.bind('input change propertychange',function(){
        var val=$(this).val();
        var codeContainer=$(this).closest('.country-container');
        if(val.length>0){
          codeContainer.addClass('search-mode');
          var data=RegionsCode.searchLikeData(val);
        }else{
          codeContainer.removeClass('search-mode');
          return false;
        }
        var recodeCode=codeContainer.find(".record-country");
        recodeCode.each(function(index,item){
          var item=$(item);
          var cty=item.data("brief");
          if(codeIndata(cty,data)){
            item.parent().addClass('selected');
          }else{
            item.parent().removeClass('selected');
          }
        });
      });
    }
    if(conf.selectPrivacy.length){
      conf.selectPrivacy.bind('click',function(e){
        var target=e.target;
        if(!$(target).hasClass('inspect_link')){
          $('.error-invalid',view).hide();
          if(conf.selectPrivacy.hasClass('now')){
            conf.selectPrivacy.removeClass('now');
          }else{
            conf.selectPrivacy.addClass('now');
          }
        }
      });
    }
    if(conf.changeView){
      conf.changeView.bind("click",function(){
        var to=conf.changeView.data("to");
        if(to==="EMAIL"){
          changeStepView(EMAIL[0]);
        }else if(to==="PHONE"){
          changeStepView(PHONE[0]);
        }else if(to==="phone-step1"){
          changeStepView(PHONE[0]);
          clearTimeout(SEND_STATUS_TC);
        }else if(to==='phone-step2'){
          changeStepView(PHONE[1]);
        }else if (to==='email-step1'){
          changeStepView(EMAIL[0]);
        }else if(to==='phone-step3'){
          if(conf.changeView.data("source")==='tokenRegister'){
            new Image(1,1).src='/pass/ajax/tick?biz=register&type=web&step=3';
            new Image(1,1).src='/pass/ajax/tick?biz=NotSureRecycleRegister&type=web&step=end_Register';
            PHONE[2].data=conf.data;
            PHONE[2].action="/pass/tokenRegister";
          }
          changeStepView(PHONE[2]);
        }
        conf.leftTimesCon && conf.leftTimesCon.hide();
      });
    }
    conf.resendEmail && conf.resendEmail.bind("click",function(){
      resendEmail(conf);
    });
    if(conf.sendStatus && !conf.resendEmail){
      conf.sendStatus.bind("click",function(){
        !conf.sendStatus.hasClass("disabled") && resendPhoneTicket(conf);
      });
    }
    conf.inputs.filter("[placeholder]").miPlaceholder();
    conf.inputs.bind("focus",function(){
      startCheckValueChange(this);
    });
    conf.inputs.bind("blur",function(){
      stopCheckValueChange(this);
      testBlurError(conf,view,$(this));
    });
    conf.inputs.bind("valueChange",function(){
      showError($(this));
      conf.leftTimesCon && conf.leftTimesCon.hide();
    });
    conf.inputs.bind("keyup",function(e){
      if(e.keyCode===13){
        submitAction(conf,view,submit);
      }
    });
    var submit=$(".submit-step",view);
    submit.click(function(){
      submitAction(conf,view,submit);
    });
    if(conf.data && conf.data.email && conf.mailHost.length){
      conf.mailHost.attr("href",getMailhost(conf.data.email));
    }
    if(conf.data && conf.data.portraitUrl){
      //$('.us-portraitUrl').append($( new Image()).attr('src',conf.data.portraitUrl));
      var portraitUrl=conf.data.portraitUrl;
      var img=new Image();
      var avatorFileName=portraitUrl.split(".").slice(0,-1).join(".");
      var avatorSuffix=(portraitUrl.split(".").pop()).toLowerCase();
      var hdAvatorUrl="";
      if("|jpg|jpeg|png|gif|tiff|".indexOf("|"+avatorSuffix+"|")!==-1 && avatorFileName){
        hdAvatorUrl=avatorFileName+"_320."+avatorSuffix;
      }
      img.onload=img.oncomplete=function(){
        img.onload=img.oncomplete=null;
        $('.us-portraitUrl').append($(img));
        if(hdAvatorUrl){
          var hdimg=new Image();
          hdimg.onload=hdimg.oncomplete=function(){
            hdimg.onload=hdimg.oncomplete=null;
            $('.us-portraitUrl').append($(hdimg));
            $(img).remove();
          }
          hdimg.src=hdAvatorUrl;
        }
      }
      if(portraitUrl){
        //$('.us-portraitUrl').append($(new Image()).attr('src',portraitUrl));
        img.src=portraitUrl;
      }
    }
    if(conf.data && conf.data.userName){
      $('.us-userName').text(conf.data.userName);
    }
    if(conf.data && conf.data.phone){
      $('.register-ph-num').text(conf.data.phone);      
    }
    if(conf.data && conf.data.userId){
      $('.submit-token-login').attr('href',prefixUserLogin+QS+'&_user='+conf.data.userId);
      $('.us-userId').text(conf.data.userId);
      var userName=$('.us-userName').text();
      var userId=$('.us-userId').text();
      if(userName && userId && userName==userId){
        $('.us-userName').text("");
      }
    }
    if(conf.registerUserId.length && conf.userId){
      conf.registerUserId.text(conf.userId);
    }
  }
  function testBlurError(conf,view,el){
    var tmpval=el.val();
    var tmpName=el.attr("name")
    if(tmpval===""){
      showError(el,tmpName+"_empty");
    }else if(!testRuleError(tmpName,tmpval,el,view)){
      showError(el,tmpName+"_ruleError");
      if(tmpName==='icode'){
        el.val('');
        return;
      }
      if(tmpName=='password' || tmpName=='repassword'){
        new Image(1,1).src='/pass/ajax/tick?biz=register&type=web&step=error_pwd';
      }
    }else if(tmpName==='email' && !TestMailRuleError(tmpName,tmpval,el,view)){
      showError(el,'email_validate_error');
    }
  }
  function startCheckValueChange(input){
    var _check=function(){
      if(input.value!==input._oldValue){
        /*if(input.value==="" && (input.name==='icode' || input.name==='inputcode')){
          input._oldValue=input.value;return false;
        }*/
        input._oldValue=input.value;
        $(input).trigger("valueChange");
      }
      input.__valuechangetc=setTimeout(_check,300);
    }
    _check();
  }
  function stopCheckValueChange(input){
    clearTimeout(input.__valuechangetc);
  }
  function getMailhost(email){
    var host=email.split("@")[1];
    host=(host in specialEmailhost)?specialEmailhost[host]:"mail."+host;
    return "http://"+host
  }
  
  function submitAction(conf,view,submit){
    verifyView(conf,view,function(result){
      if(result && result.length){
        var data={};
        for(var i=0;i<result.length;i++){
          data[result[i].name]=result[i].value;
        }
        conf.data=$.extend(conf.data||{},data);
        var address=data.phone || data.email;
        if(conf.type){
          checkBind(conf,address,function(type,address,available){
            if(available){
              submitData(conf,conf.data)
            }else{
              var filter=type=="PH"?"[name=phone]":"[name=email]";
              showError(conf.inputs.filter(filter),type+"_registed");    
            }
          });
        }else{
          submitData(conf,conf.data)
        }
      }
    });
  }

  function submitData(conf,data){
    if(conf.key==='phone-step1'){
      if(!matchAndroidVersion()){
        var info={add:data.phone,st:'0'};
        Pensieve.run(info);
      }
      if (Geetest.isOn&&!Geetest.isPassed) {
        Geetest.startVerify(conf,data);
        return;
      }
      sendPhoneTicket(conf,data);
    }
    if(conf.key==='phone-step2'){
      //data.mock=1; //测试是否是回收号，对应接口返回的status，1可能2一定不是
      verifyPhoneTicket(conf,data);
    }
    if(conf.key==='phone-step3'){
      new Image(1,1).src='/pass/ajax/tick?biz=register&type=web&step=4';
      register(conf.data,conf);
    }
    if(conf.key==='email-step1'){
      EMAIL[1].data=conf.data;
      changeStepView(EMAIL[1]);
      if(!matchAndroidVersion()){
        var info={add:data.email,st:'1',err:err_time};
        Pensieve.run(info);
      }
    }
    if(conf.key==='email-step2'){
      var data=conf.data;
      data.env="web";
      register(data,conf);
    }
    if(conf.key==='phone-resend'){
      sendPhoneTicket(conf,data);
    }    
  }
  function verifyView(conf,view,callback){
    var inputs=conf.inputs;
    var result=[],tmpval,tmpRule,tmp,error=0;
    for(var i=0;tmp=inputs[i++];){
      error=0;
      tmpval=$(tmp).val();      
      tmpName=$(tmp).attr("name"); 
      tmpRule=$(tmp).attr("rule");
      /*非密码trim*/
      if(tmpName!=="password" && tmpName!=='repassword'){
        tmpval=$.trim(tmpval);
      }
      if(tmpName){
        if(tmpval===""){
          showError($(tmp),tmpName+"_empty");
          error++;
        }else if(!testRuleError(tmpName,tmpval,$(tmp),view)){
          showError($(tmp),tmpName+"_ruleError");
          error++;
        }else{
          if(tmpName==='email' && !TestMailRuleError(tmpName,tmpval,$(tmp),view)){
            showError($(tmp),'email_validate_error');
            error++;
          }
          if(conf.selectPrivacy.length && !conf.selectPrivacy.hasClass('now')){
            showError($('.error-invalid',view),'privacy_error',true);
            error++;
          }
          result.push({
            name:tmpName,
            value:(tmpName==='phone' && CurrentCyCode!="+86" && tmpval.indexOf("+")!==0)
                  ? CurrentCyCode+""+tmpval
                  : tmpval
          });
        }
      }
      if(error){
        break;
      }
    }
    callback && callback(error?false:result);
  }
  var arrErrorFilter=['privacy_error'];
  function showError(el,key,hideBorder){
    var msg=MSG[key] || key;
    if(!el.label){
      el.label=el.parent();
      el.errorCon=el.data("error")
                  ? $(el.data("error"))
                  : el.label.parent().next();
    }
    if(msg){
      if($.inArray(key,arrErrorFilter)!==-1){
        el.label=el;
        el.errorCon=el;
      }
      !!hideBorder ? el.removeClass("err_label") : el.label.addClass("err_label");
      if(!el.errorCon.find(".dis_box span").length){
        el.errorCon.html(msg);
      }else{
        el.errorCon.find(".dis_box span").html(msg);
      }      
      el.errorCon.removeClass("pwd_tip");
      el.errorCon.show();
    }else{
      el.label.removeClass("err_label");
      if(el.data("error")==='.error-password'){
        el.closest('dl').find('[type=password]').parent().removeClass('err_label');
        el.errorCon.addClass("pwd_tip");
        el.errorCon.show();
        var span=el.errorCon.find(".dis_box span");
        span.html(span.data("origin"));
      }else{
        el.errorCon.hide();
      }
    }
  if(key === 'PH_registed'){
    var phrBeacon = window.__phrBeacon = new Image;
    phrBeacon.onload = phrBeacon.onerror = function(){
      window.__phrBeacon = null;
      phrBeacon = null;
    };
    phrBeacon.src = '/pass/ajax/tick?biz=register&step=end_registered';
  }
  if(key === 'EM_registed'){
    var emrBeacon = window.__emrBeacon = new Image;
    emrBeacon.onload = emrBeacon.onerror = function(){
      window.__emrBeacon = null;
      emrBeacon = null;
    };
    emrBeacon.src = '/pass/ajax/tick?biz=register&step=end_registered';
  }
  }
  function testRuleError(tname,val,tmp,view){
    if(tname==='phone'){
      var rule=getPhoneRule(CurrentCyCode);
      return RegExp(rule).test($.trim(val));
    }else if(tname==='icode' || tname==="inputcode"){
      return /^\w{4,8}$/.test(val)  
    }else if(tname==='email'){
      return /^[\w.\-]+@(?:[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*\.)+[A-Za-z]{2,6}$/.test(val);
    }else if(tname==='ticket'){
      return /^\d{4,8}$/.test(val);
    }else if(tname==='password'){
      return !(val.length<8 || 
              val.length>16 || 
              /^\d+$/.test(val) ||
              /^[A-Za-z]+$/.test(val) ||
              /^[^A-Za-z0-9]+$/.test(val)
             );
    }else if(tname==='repassword'){
      return val===$( $(tmp).data("repeat") , view).filter("[name]").val();
    }
    return true;
  }
  function TestMailRuleError(tname,val,tmp,view){
    var rst=/^([\w.\-]+)@(?:([A-Za-z0-9]+)(?:-[A-Za-z0-9]+)*\.)+[A-Za-z]{2,6}$/.test(val);
    var preMail=RegExp.$1;
    var filterArr=['gmail','googlemail']
    if($.inArray(RegExp.$2,filterArr)!==-1){
      var preMail=RegExp.$1;
      if(preMail.match(/\./g) && preMail.match(/\./g).length>2){
        return false;
      }
    }
    return true;
  }
  function getPhoneRule(cycode){
    if(cycode=="+86"){
      return "^1([2-9])\\d{9}$";
    }else{
      //return "^\\+?\\d{6,}$";
      return "^\\+?(?:(0[1-9]\\d{4,})|([1-9]\\d{5,}))$";
    }
  }
  var CurrentCyCode="+86";
  function setSelectResult(country,code){
    var _c=(code+"").replace(/^0+/,function(){return "+"});
    $("#select-cycode-result").html(_c);
    CurrentCyCode=_c;
  }
/*公用方法*/
  function getCookie(key) {
    var cookieArray = document.cookie.split(';');
    var val = "";
    for (var i = 0; i < cookieArray.length; i++) {
      if ($.trim(cookieArray[i]).substr(0, key.length) == key) {
        val = $.trim(cookieArray[i]).substr(key.length + 1);
        break;
      }
    }
    return unescape(val);
  }
  function setCookie(c_name, value, path, domain){
    document.cookie=c_name+ "=" + escape(value) + ";path=" + path + ";domain=" + domain;
  }
  function setJumpToRegionUrl(brief,force){
    //var localIDC = jsonConfig["Config"]["local.idc"];
    selected_config = '';
    for(i in jsonConfig){
      if(i == 'Config'){
        continue;
      }
      idcConfig = jsonConfig[i];
      matched = false;
      for(idx in idcConfig["region.codes"]){
        if(brief === idcConfig["region.codes"][idx]){
          matched = true;
          break;
        }
      }
      if(matched){
        selected_config = idcConfig;
        break;
      }
    }
    if(selected_config){
      log.add('selected_config',selected_config);
      var _href='';
      if(location.hostname != selected_config["register.domain"]){
        if(force){
          _href = location.protocol + "//" + selected_config["register.domain"] + location.pathname + location.search;
          log.add('location',_href);
          location.href = _href;
        }else{
          var params=setParam('_uRegion',brief);
          _href = location.protocol + "//" + selected_config["register.domain"] + location.pathname + params;
          log.add('location',_href);
          location.href = _href;
        }
      }
    }else if(location.hostname !== registerDomain){
      if(force){
        _href = location.protocol + "//" + registerDomain + location.pathname + location.search;
        log.add('location',_href);
        location.href = _href;
      }else{
        var params=setParam('_uRegion',brief);
        _href = location.protocol + "//" + registerDomain + location.pathname + params;
        log.add('location',_href);
        location.href = _href;
      }
    }
  }
  function setIcodeUrl(icodeImage){
    icodeImage.attr("src","/pass/getCode?icodeType=register&"+(new Date().getTime()));
    icodeImage.parent().find("[name$='code']").val("");
  }
  function checkBind( conf , address , cb ){
    var type=conf.type;
    if(type==='PH'){
      cb && cb(type,address,true);
      return;
    }
    var l_check=LStore.get(type+address);
    if( l_check==='registed' ){
      cb && cb(type,address,false);
    }else if(l_check==='available'){
      cb && cb(type,address,true);
    }else{
      $.ajax({
        url:'/pass/user@externalIdBinded',
        dataType:'text',
        type:'GET',
        data:{
          externalId:address ,
          type:type 
        },
        success:function(data){
          var json={};
          try{
            json=$.parseJSON(data.replace('&&&START&&&',''));
          }catch(e){}
          var available=true;
          if(json.code===0){
            if(json.data){
              if(json.data.userId>0){
                LStore.set(type+address,"registed",2*6e4);
                available=false;
              }else{
                LStore.set(type+address,"available",2*6e4);
              }
            }
            cb && cb(type,address,available);
          }else if(json.code===10017){
            var filter=type=="PH"?"[name=phone]":"[name=email]";
            showError(conf.inputs.filter(filter),'param_error');
          }else{
            var filter=type=="PH"?"[name=phone]":"[name=email]";
            showError(conf.inputs.filter(filter),'system_error');
          }
        }
      });
    }
  }
  function sendPhoneTicket(conf,data){
    var phone=data.phone;
    var send=sendData[phone];
    if(!send){
      send=(sendData[phone]={left:0,times:0});
    }
    if(!send.initQuota){
      checkSMSQuota(phone,function(left){
        send.left=left;
        send.initQuota=1;
        //send.infoQuota=left;
        sendTicket(conf,data);
      });
    }else{
      sendTicket(conf,data);
    }
  }
  function sendTicket(conf,data){
    new Image(1,1).src='/pass/ajax/tick?biz=register&type=web&step=1';
    var phone=data.phone;
    var send=sendData[phone];
    if(send.left===0){
      showLeftTimes(conf,send.left);
      return;
    }
    if(send.sending){
      sendSuccess(conf,send,true);
      return;
    }
    send.sending=true;
    $.ajax({
      url:'/pass/sendPhoneRegTicket',
      type:"post",
      data:data,
      dataType:"text",
      success:function(text){
        send.sending=false;
        var json={};
        try{
          json=$.parseJSON(text.replace('&&&START&&&',''));
        }catch(e){}
        if(json.code===0){
          send.left=Math.max(send.left-1,0);
          send.hold=(send.times+=1)*HOLDTIMES;
          sendSuccess(conf,send);
        }else if(json.code===87001 || json.code===20031){
          err_time.captcha++;
          needCaptcha(conf,data);
          showError(conf.inputs.filter("[name=icode]"),"icode_resError");
          new Image(1,1).src='/pass/ajax/tick?biz=register&type=web&step=error_captcha';
          sendFail(conf,send);
        }else if(json.code===70022){
          showLeftTimes(conf,(send.left=0));
          sendFail(conf,send);
          showError(conf.inputs.filter("[name=icode]"),"icode_sendError");
        }else if(json.code===70008){
          showError(conf.inputs.filter("[name=phone]"),"ph_ruleError");
        }else if(json.code===10017){
          showError(conf.inputs.filter("[name=icode]"),"ph_ruleError");
        }else{
          showError(conf.inputs.filter("[name=icode]"),"other_Error");
        }
      },
      error:function(){
        send.sending=false;
        sendFail(conf,send);
      }
    });
  }
  function needCaptcha(conf,data){
    if (Geetest.isOn) {
      Geetest.isPassed=false;
      Geetest.startVerify(conf,data);
      return;
    }
    var phone=conf.data.phone;
    var send=sendData[phone];
    if(send.left>0){
      if(conf.icodeImage){
        setIcodeUrl(conf.icodeImage);
      }else{
        PHONE[4].data=conf.data;
        changeStepView(PHONE[4]);
      }
    }
  }
  function sendSuccess(conf,send,nocheck){
    var leftTimesConf=conf;
    if(conf.key==='phone-step1'|| conf.key==='phone-resend'){
      PHONE[1].data=conf.data;//转移data;  太土了
      changeStepView(PHONE[1]);
      leftTimesConf=PHONE[1]
    }
    if(conf.key==='phone-step1'){
      if(!matchAndroidVersion()){
        var info={add:conf.data.phone,st:'1',err:err_time};
        Pensieve.run(info);
      }
    }
    showLeftTimes(leftTimesConf,send.left);
    showUnavailableMsg(leftTimesConf,send.times);
    if(nocheck){return};
    text=MSG.send_hold;
    var check=function(){
      send.hold--;
      var t=text.replace("{time}","("+send.hold+")");
      if(send.hold>=1){
        changeSendStatus(t,true);
        SEND_STATUS_TC=setTimeout(function(){
          check();
        },980);
      }else{
        changeSendStatus(MSG.send_again,false);
      }
    }
    clearTimeout(SEND_STATUS_TC);
    if(send.left>0){
      check();
    }else{
      changeSendStatus(MSG.send_again,true);
    }
  }
  function sendFail(conf,send){
    if(conf.key==='phone-step1'){
      
    }else{
      changeSendStatus(MSG.send_again,false);
    }
  }
  function resendPhoneTicket(conf){
    if(conf.data && conf.data.icode){
      delete conf.data.icode
    }
    var data=conf.data;
    sendPhoneTicket(conf,data);
    /*
    var send=sendData[conf.data.phone];
    if(send.left>0){
      PHONE[4].data=conf.data;
      changeStepView(PHONE[4]);
    }
    */
  }
  function changeSendStatus(t,disable){
    var conf=CurrentConf;
    if(conf.sendStatus){
      conf.sendStatus.text(t);
      if(disable){
        conf.sendStatus.addClass("disabled");
      }else{
        conf.sendStatus.removeClass("disabled");
      }
    }
  }
  function checkSMSQuota(phone,callback){
    var data={
      address:phone,
      contentType:4000002,
      userId:-1
    }
    $.ajax({
      url:'/pass/sms/quota',
      type:"post",
      data:data,
      dataType:"text",
      success:function(text){
        var json={};
        try{
          json=$.parseJSON(text.replace('&&&START&&&',''));
        }catch(e){}
        if(json.result===0){
          callback((parseInt(json.info) || 0));
        }else{
          callback(0);
        }
      },
      error:function(){
        callback(0);
      }
    })
  }
  function showLeftTimes(conf,left){
    var text=MSG.leftTimesText
    if(left<=2){
      if(left===0){
        var text=MSG.nochance;
      }else{
        text=text.replace("{left}",left+"").replace("{plural}",(left>1?"s":""));
      }
      conf.leftTimesCon.text(text);
      conf.leftTimesCon.show();
    }else{
      conf.leftTimesCon.hide();
    }
  }
  function showUnavailableMsg(conf,times){
    if(times>1){
      conf.unavailableMsg.show();
    }else{
      conf.unavailableMsg.hide();
    }
  }
  function verifyPhoneTicket(conf,data){
    var img = $('<img>');
    img.attr('src','/pass/ajax/tick?biz=register&type=web&step=2');
    data.env="web";
    data.tickType="web";
    $.ajax({
      url:conf.action,
      data:data,
      type:'post',
      dataType:"text",
      success:function(text){
        window.onbeforeunload=null;
        var json={};
        try{
          //json={"result":"error","reason":"","description":"ccc","code":0,"data":{status:1, userId:"",userName:"angle888",portraitUrl:"https://account.xiaomi.com//static/res/fa93d30/passport/acc-2014/img/n-logo.png"}};
          json=$.parseJSON(text.replace('&&&START&&&',''));
        }catch(e){}
        if(json.code===0){
          if(!matchAndroidVersion()){
            var info={add:data.phone,st:'2',err:err_time};
            Pensieve.run(info);
          }
          var jsonData=json.data;
          if(jsonData.portraitUrl){
            conf.data.portraitUrl=jsonData.portraitUrl;
          }
          if(jsonData.userName){
            conf.data.userName=jsonData.userName;
          }
          if(jsonData.userId){
            conf.data.userId=jsonData.userId;
          }
          if(jsonData.status==0){
            new Image(1,1).src='/pass/ajax/tick?biz=register&type=web&step=3';
            new Image(1,1).src='/pass/ajax/tick?biz=NoUseRecyleRegister&type=web&step=end';
            PHONE[2].data=conf.data;
            changeStepView(PHONE[2]);            
          }else if(jsonData.status==1){
            PHONE[5].data=conf.data;
            //PHONE[5].portraitUrl=jsonData.portraitUrl
            changeStepView(PHONE[5]);            
          }else if(jsonData.status==2){
            window.location.href=location.protocol+'//'+registerDomain+prefixUserLogin+QS+'&_user='+encodeURIComponent(jsonData.phone);
          }        
        }else if(json.code===70008){
          showError(conf.inputs.filter("[name=ticket]"),"ph_ruleError");
        }else if(json.code===10017){
          err_time.ticket++;
          showError(conf.inputs.filter("[name=ticket]"),"ticket_resError");
        }else if(json.code===20023){
          showError(conf.inputs.filter("[name=ticket]"),"bindQuota_error");
        }else{
          showError(conf.inputs.filter("[name=ticket]"),"param_error");
        }
      },
      fail:function(){
        showError(conf.inputs.filter("[name=ticket]"),"netError");
      }
    });
  }
  function register(data,conf){
    if (lockSubmit) {
      return false;
    }
    data._json="true";
    data.qs=QS;
    data.env="web";
    data.isAcceptLicense = true;
    data.sid='passport';
    if(!matchAndroidVersion()){
      data.h=Pensieve.h;
    }
    $.ajax({
      url:conf.action,
      type:"POST",
      data:data,
      dataType:"text",
      success:function(text){
        var json={};
        try{
          json=$.parseJSON(text.replace('&&&START&&&',''));
        }catch(e){}
        lockSubmit = 0;
        if(json.code===0){
          var type="",address="";
          if(conf.key==='phone-step3'){
            type="PH";
            address=conf.data.phone;
            PHONE[3]=$.extend(PHONE[3],json);
            changeStepView(PHONE[3]);
            new Image(1,1).src='/pass/ajax/tick?biz=register&type=web&step=end';
            if(json.user_synced_url){
              clearTimeout(checkUserSyncTC);
              checkUserSync(PHONE[3]);
            }else{
              console.log('user sync'+json);
            }
          }else{
            type="EM";
            address=conf.data.email
            EMAIL[2].data=$.extend(conf.data,json);
            changeStepView(EMAIL[2]);
          }
          LStore.set(type+address,"available",1);
          if(!matchAndroidVersion()){
            var st=type==='PH'?'3':'2';
            var info={add:address,st:st,err:err_time};
            Pensieve.run(info);
          }
        }else if(json.code==87001){
          var icodeName=("phone" in data) && data.phone ?"icode":"inputcode";
          err_time.captcha++;
          showError(conf.inputs.filter("[name="+icodeName+"]"),"icode_resError");
          setIcodeUrl(conf.icodeImage)
        }else if(json.code===24010){
          if(json["location"]){
            location.href=json["location"];
          }
        }else if(json.code===70008){
          showError(conf.inputs.filter("[name=password]"),"ph_ruleError");
        }else if(json.code===10017 || json.code===20014){
          showError(conf.inputs.filter("[name=password]"),"param_error");
        }else if(json.code===21327){
          showError(conf.inputs.filter("[name=password]"),"tokenExpire_error");
        }else if(json.code===25006 || json.code===66006){
          showError(conf.inputs.filter("[name=password]"),"fail_error");
        }else{
          registerFail(conf,json);
        }
      },
      error:function(){
        registerError(conf);
        lockSubmit = 0;
      }
    })
    lockSubmit = 1;
  }
  function registerFail(conf,json){
    //注册失败
    showError(conf.inputs.filter("[name=password]"),MSG.reg_fail+"("+json.code+")");
  }
  function registerError(conf){
    //注册错误
    showError(conf.inputs.filter("[name=password]"),MSG.rge_error);
  }
  function checkUserSync(conf){
    var redirectUrl=location.protocol+'//'+registerDomain+"/pass/serviceLogin?"+QS;
    if(conf.user_synced_url){
      $.ajax({
        url: conf.user_synced_url,
        type:'GET',
        dataType: 'jsonp',
        jsonp: 'callback',
        jsonpCallback: "userSyncedCallback",
        success: function(dataJson){
          console.log('succ');
          if(user_synced_time<=syncInterval){
            if(dataJson.code===0){
              $(".sync-box").hide();
              conf.loginRedirectUrl.attr("href",redirectUrl);
              conf.loginRedirectUrl.removeClass('gray_disabled');
            }else{
              checkUserSyncTC=setTimeout(function() {
                checkUserSync(conf);
              }, 1000);
            }
          }else{
            $('.sync-box').hide();
            conf.loginRedirectUrl.attr("href",redirectUrl);
            $('.sync-result-fail').show();
            conf.loginRedirectUrl.removeClass('gray_disabled');
          }
        },
        error:function(){
          console.log('error');
        }
      });
    }
    user_synced_time+=2;
  }
  function resendEmail(conf){
    var send=sendData[conf.data.email];
    if(!send){
      send=sendData[conf.data.email]={left:10,times:0}
    }
    if(send.left===0){
      showLeftTimes(conf,send.left);
      return;
    }
    if(send.sending || send.hold>0){
      return;
    }
    send.sending=true;
    var data={
      address:conf.data.email,
      addressType:"EM",
      userId:conf.data.userId,
      u2:conf.data.u2,
      qs:QS,
      region:conf.data.region
    }
    if(!matchAndroidVersion()){
      data.h=Pensieve.h;
    }
    $.ajax({
      url:conf.action,
      data:data,
      dataType:"text",
      success:function(text){
        send.sending=false;
        var json={};
        try{
          json=$.parseJSON(text.replace('&&&START&&&',''));
        }catch(e){}
        if(json.code==0){
          send.left=Math.max(send.left-1,0);
          showLeftTimes(conf,send.left);
          send.hold=(send.times+=1)*HOLDTIMES;
          sendSuccess(conf,send);
        }else{
          sendFail(conf);
        }
      },
      error:function(){
        send.sending=false;
        sendFail(conf);
      }
    });
  }
/*启动*/
  setJumpToRegionUrl(defaultRegion,true);
  changeStepView(Default);
  LStore.clear();
  var deviceId="";
  try{
    deviceId = window.miui.getDeviceCloudHashId();
  }catch(e){}
  if(deviceId && deviceId.length>10){
    setCookie("deviceId",deviceId,"/",".account.xiaomi.com");
  }
  var $regionOut = $('#select-cycode');
  var regionBrief = ($regionOut.attr('_region') || '').toUpperCase();
  if(regionBrief){
    var $defaultRegion = $regionOut.find('ul li .record-country[data-brief="'+regionBrief+'"]');
    if($defaultRegion.length){
      $($defaultRegion[0]).closest('li').click();
    }
  }
  if(registerMethods && registerMethods.length){
    var defaultMethod=registerMethods[0];
    if(defaultMethod=='EM'){
      $('.change-view').click();
    }
    if(registerMethods.length===1){
      $(".other_register_area").hide();
    }
    var parRegister=getParam('_register');
    if(parRegister){
      if(parRegister==='all'){
        $('.change-view').click();
        $(".other_register_area").show();
      }
    }
  }
  function beforeUnloadCheck(){
    //if(miuiClient || authSDK){return;}
    if(isWebview()){
      return;
    }
    if(PAGE_UNLOAD){
      if(!UNLOAD_INIT){
        UNLOAD_INIT=true;
        window.onbeforeunload=function(){
          return "";
        }
      }
    }else{
      setTimeout(beforeUnloadCheck,200);
    }
  }
  beforeUnloadCheck();
})();
</script> 
  <script type="text/javascript" src="/static/homes/register/main.min.js.下载" charset="utf-8"></script> 
  <div class="geetest_panel geetest_wind" style="display: none;">
   <div class="geetest_panel_ghost"></div>
   <div class="geetest_panel_box">
    <div class="geetest_other_offline geetest_panel_offline"></div>
    <div class="geetest_panel_loading">
     <div class="geetest_panel_loading_icon"></div>
     <div class="geetest_panel_loading_content">
      智能验证检测中
     </div>
    </div>
    <div class="geetest_panel_success">
     <div class="geetest_panel_success_box">
      <div class="geetest_panel_success_show">
       <div class="geetest_panel_success_pie"></div>
       <div class="geetest_panel_success_filter"></div>
       <div class="geetest_panel_success_mask"></div>
      </div>
      <div class="geetest_panel_success_correct">
       <div class="geetest_panel_success_icon"></div>
      </div>
     </div>
     <div class="geetest_panel_success_title">
      通过验证
     </div>
    </div>
    <div class="geetest_panel_error">
     <div class="geetest_panel_error_icon"></div>
     <div class="geetest_panel_error_title">
      网络超时
     </div>
     <div class="geetest_panel_error_content">
      请点击此处重试
     </div>
     <div class="geetest_panel_error_code"></div>
    </div>
    <div class="geetest_panel_footer" style="display: none;">
     <div class="geetest_panel_footer_logo"></div>
     <div class="geetest_panel_footer_copyright">
      由极验提供技术支持
     </div>
    </div>
    <div class="geetest_panel_next"></div>
   </div>
  </div>
 </body>
</html>