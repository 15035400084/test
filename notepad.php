<!doctype html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>记事本</title>
		<style>
			.size{font-size:50px;text-align:center;}
			.border{width:800px;margin:70px auto;}
			#editor{width:798px;height:300px;}
			button{float:right;}
			span{color:red;}
		</style>
	</head>
	<body>
		<div class='border'>
		<div class='size'>记事本</div>
		<form action="donotepad.php" method="post">
		  标题 : <input type="text" name="title"><span><?php if(isset($_GET['a'])){echo $_GET['a'];}?></span><br>
		  内容<br>
		  <textarea id='editor' name="content"></textarea><br><br><br><br><br>
		  <input type="submit" name="sub" value="保存">
		  
		</form>
		<a href='./notepad2.php'><button>查看我的记事本</button></a>
		<script src="./ue/ueditor.config.js"></script>
		<script src="./ue/ueditor.all.min.js"></script>
		<script>
		var conf={"toolbars":[[
					'fullscreen', 'source', '|', 'undo', 'redo', '|',
					'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
					'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
					'customstyle', 'fontfamily', 'fontsize'
					
		]]};
		var ue = UE.getEditor('editor',conf);

		</script>
		</div>
	</body>
</html>