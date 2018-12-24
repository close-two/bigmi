购物车页面
@extends('Home.HomePublic.publicmini')


@section('container')

<link rel="stylesheet" type="text/css" href="/static/homes/cart/cart.min.css" />
<script type="text/javascript" src="/static/homes/cart/cart.min.js.下载"></script>
<script type="text/javascript" src="/static/homes/cart/xmst.js.下载"></script>
    <div class="page-main"> 
   <div class="container"> 
    <div class="cart-loading loading hide" id="J_cartLoading"> 
     <div class="loader"></div> 
    </div> 
    <div class="cart-empty hide" id="J_cartEmpty"> 
     <h2>您的购物车还是空的！</h2> 
     <p class="login-desc">登录后将显示您之前加入的商品</p> 
     <a href="javascript:void(0);" class="btn btn-primary btn-login" id="J_loginBtn" data-stat-id="6ab7b2b79aa79ef3" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-6ab7b2b79aa79ef3', 'javascript:void0', 'pcpid', '']);">立即登录</a> 
     <a href="//list.mi.com/0" class="btn btn-primary btn-shoping J_goShoping" data-stat-id="f7e2e8ff3af3bfec" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-f7e2e8ff3af3bfec', '//list.mi.com/0', 'pcpid', '']);">马上去购物</a> 
    </div> 
    <div id="J_cartBox" class=""> 
     <div class="cart-goods-list"> 
      <div class="list-head clearfix"> 
       <div class="col col-check">
        <i class="iconfont icon-checkbox icon-checkbox-selected" id="J_selectAll">√</i>全选
       </div> 
       <div class="col col-img">
        &nbsp;
       </div> 
       <div class="col col-name">
        商品名称
       </div> 
       <div class="col col-price">
        单价
       </div> 
       <div class="col col-num">
        数量
       </div> 
       <div class="col col-total">
        小计
       </div> 
       <div class="col col-action">
        操作
       </div> 
      </div> 
      <div class="list-body" id="J_cartListBody"> 
       <div class="item-box"> 
        <div class="item-table J_cartGoods" data-info="{ commodity_id:'1175100002', gettype:'buy', itemid:'2175100001_0_buy', num:'1'} "> 
         <div class="item-row clearfix"> 
          <div class="col col-check"> 
           <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox" data-itemid="2175100001_0_buy" data-status="1">√</i> 
          </div> 
          <div class="col col-img"> 
           <a href="//item.mi.com/1175100002.html" target="_blank" data-stat-id="46e0ac869954bf8c" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-46e0ac869954bf8c', '//item.mi.com/1175100002.html', 'pcpid', '']);"> <img alt="" src="//i1.mifile.cn/a1/pms_1513864376.45999722!80x80.jpg" width="80" height="80" /> </a> 
          </div> 
          <div class="col col-name"> 
           <div class="tags"> 
           </div> 
           <div class="tags"> 
           </div> 
           <h3 class="name"> <a href="//item.mi.com/1175100002.html" target="_blank" data-stat-id="c00dd2e744323bf2" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-c00dd2e744323bf2', '//item.mi.com/1175100002.html', 'pcpid', '']);"> 知吾煮汤锅 米家定制 </a> </h3> 
          </div> 
          <div class="col col-price">
            99元 
          </div> 
          <div class="col col-num"> 
           <div class="change-goods-num clearfix J_changeGoodsNum"> 
            <a href="javascript:void(0)" class="J_minus" data-stat-id="545f9830eaf33644" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-545f9830eaf33644', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
            <input tyep="text" name="2175100001_0_buy" value="1" data-num="1" data-buylimit="1" autocomplete="off" class="goods-num J_goodsNum" "="" /> 
            <a href="javascript:void(0)" class="J_plus" data-stat-id="fd25ec50204c694c" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-fd25ec50204c694c', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
           </div> 
          </div> 
          <div class="col col-total">
            99元 
           <p class="pre-info"> </p> 
          </div> 
          <div class="col col-action"> 
           <a id="2175100001_0_buy" data-msg="确定删除吗？" href="javascript:void(0);" title="删除" class="del J_delGoods" data-stat-id="163da9c724cdbb9f" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-163da9c724cdbb9f', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
          </div> 
         </div> 
        </div> 
        <div class="item-sub-box"> 
         <div class="item-table"> 
          <div class="item-row clearfix"> 
           <div class="col col-img"> 
            <a href="//item.mi.com/1173000036.html" target="_blank" data-stat-id="4802072dab31d9f2" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-4802072dab31d9f2', '//item.mi.com/1173000036.html', 'pcpid', '']);"> <img alt="" src="//i1.mifile.cn/a1/pms_1501236937.96732594!60x60.jpg" width="60" height="60" /> </a> 
           </div> 
           <div class="col col-name"> 
            <div class="tags"> 
             <span class="tag tag-red">赠品</span> 
            </div> 
            <h3 class="name"> <a href="//item.mi.com/1173000036.html" target="_blank" data-stat-id="4b1aec0374292698" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-4b1aec0374292698', '//item.mi.com/1173000036.html', 'pcpid', '']);">米粉卡日租卡</a> </h3> 
           </div> 
           <div class="col col-price"> 
           </div> 
           <div class="col col-num">
             1 
           </div> 
           <div class="col col-total"> 
           </div> 
           <div class="col col-action"> 
           </div> 
          </div> 
         </div> 
         <i class="arrow"></i> 
        </div> 
       </div> 
       <div class="item-box"> 
        <div class="item-table J_cartGoods" data-info="{ commodity_id:'1180800006', gettype:'buy', itemid:'2180800006_0_buy', num:'1'} "> 
         <div class="item-row clearfix"> 
          <div class="col col-check"> 
           <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox" data-itemid="2180800006_0_buy" data-status="1">√</i> 
          </div> 
          <div class="col col-img"> 
           <a href="//item.mi.com/1180800006.html" target="_blank" data-stat-id="f75e15aec56f5109" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-f75e15aec56f5109', '//item.mi.com/1180800006.html', 'pcpid', '']);"> <img alt="" src="//i1.mifile.cn/a1/pms_1520216487.4264692!80x80.jpg" width="80" height="80" /> </a> 
          </div> 
          <div class="col col-name"> 
           <div class="tags"> 
           </div> 
           <div class="tags"> 
           </div> 
           <h3 class="name"> <a href="//item.mi.com/1180800006.html" target="_blank" data-stat-id="12b91f1022c62ec3" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-12b91f1022c62ec3', '//item.mi.com/1180800006.html', 'pcpid', '']);"> 知吾煮不锈钢炒锅 银白色 </a> </h3> 
          </div> 
          <div class="col col-price">
            349元 
          </div> 
          <div class="col col-num"> 
           <div class="change-goods-num clearfix J_changeGoodsNum"> 
            <a href="javascript:void(0)" class="J_minus" data-stat-id="545f9830eaf33644" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-545f9830eaf33644', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
            <input tyep="text" name="2180800006_0_buy" value="1" data-num="1" data-buylimit="2" autocomplete="off" class="goods-num J_goodsNum" "="" /> 
            <a href="javascript:void(0)" class="J_plus" data-stat-id="fd25ec50204c694c" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-fd25ec50204c694c', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
           </div> 
          </div> 
          <div class="col col-total">
            349元 
           <p class="pre-info"> </p> 
          </div> 
          <div class="col col-action"> 
           <a id="2180800006_0_buy" data-msg="确定删除吗？" href="javascript:void(0);" title="删除" class="del J_delGoods" data-stat-id="163da9c724cdbb9f" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-163da9c724cdbb9f', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
          </div> 
         </div> 
        </div> 
       </div> 
       <div class="item-box"> 
        <div class="item-table J_cartGoods" data-info="{ commodity_id:'1180800007', gettype:'buy', itemid:'2180800007_0_buy', num:'1'} "> 
         <div class="item-row clearfix"> 
          <div class="col col-check"> 
           <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox" data-itemid="2180800007_0_buy" data-status="1">√</i> 
          </div> 
          <div class="col col-img"> 
           <a href="//item.mi.com/1180800007.html" target="_blank" data-stat-id="99a9629e8e85def8" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-99a9629e8e85def8', '//item.mi.com/1180800007.html', 'pcpid', '']);"> <img alt="" src="//i1.mifile.cn/a1/pms_1520220051.20749899!80x80.jpg" width="80" height="80" /> </a> 
          </div> 
          <div class="col col-name"> 
           <div class="tags"> 
           </div> 
           <div class="tags"> 
           </div> 
           <h3 class="name"> <a href="//item.mi.com/1180800007.html" target="_blank" data-stat-id="b4870e5f28ce1d94" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-b4870e5f28ce1d94', '//item.mi.com/1180800007.html', 'pcpid', '']);"> 知吾煮不锈钢汤锅 银白色 </a> </h3> 
          </div> 
          <div class="col col-price">
            249元 
          </div> 
          <div class="col col-num"> 
           <div class="change-goods-num clearfix J_changeGoodsNum"> 
            <a href="javascript:void(0)" class="J_minus" data-stat-id="545f9830eaf33644" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-545f9830eaf33644', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
            <input tyep="text" name="2180800007_0_buy" value="1" data-num="1" data-buylimit="2" autocomplete="off" class="goods-num J_goodsNum" "="" /> 
            <a href="javascript:void(0)" class="J_plus" data-stat-id="fd25ec50204c694c" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-fd25ec50204c694c', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
           </div> 
          </div> 
          <div class="col col-total">
            249元 
           <p class="pre-info"> </p> 
          </div> 
          <div class="col col-action"> 
           <a id="2180800007_0_buy" data-msg="确定删除吗？" href="javascript:void(0);" title="删除" class="del J_delGoods" data-stat-id="163da9c724cdbb9f" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-163da9c724cdbb9f', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
          </div> 
         </div> 
        </div> 
       </div> 
       <div class="item-box"> 
        <div class="item-table J_cartGoods" data-info="{ commodity_id:'1183700008', gettype:'buy', itemid:'2183700036_0_buy', num:'3'} "> 
         <div class="item-row clearfix"> 
          <div class="col col-check"> 
           <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox" data-itemid="2183700036_0_buy" data-status="1">√</i> 
          </div> 
          <div class="col col-img"> 
           <a href="//item.mi.com/1183700008.html" target="_blank" data-stat-id="e252be3d0c0581a2" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-e252be3d0c0581a2', '//item.mi.com/1183700008.html', 'pcpid', '']);"> <img alt="" src="//i1.mifile.cn/a1/pms_1536833428.43292402!80x80.jpg" width="80" height="80" /> </a> 
          </div> 
          <div class="col col-name"> 
           <div class="tags"> 
           </div> 
           <div class="tags"> 
           </div> 
           <h3 class="name"> <a href="//item.mi.com/1183700008.html" target="_blank" data-stat-id="3c25f27a65fabe25" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-3c25f27a65fabe25', '//item.mi.com/1183700008.html', 'pcpid', '']);"> 小米手环3 NFC版 黑色 </a> </h3> 
          </div> 
          <div class="col col-price">
            189元 
          </div> 
          <div class="col col-num"> 
           <div class="change-goods-num clearfix J_changeGoodsNum"> 
            <a href="javascript:void(0)" class="J_minus" data-stat-id="545f9830eaf33644" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-545f9830eaf33644', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
            <input tyep="text" name="2183700036_0_buy" value="3" data-num="3" data-buylimit="5" autocomplete="off" class="goods-num J_goodsNum" "="" /> 
            <a href="javascript:void(0)" class="J_plus" data-stat-id="fd25ec50204c694c" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-fd25ec50204c694c', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
            <div class="msg J_canBuyLimit">
             还可买 2 件
            </div> 
           </div> 
          </div> 
          <div class="col col-total">
            567元 
           <p class="pre-info"> </p> 
          </div> 
          <div class="col col-action"> 
           <a id="2183700036_0_buy" data-msg="确定删除吗？" href="javascript:void(0);" title="删除" class="del J_delGoods" data-stat-id="163da9c724cdbb9f" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-163da9c724cdbb9f', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
          </div> 
         </div> 
        </div> 
        <div class="item-sub-box"> 
         <div class="extend-buy J_raiseBuyItem" data-info="{ isBatch:'false', productId:'2182600005', goodsId:'2182600005-0-1-11700', bargainId:'8888888_0_bargain_11700', actId:'11700', type:'1', num: 3, maxnum: 3 }"> 
          <i class="iconfont icon-plus"></i>橙色腕带 19.9元 
         </div> 
         <div class="extend-buy J_raiseBuyItem" data-info="{ isBatch:'false', productId:'2182600006', goodsId:'2182600006-0-1-11702', bargainId:'8888888_0_bargain_11702', actId:'11702', type:'1', num: 3, maxnum: 3 }"> 
          <i class="iconfont icon-plus"></i>蓝色腕带 19.9元 
         </div> 
         <div class="extend-buy J_raiseBuyItem" data-info="{ isBatch:'false', productId:'2183900018', goodsId:'2183900018-0-1-11704', bargainId:'8888888_0_bargain_11704', actId:'11704', type:'1', num: 3, maxnum: 3 }"> 
          <i class="iconfont icon-plus"></i>藕粉色腕带 19.9元 
         </div> 
         <div class="extend-buy J_raiseBuyItem" data-info="{ isBatch:'false', productId:'2183900019', goodsId:'2183900019-0-1-11706', bargainId:'8888888_0_bargain_11706', actId:'11706', type:'1', num: 3, maxnum: 3 }"> 
          <i class="iconfont icon-plus"></i>酒红色腕带 19.9元 
         </div> 
        </div> 
       </div> 
       <div class="item-box"> 
        <div class="item-table J_cartGoods" data-info="{ commodity_id:'1181800004', gettype:'buy', itemid:'2181800004_0_buy', num:'2'} "> 
         <div class="item-row clearfix"> 
          <div class="col col-check"> 
           <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox" data-itemid="2181800004_0_buy" data-status="1">√</i> 
          </div> 
          <div class="col col-img"> 
           <a href="//item.mi.com/1181800004.html" target="_blank" data-stat-id="454fcbd9edc9f03f" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-454fcbd9edc9f03f', '//item.mi.com/1181800004.html', 'pcpid', '']);"> <img alt="" src="//i1.mifile.cn/a1/pms_1525317355.64747798!80x80.jpg" width="80" height="80" /> </a> 
          </div> 
          <div class="col col-name"> 
           <div class="tags"> 
           </div> 
           <div class="tags"> 
           </div> 
           <h3 class="name"> <a href="//item.mi.com/1181800004.html" target="_blank" data-stat-id="fa78b35335e3b828" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-fa78b35335e3b828', '//item.mi.com/1181800004.html', 'pcpid', '']);"> 小米净水器滤芯 PP棉 白色 </a> </h3> 
          </div> 
          <div class="col col-price">
            55元 
          </div> 
          <div class="col col-num"> 
           <div class="change-goods-num clearfix J_changeGoodsNum"> 
            <a href="javascript:void(0)" class="J_minus" data-stat-id="545f9830eaf33644" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-545f9830eaf33644', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
            <input tyep="text" name="2181800004_0_buy" value="2" data-num="2" data-buylimit="127" autocomplete="off" class="goods-num J_goodsNum" "="" /> 
            <a href="javascript:void(0)" class="J_plus" data-stat-id="fd25ec50204c694c" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-fd25ec50204c694c', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
            <div class="msg J_canBuyLimit">
             还可买 10 件以上
            </div> 
           </div> 
          </div> 
          <div class="col col-total">
            110元 
           <p class="pre-info"> </p> 
          </div> 
          <div class="col col-action"> 
           <a id="2181800004_0_buy" data-msg="确定删除吗？" href="javascript:void(0);" title="删除" class="del J_delGoods" data-stat-id="163da9c724cdbb9f" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-163da9c724cdbb9f', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a> 
          </div> 
         </div> 
        </div> 
       </div> 
      </div> 
     </div> 
     <!-- 加价购 --> 
     <div class="raise-buy-box" id="J_raiseBuyBox"> 
      <div class="item  J_raiseBuyItem" data-info="{ isBatch:'false', productId:'2182600005', goodsId:'2182600005-0-1-11586', bargainId:'8888888_0_bargain_11586', actId:'11586', type:'1', num:3, maxnum:3 }"> 
       <i class="iconfont icon-plus"></i>手环3腕带加价购（橙色） 19.9元 
      </div> 
      <div class="item  J_raiseBuyItem" data-info="{ isBatch:'false', productId:'2182600006', goodsId:'2182600006-0-1-11587', bargainId:'8888888_0_bargain_11587', actId:'11587', type:'1', num:3, maxnum:3 }"> 
       <i class="iconfont icon-plus"></i>手环3腕带加价购（蓝色） 19.9元 
      </div> 
      <div class="item  J_raiseBuyItem" data-info="{ isBatch:'false', productId:'2183900018', goodsId:'2183900018-0-1-11588', bargainId:'8888888_0_bargain_11588', actId:'11588', type:'1', num:3, maxnum:3 }"> 
       <i class="iconfont icon-plus"></i>手环3腕带加价购（粉色） 19.9元 
      </div> 
      <div class="item  J_raiseBuyItem" data-info="{ isBatch:'false', productId:'2183900019', goodsId:'2183900019-0-1-11589', bargainId:'8888888_0_bargain_11589', actId:'11589', type:'1', num:3, maxnum:3 }"> 
       <i class="iconfont icon-plus"></i>手环3腕带加价购（酒红） 19.9元 
      </div> 
     </div> 
     <div class="cart-bar clearfix cart-bar-fixed" id="J_cartBar"> 
      <div class="section-left"> 
       <a href="//list.mi.com/0" class="back-shopping J_goShoping" data-stat-id="c074b1625b246f31" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-c074b1625b246f31', '//list.mi.com/0', 'pcpid', '']);">继续购物</a> 
       <span class="cart-total">共 <i id="J_cartTotalNum">9</i> 件商品，已选择 <i id="J_selTotalNum">9</i> 件</span> 
       <span class="cart-coudan hide" id="J_coudanTip"> ，还需 <i id="J_postFreeBalance">0.00</i> 元即可免邮费 <a href="javascript:void(0);" id="J_showCoudan" data-stat-id="cfc8337d6cbfdef7" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-cfc8337d6cbfdef7', 'javascript:void0', 'pcpid', '']);">立即凑单</a> </span> 
      </div> 
      <span class="activity-money hide"> 活动优惠：减 <i id="J_cartActivityMoney">0</i> 元 </span> 
      <span class="total-price"> 合计：<em id="J_cartTotalPrice">1374</em>元 </span> 
      <a href="javascript:void(0);" class="btn btn-a btn btn-primary" id="J_goCheckout" data-stat-id="f7a123f9603b239a" onclick="_msq.push(['trackEvent', '5df97b551662ffe7-f7a123f9603b239a', 'javascript:void0', 'pcpid', '']);">去结算</a> 
      <div class="no-select-tip hide" id="J_noSelectTip">
        请勾选需要结算的商品 
       <i class="arrow arrow-a"></i> 
       <i class="arrow arrow-b"></i> 
      </div> 
     </div> 
    </div> 
    <div class="cart-recommend hide" id="J_historyRecommend"></div> 
    <div class="cart-recommend container" id="J_miRecommendBox" data-log_codes="reccom_Cart_0_0#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7857&amp;bid=3038456.0&amp;page=cartbuy;reccom_Cart_0_1#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9133&amp;bid=3038456.1&amp;page=cartbuy;reccom_Cart_0_2#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8790&amp;bid=3038456.2&amp;page=cartbuy;reccom_Cart_0_3#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6527&amp;bid=3038456.3&amp;page=cartbuy;reccom_Cart_0_4#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9063&amp;bid=3038456.4&amp;page=cartbuy;reccom_Cart_0_5#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8947&amp;bid=3038456.5&amp;page=cartbuy;reccom_Cart_0_6#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7919&amp;bid=3038456.6&amp;page=cartbuy;reccom_Cart_0_7#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6517&amp;bid=3038456.7&amp;page=cartbuy;reccom_Cart_0_8#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8961&amp;bid=3038456.8&amp;page=cartbuy;reccom_Cart_0_9#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8798&amp;bid=3038456.9&amp;page=cartbuy">
     <h2 class="xm-recommend-title"><span>买购物车中商品的人还买了</span></h2>
     <div class="xm-recommend"> 
      <ul class="row clearfix"> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a href="//item.mi.com/1181300011.html" data-log_code="reccom_Cart_0_0#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7857&amp;bid=3038456.0&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="0" data-stat-text="知吾煮鸳鸯锅" target="_blank" data-stat-pid="stat_Cart.购物车_0_1_11" data-stat-aid="知吾煮鸳鸯锅"> <img src="//i1.mifile.cn/a1/pms_1522207895.76617985!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1522207895.76617985!280x280.jpg  2x" alt="知吾煮鸳鸯锅" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a href="//item.mi.com/1181300011.html" data-log_code="reccom_Cart_0_0#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7857&amp;bid=3038456.0&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="0" target="_blank" data-stat-pid="stat_Cart.购物车_0_1_11"> 知吾煮鸳鸯锅 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          169元
         </dd> 
         <dd class="xm-recommend-tips">
           192人好评 
          <a href="//item.mi.com/cart/add/2181300010-0-1" data-log_code="reccom_Cart_0_0#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7857&amp;bid=3038456.0&amp;page=cartbuy" data-stat-gid="2181300010" data-stat-method="1_11" data-stat-index="0" data-stat-text="知吾煮鸳鸯锅" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn" data-stat-pid="stat_Cart加购.购物车_0_1_11" data-stat-aid="知吾煮鸳鸯锅">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a href="//item.mi.com/1185000003.html" data-log_code="reccom_Cart_0_1#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9133&amp;bid=3038456.1&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="1" data-stat-text="小米MIX 3 獬豸神兽保护壳" target="_blank" data-stat-pid="stat_Cart.购物车_1_1_11" data-stat-aid="小米MIX3獬豸神兽保护壳"> <img src="//i1.mifile.cn/a1/pms_1544509997.92953277!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1544509997.92953277!280x280.jpg  2x" alt="小米MIX 3 獬豸神兽保护壳" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a href="//item.mi.com/1185000003.html" data-log_code="reccom_Cart_0_1#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9133&amp;bid=3038456.1&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="1" target="_blank" data-stat-pid="stat_Cart.购物车_1_1_11"> 小米MIX 3 獬豸神兽保护壳 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          69元
         </dd> 
         <dd class="xm-recommend-tips">
           67人好评 
          <a href="//item.mi.com/cart/add/2185000002-0-1" data-log_code="reccom_Cart_0_1#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9133&amp;bid=3038456.1&amp;page=cartbuy" data-stat-gid="2185000002" data-stat-method="1_11" data-stat-index="1" data-stat-text="小米MIX 3 獬豸神兽保护壳" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn" data-stat-pid="stat_Cart加购.购物车_1_1_11" data-stat-aid="小米MIX3獬豸神兽保护壳" style="display: none;">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a href="//item.mi.com/1183600003.html" data-log_code="reccom_Cart_0_2#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8790&amp;bid=3038456.2&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="2" data-stat-text="小米小爱智能闹钟" target="_blank" data-stat-pid="stat_Cart.购物车_2_1_11" data-stat-aid="小米小爱智能闹钟"> <img src="//i1.mifile.cn/a1/pms_1537237102.41069374!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1537237102.41069374!280x280.jpg  2x" alt="小米小爱智能闹钟" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a href="//item.mi.com/1183600003.html" data-log_code="reccom_Cart_0_2#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8790&amp;bid=3038456.2&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="2" target="_blank" data-stat-pid="stat_Cart.购物车_2_1_11"> 小米小爱智能闹钟 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          149元
         </dd> 
         <dd class="xm-recommend-tips">
           1705人好评 
          <a href="//item.mi.com/cart/add/2183600001-0-1" data-log_code="reccom_Cart_0_2#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8790&amp;bid=3038456.2&amp;page=cartbuy" data-stat-gid="2183600001" data-stat-method="1_11" data-stat-index="2" data-stat-text="小米小爱智能闹钟" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn" data-stat-pid="stat_Cart加购.购物车_2_1_11" data-stat-aid="小米小爱智能闹钟">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a href="//item.mi.com/1173200004.html" data-log_code="reccom_Cart_0_3#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6527&amp;bid=3038456.3&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="3" data-stat-text="米兔儿童磁力积木" target="_blank" data-stat-pid="stat_Cart.购物车_3_1_11" data-stat-aid="米兔儿童磁力积木"> <img src="//i1.mifile.cn/a1/pms_1502674859.14272439!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1502674859.14272439!280x280.jpg  2x" alt="米兔儿童磁力积木" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a href="//item.mi.com/1173200004.html" data-log_code="reccom_Cart_0_3#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6527&amp;bid=3038456.3&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="3" target="_blank" data-stat-pid="stat_Cart.购物车_3_1_11"> 米兔儿童磁力积木 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          179元
         </dd> 
         <dd class="xm-recommend-tips">
           977人好评 
          <a href="//item.mi.com/cart/add/2173200002-0-1" data-log_code="reccom_Cart_0_3#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6527&amp;bid=3038456.3&amp;page=cartbuy" data-stat-gid="2173200002" data-stat-method="1_11" data-stat-index="3" data-stat-text="米兔儿童磁力积木" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn" data-stat-pid="stat_Cart加购.购物车_3_1_11" data-stat-aid="米兔儿童磁力积木">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a href="//item.mi.com/1184500015.html" data-log_code="reccom_Cart_0_4#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9063&amp;bid=3038456.4&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="4" data-stat-text="小米USB-C数据线 编织线版200cm" target="_blank" data-stat-pid="stat_Cart.购物车_4_1_11" data-stat-aid="小米USB-C数据线编织线版200cm"> <img src="//i1.mifile.cn/a1/pms_1541579555.72534737!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1541579555.72534737!280x280.jpg  2x" alt="小米USB-C数据线 编织线版200cm" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a href="//item.mi.com/1184500015.html" data-log_code="reccom_Cart_0_4#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9063&amp;bid=3038456.4&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="4" target="_blank" data-stat-pid="stat_Cart.购物车_4_1_11"> 小米USB-C数据线 编织线版200cm </a> 
         </dd> 
         <dd class="xm-recommend-price">
          29.9元
         </dd> 
         <dd class="xm-recommend-tips">
           183人好评 
          <a href="//item.mi.com/cart/add/2184500013-0-1" data-log_code="reccom_Cart_0_4#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9063&amp;bid=3038456.4&amp;page=cartbuy" data-stat-gid="2184500013" data-stat-method="1_11" data-stat-index="4" data-stat-text="小米USB-C数据线 编织线版200cm" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn" data-stat-pid="stat_Cart加购.购物车_4_1_11" data-stat-aid="小米USB-C数据线编织线版200cm">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a href="//item.mi.com/1184200013.html" data-log_code="reccom_Cart_0_5#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8947&amp;bid=3038456.5&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="5" data-stat-text="小米MIX 3 全网通版 6GB内存" target="_blank" data-stat-pid="stat_Cart.购物车_5_1_11" data-stat-aid="小米MIX3全网通版6GB内存"> <img src="//i1.mifile.cn/a1/pms_1540429613.4617799!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1540429613.4617799!280x280.jpg  2x" alt="小米MIX 3 全网通版 6GB内存" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a href="//item.mi.com/1184200013.html" data-log_code="reccom_Cart_0_5#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8947&amp;bid=3038456.5&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="5" target="_blank" data-stat-pid="stat_Cart.购物车_5_1_11"> 小米MIX 3 全网通版 6GB内存 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          3299元
         </dd> 
         <dd class="xm-recommend-tips">
           2356人好评 
          <a href="//item.mi.com/cart/add/2184200002-0-1" data-log_code="reccom_Cart_0_5#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8947&amp;bid=3038456.5&amp;page=cartbuy" data-stat-gid="2184200002" data-stat-method="1_11" data-stat-index="5" data-stat-text="小米MIX 3 全网通版 6GB内存" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn" data-stat-pid="stat_Cart加购.购物车_5_1_11" data-stat-aid="小米MIX3全网通版6GB内存" style="display: none;">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a href="//item.mi.com/1181600022.html" data-log_code="reccom_Cart_0_6#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7919&amp;bid=3038456.6&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="6" data-stat-text="小米游戏耳机" target="_blank" data-stat-pid="stat_Cart.购物车_6_1_11" data-stat-aid="小米游戏耳机"> <img src="//i1.mifile.cn/a1/pms_1524556806.78874166!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1524556806.78874166!280x280.jpg  2x" alt="小米游戏耳机" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a href="//item.mi.com/1181600022.html" data-log_code="reccom_Cart_0_6#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7919&amp;bid=3038456.6&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="6" target="_blank" data-stat-pid="stat_Cart.购物车_6_1_11"> 小米游戏耳机 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          299元
         </dd> 
         <dd class="xm-recommend-tips">
           683人好评 
          <a href="//item.mi.com/cart/add/2181600015-0-1" data-log_code="reccom_Cart_0_6#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7919&amp;bid=3038456.6&amp;page=cartbuy" data-stat-gid="2181600015" data-stat-method="1_11" data-stat-index="6" data-stat-text="小米游戏耳机" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn" data-stat-pid="stat_Cart加购.购物车_6_1_11" data-stat-aid="小米游戏耳机" style="display: none;">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a href="//item.mi.com/1173100107.html" data-log_code="reccom_Cart_0_7#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6517&amp;bid=3038456.7&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="7" data-stat-text="Free Tie真皮板鞋 米家定制 女款" target="_blank" data-stat-pid="stat_Cart.购物车_7_1_11" data-stat-aid="FreeTie真皮板鞋米家定制女款"> <img src="//i1.mifile.cn/a1/pms_1504510188.92347156!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1504510188.92347156!280x280.jpg  2x" alt="Free Tie真皮板鞋 米家定制 女款" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a href="//item.mi.com/1173100107.html" data-log_code="reccom_Cart_0_7#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6517&amp;bid=3038456.7&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="7" target="_blank" data-stat-pid="stat_Cart.购物车_7_1_11"> Free Tie真皮板鞋 米家定制 女款 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          129元
         </dd> 
         <dd class="xm-recommend-tips">
           2939人好评 
          <a href="//item.mi.com/cart/add/2173100042-0-1" data-log_code="reccom_Cart_0_7#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6517&amp;bid=3038456.7&amp;page=cartbuy" data-stat-gid="2173100042" data-stat-method="1_11" data-stat-index="7" data-stat-text="Free Tie真皮板鞋 米家定制 女款" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn" data-stat-pid="stat_Cart加购.购物车_7_1_11" data-stat-aid="FreeTie真皮板鞋米家定制女款" style="display: none;">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a href="//item.mi.com/1184200028.html" data-log_code="reccom_Cart_0_8#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8961&amp;bid=3038456.8&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="8" data-stat-text="米家插线板延长线" target="_blank" data-stat-pid="stat_Cart.购物车_8_1_11" data-stat-aid="米家插线板延长线"> <img src="//i1.mifile.cn/a1/pms_1540195826.99487571!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1540195826.99487571!280x280.jpg  2x" alt="米家插线板延长线" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a href="//item.mi.com/1184200028.html" data-log_code="reccom_Cart_0_8#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8961&amp;bid=3038456.8&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="8" target="_blank" data-stat-pid="stat_Cart.购物车_8_1_11"> 米家插线板延长线 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          49元
         </dd> 
         <dd class="xm-recommend-tips">
           200人好评 
          <a href="//item.mi.com/cart/add/2184200011-0-1" data-log_code="reccom_Cart_0_8#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8961&amp;bid=3038456.8&amp;page=cartbuy" data-stat-gid="2184200011" data-stat-method="1_11" data-stat-index="8" data-stat-text="米家插线板延长线" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn" data-stat-pid="stat_Cart加购.购物车_8_1_11" data-stat-aid="米家插线板延长线" style="display: none;">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li> 
       <li class="J_xm-recommend-list span4"> 
        <dl> 
         <dt> 
          <a href="//item.mi.com/1183600011.html" data-log_code="reccom_Cart_0_9#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8798&amp;bid=3038456.9&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="9" data-stat-text="小米8 青春 全网通版 6GB内存" target="_blank" data-stat-pid="stat_Cart.购物车_9_1_11" data-stat-aid="小米8青春全网通版6GB内存"> <img src="//i1.mifile.cn/a1/pms_1537323998.75519375!140x140.jpg" srcset="//i1.mifile.cn/a1/pms_1537323998.75519375!280x280.jpg  2x" alt="小米8 青春 全网通版 6GB内存" /> </a> 
         </dt> 
         <dd class="xm-recommend-name"> 
          <a href="//item.mi.com/1183600011.html" data-log_code="reccom_Cart_0_9#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8798&amp;bid=3038456.9&amp;page=cartbuy" data-stat-method="1_11" data-stat-index="9" target="_blank" data-stat-pid="stat_Cart.购物车_9_1_11"> 小米8 青春 全网通版 6GB内存 </a> 
         </dd> 
         <dd class="xm-recommend-price">
          1699元
         </dd> 
         <dd class="xm-recommend-tips">
           5759人好评 
          <a href="//item.mi.com/cart/add/2183600009-0-1" data-log_code="reccom_Cart_0_9#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8798&amp;bid=3038456.9&amp;page=cartbuy" data-stat-gid="2183600009" data-stat-method="1_11" data-stat-index="9" data-stat-text="小米8 青春 全网通版 6GB内存" data-stat-addcart="加购" class="btn btn-small btn-line-primary J_xm-recommend-btn" data-stat-pid="stat_Cart加购.购物车_9_1_11" data-stat-aid="小米8青春全网通版6GB内存">加入购物车</a> 
         </dd> 
         <dd class="xm-recommend-notice"></dd> 
        </dl> </li>
      </ul>
     </div>
    </div> 
    <!-- <div class="cart-recommend" id="J_miHistoryBox"></div> --> 
   </div> 
  </div>
 


@endsection
@section('title','我的购物车')
@section('miniHeaderTitle','我的购物车')