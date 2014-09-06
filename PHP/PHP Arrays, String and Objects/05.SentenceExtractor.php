<!DOCTYPE html>
<html>
<head>
	<title>Sentence Extractor</title>
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
		<textarea name="text">This is my cat! And this is my dog. We happily live in Paris – the most beautiful city in the world! Isn’t it great? Well it is :)
		</textarea><br />
		<label for="word">Word</label>
		<input type="text" name="word" id="word">
		<input type="submit" value="Submit">
	</form>
</body>
</html>
<?php
if (isset($_POST) && !empty($_POST)) {
	$text = $_POST['text'];
	$word = $_POST['word'];
	$patter = '/[\w ]+\b'.$word.'\b[\w ]*[\.\?!]/';
	preg_match_all($patter, $text, $matches);
	// var_dump($matches);
	foreach ($matches[0] as $value) {
		echo '<p>'.$value.'</p>';
	}
	if (condition) {
		# code...
	}
}
?>