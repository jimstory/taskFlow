<{extends file="layout.tpl"}>
	<{block name="head" append}>
		<title>page Title</title>
		<link rel="stylesheet" type="text/css" href="../css/codemirror.css">
		<link rel="stylesheet" type="text/css" href="../css/add.css">
		<script type="text/javascript" src="../js/jquery.min.js"></script> 
		<script type="text/javascript" src="../js/codemirror.js"></script> 
		<script type="text/javascript" src="../js/marked.js"></script> 
		<script type="text/javascript" src="../js/add.js"></script> 
	<{/block}>
	<{block name="content"}>
		<div class="side-right">
			<form action="add.php" method="post">
				<label>标题ddd</label>：<input type="text" name="title" />
				<br/>
				<br/>
				<label>详情</label>：<textarea name="content" id="content"></textarea>
				<br/>
				<input type="submit" value="提交" />
			</form>
		</div>
		<div class="side-right">
			<iframe src="" id="preview" frameborder="0" height="360"></iframe>
		</div>
	<{/block}>