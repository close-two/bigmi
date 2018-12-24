<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>地址选择多级联动</title>
	<script src="/static/jquery-1.8.3.min.js"></script>
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<script src="/bootstrap/js/jquery.min.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	<script src="/bootstrap/js/holder.min.js"></script>
	<style>
		.op{
			margin:0 5px 5px 0;

		}
		.op:hover{
			background-color: lightgreen;
		}
		#box{
			overflow: hidden;
			display: block;
		}
	</style>
</head>
<body>
	<!-- <select name="" id="sid" data-toggle="modal" data-target="#mymodal">
		
	</select> -->
	<br/>
	<div style="width: 750px">
		<div class="btn-group  btn-block">
			
			<button class="btn btn-default col-lg-11" style="height: 33px"></button>
			<button class="btn col-lg-1" data-toggle="modal" data-target="#mymodal">
				<span class="caret"></span>
				<span class="sr-only">切换下拉菜单</span>
			</button>
			<br>
			<br>

			<div class="modal" id="mymodal" style="position: relative;top: 10px">

				<div class="modal-content">
					<div class="modal-header">
						<button class="close" data-dismiss="modal">&times;</button>
						<h4 style="font-weight: bold">请选择省份</h4>
					</div>
					<div class="modal-body" id="box">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	$.get('./add.php',{'upid':0},function(result){
		// console.log(result);
		for (var i = 0; i < result.length; i++) {
			var btn = $('<button class="op btn btn-default col-xs-2" value='+result[i].id+' level='+result[i].level+'>'+result[i].name+'</button>');
			$('#box').append(btn);
		}
	},'json');


	$('.op').live('click',function(){

		// console.log($(this));
		obj = $(this);
		id = $(this).val();
		var span = $('button').first().html()?'/':'';
		level = $(this).attr('level');
		console.log(id);
		console.log(level);
		$('.op').remove();
		if (level==1) {
			$('button').first().html($(this).html());
			$('h4').html('请选择城市/地区');
		}else{
			$('button').first().html($('button').first().html()+span+$(this).html());

			switch(level){
				case '1':
					$('h4').html('请选择城市/地区');
					break;
				case '2':
					$('h4').html('请选择区/县');
					break;
				case '3':
					$('h4').html('请选择镇/街道');
					break;
			}
		}
		$.getJSON('./add.php',{'upid':id},function(result){
			// console.log(result);
			if (result != '') {

				for (var i = 0; i < result.length; i++) {
					var btn = $('<button class="op btn btn-default col-xs-2" value='+result[i].id+' level='+result[i].level+'>'+result[i].name+'</button>');
					$('#box').append(btn);

				}
				
			}else{
				$('h4').html('请选择省份');
				
				$.get('./add.php',{'upid':0},function(result){
					// console.log(result);
					for (var i = 0; i < result.length; i++) {
						var btn = $('<button class="op btn btn-default col-xs-2" value='+result[i].id+' level='+result[i].level+'>'+result[i].name+'</button>');
						$('#box').append(btn);
					}
				},'json');
				var level = '1';//重置
			}

		});
	})
</script>
</html>