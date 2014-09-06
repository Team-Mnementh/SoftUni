<!DOCTYPE html>
<html>
<head>
	<title>Coloring Texts</title>
	<meta charset="UTF-8">
	<style type="text/css">
	textarea{
		width:300px;
		height:100px;
	}
	span.red{
		color:red;
	}
	span.blue{
		color:blue;
	}
	</style>
</head>
<body>
	<form method="POST">
			<textarea name="text"></textarea><br />
			<input type="submit" value="Count words">
	</form>
</body>
</html>

<?php 
if (isset($_POST) && !empty($_POST)) {
	$text = str_replace(' ', '', $_POST['text']);
	
	for ($i=0; $i < strlen($text); $i++) { 
		if (ord($text[$i]) % 2 == 0) {
			echo '<span class="red">'.$text[$i].'</span>';
		}
		else{
			echo '<span class="blue">'.$text[$i].'</span>';	
		}
	}
}
?>