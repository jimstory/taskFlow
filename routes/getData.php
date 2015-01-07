<?php
session_start();
header("Content-Type: text/html;charset=utf-8");
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/config.inc.php";
include  $_SERVER['DOCUMENT_ROOT'] ."taskFlow/db.php";

/*
   if(isset($_GET['type']) && $_GET['type'] == 'thead'){
	  $result = array("id"=>"ID","title"=>"名称","status"=>"状态","content"=>"内容","owner"=>"负责人","add_time"=>"添加时间","add_time"=>"添加时间",
	  	"end_time"=>"结束时间","add_time"=>"添加时间","start_time"=>"开始时间","level"=>"等级","percent"=>"百分比","depend"=>"依赖任务");
	  $str = json_encode($result);//将数组进行json编码
	  //var_dump($str);
	  echo $str;
	}

    if(isset($_GET['type']) && $_GET['type'] == 'tbody'){
  	    $db = new DB();
	  	$list = $db->query('SELECT * FROM `task`');
	  
		$result = array();
		$fieldarr  = array();
		while($field = mysql_fetch_field($list)){
			$fieldarr[] = $field->name;
		}

		while($row = mysql_fetch_row($list)) {
			$temp = array_combine($fieldarr,$row); 
		    $result[] =  array('data'=>$temp,'attribute'=>array('links' =>array('title' => "task/19")));
		}

		//var_dump($result);
	  $str = json_encode($result);//将数组进行json编码
	  echo $str;
	}
	*/

    $data = array();

	$thead = array("id"=>"ID","title"=>"名称","status"=>"状态","content"=>"内容","owner"=>"负责人","add_time"=>"添加时间","add_time"=>"添加时间",
	  	"end_time"=>"结束时间","add_time"=>"添加时间","start_time"=>"开始时间","level"=>"等级","percent"=>"百分比","depend"=>"依赖任务");

 	$data['thead'] =  $thead;

    $db = new DB();

    if(isset($_GET['id'])){  	
    	$list = $db->query('SELECT * FROM `task` where `project_id` = '.$_GET['id']);
	}else{  	
		$list = $db->query('SELECT * FROM `task`');
	}
  
	$tbody = array();
	$fieldarr  = array();
	while($field = mysql_fetch_field($list)){
		$fieldarr[] = $field->name;
	}

	while($row = mysql_fetch_row($list)) {
		$temp = array_combine($fieldarr,$row); 
		$value = $temp['title'];
		$url = './routes/detail.php?id='.$temp['id'];
		$temp['title'] = array('type' => 'link', 'value' => $value,'url'=>$url);
		

		$level_value = $temp['level'];
		$temp['level'] = array('type' => 'select', 'value' => $level_value);
	    $tbody[] =  array('data'=>$temp,'attribute'=>array('links' =>array('title' => "task/19")));
	}

	$data['tbody'] =  $tbody;

	//print_r($data);
   $str = json_encode($data);//将数组进行json编码
   echo $str;
?>