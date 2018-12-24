
<!DOCTYPE html>
<!-- saved from url=(0103)https://account.xiaomi.com/pass/auth/profile/home?cUserId=zOOtzY_fXKNaH5pfpNnSIT_4PbI&userId=1337447143 -->
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" /> 
  <meta name="format-detection" content="telephone=no" /> 
  <title>小米帐号 -个人信息</title> 
  <link type="text/css" rel="stylesheet" href="/static/homes/profile/reset.css" /> 
  <link type="text/css" rel="stylesheet" href="/static/homes/profile/layout.css" /> 
  <link type="text/css" rel="stylesheet" href="/static/homes/profile/modacctip.css" /> 
  <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">



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

/*弹出*/
       <style> 
        .black_overlay{ 
            display: none; 
            position: absolute; 
            top: 0%; 
            left: 0%; 
            width: 100%; 
            height: 100%; 
            background-color: black; 
            z-index:1001; 
            -moz-opacity: 0.8; 
            opacity:.80; 
            filter: alpha(opacity=88); 
        } 
        .white_content { 
            display: none; 
            position: absolute; 
            top: 25%; 
            left: 25%; 
            width: 55%; 
            height: 55%; 
            padding: 20px; 
            border: 5px solid orange; 
            background-color:grey; 
            z-index:1002; 
            overflow: auto;  
            color:black;
            font-weight: 20px;
            font-size:18px;
        } 
       
        
    </style> 
</style> 
 </head> 
 <body class="zh_CN" style="overflow-y: hidden;">
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
      <a href="https://account.xiaomi.com/" class="fl-l"> <img src="/static/homes/profile/n-logo.png" > </a> 
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
        <p class="na-name">{{$user->name}}</p> 
        <p class="na-num">{{$user->miid}}</p> 
       </div> 
       <div class="na-img-area fl-l"> 
        <!--na-img-bg-area不能插入任何子元素--> 
        <div class="na-img-bg-area">
         <img size="100%" id="dopic" src="{{$user->headpic}}" />
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <div class="layout"> 
     <div class="n-main-nav clearfix"> 
      <ul > 
        <li class="current" s> <a href="/usersecret" style="color:black;" title="账户安全" >账户安全</a> <em class="n-nav-corner"></em> </li>  
       <li class="current"> <a href="/userinfo" title="个人信息" >个人信息</a> <em class="n-nav-corner"></em> </li> 
       <li> <a >绑定授权</a> <em class="n-nav-corner"></em> </li> 
       <li> <a >小米服务</a> <em class="n-nav-corner"></em> </li> 
      </ul> 
     </div> 
     <div class="n-frame"> 
      <div class="uinfo c_b"> 
       <div> 
        <div class="main_l"> 
          <div class="na-img-bg-area">
            <img  src="{{$user->headpic}}" width="300px" height="300px" alt="">
          
          </div>  
        </div> 
        <div class="main_r"> 
         <div class="framedatabox"> 
          <div class="fdata"> 
            <!-- 修改 -->
<!-- 弹出 -->
      <p>
        <a style="float:right" href = "javascript:void(0)" onclick = "document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">
            编辑
        </a>
      </p> 
      <!-- 修改弹出 -->
        <div id="light" class="white_content">
          <p style="font-size:20px;color:black;font-weight:20px;font-family:宋体"><h4>编辑基础信息</h4></p>
          <hr width="90%">
            
          <form action="/userinfo/{{$user->id}}" method="post" enctype="multipart/form-data">
              姓名: <input type="text" class="labelbox"" value="{{$user->name}}" name="name" maxlength="20" ><br>
              邮箱: <input class="labelbox"" value="{{$user->email}}" type="text" name="email"><br>
              性别:<br>
           
              女:<input 
              @if($user->sex=='女')
                checked
              @endif
              class="icon_select iconinfosex" type="radio" name="sex" value="0">
              男:<input 
              @if($user->sex=='男')
                checked
              @endif
               id="rdo1" class="icon_select iconinfosex" type="radio" name="sex" value="1">
              保密:<input
              @if($user->sex=='保密')
                checked
              @endif
              id="rdo1" class="icon_select iconinfosex" type="radio" name="sex" value="2"><br>
              <div>
              头像: 
              <div class="">
                <img  src="{{$user->headpic}}" width="200px" height="200px" alt="">
              </div>  
                <input type="file" class="btn btn-primary" name="headpic" value="{{$user->headpic}}"><br>
              </div>
              <input  type="hidden" name="id" value="{{$user->id}}">
              {{csrf_field()}}
              {{method_field('PUT')}}
              <input class="btn btn-success" type="submit" value="保存" >

  
        <a href = "javascript:void(0)" style="" onclick = "document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">
            <input class="btn btn-default" type="reset" value="取消">
        </a>
          </form>
</div> 
        <div id="fade" class="black_overlay"></div> 
<!-- 关闭 -->
           <h3>基础资料</h3> 
          </div> 
          <div class="fdata lblnickname"> 
           <p><span>姓名：</span><span class="value"> {{$user->name}}</span></p> 
          </div> 
          <div class="fdata lblbirthday"> 
           <p><span>邮箱：</span><span class="value"> {{$user->email}}</span></p> 
          </div> 
          <div class="fdata lblgender"> 
           <p><span>性别：</span><span class="value" val="m"> {{$user->sex}} </span></p> 
          </div>
          <div class="fdata lblgender"> 
           <p><span>加入时间：</span><span class="value" val="m"> {{$user->create_time}} </span></p> 
          </div>  
          <div class="btn_editinfo">
           <a >编辑基础资料</a>
          </div> 
         </div> 
         <div class="framedatabox"> 
          <div class="fdata"> 
           <h3>高级设置</h3> 
          </div> 
          <div class="fdata click-row"> 
           <a class="color4a9 fr" target="_blank" href="" title="管理">管理</a> 
           <p> <span>银行卡</span> <span class="arrow_r"></span> </p> 
          </div> 
         
          <div class="fdata click-row"> 
           <a style="display:none;" class="color4a9 fr " target="_blank" href="javascript:;" title="管理" id="switchRegion">修改</a> 
           <p> <span>默认收货地址： </span> <span class="box_center"><em id="region" >{{$address->address}}</em><i class="arrow_r hidewap"></i></span> </p> 
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
     <li><a class="a_critical" href="" target="_blank"><em></em>常见问题</a></li> 
    </ul> 
   </div> 
   11111
   <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a class="beianlink beian-record-link" target="_blank" href=""><span><img src="/static/homes/profile/ghs.png" /></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p> 
  </div> 
  <style type="text/css">
  

    
</style> 
  <script src="/static/homes/profile/jquery-1.8.3.min.js"></script> 
  <script src="/static/homes/profile/placeholder.js"></script> 
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
  <!-- 编辑个人信息资料 s --> 
  <div class="popup_mask" style="display: none;"> 
   <div class="bkc"></div> 
   <div class="mod_wrap"> 
    <div class="mod_acc_tip layereditinfo" style="display: none;"> 
     <div class="mod_tip_hd"> 
      <h4>编辑基础资料</h4> 
      <a ><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd"> 
      <form > 
      
       <div class="tip_btns"> 
        <a >保存</a> 
        <!-- <input class="btn_tip btn_commom" type="submit" value="保存"> --> 
        <a  title="取消">取消</a> 
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
      <a class="btn_mod_close" href="" title=""><span>关闭</span></a> 
     </div> 
     <div class="mod_tip_bd preupload"> 
      <iframe style="display:none;" width="0" height="0" name="uploadPhoto" id="uploadPhoto" src="/static/homes/profile/saved_resource.html"></iframe> 
      <!--
    <form action="/user/profile/requestUpload" method="POST">   
    <input type="hidden" name="userId" value="1337447143">
    <input type="hidden" name="quality" value="1.0">
    <input type="hidden" name="isRedirect" value="true">
    <input type="hidden" name="passport_ph" value="">
    <input type="hidden" name="passToken" value="">
  </form> 
  --> 
      <form action="" method="POST" enctype="multipart/form-data" target="uploadPhoto" id="photoUploader"> 
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
        <a class="btn_tip btn_back" href="">取消</a> 
       </div> 
      </form> 
     </div> 
     <div class="mod_tip_bd uploading" style="display:none;"> 
      <div class="wapbox"> 
       <div class="mar30 t_c"> 
        <!-- loading图片 --> 
        <img width="88" height="88" src="/static/homes/profile/loading.gif" alt="" /> 
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
       <a id="abortUpload" class="btn_tip btn_back" href="">取消</a> 
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
       <a class="btn_tip btn_back"  title="重新上传" >重新上传</a> 
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
      <a ><span>关闭</span></a> 
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
       <a >取消</a> 
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
            
           
         
         
      <div class="tip_btns"> 
       <input class="btn_tip btn_commom" type="submit" id="doRegionSwitch" value="确定" /> 
       <a class="btn_tip btn_back" >取消</a> 
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
  <script src="/static/homes/profile/jquery-1.8.3.min.js"></script> 
  <script src="/static/homes/profile/oo-min.js"></script> 
  <script src="/static/homes/profile/l11n.js"></script> 
  <script src="/static/homes/profile/cookie.js"></script> 
  <script src="/static/homes/profile/url.js"></script> 
  <script src="/static/homes/profile/common.js"></script> 
  <script src="/static/homes/profile/2014.js"></script> 
  <script src="/static/homes/profile/placeholder.js(1)">
</script> 
  <script src="/static/homes/profile/countryCode.js">
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
   <script>  
            if($("input['name'='sex']").val()=={{$user->sex}}){
              $(this).attr('checked',true);
            }
               
   </script>
</html>