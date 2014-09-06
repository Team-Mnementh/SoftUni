<!DOCTYPE html>
<html>
<head>
	<title>Text Filter</title>
	<meta charset="UTF-8">
	<style type="text/css">
	textarea{
		width:300px;
		height:100px;
	}
	</style>
</head>
<body>
	<form method="POST">
		<textarea name="text"></textarea><br />
		<label for="banList">Ban List</label>
		<input type="text" name="banList" id="banList">
		<input type="submit" value="Submit">
	</form>
</body>
</html>
<?php 
if (isset($_POST) && !empty($_POST)) {
	$text = $_POST['text'];
	$banList = explode(', ', $_POST['banList']);
	foreach ($banList as $banListItem) {
		$starsLength = str_repeat('*', strlen($banListItem));
		$text = str_replace($banListItem, $starsLength, $text);	
	}
	echo $text;
}
?>