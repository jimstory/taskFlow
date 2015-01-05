<{extends file="layout.tpl"}>
	<{block name="head" append}>
		<title><{$title}></title>
		<link rel="stylesheet" type="text/css" href="../css/codemirror.css">
		<link rel="stylesheet" type="text/css" href="../css/add.css">
		<script type="text/javascript" src="../js/jquery.min.js"></script> 
		<script type="text/javascript" src="../js/codemirror.js"></script> 
		<script type="text/javascript" src="../js/marked.js"></script> 
		<script type="text/javascript">
			$(function() {

				  })
	  		</script>
		<{/block}>
	<{block name="content"}>
		<div>
		<form action="login.php" method="post">
			<label>名字：</label><input type="text" name="name">
			<label>密码：</label><input type="text" name="password">
			<input type="submit" value="登陆">
		</form>
		</div>
	<{/block}>