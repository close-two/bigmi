@extends("Home.HomePublic.publicmini")


@section("container")

<link rel="stylesheet" type="text/css" href="/static/homes/cart/cart.min.css" />
<script type="text/javascript" src="/static/homes/cart/cart.min.js.下载"></script>
<script type="text/javascript" src="/static/homes/cart/xmst.js.下载"></script>
    <div class="page-main"> 
   <div class="container"> 
    <div class="cart-loading loading hide" id="J_cartLoading"> 
     <div class="loader"></div> 
    </div> 



    @if(!session('cart'))
    <div class="cart-empty " id="J_cartEmpty"> 
     <h2>您的购物车还是空的！</h2> 
     <p class="login-desc">登录后将显示您之前加入的商品</p> 
     <a href="javascript:void(0);" class="btn btn-primary btn-login" id="J_loginBtn" data-stat-id="6ab7b2b79aa79ef3" onclick="_msq.push(["trackEvent", "5df97b551662ffe7-6ab7b2b79aa79ef3", "javascript:void0", "pcpid", ""]);">立即登录</a> 
     <a href="/index" class="btn btn-primary btn-shoping J_goShoping" data-stat-id="f7e2e8ff3af3bfec" onclick="_msq.push(["trackEvent", "5df97b551662ffe7-f7e2e8ff3af3bfec", "/list.mi.com/0", "pcpid", ""]);">马上去购物</a> 
    </div> 

    @else


    <div id="J_cartBox" class="jj"> 
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
       <div class="item-box add"> 
        <div class="item-table J_cartGoods" data-info="{ commodity_id:"1175100002", gettype:"buy", itemid:"2175100001_0_buy", num:"1"} "> 
        @if(!empty($data1))
         @foreach($data1 as $row) 
         <div class="item-row  clearfix  gb">
          <div class="col col-check"> 
           <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox" data-itemid="2180800006_0_buy" data-status="1">√</i> 
          </div> 
          <div class="col col-img"> 
           <a href="//item.mi.com/1180800006.html" target="_blank" data-stat-id="f75e15aec56f5109" onclick="_msq.push(["trackEvent", "5df97b551662ffe7-f75e15aec56f5109", "//item.mi.com/1180800006.html", "pcpid", ""]);"> <img alt="" src="{{$row['pic']}}" width="80" height="80" /> </a> 
          </div> 
          <div class="col col-name"> 
           <div class="tags"> 
           </div> 
           <div class="tags"> 
           </div> 
           <h3 class="name"> <a href="//item.mi.com/1180800006.html" target="_blank" data-stat-id="12b91f1022c62ec3" onclick="_msq.push(["trackEvent", "5df97b551662ffe7-12b91f1022c62ec3", "//item.mi.com/1180800006.html", "pcpid", ""]);">{{$row['name']}}</a> </h3> 
          </div> 
          <div class="col col-price ">
            <span class="dj{{$row['id']}}">{{$row['price']}}</span>元 
          </div>
          <div class="col col-num" style="width: 200px"> 
           <div class="change-goods-num clearfix J_changeGoodsNum"> 
           <!-- 加减 -->
            <a href="javascript:void(0);" class="btn btn-info jian" sid="{{$row['id']}}">-</a><input class="num" tyep="text" value="{{$row['num']}}" style="width: 53px"><a href="javascript:void(0);" class="btn btn-info jia" sid="{{$row['id']}}" style="width: 53px;float: left;">+</a><input type="hidden" class="stock" value="{{$row['stock']}}">
           </div>
          </div> 
          <div class="col col-total">
            <span class="xiaoji{{$row['id']}}">{{$row['num']*$row['price']}}</span>元 
           <p class="pre-info"> </p> 
          </div> 
          <div class="col col-action" id="1">
            
            <!-- 删除 -->
                <a uid="{{$row['id']}}"  class="del btn btn-danger"><i class="iconfont"></i></a>
          </div> 
         </div> 
       @endforeach
       @endif
        </div> 
       </div> 
       <div class="item-box"> 
        <div class="item-table J_cartGoods" data-info="{ commodity_id:"1180800007", gettype:"buy", itemid:"2180800007_0_buy", num:"1"} "> 
         <div class="item-row clearfix">
     <!-- <div class="cart-bar clearfix " id="J_cartBar"> 
      <div class="section-left">  
       <a href="/index" class="back-shopping J_goShoping" data-stat-id="c074b1625b246f31" onclick="_msq.push(["trackEvent", "5df97b551662ffe7-c074b1625b246f31", "//list.mi.com/0", "pcpid", ""]);">继续购物</a> 
       <span class="cart-total">共 <i id="J_cartTotalNum">9</i> 件商品</span> 
      <span class="total-price"> 合计：<span class="hj">{{$tot or ""}}</span>元 </span> 
      
      <a href="/check" class="btn btn-a btn btn-primary" id="J_goCheckout" data-stat-id="f7a123f9603b239a" onclick="_msq.push(["trackEvent", "5df97b551662ffe7-f7a123f9603b239a", "javascript:void0", "pcpid", ""]);">去结算</a>
      
      <div class="no-select-tip hide" id="J_noSelectTip"> 
       <i class="arrow arrow-a"></i> 
       <i class="arrow arrow-b"></i> 
      </div> 
     </div> 
  </div> --> 
  <div class="cart-bar clearfix" id="J_cartBar">
                <div class="section-left">
                    <a href="javascript:void(0);" class="back-shopping J_goShoping">继续购物</a>
                    <span class="cart-total hide">共 <i id="J_cartTotalNum"></i> 件商品，已选择 <i id="J_selTotalNum"></i> 件</span>
                </div>
                <span class="total-price">
                    合计：<em id="J_cartTotalPrice" class="hj">{{$tot or ""}}</em>元
                </span>
                <a href="/cartpay" class="btn btn-a btn btn-primary" id="J_goCheckout">去结算</a>

                <div class="no-select-tip hide" id="J_noSelectTip">
                    请勾选需要结算的商品
                    <i class="arrow arrow-a"></i>
                    <i class="arrow arrow-b"></i>
                </div>
            </div>

  @endif
    <div class="cart-recommend hide" id="J_historyRecommend"></div> 
    <div class="cart-recommend container" id="J_miRecommendBox" data-log_codes="reccom_Cart_0_0#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7857&amp;bid=3038456.0&amp;page=cartbuy;reccom_Cart_0_1#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9133&amp;bid=3038456.1&amp;page=cartbuy;reccom_Cart_0_2#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8790&amp;bid=3038456.2&amp;page=cartbuy;reccom_Cart_0_3#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6527&amp;bid=3038456.3&amp;page=cartbuy;reccom_Cart_0_4#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=9063&amp;bid=3038456.4&amp;page=cartbuy;reccom_Cart_0_5#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8947&amp;bid=3038456.5&amp;page=cartbuy;reccom_Cart_0_6#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=7919&amp;bid=3038456.6&amp;page=cartbuy;reccom_Cart_0_7#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=6517&amp;bid=3038456.7&amp;page=cartbuy;reccom_Cart_0_8#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8961&amp;bid=3038456.8&amp;page=cartbuy;reccom_Cart_0_9#eid=180:0:0:0:0:0:0:0:0:0&amp;traceId=CartRec-jR9+VBHvY/be6fJg1XQPsg==&amp;pid=8798&amp;bid=3038456.9&amp;page=cartbuy">
     <!-- <h2 class="xm-recommend-title"><span>买购物车中商品的人还买了</span></h2> -->
    <!-- <div class="cart-recommend" id="J_miHistoryBox"></div> --> 
   </div> 
  </div>
  <script type="text/javascript">
    //ajax删除
    // alert($);
    $(".del").click(function(){
      // $(document).on('click','.del',function(){
      

      //获取删除数据的id
      id=$(this).attr("uid");
      // alert(id);
      // s=$(this).attr("uid");
      ss=confirm("你确定删除吗");
      //确定后
      obj=$(this);
      if(ss){
        // alert(1);
        $.get("/homecardel",{id:id},function($arr){
              if($arr==1){
                  obj.parents('.gb').remove();
              }else{
                 alert($arr);
                 obj.parents('.jj').remove();
                 window.location.href="/homecar";

              }
            
        });
        //获取小计的值
            $kk=$(".xiaoji"+id).html();
            //获取没点击前合计的值
            $hj=$(".hj").html();
            // alert(mm);
            
            //获取点击的商品的单价和没有点击商品前的合计 减起来等于现在的合计
            nm=Number($hj)-Number($kk);
            // alert(nm);
            //把减起来的合计存进去
            $(".hj").html(nm);
      }
            

    });




    // $(".del").click(function(){
    //   id=$(this).attr("uid");
    //   alert(id);
    // });
    // $(".del").parents('.gb').remove();
  </script>

  <script type="text/javascript">
    //ajax减
    // alert($);
    $(".jian").click(function(){
      //获取要操作的数据id
      id=$(this).attr("sid");
      // alert($);
      num=$(this).next().val();
      obg=$(this);
      // alert(id);
      // alert(num);
      $.get("/cartupdatee",{id:id,num:num},function(data){
            // alert(data);
            if (data) {
            num=obg.next().val();
            w=Number(num)-1;
            obg.next().val(w);
            if( obg.next().val()<1){
              a=1;
              obg.next().val(a);
              data.preventDefault();
            }
            //获取小计的值
            $kk=$(".xiaoji"+id).html();
            // alert($kk);
            //获取单价的值
            $dj=$(".dj"+id).html();
            // alert($dj);
            //获取没点击前小计的值
            $hj=$(".hj").html();
            mm=Number($kk)-Number($dj);
            // alert(mm);
            //获取点击后的的小计的值
            $(".xiaoji"+id).html(mm);

            //获取没点击前合计的值
            $hj=$(".hj").html();
            //获取点击的商品的单价和没有点击商品前的合计 减起来等于现在的合计
            nm=Number($hj)-Number($dj);
            // alert(nm);
            //把减起来的合计存进去
            $(".hj").html(nm);
            }
      });
    });
  </script>

   <script type="text/javascript">
    //ajax加
    // alert($);
    $(".jia").click(function(){
      //获取要操作的数据id
      id=$(this).attr("sid");
      num=$(this).prev().val();
      // alert(num);
       stock=$(this).next().val();
      // alert(stock);
      obg=$(this);
      // alert(id);
      // alert(num);
      $.get("/cartupdates",{id:id,num:num,stock:stock},function(data){
            // alert(data);
            num=obg.prev().val();
            // alert(num);
            // alert(stock);
            // alert( obg.prev().val());
            if( Number(num)>=Number(stock)){
              // alert(a);
              // w=stock;
              // alert(num);

              obg.prev().val(stock);
              // alert(obg.prev().val(stock));
              alert("不能超过库存");
              // alert(obg.next().val(a));
            }else{
              w=Number(num)+1;
              // alert(w);
            obg.prev().val(w);
            }

            //获取小计的值
            $kk=$(".xiaoji"+id).html();
            // alert($kk);
            //获取单价的值
            $dj=$(".dj"+id).html();
            // alert($dj);
            //获取小计的值
            $hj=$(".hj").html();
            mm=Number($kk)+Number($dj);
            // alert(mm);
            //获取点击后的的小计的值
            $(".xiaoji"+id).html(mm);

            //获取没点击前合计的值
            $hj=$(".hj").html();
            //获取点击的商品的单价和没有点击商品前的合计 加起来等于现在的合计
            nm=Number($hj)+Number($dj);
            // alert(nm);
            //把加起来的合计存进去
            $(".hj").html(nm);

      });
    });
  </script>
 


@endsection
@section("title","我的购物车")
@section("miniHeaderTitle","我的购物车")