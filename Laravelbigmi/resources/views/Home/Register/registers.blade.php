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
              手机号码
            </h4>
        
            <div class="inputbg">
              <input type='hidden' class="select-regions-input" name="region" value="CN"/>
              <label class="labelbox" for="">
                <input type="phone" placeholder="请输入手机号" name="phone">
              </label>
            </div>
            <div class="inputbg inputcode">
              <label class="labelbox wap_resend_label">
                <input class="resendcode" type="text" placeholder="请输入验证码" name="ticket">
              </label>   
              <span class="remain"><a class="color333 send-status" id="send-status" href="javascript:void(0)" disabled='disabled'>重新发送(198)</a></span>
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
            
            <div class="err_tip err_invalid error-invalid">
              <div class="dis_box"><em class="icon_error"></em><span></span></div>
            </div>
            <div class="fixed_bot">
            {{csrf_field()}}
              <input class="btn332 btn_reg_1 submit-step" type="submit" value="立即注册">
              <div class="other_register_area">
              <a class="btn332 btn_reg_2 change-view" href="/register" type="button" value="用邮箱注册">用邮箱注册</a>
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
  <!-- <script src="/static/homes/register/jquery-1.8.3.min.js.下载"></script>  -->
  <script src="/static/jquery-1.8.3.min.js"></script> 
  <script src="/static/homes/register/placeholder.js.下载"></script> 

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
 <script>
   var PHONE = false;
   var CODE = false;
   $('input').focus(function(){
      reminder = $(this).attr('remainder'); 

   });
   $("input[name='phone']").blur(function(){
      p=$(this).val();
      o=$(this);
      // 正则匹配
      if (p.match(/^(13[0-9]|14[579]|15[0-3,5-9]|16[6]|17[0135678]|18[0-9]|19[89])\d{8}$/)==null) {
        $('.err_invalid').css('display','block').html('手机号不合法');
        PHONE=false;
      }else{
        // 判断手机号是否重复
        $.get("/checkphone",{p:p},function(data){
          // alert(data);
          if (data==1) {
            $('.err_invalid').css('display','block').html('该手机号已经注册');
            $('#send-status').attr('disabled',true).html('已注册').css('color','red');

          }else{
            $('.err_invalid').css(['display','block']).html('手机号可以使用');
            $('#send-status').attr('disabled',false).html('获取验证码').css('color','green');
            PHONE = true;
          }

        },'json');

      }
   });

  $('#send-status').click(function(){
    // alert('999999');
     // if ($('#send-status').attr('disabled')=='disabled') {
     //  alert('该手机号已经注册');
     //  return false;
     // }else{
      // alert('该手机号可用');
      s = $(this);
      pp = $("input[name='phone']").val();
      $.get('/sendphone',{pp:pp},function(data){
        alert(data);
        if (data.code==000000) {
          m=60;
          mytime = setInterval(function(){
            m--;
            s.html(m+"秒后重新发送");
            s.attr('disabled',true);
            if (m==0) {
              clearInterval(mytime);
              s.html("重新发送");
              s.attr('disabled',false);
            }
          },1000);
        }
      },'json');
  });  

 </script>
</html>