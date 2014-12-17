<?php
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/config.inc.php";
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/db.php";

$tpl->assign("title", "招聘试题");
$tpl->assign("description", "招聘试题管理系统");

$db = new DB();
//展示页面
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM `task` where id = ".$id;
	$result = $db->get_one($sql);

	$tagId = $result['project_id'];
	//echo $projectId;
	//$tagSql = "SELECT * FROM `project` where id = ".$projectId;
	//$tagRes = $db->get_one($tagSql);

	//$result['tag'] = $tagRes['titel'];

	$tpl->assign("list", $result);
	$tpl->display("update.tpl");
}

//修改操作
if(isset($_POST['title'])){
	$data['title'] = $_POST['title'];
	if(isset($_POST['tag'])){
        $tagData['id'] = "";
        $tagData['name'] = $_POST['tag'];
		$db->insert('tag',$tagData);
		$data['tag'] = $db->insert_id();
	}

	$data['content'] = $_POST['content'];
    $db->update('task',$data,'id='.$_POST['id']);

    $url = "http://".$_SERVER['HTTP_HOST']."/taskFlow"; 
  //header("Location: ".$url); 
	echo "<script language='javascript' type='text/javascript'>"; 
	echo "window.location.href='$url'"; 
	echo "</script>";
}


?>