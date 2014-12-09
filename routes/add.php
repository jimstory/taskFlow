<?php
include  $_SERVER['DOCUMENT_ROOT'] ."interview/config.inc.php";
include  $_SERVER['DOCUMENT_ROOT'] ."interview/db.php";
$tpl->assign("title", "任务管理");
$tpl->assign("description", "任务管理系统");
$tpl->display("add.tpl");

if(isset($_POST['title'])){
    $db = new DB();
    $data['id'] = "";
	$data['title'] = $_POST['title'];
	$data['content'] = $_POST['content'];
  $db->insert('question',$data);
}


?>