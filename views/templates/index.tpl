<{extends file="layout.tpl"}>
	<{block name="head" append}>
		<title><{$title}></title>
		<link rel="stylesheet" type="text/css" href="style.css">
	<{/block}>

	<{block name="content"}>

		<{if $smarty.session|@count neq 0 && $smarty.session.username neq  '' }>
			<p>欢迎：<{$smarty.session.username}> <a href="./routes/login.php?action=logout">退出</a></p>
		  <{else}>
		     <p><a href="./routes/login.php">登陆</a>&nbsp;<a href="./routes/user.php">注册</a></p>
		 <{/if}>
			<a href="./routes/add.php">新增</a>
			<ul> 
				<{foreach from=$list key=key item=question}>
				<li><a href="./routes/detail.php?id=<{$question.id}>"><{$question.title}></a> 
				<a href="./routes/update.php?id=<{$question.id}>">编辑</a></li> 
				<{/foreach}>
			</ul>
	<{/block}>