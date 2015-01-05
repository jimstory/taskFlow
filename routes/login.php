<?php
session_start();
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/config.inc.php";
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/db.php";
$tpl->assign("title", "任务管理");
$tpl->assign("description", "任务管理系统");
$tpl->display("login.tpl");

if(isset($_POST['name'])){
	$db = new DB();
	$sql = "SELECT * FROM `user` where name = '".$_POST['name']."' and  password = ".$_POST['password'];
	$result = $db->query($sql);

	$count = mysql_num_rows($result); 
	if($count == 0){ 
		echo '登陆错误！';
	 }else{
	 	echo '登陆成功！';
	 	$_SESSION['username'] = $_POST['name'];

	 	//sleep(5);

	    $url = "http://".$_SERVER['HTTP_HOST']."/taskFlow/routes/add.php"; 
	    header("Location: ".$url); 
	  }
}


if(isset($_GET['action']) && $_GET['action'] == "logout"){   
    unset($_SESSION['username']);
    exit;
}


?>
