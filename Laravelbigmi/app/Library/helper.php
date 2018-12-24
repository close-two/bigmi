<?php 
//载入ucpass类
// require_once('Library/sendsphone/lib/Ucpaas.class.php');
	// 发送短信校验码
	function sendphone($p){
		//初始化必填
		//填写在开发者控制台首页上的Account Sid
		$options['accountsid']='6bc0f9a05ba6f22b8d1213b07340c89d';
		//填写在开发者控制台首页上的Auth Token
		$options['token']='872357c173e72e184baa93cb820c7e4d';

		//初始化 $options必填
		$ucpass = new Ucpaas($options);
		$appid = "c08d0676f7854438b813e3afa7c398f7";	//应用的ID，可在开发者控制台内的短信产品下查看
		$templateid = "399727";    //可在后台短信产品→选择接入的应用→短信模板-模板ID，查看该模板ID
		$param = $_POST['yzm']; //多个参数使用英文逗号隔开（如：param=“a,b,c”），如为参数则留空
		$mobile = $_POST['yzmtel'];
		$uid = "";

		//70字内（含70字）计一条，超过70字，按67字/条计费，超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。

		echo $ucpass->SendSms($appid,$templateid,$param,$mobile,$uid);
	}
 ?>
