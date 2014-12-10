<?php
include $_SERVER['DOCUMENT_ROOT'].'taskFlow/smarty/libs/Smarty.class.php';
define('SMARTY_ROOT', $_SERVER['DOCUMENT_ROOT'].'taskFlow/views');
$tpl = new Smarty();
$tpl->template_dir = SMARTY_ROOT."/templates/";
$tpl->compile_dir = SMARTY_ROOT."/templates_c/";
$tpl->config_dir = SMARTY_ROOT."/configs/";
$tpl->cache_dir = SMARTY_ROOT."/cache/";
$tpl->caching = 0;
$tpl->cache_lifetime=60*60*24;
$tpl->left_delimiter = '<{';
$tpl->right_delimiter = '}>';

?>