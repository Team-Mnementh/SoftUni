<!DOCTYPE html>
<html>
<head>
	<title>Word Mapper</title>
	<meta charset="UTF-8" />
	<style type="text/css">
	textarea{
		width:300px;
		height:100px;
	}
	table{
		border-collapse: collapse;
		border:1px solid darkblue;
		background-color:#cecece;
	}
	th{
		padding: 15px;
	}
	td{
		padding: 5px;
	}
	</style>
</head>
<body>
	<form method="POST">
			<textarea name="text"></textarea><br />
			<input type="submit" value="Count words">
	</form>

<?php
if (isset($_POST) && !empty($_POST)) {
	$text = strtolower($_POST['text']);
	$pattern = '/\w+/';
	preg_match_all($pattern, $text, $words);
	$wordCount = [];
    foreach ($words[0] as $word) {
        if (isset($wordCount[$word])) {
            $wordCount[$word]++;
        } else {
            $wordCount[$word] = 1;
        }
    }
    arsort($wordCount);
    echo '<table border="1">';
    foreach ($wordCount as $key => $value) {
    	echo '<tr><td>'.$key.'</td>';
    	echo '<td>'.$value.'</td></tr>';
    }
    echo '</table>';
}
?>
</body>
</html>