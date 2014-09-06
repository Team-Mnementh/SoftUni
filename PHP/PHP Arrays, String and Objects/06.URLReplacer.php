<!DOCTYPE html>
<html>
<head>
	<title>URL Replacer</title>
	<meta charset="UTF-8">
	<style type="text/css">
	textarea{
		width:300px;
		height:100px;
	}
	</style>
</head>
<body>
	<form>
		<textarea name="text"></textarea><br />
		<input type="submit" value="Replace">
	</form>
</body>
</html>
<?php 
if (isset($_POST) && !empty($_POST)) {
	$text = ($_POST['text']);
    $text = str_replace('</a>', '[/URL]', $text);
    $text = preg_replace('/<a href="(.*?)">/', '[URL=\1]', $text);
    echo $text;
    for ($i=0; $i < ; $i++) { 
    	# code...
    }
}
?>