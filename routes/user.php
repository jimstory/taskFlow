<?php
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/config.inc.php";
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/db.php";
$tpl->assign("title", "任务管理");
$tpl->assign("description", "任务管理系统");
$tpl->display("user.tpl");


if(isset($_POST['name'])){
    $db = new DB();
    $data['id'] = "";
	$data['name'] = $_POST['name'];
	$data['password'] = $_POST['password'];

  $db->insert('user',$data);

  $url = "http://".$_SERVER['HTTP_HOST']."/taskFlow"; 

  //header("Location: ".$url); 
	echo "<script language='javascript' type='text/javascript'>"; 
	echo "window.location.href='$url'"; 
	echo "</script>";
}



?>