<?php
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/config.inc.php";
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/db.php";
$tpl->assign("title", "任务管理");
$tpl->assign("description", "任务管理系统");
$tpl->display("add.tpl");

if(isset($_POST['title'])){
    $db = new DB();
    $data['id'] = "";
	$data['title'] = $_POST['title'];
	$data['content'] = $_POST['content'];
	$data['level'] = $_POST['level'];
	$data['add_time'] = date("Y-m-d H:i:s");
	$data['end_time'] = $_POST['end_time'];
  $db->insert('task',$data);

  $url = "http://".$_SERVER['HTTP_HOST']."/taskFlow"; 

  //header("Location: ".$url); 
	echo "<script language='javascript' type='text/javascript'>"; 
	echo "window.location.href='$url'"; 
	echo "</script>";
}

?>