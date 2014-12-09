<{extends file="layout.tpl"}>
	<{block name="head" append}>
		<title>page Title</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	<{/block}>

	<{block name="content"}>
		<a href="./routes/add.php">新增</a>
		<ul> 
			<{foreach from=$list key=key item=question}>
			<li><a href="./routes/detail.php?id=<{$question.id}>"><{$question.title}></a> 
			<a href="./routes/update.php?id=<{$question.id}>">编辑</a></li> 
			<{/foreach}>
		</ul>
	<{/block}>