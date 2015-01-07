<?php
session_start();
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/config.inc.php";
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/db.php";

  $db = new DB();
  $list = $db->query('SELECT * FROM `task`');

	$result = array();
	while($row = mysql_fetch_array($list)) {
	    $result[] = $row;
	}
  //var_dump($result);
  $tpl->assign("list", $result);

  $tpl->display("task.tpl");
?>