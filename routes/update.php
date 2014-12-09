<?php
include  $_SERVER['DOCUMENT_ROOT'] ."interview/config.inc.php";
include  $_SERVER['DOCUMENT_ROOT'] ."interview/db.php";

$tpl->assign("title", "招聘试题");
$tpl->assign("description", "招聘试题管理系统");

$db = new DB();
$id = $_GET['id'];
$sql = "SELECT * FROM `question` where id = ".$id;
$result = $db->get_one($sql);

$tagId = $result['tag'];
echo $tagId;
$tagSql = "SELECT * FROM `tag` where id = ".$tagId;
$tagRes = $db->get_one($tagSql);

$result['tag'] = $tagRes['name'];

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


  $db->update('question',$data,'id='.$_POST['id']);


}


?>