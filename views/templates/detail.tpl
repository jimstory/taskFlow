<{extends file="layout.tpl"}>
	<{block name="head" append}>
		<title>page Title</title>
		<link rel="stylesheet" type="text/css" href="../css/codemirror.css">
		<link rel="stylesheet" type="text/css" href="../css/add.css">
		<script type="text/javascript" src="../js/jquery.min.js"></script> 
		<script type="text/javascript" src="../js/codemirror.js"></script> 
		<script type="text/javascript" src="../js/marked.js"></script> 
		<script type="text/javascript">
			$(function() {
				  (function() {
				    $("#content").html(marked($("#content").html()));
				    $("#answer").html(marked($("#answer").html()));
				  })();
				  })
	  		</script>
		<{/block}>
	<{block name="content"}>
		<div>
			<h1><{$list.title}></h1>
				<{$list.tag}>
			<div id="content"><{$list.content}></div>
			<div id="answer"> <{$list.answer}></div>
		</div>
	<{/block}>