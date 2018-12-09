个人信息页面
<!DOCTYPE html>
<!-- saved from url=(0103)https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&userId=1337447143 -->
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <title>小米帐号 -个人信息</title> 
  <link type="text/css" rel="stylesheet" href="static/homes/profile/reset.css" /> 
  <link type="text/css" rel="stylesheet" href="static/homes/profile/layout.css" /> 
  <link type="text/css" rel="stylesheet" href="static/homes/profile/modacctip.css" /> 
  <style>
      html{ overflow-y:scroll;}
    </style> 
  <style type="text/css">
/*启用修改头像功能*/
.na-img-area:hover .na-edit{
  display:block;
  cursor: pointer;
}
.na-img-area{cursor:default}
/*popup的遮层*/
.popup_mask{
  position:fixed;
  z-index:99;
  width:100%;
  height:100%;
  left:0;
  top:0;
  display:none;
  _position:absolute;
  _height: 1000px;
}
.popup_mask .mod_wrap{
    height: 100%;
    overflow-y: auto;
    position: absolute;
    width: 100%;
    z-index: 1;
}
.popup_mask .bkc{
  position:absolute;
  width:100%;
  height:200%;
  left:0;
  top:0;
  background-color:#333;
  filter: alpha(opacity=70);
  opacity:0.7;
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
/*上传*/
#photoUploader .uplodefile{
  font-size: 45px;
  *vertical-align: bottom;
}
::-webkit-file-upload-button { cursor:pointer; }
/*干掉该死的IE6的遮罩问题*/
#loadingMask .bkc{
  _height:2000px;
}
/*wap*/
.bugfix_ie6{ display:block;}  
</style> 
 </head> 
 <body class="zh_CN" style="overflow-y: hidden;"> 
  <div class="popup_mask" style="display: none;" id="loadingMask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap loadingmask"> 
   </div> 
  </div> 
  <div class="wrapper blockimportant"> 
   <div class="wrap"> 
    <div class="layout bugfix_ie6 dis_none"> 
     <div class="n-logo-area clearfix"> 
      <a href="https://account.xiaomi.com/" class="fl-l"> <img src="static/homes/profile/n-logo.png" srcset="/static/res/fa93d30/passport/acc-2014/img/n-logo.png 1x, /static/res/fb6d739/account-static/respassport/acc-2014/img/n-logo@2x.png 2x" /> </a> 
      <a id="logoutLink" class="fl-r logout" href="https://account.xiaomi.com/pass/logout?userId=1337447143&amp;callback=https://account.xiaomi.com"> 退出 </a> 
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
        <p class="na-name">Huanwei_Guan</p> 
        <p class="na-num">1337447143</p> 
       </div> 
       <div class="na-img-area fl-l"> 
        <!--na-img-bg-area不能插入任何子元素--> 
        <div class="na-img-bg-area">
         <img src="static/homes/profile/CyzrpDCAz9G1hG_320.jpg" />
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <div class="layout"> 
     <div class="n-main-nav clearfix"> 
      <ul class="c_b"> 
       <li> <a href="https://account.xiaomi.com/pass/auth/security/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="帐号安全" data-action="security">帐号安全</a> <em class="n-nav-corner"></em> </li> 
       <li class="current"> <a href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="个人信息" data-action="profile">个人信息</a> <em class="n-nav-corner"></em> </li> 
       <li> <a href="https://account.xiaomi.com/pass/auth/sns/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="绑定授权" data-action="sns">绑定授权</a> <em class="n-nav-corner"></em> </li> 
       <li> <a href="https://account.xiaomi.com/pass/auth/services/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="小米服务" data-action="services">小米服务</a> <em class="n-nav-corner"></em> </li> 
      </ul> 
     </div> 
     <div class="n-frame"> 
      <div class="uinfo c_b"> 
       <div> 
        <div class="main_l"> 
         <div class="naInfoImgBox t_c"> 
          <div class="na-img-area marauto"> 
           <!--na-img-bg-area不能插入任何子元素--> 
           <div class="na-img-bg-area">
            <img src="static/homes/profile/CyzrpDCAz9G1hG_320.jpg" />
           </div> 
           <em class="na-edit"></em> 
          </div> 
          <div class="naImgLink"> 
           <a class="color4a9" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="修改头像">修改头像</a> 
          </div> 
         </div> 
        </div> 
        <div class="main_r"> 
         <div class="framedatabox"> 
          <div class="fdata"> 
           <a class="color4a9 fr" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="编辑" id="editInfo"><i class="iconpencil"></i>编辑</a> 
           <h3>基础资料</h3> 
          </div> 
          <div class="fdata lblnickname"> 
           <p><span>姓名：</span><span class="value"> Huanwei_Guan </span></p> 
          </div> 
          <div class="fdata lblbirthday"> 
           <p><span>生日：</span><span class="value"> 1994-03-11 </span></p> 
          </div> 
          <div class="fdata lblgender"> 
           <p><span>性别：</span><span class="value" val="m"> 男 </span></p> 
          </div> 
          <div class="btn_editinfo">
           <a id="editInfoWap" class="btnadpt bg_normal" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143">编辑基础资料</a>
          </div> 
         </div> 
         <div class="framedatabox"> 
          <div class="fdata"> 
           <h3>高级设置</h3> 
          </div> 
          <div class="fdata click-row"> 
           <a class="color4a9 fr" target="_blank" href="https://www.mipay.com/" title="管理">管理</a> 
           <p> <span>银行卡</span> <span class="arrow_r"></span> </p> 
          </div> 
          <div class="fdata click-row"> 
           <a style="display:none;" class="color4a9 fr" target="_blank" href="javascript:;" title="管理" id="switchRegion">修改</a> 
           <p> <span>帐号地区： </span> <span class="box_center"><em id="region" _code="CN">中国</em><i class="arrow_r hidewap"></i></span> </p> 
          </div> 
          <!-- <div class="fdata click-row">
           <a class="color4a9 fr" target="_blank" href="/pass/auth/rights/home?userId=1337447143">管理</a>
           <p>
             <span>数据权利中心</span>
             <span class="arrow_r"></span>
           </p>
         </div> --> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <div class="logout_wap"> 
     <a class="btnadpt bg_white" href="https://account.xiaomi.com/pass/logout?userId=1337447143&amp;callback=https://account.xiaomi.com">退出</a> 
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
   <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a class="beianlink beian-record-link" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134"><span><img src="static/homes/profile/ghs.png" /></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p> 
  </div> 
  <style type="text/css">
  

    
</style> 
  <script src="static/homes/profile/jquery-1.8.3.min.js.下载"></script> 
  <script src="static/homes/profile/placeholder.js.下载"></script> 
  <script>
$(function(){
  /*==========初始化外部链接部分==========*/

    var URL_DATA={
      agreement:"https://static.account.xiaomi.com/html/agreement/account/cn.html",
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
  var beianRecordImg="https://account.xiaomi.com/static/res/9204d06/account-static/respassport/acc-2014/img/ghs.png";
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
  <!-- 编辑个人信息资料 s --> 
  <div class="popup_mask" style="display: none;"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip layereditinfo" style="display: none;"> 
     <div class="mod_tip_hd"> 
      <h4>编辑基础资料</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <form action="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" method=""> 
       <div class="wapbox editbasicinfo"> 
        <dl class="infobox c_b"> 
         <dt>
          姓名：
         </dt> 
         <dd> 
          <label class="labelbox"><input class="nickname" type="text" name="nickname" maxlength="20" placeholder="姓名" /></label> 
         </dd> 
         <dt>
          生日：
         </dt> 
         <dd> 
          <ul class="birth-box c_b"> 
           <li class="biry"> 
            <div> 
             <span class="titsbirth c_b"> <em class="birthcon">1994</em> <i class="icon_cirarr"></i> </span> 
            </div> 
            <div class="tits_list select-year" style="display: none;">
             <div class="select_panel select-year-panel">
              <p value="2018">2018</p>
              <p value="2017">2017</p>
              <p value="2016">2016</p>
              <p value="2015">2015</p>
              <p value="2014">2014</p>
              <p value="2013">2013</p>
              <p value="2012">2012</p>
              <p value="2011">2011</p>
              <p value="2010">2010</p>
              <p value="2009">2009</p>
              <p value="2008">2008</p>
              <p value="2007">2007</p>
              <p value="2006">2006</p>
              <p value="2005">2005</p>
              <p value="2004">2004</p>
              <p value="2003">2003</p>
              <p value="2002">2002</p>
              <p value="2001">2001</p>
              <p value="2000">2000</p>
              <p value="1999">1999</p>
              <p value="1998">1998</p>
              <p value="1997">1997</p>
              <p value="1996">1996</p>
              <p value="1995">1995</p>
              <p value="1994">1994</p>
              <p value="1993">1993</p>
              <p value="1992">1992</p>
              <p value="1991">1991</p>
              <p value="1990">1990</p>
              <p value="1989">1989</p>
              <p value="1988">1988</p>
              <p value="1987">1987</p>
              <p value="1986">1986</p>
              <p value="1985">1985</p>
              <p value="1984">1984</p>
              <p value="1983">1983</p>
              <p value="1982">1982</p>
              <p value="1981">1981</p>
              <p value="1980">1980</p>
              <p value="1979">1979</p>
              <p value="1978">1978</p>
              <p value="1977">1977</p>
              <p value="1976">1976</p>
              <p value="1975">1975</p>
              <p value="1974">1974</p>
              <p value="1973">1973</p>
              <p value="1972">1972</p>
              <p value="1971">1971</p>
              <p value="1970">1970</p>
              <p value="1969">1969</p>
              <p value="1968">1968</p>
              <p value="1967">1967</p>
              <p value="1966">1966</p>
              <p value="1965">1965</p>
              <p value="1964">1964</p>
              <p value="1963">1963</p>
              <p value="1962">1962</p>
              <p value="1961">1961</p>
              <p value="1960">1960</p>
              <p value="1959">1959</p>
              <p value="1958">1958</p>
              <p value="1957">1957</p>
              <p value="1956">1956</p>
              <p value="1955">1955</p>
              <p value="1954">1954</p>
              <p value="1953">1953</p>
              <p value="1952">1952</p>
              <p value="1951">1951</p>
              <p value="1950">1950</p>
              <p value="1949">1949</p>
              <p value="1948">1948</p>
              <p value="1947">1947</p>
              <p value="1946">1946</p>
              <p value="1945">1945</p>
              <p value="1944">1944</p>
              <p value="1943">1943</p>
              <p value="1942">1942</p>
              <p value="1941">1941</p>
              <p value="1940">1940</p>
              <p value="1939">1939</p>
              <p value="1938">1938</p>
              <p value="1937">1937</p>
              <p value="1936">1936</p>
              <p value="1935">1935</p>
              <p value="1934">1934</p>
              <p value="1933">1933</p>
              <p value="1932">1932</p>
              <p value="1931">1931</p>
              <p value="1930">1930</p>
              <p value="1929">1929</p>
              <p value="1928">1928</p>
              <p value="1927">1927</p>
              <p value="1926">1926</p>
              <p value="1925">1925</p>
              <p value="1924">1924</p>
              <p value="1923">1923</p>
              <p value="1922">1922</p>
              <p value="1921">1921</p>
              <p value="1920">1920</p>
              <p value="1919">1919</p>
              <p value="1918">1918</p>
              <p value="1917">1917</p>
              <p value="1916">1916</p>
              <p value="1915">1915</p>
              <p value="1914">1914</p>
              <p value="1913">1913</p>
              <p value="1912">1912</p>
              <p value="1911">1911</p>
              <p value="1910">1910</p>
              <p value="1909">1909</p>
              <p value="1908">1908</p>
              <p value="1907">1907</p>
              <p value="1906">1906</p>
              <p value="1905">1905</p>
              <p value="1904">1904</p>
              <p value="1903">1903</p>
              <p value="1902">1902</p>
              <p value="1901">1901</p>
              <p value="1900">1900</p>
             </div> 
             <div class="cancel_panel"> 
              <div class="cancel_box"> 
               <a class="btnadpt bg_white btn-cancel" href="javascript:void(0);">取消</a> 
              </div> 
             </div> 
            </div> </li> 
           <li class="month_day birm"> 
            <div> 
             <span class="titsbirth c_b"> <em class="birthcon">03</em> <i class="icon_cirarr"></i> </span> 
            </div> 
            <div class="tits_list select-month" style="display: none;"> 
             <div class="select_panel"> 
              <p value="01">01</p> 
              <p value="02">02</p> 
              <p value="03">03</p> 
              <p value="04">04</p> 
              <p value="05">05</p> 
              <p value="06">06</p> 
              <p value="07">07</p> 
              <p value="08">08</p> 
              <p value="09">09</p> 
              <p value="10">10</p> 
              <p value="11">11</p> 
              <p value="12">12</p> 
             </div> 
             <div class="cancel_panel"> 
              <div class="cancel_box"> 
               <a class="btnadpt bg_white btn-cancel" href="javascript:void(0);">取消</a> 
              </div> 
             </div> 
            </div> </li> 
           <li class="month_day bird"> 
            <div> 
             <span class="titsbirth c_b"> <em class="birthcon">11</em> <i class="icon_cirarr"></i> </span> 
            </div> 
            <div class="tits_list bird select-date" style="display: none;"> 
             <div class="select_panel"> 
              <p value="01">01</p> 
              <p value="02">02</p> 
              <p value="03">03</p> 
              <p value="04">04</p> 
              <p value="05">05</p> 
              <p value="06">06</p> 
              <p value="07">07</p> 
              <p value="08">08</p> 
              <p value="09">09</p> 
              <p value="10">10</p> 
              <p value="11">11</p> 
              <p value="12">12</p> 
              <p value="13">13</p> 
              <p value="14">14</p> 
              <p value="15">15</p> 
              <p value="16">16</p> 
              <p value="17">17</p> 
              <p value="18">18</p> 
              <p value="19">19</p> 
              <p value="20">20</p> 
              <p value="21">21</p> 
              <p value="22">22</p> 
              <p value="23">23</p> 
              <p value="24">24</p> 
              <p value="25">25</p> 
              <p value="26">26</p> 
              <p value="27">27</p> 
              <p value="28">28</p> 
              <p value="29">29</p> 
              <p value="30">30</p> 
              <p value="31">31</p> 
             </div> 
             <div class="cancel_panel"> 
              <div class="cancel_box"> 
               <a class="btnadpt bg_white btn-cancel" href="javascript:void(0);">取消</a> 
              </div> 
             </div> 
            </div> </li> 
          </ul> 
         </dd> 
         <dt>
          性别：
         </dt> 
         <dd class="checkbox infosex"> 
          <span value="m" class="now"><i class="icon_select iconinfosex"></i><em>男</em></span> 
          <span value="f"><i class="icon_select iconinfosex"></i><em>女</em></span> 
         </dd> 
        </dl> 
        <div class="err_tip empty_name err_tip_independ" style="display:none;" _text="名字不能为空">
         名字不能为空
        </div> 
        <div class="err_tip sys_err err_tip_independ" style="display:none;" _text="系统错误，请稍候再试">
         系统错误，请稍候再试
        </div> 
        <div class="err_tip empty_param err_tip_independ" style="display:none;" _text="参数为空">
         参数为空
        </div> 
        <div class="err_tip bad_param err_tip_independ" style="display:none;" _text="参数错误">
         参数错误
        </div> 
        <div class="err_tip bad_nickname err_tip_independ" style="display:none;" _text="名字长度不合法，应为2-20个字符">
         名字长度不合法，应为2-20个字符
        </div> 
        <div class="err_tip mismatch_nickname err_tip_independ" style="display:none;" _text="昵称不能含有字符&lt;&gt;/%">
         昵称不能含有字符&lt;&gt;/%
        </div> 
        <div class="err_tip bad_birthday err_tip_independ error-birth" style="display:none;" _text="生日格式不合法">
         生日格式不合法
        </div> 
        <div class="err_tip bad_gender err_tip_independ" style="display:none;" _text="性别参数不合法">
         性别参数不合法
        </div> 
        <div class="err_tip empty_birthday err_tip_independ error-birth" style="display:none;" _text="请完整选择生日信息">
         请完整选择生日信息
        </div> 
        <div class="err_tip invalid_birthday err_tip_independ error-birth" style="display:none;" _text="请提供您的真实信息">
         请提供您的真实信息
        </div> 
        <div class="err_tip black_nickname err_tip_independ" style="display:none;" _text="昵称不合规，请更换后重试">
         昵称不合规，请更换后重试
        </div> 
       </div> 
       <div class="tip_btns"> 
        <a class="btn_tip btn_commom" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="保存">保存</a> 
        <!-- <input class="btn_tip btn_commom" type="submit" value="保存"> --> 
        <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="取消">取消</a> 
       </div> 
      </form> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 编辑个人信息资料 e --> 
  <!-- 设置头像 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip layeruploadface"> 
     <div class="mod_tip_hd"> 
      <h4> 修改头像 </h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd preupload"> 
      <iframe style="display:none;" width="0" height="0" name="uploadPhoto" id="uploadPhoto" src="static/homes/profile/saved_resource.html"></iframe> 
      <!--
    <form action="/user/profile/requestUpload" method="POST">   
    <input type="hidden" name="userId" value="1337447143">
    <input type="hidden" name="quality" value="1.0">
    <input type="hidden" name="isRedirect" value="true">
    <input type="hidden" name="passport_ph" value="">
    <input type="hidden" name="passToken" value="">
  </form> 
  --> 
      <form action="https://account.xiaomi.com/pass/auth/profile/requestUpload" method="POST" enctype="multipart/form-data" target="uploadPhoto" id="photoUploader"> 
       <div class="wapbox accset"> 
        <dl> 
         <dt>
          <strong class="wap_title_big">请上传图片：</strong>
         </dt> 
         <dd> 
          <div class="uplode_img"> 
           <input type="button" onclick="return false;" class="btn_tip btn_commom" value="上传头像" /> 
           <input class="uplodefile" name="userfile" type="file" accept="image/*" autocomplete="off" disableautocomplete="" /> 
          </div> 
          <p>jpg 或 png，大小不超过2M</p> 
         </dd> 
        </dl> 
        <div class="err_tip error-con" _text="">
         <em class="icon_error"></em>
         <span></span>
        </div> 
       </div> 
       <div class="tip_btns"> 
        <!-- <input class="btn_tip btn_commom" type="submit" value="保存"> --> 
        <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="取消">取消</a> 
       </div> 
      </form> 
     </div> 
     <div class="mod_tip_bd uploading" style="display:none;"> 
      <div class="wapbox"> 
       <div class="mar30 t_c"> 
        <!-- loading图片 --> 
        <img width="88" height="88" src="static/homes/profile/loading.gif" alt="" /> 
        <div class="naccprocess"> 
         <p class="ft20 upload-percent" style="display:none;"><span></span>%</p> 
         <p>上传中</p> 
        </div> 
       </div> 
       <div class="err_tip error-con" _text="">
        <em class="icon_error"></em>
        <span></span>
       </div> 
      </div> 
      <div class="tip_btns"> 
       <!-- <input class="btn_tip btn_commom" type="submit" value="保存"> --> 
       <a id="abortUpload" class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="取消">取消</a> 
      </div> 
     </div> 
     <div class="mod_tip_bd uploaded"> 
      <div class="wapbox"> 
       <div class="clipimg t_c"> 
        <!-- 图片放置位置       --> 
        <div class="uploadimgs"> 
         <img id="clipimage" alt="" /> 
         <div class="clipmsk"> 
          <div class="clip_msk mskt"></div> 
          <div class="clip_msk mskb"></div> 
          <div class="clip_msk mskl"></div> 
          <div class="clip_msk mskr"></div> 
         </div> 
        </div> 
        <div style="" class="movebox"> 
         <i class="icon_square icon_square_rightbot"></i> 
        </div> 
       </div> 
       <div class="err_tip error-con t_c" _text="">
        <em class="icon_error"></em>
        <span></span>
       </div> 
      </div> 
      <div class="tip_btns"> 
       <input class="btn_tip btn_commom" type="submit" value="确定" /> 
       <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="重新上传" id="reuploadPhoto">重新上传</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div id="l11n-node" style="display:none;" _l11n-jsp_2014_select="请选择" _l11n-jsp_birthday_date="日" _l11n-jsp_birthday_month="月" _l11n-jsp_birthday_year="年" _l11n-jsp_sac_reset="取消"></div> 
  <!-- 设置头像 e --> 
  <!-- 切换帐号地区 s --> 
  <div class="popup_mask"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip" id="popSwitchRegion"> 
     <div class="mod_tip_hd"> 
      <h4>切换帐号地区</h4> 
      <a class="btn_mod_close" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <div class="wapbox n_txtbox"> 
       <p>请注意：</p> 
       <ul> 
        <li class="disc">不同地区的米币不通用，切换后可能导致您的米币余额无法使用。</li> 
        <li class="disc">一些会员服务，只在部分地区提供，切换后可能无法继续使用。</li> 
        <li class="disc">一些版权内容，只在部分地区提供，切换后可能无法观看。</li> 
       </ul> 
      </div> 
      <div class="tip_btns"> 
       <input id="continueSwitch" class="btn_tip btn_commom" type="submit" value="继续切换" /> 
       <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="取消">取消</a> 
      </div> 
     </div> 
     <div class="mod_tip_bd" style="display:none;"> 
      <div class="wapbox wap_pt30 regbox"> 
       <div class="listwrap change_region_box"> 
        <div class="listtit"> 
         <span class="tits display_box c_b"> <tt _code="">请选择</tt> <i class="icon_cirarr"></i> </span> 
        </div> 
        <div class="country-container-panel"> 
         <div class="country-container" style="display: none;">
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
       <div id="region_errors"> 
        <div class="err_tip sys_err err_tip_independ" style="display:none" _text="系统错误，请稍候再试">
         系统错误，请稍候再试
        </div> 
        <div class="err_tip bad_param err_tip_independ" style="display:none;" _text="参数错误">
         参数错误
        </div> 
        <div class="err_tip empty_region err_tip_independ" style="display:none;" _text="帐号地区不能为空">
         帐号地区不能为空
        </div> 
       </div> 
      </div> 
      <div class="tip_btns"> 
       <input class="btn_tip btn_commom" type="submit" id="doRegionSwitch" value="确定" /> 
       <a class="btn_tip btn_back" href="https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&amp;userId=1337447143" title="取消">取消</a> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 切换帐号地区 e --> 
  <script>
  var MSG={
    select:"请选择",
    year:"年",
    month:"月",
    date:"日",
    cancel:"取消",
    blackAvatar:"头像不合规，请更换后重试",
    uploadFailed:"上传失败",
    bad_param:"参数错误",
    error_system:"系统错误，请稍候再试",
    fileTooLarge:"文件太大，上传失败",
    formatError:"图片格式不符合要求！",
    missingParam:"缺少参数",
    missingFile:"找不到指定文件",
    unsupportedMimeType:"不支持的MIME TYPE"
  };
</script> 
  <script src="static/homes/profile/jquery-1.8.3.min.js.下载"></script> 
  <script src="static/homes/profile/oo-min.js.下载"></script> 
  <script src="static/homes/profile/l11n.js.下载"></script> 
  <script src="static/homes/profile/cookie.js.下载"></script> 
  <script src="static/homes/profile/url.js.下载"></script> 
  <script src="static/homes/profile/common.js.下载"></script> 
  <script src="static/homes/profile/2014.js.下载"></script> 
  <script src="static/homes/profile/placeholder.js(1).下载">
</script> 
  <script src="static/homes/profile/countryCode.js.下载">
</script> 
  <script>
OO(['com.mi.passport.portal.2014'],function(portal2014,O){
  var Profile = portal2014.Profile;
  var profile = new Profile({
      
    });
  profile.render();
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
  <div id="img_cache" style="visibility:hidden;"></div> 
 </body>
</html>