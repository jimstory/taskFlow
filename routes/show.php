<?php
include  $_SERVER['DOCUMENT_ROOT'] ."interview/config.inc.php";
include  $_SERVER['DOCUMENT_ROOT'] ."interview/db.php";
$tpl->assign("title", "leapsoul.cn为你展示smarty模板技术");
$tpl->assign("content", "leapsoul.cn通过详细的安装使用步骤为你展示smarty模板技术");
$tpl->display("add.tpl");

if(isset($_POST['title'])){
    $db = new DB();
    $data['id'] = "";
	$data['title'] = $_POST['title'];
	if(isset($_POST['tag'])){
        $tagData['id'] = "";
        $tagData['name'] = $_POST['tag'];
		$db->insert('tag',$tagData);
		$data['tag'] = $db->insert_id();
	}
	$data['content'] = $_POST['content'];
	$data['answer'] = $_POST['answer'];
  $db->insert('question',$data);
}


?>