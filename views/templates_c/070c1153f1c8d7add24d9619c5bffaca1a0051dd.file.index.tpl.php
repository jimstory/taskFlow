<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-06 07:01:40
         compiled from "D:\wamp\www\taskFlow\views\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2885754ab8854a5d5f0-62945126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '070c1153f1c8d7add24d9619c5bffaca1a0051dd' => 
    array (
      0 => 'D:\\wamp\\www\\taskFlow\\views\\templates\\index.tpl',
      1 => 1420446955,
      2 => 'file',
    ),
    '2b82c4ee95db5be0d9b1d7dfb6bd9ee93cf9e2a9' => 
    array (
      0 => 'D:\\wamp\\www\\taskFlow\\views\\templates\\layout.tpl',
      1 => 1420439110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2885754ab8854a5d5f0-62945126',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ab8854be8687_74552569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ab8854be8687_74552569')) {function content_54ab8854be8687_74552569($_smarty_tpl) {?><!DOCTYPE HTML> 
    <head>    
        
      		<meta http-equiv="Content-type" content="text/html; charset=utf-8">  
        
		<title></title>
		<?php echo '<script'; ?>
 type="text/javascript" src="./js/jquery.min.js"><?php echo '</script'; ?>
> 
		<?php echo '<script'; ?>
 type="text/javascript" src="./lhz_table/lhz_table.js"><?php echo '</script'; ?>
> 
		<link rel="stylesheet" type="text/css" href="./lhz_table/lhz_table.css" />
		<?php echo '<script'; ?>
>
		$(document).ready(function(){
			 var tb = $("#table").lhz_table();
			 //console.log(tb);
			 //tb.refresh();
			 //tb.hide();
		});
		<?php echo '</script'; ?>
>
	     
    </head> 
    <body> 
        
		<?php if (count($_SESSION)!=0&&$_SESSION['username']!='') {?>
			<p>欢迎：<?php echo $_SESSION['username'];?>
 <a href="./routes/login.php?action=logout">退出</a></p>
		  <?php } else { ?>
		     <p><a href="./routes/login.php">登陆</a>&nbsp;<a href="./routes/user.php">注册</a></p>
		 <?php }?>
			<a href="./routes/add.php">新增</a>

			<div id="table">loading</div>

			<ul> 
				<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['question']->key;
?>
				<li><a href="./routes/detail.php?id=<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['question']->value['title'];?>
</a> 
				<a href="./routes/update.php?id=<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
">编辑</a></li> 
				<?php } ?>
			</ul>
	 
    </body> 
</html> <?php }} ?>
