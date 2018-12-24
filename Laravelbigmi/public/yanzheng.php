<?php 

	// var_dump($_POST);
	// ajax验证暂时只考虑验证用户名
	$name = $_POST['name'];
	$value = $_POST['value'];

	include './config.php';
	include './Model.class.php';
	$info = new Model('teacher');
	$data['t_name'] = $value;
	$userlist = $info->where($data)->select();
	// select * from teacher where t_name=value;
	// var_dump($userlist);exit;
	if ($userlist) {
		echo 1;
	}else{
		echo 0;
	}

	/*switch ($name) {
		case 'name':// 验证用户名
			// echo "验证用户名";

			break;
		case 'pwd':// 密码
			echo "验证密码";
			break;
		case 'email':// 邮箱
			echo "邮箱";
			break;
		case 'phone':// 手机号
			echo "手机号";
			break;

		
		default:
			# code...
			break;
	}*/

 ?>