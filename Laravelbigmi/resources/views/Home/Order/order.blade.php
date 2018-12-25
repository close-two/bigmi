@extends('Home.HomePublic.publicperson')
@section('container')
 <script type="text/javascript" src="/static/homes/order/base.min.js"></script>
 <script type="text/javascript" src="/static/homes/order/xmst.js"></script>
 <script type="text/javascript" src="/static/homes/order/user.min.js"></script>
 <script type="text/javascript" src="/static/homes/order/orderList.min.js"></script>
 <script type="text/javascript" src="/static/homes/order/jquery.statData.min.js"></script> 
 <link rel="stylesheet" type="text/css" href="/static/homes/order/base.min.css">
      <div class="uc-box uc-main-box"> 
       <div class="uc-content-box order-list-box"> 
        <div class="box-hd"> 
         <h1 class="title">我的订单<small>请谨防钓鱼链接或诈骗电话，<a href="https://www.mi.com/service/buy/antifraud/" target="_blank" data-stat-id="c46a318fa0357711" onclick="_msq.push(['trackEvent', '5cc76a9bce8347f4-c46a318fa0357711', '//www.mi.com/service/buy/antifraud/', 'pcpid', '']);">了解更多&gt;</a></small></h1> 
         <div class="more clearfix"> 
          <ul class="filter-list J_orderType"> 
           <li class="first active"><a href="https://static.mi.com/order/#type=0" data-type="0" data-stat-id="80be41c93ffc8141" onclick="_msq.push(['trackEvent', '5cc76a9bce8347f4-80be41c93ffc8141', '//static.mi.com/order/#type=0', 'pcpid', '']);">全部有效订单</a></li> 
           <li><a id="J_unpaidTab" href="https://static.mi.com/order/#type=7" data-type="7" data-stat-id="bbe893417b3501f4" onclick="_msq.push(['trackEvent', '5cc76a9bce8347f4-bbe893417b3501f4', '//static.mi.com/order/#type=7', 'pcpid', '']);">待支付</a></li> 
           <li><a id="J_sendTab" href="https://static.mi.com/order/#type=8" data-type="8" data-stat-id="cfcc3a2570d33a5b" onclick="_msq.push(['trackEvent', '5cc76a9bce8347f4-cfcc3a2570d33a5b', '//static.mi.com/order/#type=8', 'pcpid', '']);">待收货</a></li> 
           <li><a href="https://static.mi.com/order/#type=5" data-type="5" data-stat-id="c350a1042961b9d1" onclick="_msq.push(['trackEvent', '5cc76a9bce8347f4-c350a1042961b9d1', '//static.mi.com/order/#type=5', 'pcpid', '']);">已关闭</a></li> 
          </ul> 
          <form id="J_orderSearchForm" class="search-form clearfix" action="https://static.mi.com/order/#" method="get"> 
           <label for="search" class="hide">站内搜索</label> 
           <input class="search-text" type="search" id="J_orderSearchKeywords" name="keywords" autocomplete="off" placeholder="输入商品名称、商品编号、订单号" /> 
           <input type="submit" class="search-btn iconfont" value="" /> 
          </form> 
         </div> 
        </div> 
        <div class="box-bd"> 
         <div id="J_orderList">
          <ul class="order-list">
           <li class="uc-order-item uc-order-item-finish"> 
            <div class="order-detail"> 
             <div class="order-summary"> 
              <div class="order-status">
               已收货
              </div> 
             </div> 
             <table class="order-detail-table"> 
              <thead> 
               <tr> 
                <th class="col-main"> <p class="caption-info">2018年05月19日 21:36<span class="sep">|</span>关焕伟<span class="sep">|</span>订单号：<a href="https://order.mi.com/user/orderView/5180519495010071" data-stat-id="e80d64bf6af36b13" onclick="_msq.push(['trackEvent', '5cc76a9bce8347f4-e80d64bf6af36b13', '//order.mi.com/user/orderView/5180519495010071', 'pcpid', '']);">5180519495010071</a><span class="sep">|</span>在线支付</p> </th> 
                <th class="col-sub"> <p class="caption-price">订单金额：<span class="num">299.00</span>元</p> </th> 
               </tr> 
              </thead> 
              <tbody> 
               <tr> 
                <td class="order-items"> 
                 <ul class="goods-list"> 
                  <li> 
                   <div class="figure figure-thumb"> 
                    <a href="https://item.mi.com/1181400002.html" target="_blank" data-stat-id="5af684e21abf17fa" onclick="_msq.push(['trackEvent', '5cc76a9bce8347f4-5af684e21abf17fa', '//item.mi.com/1181400002.html', 'pcpid', '']);"> <img src="static/homes/order/pms_1522666970.27937468!80x80.jpg" width="80" height="80" alt="小米AI音箱" /> </a> 
                   </div> <p class="name"> <a href="https://item.mi.com/1181400002.html" target="_blank" data-stat-id="3fd0f726bde0e41c" onclick="_msq.push(['trackEvent', '5cc76a9bce8347f4-3fd0f726bde0e41c', '//item.mi.com/1181400002.html', 'pcpid', '']);">小米AI音箱</a> </p> <p class="price">299元 &times; 1</p> </li> 
                 </ul> </td> 
                <td class="order-actions"> <a class="btn btn-small btn-line-gray" href="https://order.mi.com/user/orderView/5180519495010071" data-stat-id="d59799a12deb6365" onclick="_msq.push(['trackEvent', '5cc76a9bce8347f4-d59799a12deb6365', '//order.mi.com/user/orderView/5180519495010071', 'pcpid', '']);">订单详情</a> <a class="btn btn-small btn-line-gray" href="https://service.order.mi.com/apply/order/id/5180519495010071" target="_blank" data-stat-id="1251e965d3222df8" onclick="_msq.push(['trackEvent', '5cc76a9bce8347f4-1251e965d3222df8', '//service.order.mi.com/apply/order/id/5180519495010071', 'pcpid', '']);">申请售后</a> </td> 
               </tr> 
              </tbody> 
             </table> 
            </div> </li>
          </ul>
         </div> 
         <div id="J_orderListPages">
          <div class="xm-pagenavi"> 
           <span class="numbers first"><span class="iconfont"></span></span> 
           <span class="numbers current">1</span> 
           <span class="numbers last"><span class="iconfont"></span></span> 
          </div>
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="deliver-beta hide" id="J_deliverBeta"> 
   <p>预计送达时间功能处于测试阶段，若您在下单时已选择“周末送货”或“工作日送货”，则会顺延至您要求的时间，如果发现预计送达时间不准确，期待您的反馈，我们会及时改进。</p> 
   <a href="https://static.mi.com/feedback/" target="_blank" data-stat-id="ae6964fcc9846205" onclick="_msq.push(['trackEvent', '5cc76a9bce8347f4-ae6964fcc9846205', '//static.mi.com/feedback/', 'pcpid', '']);">问题反馈 &gt;</a> 
   <i class="arrow arrow-a"></i> 
   <i class="arrow arrow-b"></i> 
  </div> 
 


 
  <div class="modal modal-appcode modal-hide fade" id="J_modalAppcode"> 
   <a class="close" data-dismiss="modal" href="javascript: void(0);" data-stat-id="a47b57ccfa3d80a7" onclick="_msq.push(['trackEvent', '5cc76a9bce8347f4-a47b57ccfa3d80a7', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
   <div class="modal-header"> 
    <h3 class="title">查看电子门票</h3> 
   </div> 
   <div class="modal-body"> 
    <p>发布会电子门票仅支持在小米商城 App 查看<br />扫码下载小米商城</p> 
    <img src="static/homes/order/2-2efadb9f14.png" alt="" /> 
   </div>
  @endsection
@section('title','个人中心页面')