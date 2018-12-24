<?php 

	// $_GET['upid'] = 0;
	$dsn = 'mysql:host=119.29.245.124;dbname=bigmi;charset=utf8';
	try{
		$pdo = new PDO($dsn,'xiao','xiao1024');
	}catch(PDOException $e){
		echo $e->getMessage();
	}

	$pdo->setAttribute(3,1);

	$sql = "select * from district where upid={$_GET['upid']}";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$list = $stmt->fetchAll(2);
	// var_dump($list);
	echo json_encode($list);