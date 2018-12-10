@extends('Home.HomePublic.publicmini')


@section('container')

<script type="text/javascript">
var _confirmConfig = {
    order_id:'5181208779186014',
    safe_tel:'',
    goods_amount:'3599',
};
</script>
<script type="text/javascript" src="static/homes/confirm/payConfirm.min.js.下载"></script>
<div class="page-main">
    <div class="container confirm-box">
                <form target="_blank" action="https://order.mi.com/buy/confirm?id=5181208779186014#" id="J_payForm" method="post">
            <div class="section section-order">
                <div class="order-info clearfix">
                                            <div class="fl">
                            <h2 class="title">订单提交成功！去付款咯～</h2>
                            <p class="order-time" id="J_deliverDesc"></p>
                            <p class="order-time">请在<span class="pay-time-tip">0小时30分</span>内完成支付, 超时后将取消订单</p>
                            <p class="post-info post-info-hide" id="J_postInfo">
                                收货信息：关二 188****4325 &nbsp;&nbsp;
                                广东&nbsp;&nbsp;广州市&nbsp;&nbsp;天河区&nbsp;&nbsp;棠下街道&nbsp;&nbsp;大片路20号风行牛奶附近(先打电话)                            </p>
                        </div>
                        <div class="fr">
                            <p class="total">
                                应付总额：<span class="money"><em>3599</em>元</span>
                            </p>
                            <a href="javascript:void(0);" class="show-detail" id="J_showDetail" data-stat-id="db85b2885a2fdc53" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-db85b2885a2fdc53&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">订单详情<i class="iconfont"></i></a>
                        </div>
                                    </div>
                <i class="iconfont icon-right">√</i>
                <div class="order-detail" style="display: block;">
                    <ul>
                        <li class="clearfix">
                            <div class="label">订单号：</div>
                            <div class="content">
                                <span class="order-num">
                                    5181208779186014                                </span>
                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="label">收货信息：</div>
                            <div class="content">
                            关二 188****4325&nbsp;&nbsp;
                            广东&nbsp;&nbsp;广州市&nbsp;&nbsp;天河区&nbsp;&nbsp;棠下街道&nbsp;&nbsp;大片路20号风行牛奶附近(先打电话)                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="label">商品名称：</div>
                            <div class="content">
                                小米8 屏幕指纹版 8GB内存 透明 128GB<br>米粉卡日租卡<br>小米 8 屏幕指纹版&amp;小米 8 透明探索版 标准高透贴膜                            </div>
                        </li>
                        <li class="clearfix hide">
                            <div class="label">配送时间：</div>
                            <div class="content">
                                不限送货时间                            </div>
                        </li>
                        <li class="clearfix">
                            <div class="label">发票信息：</div>
                            <div class="content">
                                电子发票 个人                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            
            <div class="section section-payment">
                <div class="cash-title" id="J_cashTitle">
                                        选择以下支付方式付款
                                    </div>

                <div class="payment-box ">
                    <div class="payment-header clearfix">
                        <h3 class="title">支付平台</h3>
                        <span class="desc"></span>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list J_paymentList J_linksign-customize">
                            <li id="J_weixin" data-stat-id="4971b7cf6ccf0faf" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-4971b7cf6ccf0faf&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><img src="static/homes/confirm/weixinpay.png" alt="微信支付" style="margin-left: 0;"></li><li class="J_bank" data-stat-id="4971b7cf6ccf0faf" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-4971b7cf6ccf0faf&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="alipay" value="alipay"> <img src="static/homes/confirm/event-alipay20160718.jpg" alt="支付宝" style="margin-left: 0;"></li><li class="J_bank" data-stat-id="4971b7cf6ccf0faf" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-4971b7cf6ccf0faf&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="unionpay" value="unionpay"> <img src="static/homes/confirm/unionpay.png" alt="银联" style="margin-left: 0;"></li><li class="J_bank" data-stat-id="4971b7cf6ccf0faf" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-4971b7cf6ccf0faf&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="micash" value="micash"> <img src="static/homes/confirm/micash.png" alt="小米钱包" style="margin-left: 0;"></li>                        </ul>
                                                <div class="event-desc">
                            <p>支 付 宝：支付宝扫码支付，赢1999元红包</p>                            <a href="https://www.mi.com/c/payrule/" class="more" target="_blank" data-stat-id="307ecac152e748b9" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-307ecac152e748b9&#39;, &#39;//www.mi.com/c/payrule/&#39;, &#39;pcpid&#39;, &#39;&#39;]);">了解更多&gt;</a>
                        </div>
                                            </div>
                </div>

                <div class="payment-box ">
                    <div class="payment-header clearfix">
                        <h3 class="title">银行借记卡及信用卡</h3>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list payment-list-much J_paymentList J_linksign-customize">
                            <li class="J_bank" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="CMB" value="CMB"> <img src="static/homes/confirm/payOnline_zsyh.png" alt=""></li><li class="J_bank" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="ICBCB2C" value="ICBCB2C"> <img src="static/homes/confirm/payOnline_gsyh.png" alt=""></li><li class="J_bank" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="CCB" value="CCB"> <img src="static/homes/confirm/payOnline_jsyh.png" alt=""></li><li class="J_bank" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="COMM" value="COMM"> <img src="static/homes/confirm/payOnline_jtyh.png" alt=""></li><li class="J_bank" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="ABC" value="ABC"> <img src="static/homes/confirm/payOnline_nyyh.png" alt=""></li><li class="J_bank" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="BOCB2C" value="BOCB2C"> <img src="static/homes/confirm/payOnline_zgyh.png" alt=""></li><li class="J_bank" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="PSBC-DEBIT" value="PSBC-DEBIT"> <img src="static/homes/confirm/payOnline_youzheng.png" alt=""></li><li class="J_bank" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="GDB" value="GDB"> <img src="static/homes/confirm/payOnline_gfyh.png" alt=""></li><li class="J_bank" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="SPDB" value="SPDB"> <img src="static/homes/confirm/payOnline_pufa.png" alt=""></li><li class="J_bank" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="CEBBANK" value="CEBBANK"> <img src="static/homes/confirm/payOnline_gdyh.png" alt=""></li><li class="J_bank" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="CIB" value="CIB"> <img src="static/homes/confirm/payOnline_xyyh.png" alt=""></li><li class="J_bank hide" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="CMBC" value="CMBC"> <img src="static/homes/confirm/payOnline_msyh.png" alt=""></li><li class="J_bank hide" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="SHBANK" value="SHBANK"> <img src="static/homes/confirm/payOnline_shyh.png" alt=""></li><li class="J_bank hide" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="BJRCB" value="BJRCB"> <img src="static/homes/confirm/payOnline_bjnsyh.png" alt=""></li><li class="J_bank hide" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="NBBANK" value="NBBANK"> <img src="static/homes/confirm/payOnline_nbyh.png" alt=""></li><li class="J_bank hide" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="HZCBB2C" value="HZCBB2C"> <img src="static/homes/confirm/payOnline_hzyh.png" alt=""></li><li class="J_bank hide" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="SHRCB" value="SHRCB"> <img src="static/homes/confirm/payOnline_shnsyh.png" alt=""></li><li class="J_bank hide" data-stat-id="3e7f807e5319a275" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e7f807e5319a275&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="FDB" value="FDB"> <img src="static/homes/confirm/payOnline_fcyh.png" alt=""></li>                            <li class="J_showMore" data-stat-id="1a75d155ddfb7ea6" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-1a75d155ddfb7ea6&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);">
                                <span class="text">查看更多</span>
                                <span class="text  hide">收起更多</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="payment-box payment-box-last ">
                    <div class="payment-header clearfix">
                        <h3 class="title">快捷支付</h3>
                        <span class="desc">（支持以下各银行信用卡以及部分银行借记卡）</span>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list  J_paymentList J_linksign-customize">
                            <li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="CMB-KQ" value="CMB-KQ"> <img src="static/homes/confirm/payOnline_zsyh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="COMM-KQ" value="COMM-KQ"> <img src="static/homes/confirm/payOnline_jtyh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="CCB-KQ" value="CCB-KQ"> <img src="static/homes/confirm/payOnline_jsyh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="ICBCB2C-KQ" value="ICBCB2C-KQ"> <img src="static/homes/confirm/payOnline_gsyh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="CITIC-KQ" value="CITIC-KQ"> <img src="static/homes/confirm/payOnline_zxyh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="CEBBANK-KQ" value="CEBBANK-KQ"> <img src="static/homes/confirm/payOnline_gdyh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="BOCB2C-KQ" value="BOCB2C-KQ"> <img src="static/homes/confirm/payOnline_zgyh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="SRCB-KQ" value="SRCB-KQ"> <img src="static/homes/confirm/payOnline_shncsyyh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="JSB-KQ" value="JSB-KQ"> <img src="static/homes/confirm/payOnline_jiangsshuyh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="CIB-KQ" value="CIB-KQ"> <img src="static/homes/confirm/payOnline_xyyh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="ABC-KQ" value="ABC-KQ"> <img src="static/homes/confirm/payOnline_nyyh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="SPABANK-KQ" value="SPABANK-KQ"> <img src="static/homes/confirm/payOnline_payh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="HXB-KQ" value="HXB-KQ"> <img src="static/homes/confirm/payOnline_hyyh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="GDB-KQ" value="GDB-KQ"> <img src="static/homes/confirm/payOnline_gfyh.png" alt=""></li><li class="J_bank" data-stat-id="beebcefe84431b57" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-beebcefe84431b57&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input type="radio" name="payOnlineBank" id="BOB-KQ" value="BOB-KQ"> <img src="static/homes/confirm/payOnline_bjyh.png" alt=""></li>                        </ul>
                    </div>
                </div>
            </div>
                        <div class="section section-installment" id="J_paymentFenqi">
                <div class="payment-box">
                    <div class="payment-header clearfix">
                        <h3 class="title">分期付款</h3>
                        <span class="desc"></span>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list J_paymentList J_linksign-customize J_tabSwitch">
                            <li class="J_bank fenqi" id="J_huabeifenqi" data-isinstalment="true" data-stat-id="9c74efccaa92537a" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-9c74efccaa92537a&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input autocomplete="off" type="radio" name="payOnlineBank" id="antinstal" value="antinstal"> <img src="static/homes/confirm/payOnline_ant_huabei.png" alt="蚂蚁花呗分期付款	"></li><li class="J_bank fenqi" data-isinstalment="true" data-stat-id="9c74efccaa92537a" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-9c74efccaa92537a&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input autocomplete="off" type="radio" name="payOnlineBank" id="mifinanceinstal" value="mifinanceinstal"> <img src="static/homes/confirm/mifinanceinstal.png" alt="分期-小米金融	"></li><li class="J_bank fenqi" data-isinstalment="true" data-stat-id="9c74efccaa92537a" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-9c74efccaa92537a&#39;, &#39;&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><input autocomplete="off" type="radio" name="payOnlineBank" id="cmbinstal" value="cmbinstal"> <img src="static/homes/confirm/payOnline_zsyh(1).png" alt="分期-招商银行	"></li>                        </ul>
                        <div class="tab-container clearfix isinstalment-box">
                                                        <div class="tab-content  clearfix">
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>1227.25元 × 3期</h3>
                                        <p>
                                                                                        手续费 27.59元/期                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_3" value="3">
                                        <a href="javascript:void(0);" data-installid="antinstal" class="btn J_installmentConfirmBtn" data-stat-id="42a8872dcf10f474" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-42a8872dcf10f474&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>626.82元 × 6期</h3>
                                        <p>
                                                                                        手续费 26.99元/期                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_6" value="6">
                                        <a href="javascript:void(0);" data-installid="antinstal" class="btn J_installmentConfirmBtn" data-stat-id="42a8872dcf10f474" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-42a8872dcf10f474&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>322.4元 × 12期</h3>
                                        <p>
                                                                                        手续费 22.49元/期                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_12" value="12">
                                        <a href="javascript:void(0);" data-installid="antinstal" class="btn J_installmentConfirmBtn" data-stat-id="42a8872dcf10f474" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-42a8872dcf10f474&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                
                                <div class="isinstalment-desc">
                                    分期付款说明：<br>
                                                                        1、选择蚂蚁花呗分期后，如更改分期数或切换其他支付方式遇到问题，推荐您使用小米钱包进行支付。<br>
                                    2、每期还款金额是根据你的订单估算得出的金额，实际支付数额请以支付宝账单为准，支付宝有权决定是否接受您的分期付款申请。
                                                                    </div>
                            </div>
                                                        <div class="tab-content  clearfix">
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>1226.3元 × 3期</h3>
                                        <p>
                                                                                        手续费 26.63元/期                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_3" value="3">
                                        <a href="javascript:void(0);" data-installid="mifinanceinstal" class="btn J_installmentConfirmBtn" data-stat-id="42a8872dcf10f474" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-42a8872dcf10f474&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>623.22元 × 6期</h3>
                                        <p>
                                                                                        手续费 23.39元/期                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_6" value="6">
                                        <a href="javascript:void(0);" data-installid="mifinanceinstal" class="btn J_installmentConfirmBtn" data-stat-id="42a8872dcf10f474" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-42a8872dcf10f474&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>321.51元 × 12期</h3>
                                        <p>
                                                                                        手续费 21.59元/期                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_12" value="12">
                                        <a href="javascript:void(0);" data-installid="mifinanceinstal" class="btn J_installmentConfirmBtn" data-stat-id="42a8872dcf10f474" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-42a8872dcf10f474&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                
                                <div class="isinstalment-desc">
                                    分期付款说明：<br>
                                                                        每期还款金额是根据你的订单估算得出的金额，实际支付数额请以小米分期账单为准，小米分期有权决定是否接受您的分期付款申请。
                                                                    </div>
                            </div>
                                                        <div class="tab-content  clearfix">
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>1242.85元 × 3期</h3>
                                        <p>
                                                                                        手续费 43.19元/期                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_3" value="3">
                                        <a href="javascript:void(0);" data-installid="cmbinstal" class="btn J_installmentConfirmBtn" data-stat-id="42a8872dcf10f474" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-42a8872dcf10f474&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>628.63元 × 6期</h3>
                                        <p>
                                                                                        手续费 28.79元/期                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_6" value="6">
                                        <a href="javascript:void(0);" data-installid="cmbinstal" class="btn J_installmentConfirmBtn" data-stat-id="42a8872dcf10f474" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-42a8872dcf10f474&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>321.51元 × 12期</h3>
                                        <p>
                                                                                        手续费 21.59元/期                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_12" value="12">
                                        <a href="javascript:void(0);" data-installid="cmbinstal" class="btn J_installmentConfirmBtn" data-stat-id="42a8872dcf10f474" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-42a8872dcf10f474&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                
                                <div class="isinstalment-desc">
                                    分期付款说明：<br>
                                                                        每期还款金额是根据你的订单估算得出的金额，实际支付数额请以银行/支付宝账单为准，银行/支付宝有权决定是否接受您的分期付款申请。
                                                                    </div>
                            </div>
                                                    </div>
                        <div class="isinstalment-desc" id="J_isinstalmentPublicDesc">
                        </div>
                    </div>
                </div>
            </div>
                    </form>
    </div>
</div>

<!--现金账户 提示框-->
<div class="modal  modal-hide modal-balance-pay" id="J_balancePay">
    <div class="modal-header">
        <h3>现金账户安全验证</h3>
        <span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
    </div>
    <div class="modal-body">
        <p>
            为了确保您的购物安全<br>
            已向您当前的联系电话 <span class="num" id="J_cashPayPhone"></span>  发送验证码
        </p>
        <div class="form-section">
            <label class="input-label" for="verifycode">请输入验证码</label>
            <input class="input-text" type="text" id="verifycode" name="verifycode">
            <span class="btn btn-block hide" id="J_sendAgain"></span>
        </div>
        <div class="tip" id="J_checkCodeTip"></div>
    </div>
    <div class="modal-footer">
         <a class="btn btn-gray" data-dismiss="modal" href="javascript:void(0);" data-stat-id="aca6a7466c3f3c1f" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-aca6a7466c3f3c1f&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">取消</a>
         <a class="btn btn-primary" id="J_checkCodeBtn" href="javascript:void(0);" data-stat-id="3e845d43be021619" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-3e845d43be021619&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);">确认</a>
    </div>
</div>

<!-- 支付提示框 -->
<div class="modal fade modal-hide modal-pay-tip" id="J_payTip" aria-hidden="false">
    <div class="modal-header">
        <h3>正在支付...</h3>
        <a class="close" data-dismiss="modal" href="javascript: void(0);" data-stat-id="d4b65cafe609c9e2" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-d4b65cafe609c9e2&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><i class="iconfont"></i></a>
    </div>
    <div class="modal-body clearfix">
        <div class="success">
            <h4>支付成功了</h4>
            <p><a href="https://order.mi.com/user/orderView/5181208779186014" data-stat-id="8a4ed9cdf41607ca" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-8a4ed9cdf41607ca&#39;, &#39;https://order.mi.com/user/orderView/5181208779186014&#39;, &#39;pcpid&#39;, &#39;&#39;]);">立即查看订单详情 &gt;</a></p>
        </div>
        <div class="fail">
            <h4>如果支付失败</h4>
            <p><a href="http://bbs.xiaomi.cn/thread/index/tid/11544653" target="_blank" data-stat-id="b79f1fe5cccf37af" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-b79f1fe5cccf37af&#39;, &#39;http://bbs.xiaomi.cn/thread/index/tid/11544653&#39;, &#39;pcpid&#39;, &#39;&#39;]);">查看支付常见问题 &gt;</a></p>
        </div>
    </div>
</div>

<div class="modal modal-hide fade modal-alert" id="J_modalAlert">
    <div class="modal-bd">
        <div class="text">
            <h3 id="J_alertMsg"></h3>
        </div>
        <div class="actions">
            <button class="btn btn-primary" data-dismiss="modal">确定</button>
        </div>
        <a class="close" data-dismiss="modal" href="javascript: void(0);" data-stat-id="86faab7930e5a48b" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-86faab7930e5a48b&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><i class="iconfont"></i></a>
    </div>
</div>

<div class="modal modal-hide fade modal-alipay" id="J_modalAlipay">
    <div class="modal-bd">
        <div class="loading"><div class="loader"></div></div>
        <iframe name="alipayQrcodeIframe" scrolling="no" frameborder="0" width="100%" height="100%" src="static/homes/confirm/saved_resource.html"></iframe>
    </div>
    <a class="close" data-dismiss="modal" href="javascript: void(0);" data-stat-id="2f64e132b8ac52d5" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-2f64e132b8ac52d5&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><i class="iconfont"></i></a>
</div>

<div class="modal modal-hide fade modal-weixin-pay" id="J_modalWeixinPay">
    <div class="modal-hd">
        <span class="title">微信支付</span>
        <a class="close" data-dismiss="modal" href="javascript: void(0);" data-stat-id="7f05d4a8c5beeb64" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-7f05d4a8c5beeb64&#39;, &#39;javascript:void0&#39;, &#39;pcpid&#39;, &#39;&#39;]);"><i class="iconfont"></i></a>
    </div>
    <div class="modal-bd" id="J_showWeixinPayExample">
        <div class="code" id="J_weixinPayCode">
            <div class="loading"><div class="loader"></div></div>
        </div>
        <div class="msg">
            请使用 <span>微信</span> 扫一扫<br>二维码完成支付
        </div>
    </div>
    <div class="example" id="J_weixinPayExample"></div>
</div>

<div class="deliver-beta hide" id="J_deliverBeta">
    <p>预计送达时间功能处于测试阶段，若您在下单时已选择“周末送货”或“工作日送货”，则会顺延至您要求的时间，如果发现预计送达时间不准确，期待您的反馈，我们会及时改进。</p>
    <a href="https://static.mi.com/feedback/" target="_blank" data-stat-id="ae6964fcc9846205" onclick="_msq.push([&#39;trackEvent&#39;, &#39;f1542ececd0b6bc5-ae6964fcc9846205&#39;, &#39;//static.mi.com/feedback/&#39;, &#39;pcpid&#39;, &#39;&#39;]);">问题反馈 &gt;</a>

    <i class="arrow arrow-a"></i>
    <i class="arrow arrow-b"></i>
</div>

@endsection
@section('title','选择在线支付方式')
@section('miniHeaderTitle','支付订单')