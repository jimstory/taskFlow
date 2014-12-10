<?php
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/config.inc.php";
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/db.php";

$tpl->assign("title", "招聘试题");
$tpl->assign("description", "招聘试题管理系统");

$db = new DB();
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


if(isset($_POST['title'])){
    $db = new DB();

	$data['title'] = $_POST['title'];
	if(isset($_POST['tag'])){
        $tagData['id'] = "";
        $tagData['name'] = $_POST['tag'];
		$db->insert('tag',$tagData);
		$data['tag'] = $db->insert_id();
	}

	$data['content'] = $_POST['content'];
	$data['answer'] = $_POST['answer'];


  $db->update('task',$data,'id='.$_POST['id']);


}


?>