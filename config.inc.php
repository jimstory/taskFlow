<?php
include $_SERVER['DOCUMENT_ROOT'].'interview/smarty/libs/Smarty.class.php';
define('SMARTY_ROOT', $_SERVER['DOCUMENT_ROOT'].'interview/views');
$tpl = new Smarty();
$tpl->template_dir = SMARTY_ROOT."/templates/";
$tpl->compile_dir = SMARTY_ROOT."/templates_c/";
$tpl->config_dir = SMARTY_ROOT."/configs/";
$tpl->cache_dir = SMARTY_ROOT."/cache/";
$tpl->caching = 0;
$tpl->cache_lifetime=60*60*24;
$tpl->left_delimiter = '<{';
$tpl->right_delimiter = '}>';


	// $mysql_server_name="localhost"; //数据库服务器名称
 //    $mysql_username="root"; // 连接数据库用户名
 //    $mysql_password=""; // 连接数据库密码
 //    $mysql_database="interview"; // 数据库的名字

 // 	//连接到本地mysql数据库
 //    $con = mysql_connect($mysql_server_name,$mysql_username,$mysql_password);
 //    mysql_query("set names 'utf_8'"); // //这就是指定数据库字符集，一般放在连接数据库后面就系了
 //    mysql_select_db($mysql_database,$myconn);


?>