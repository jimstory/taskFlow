<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-06 07:02:55
         compiled from "D:\wamp\www\taskFlow\views\templates\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1175254ab889fe4e122-34883975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc4a9fd157c69f46e728d3c28b3692e385a5e785' => 
    array (
      0 => 'D:\\wamp\\www\\taskFlow\\views\\templates\\detail.tpl',
      1 => 1420430452,
      2 => 'file',
    ),
    '2b82c4ee95db5be0d9b1d7dfb6bd9ee93cf9e2a9' => 
    array (
      0 => 'D:\\wamp\\www\\taskFlow\\views\\templates\\layout.tpl',
      1 => 1420439110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1175254ab889fe4e122-34883975',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ab88a0012970_30402421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ab88a0012970_30402421')) {function content_54ab88a0012970_30402421($_smarty_tpl) {?><!DOCTYPE HTML> 
    <head>    
        
      		<meta http-equiv="Content-type" content="text/html; charset=utf-8">  
        
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<link rel="stylesheet" type="text/css" href="../css/codemirror.css">
		<link rel="stylesheet" type="text/css" href="../css/add.css">
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/jquery.min.js"><?php echo '</script'; ?>
> 
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/codemirror.js"><?php echo '</script'; ?>
> 
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/marked.js"><?php echo '</script'; ?>
> 
		<?php echo '<script'; ?>
 type="text/javascript">
			$(function() {
				  (function() {
				    $("#content").html(marked($("#content").html()));
				  })();
				  })
	  		<?php echo '</script'; ?>
>
		     
    </head> 
    <body> 
        
		<div>
			<h1><?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
</h1>
			<div id="content"><?php echo $_smarty_tpl->tpl_vars['list']->value['content'];?>
</div>
		</div>
	 
    </body> 
</html> <?php }} ?>
